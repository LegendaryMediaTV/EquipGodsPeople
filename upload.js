// dependencies
import { promises as fs } from "fs"; // file system
import { default as SFTP } from "ssh2-sftp-client"; // SFTP client

// SFTP configuration: https://www.npmjs.com/package/ssh2-sftp-client
const sftpConfig = {
  host: "zenith.equipgodspeople.com",
  username: "equipgod",
  password: "Ephesians4:11-12",
};

const listingLocal = (directory) => {
  return new Promise(async (resolve, reject) => {
    try {
      const output = {};

      output.directories = [];
      output.files = [];

      // read in the directory files and directories
      const listing = await fs.readdir(directory);
      // console.log(listing);

      for (const item of listing) {
        const itemPath = `${directory}/${item}`;

        // get file/directory statistics
        const stats = await fs.stat(itemPath);
        // console.log(stats);

        if (stats.isDirectory())
          output.directories.push({ name: item, path: itemPath });
        else if (stats.isFile()) {
          output.files.push({
            name: item,
            path: itemPath,
            modified: new Date(
              `${stats.mtime.toISOString().substring(0, 19)}.000Z`
            ),
            size: stats.size,
          });
        }
      }

      // sort output arrays
      output.directories.sort((a, b) => (a.name > b.name ? 1 : -1));
      output.files.sort((a, b) => (a.name > b.name ? 1 : -1));

      // console.log(output);
      resolve(output);
    } catch (err) {
      reject(err);
    }
  });
};

const listingRemote = (directory, client) => {
  return new Promise(async (resolve, reject) => {
    try {
      const output = {};
      output.directories = [];
      output.files = [];

      // console.log(`Retrieving remote directory: ${directory}`);
      const listing = await client.list(`${directory}`);
      // console.log(listing);

      // build output arrays
      for (const item of listing) {
        const itemPath = `${directory}/${item.name}`;

        if (
          item.type === "d" &&
          [".well-known", "cgi-bin"].indexOf(item.name) === -1
        ) {
          output.directories.push({
            name: item.name,
            path: itemPath,
          });
        } else if (
          item.type === "-" &&
          [".htaccess", ".user.ini", "php.ini"].indexOf(item.name) === -1
        ) {
          output.files.push({
            name: item.name,
            path: itemPath,
            modified: new Date(item.modifyTime),
            size: item.size,
          });
        }
      }

      // sort output arrays
      output.directories.sort((a, b) => (a.name > b.name ? 1 : -1));
      output.files.sort((a, b) => (a.name > b.name ? 1 : -1));

      // console.log(output);
      resolve(output);
    } catch (err) {
      reject(err);
    }
  });
};

const uploads = (localFiles, remoteFiles) =>
  localFiles.filter((localFile) => {
    const remoteFile = remoteFiles.find(
      (remoteFile) => remoteFile.name === localFile.name
    );

    return (
      !remoteFile ||
      remoteFile.size !== localFile.size ||
      remoteFile.modified < localFile.modified
    );
  });

const missing = (array1, array2) =>
  array1.filter(
    (element1) =>
      array2.findIndex((element2) => element2.name === element1.name) === -1
  );

const sync = (localDirectory, remoteDirectory) => {
  return new Promise(async (resolve, reject) => {
    try {
      // create a new SFTP connection
      console.log("Connecting via SFTP");
      const client = new SFTP();
      await client.connect(sftpConfig);

      await syncDirectory(localDirectory, remoteDirectory, client);

      // close the SFTP connection
      console.log("Closing the SFTP connection");
      await client.end();

      resolve();
    } catch (err) {
      console.log(err);
      reject(err);
    }
  });
};

const syncDirectory = (localDirectory, remoteDirectory, client) => {
  return new Promise(async (resolve, reject) => {
    try {
      let items;

      // get local files/directories
      const local = await listingLocal(localDirectory);
      // console.log(localDirectory, local);

      // get remote files/directories
      const remote = await listingRemote(remoteDirectory, client);
      // console.log(remoteDirectory, remote);

      // find local directories not on the remote server
      items = missing(local.directories, remote.directories);
      if (items.length) {
        console.log("New Directories:", items);

        // create new directories on the remote server
        for (const directory of items) {
          const directoryPath = directory.path.replace(
            "./public",
            "/home1/equipgod/public_html/zenith"
          );
          console.log(`Creating directory: ${directoryPath}`);

          await client.mkdir(directoryPath);
        }
      }

      // find local files needing to be uploaded
      items = uploads(local.files, remote.files);
      if (items.length) {
        // console.log(`Uploads: ${JSON.stringify(items, null, 2)}`);

        // upload files
        for (const file of items) {
          console.log(`Uploading file: ${remoteDirectory}/${file.name}`);
          await client.fastPut(file.path, `${remoteDirectory}/${file.name}`);
        }
      }

      // find remote directories that are not local
      items = missing(remote.directories, local.directories);
      if (items.length) {
        console.log(`Extra Directories: ${items.length}`);
        console.log(items);
      }

      // find remote files that are not local
      items = missing(remote.files, local.files);
      if (items.length) {
        console.log(`Extra Files: ${items.length}`);
        console.log(items);
      }

      // traverse local subdirectories
      for (
        let directoryIndex = 0;
        directoryIndex < local.directories.length;
        directoryIndex++
      ) {
        // show progress for larger directories
        if (directoryIndex && directoryIndex % 100 === 0)
          console.log(
            `Processed ${directoryIndex} of ${local.directories.length} subdirectories: ${localDirectory}`
          );

        // synchronize subdirectories
        await syncDirectory(
          `${localDirectory}/${local.directories[directoryIndex].name}`,
          `${remoteDirectory}/${local.directories[directoryIndex].name}`,
          client
        );
      }

      resolve();
    } catch (err) {
      reject(err);
    }
  });
};

sync("./public", "/home1/equipgod/public_html/zenith");
