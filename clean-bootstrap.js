// dependencies
import { default as fs } from "fs";
import { default as path } from "path";

const directory = "./public/dist";

fs.readdir(directory, (err, files) => {
  if (err) throw err;

  for (const file of files) {
    if (file !== "main.js") {
      fs.unlink(path.join(directory, file), (err) => {
        if (err) throw err;
      });
    }
  }
});

console.log("Bootstrap destination cleaned");
