"use strict";

/** enable Bootstrap functionality when the page loads */
window.onload = () => {
  /****************************
   ***** Submenu Togglers *****
   ***************************/

  // retrieve submenu togglers
  const submenuTogglers = [].slice.call(
    document.querySelectorAll(".SiteSubmenuToggle")
  );

  // loop through the submenu togglers
  submenuTogglers.map((submenuToggler) => {
    // add click event listeners to toggle the icon direction
    submenuToggler.addEventListener(
      "click",
      (event) => {
        // swap the icon class name
        event.currentTarget.firstChild.className =
          event.currentTarget.firstChild.className.indexOf("up") !== -1
            ? event.currentTarget.firstChild.className.replace("up", "down")
            : event.currentTarget.firstChild.className.replace("down", "up");

        // swap the ARIA label
        event.currentTarget.firstChild.ariaLabel =
          event.currentTarget.firstChild.ariaLabel === "collapsed"
            ? "expanded"
            : "collapsed";
      },
      false
    );
  });

  /********************
   ***** Popovers *****
   *******************/

  // retrieve all of the Bootstrap popover togglers
  const popoverTogglers = Array.from(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );

  // initiate the Bootstrap popovers
  for (const popoverToggler of popoverTogglers.slice(0, 25)) {
    // activate the Bootstrap popover
    new bootstrap.Popover(popoverToggler);

    // once the popover has initialized, disable the link
    const timer = setInterval(() => {
      if (!popoverToggler.getAttribute("title")) {
        popoverToggler.removeAttribute("href");
        popoverToggler.setAttribute("tabindex", 0);

        // stop waiting
        clearInterval(timer);
      }
    }, 250);
  }
};

/** enable React functionality */
if (typeof React !== "undefined") {
  import("./react-bootstrap.js").then((BS) => {
    // add shorthand for creating React Elements
    const RC = React.Component;
    const RF = React.Fragment;
    const re = React.createElement;

    // set a recurring Bootstrap popover activation
    setInterval(() => {
      BS.popovers(document);
    }, 250);

    class BibleSearch extends RC {
      state = {};

      render() {
        return !this.state.me || !this.state.versions
          ? re(BS.Spinner, { alert: true })
          : re(
              RF,
              null,

              re(BS.BibleSearchForm, {
                passage: this.state.passageVersions?.passage ?? "",
                versions: this.state.versions,
                selected: this.state.selectedVersions || this.state.me.versions,
                onChangeVersions: this.setVersions,
                onSubmit: this.setSearch,
              }),

              this.state.passageVersions
                ? re(
                    RF,
                    null,

                    re(BS.BibleSearchScriptures, {
                      passage: this.state.passageVersions.passage,
                      versions: this.state.passageVersions.versions,
                    })
                  )
                : null
            );
      }

      /*****************
       ***** Hooks *****
       ****************/

      componentDidMount = () => {
        // get session information
        axios
          .get("/api/me")
          .then((response) => {
            this.setState({ me: response.data });
          })
          .catch((err) => console.log("Me:", err.message));

        // get the Bible versions
        axios
          .get("/api/bible-versions")
          .then((response) => {
            this.setState({ versions: response.data });
          })
          .catch((err) => console.log("Versions:", err.message));

        this.setPassage("John 1");
      };

      /******************
       ***** Method *****
       *****************/

      setPassage = (passage) => {
        // build out the form data
        const data = new FormData();
        data.append("passage", passage);

        // get the Bible passage
        axios({
          method: "post",
          url: "/api/bible-passage-versions",
          data: data,
        })
          .then((response) => {
            this.setState({ passageVersions: response.data });
          })
          .catch((err) => console.log("Bible Passage:", err.message));
      };

      setSearch = (search, versions) => {
        // build out the form data
        const data = new FormData();
        data.append("versions", versions);

        // get the Bible versions
        axios({ method: "post", url: "/api/me", data: data })
          .then((response) => {
            this.setState({ me: response.data, selectedVersions: false });

            this.setPassage(search || this.state.passageVersions.passage.title);
          })
          .catch((err) => console.log("Me:", err.message));
      };

      setVersions = (versions) => {
        // remove empty elements from the end of the array
        versions = versions.slice();
        do {
          if (!versions[versions.length - 1]) versions.pop();
        } while (!versions[versions.length - 1]);

        this.setState({ selectedVersions: versions });
      };
    }

    /** swap React containers with components when the page loads */
    let reactContainer;

    // add the Bible Search component to the React container
    reactContainer = document.querySelector("#react-BibleSearch");
    if (reactContainer) ReactDOM.render(re(BibleSearch), reactContainer);
  });
}
