"use strict";

import("./react-bootstrap.js").then((BS) => {
  // add shorthand for creating React Elements
  const RC = React.Component;
  const RF = React.Fragment;
  const re = React.createElement;

  // set a recurring Bootstrap popover activation
  setInterval(() => {
    BS.popovers(document);
  }, 500);

  const seo = (text) =>
    text
      .toLowerCase()
      .replace(/(\s|[*—–-])+/g, " ")
      .replace(/&/g, "and")
      .replace(/[^a-z0-9 ]/g, "")
      .trim()
      .replace(/ /g, "-");

  const titleCase = (text, lowerCase) => {
    // skip upper-casing certain words (https://www.grammar-monster.com/lessons/capital_letters_title_case.htm)
    const skip = [
      // articles
      "a",
      "an",
      "the",

      // coordinating conjunctions
      "and",
      "but",
      "for",
      "nor",
      "or",
      "so",
      "yet",

      // prepositions
      "about",
      "above",
      "across",
      "against",
      "along",
      "among",
      "around",
      "at",
      "before",
      "behind",
      "below",
      "beneath",
      "beside",
      "between",
      "beyond",
      "by",
      "down",
      "during",
      "except",
      "for",
      "from",
      "in",
      "inside",
      "into",
      "like",
      "near",
      "of",
      "off",
      "on",
      "out",
      "over",
      "since",
      "through",
      "to",
      "toward",
      "under",
      "until",
      "up",
      "upon",
      "with",
      "within",

      // other
      "vs",
    ];

    // lower case first, if requested
    if (lowerCase) text = text.toLowerCase();

    // split by word
    let words = text.split(" ");

    // loop through, upper-casing as needed
    for (let wordIndex = 0; wordIndex < words.length; wordIndex++) {
      // is the first word, last word, or isn't a skipped word
      if (
        !wordIndex ||
        wordIndex === words.length - 1 ||
        skip.indexOf(words[wordIndex]) === -1
      ) {
        words[wordIndex] =
          words[wordIndex].charAt(0).toUpperCase() +
          words[wordIndex].substring(1);
      }
    }

    // re-join words
    return words.join(" ");
  };

  class LikeButton extends RC {
    state = {};

    render() {
      return this.state.liked
        ? re(
            BS.Button,
            {
              onClick: () => {
                this.setState({ liked: false });
              },
              variant: "danger",
              key: "unlike",
            },
            "Unlike"
          )
        : re(
            BS.Button,
            {
              onClick: () => {
                this.setState({ liked: true });
              },
              variant: "success",
              key: "like",
            },
            "Like"
          );
    }
  }

  class BibleTestaments extends RC {
    state = {};

    render = () =>
      !this.state.testaments || !this.state.books
        ? re(BS.Spinner, { alert: true })
        : !this.state.selected
        ? re(BS.ListGroup, {
            title: "Bible Testaments",
            items: this.state.testaments,
            onSelect: this.selectHandler,
          })
        : re(
            RF,
            null,
            re(
              BS.Division,
              null,
              re(BS.Bold, null, "ID: "),
              this.state.selected._id
            ),
            re(
              BS.Division,
              null,
              re(BS.Bold, null, "Title: "),
              this.state.selected.title
            ),
            re(
              BS.Division,
              null,
              re(BS.Bold, null, "Sequence: "),
              this.state.selected.sequence
            ),
            re(
              BS.Division,
              null,
              re(BS.Bold, null, "Book Count: "),
              this.state.selected.bookCount
            ),
            re(BS.Division, null, re(BS.Bold, null, "Books:")),
            re(
              BS.List,
              { ordered: true },
              this.state.selected.books.map((book) =>
                re(BS.ListItem, { key: book._id }, book.title)
              )
            ),
            re(
              BS.Button,
              { onClick: this.selectHandler.bind(this, false) },
              "Back"
            ),
            re(BS.Preformatted, {
              title: "Testament",
              item: this.state.selected,
              className: "mt-3",
            }),
            re(
              BS.Button,
              { onClick: this.selectHandler.bind(this, false) },
              "Back"
            )
          );

    /*****************
     ***** Hooks *****
     ****************/

    componentDidMount = () => {
      // build out the form data
      let data = new FormData();
      data.append("api", "bible-books");

      axios
        .post("/admin", data)
        .then((response) => {
          this.setState({ books: response.data });
        })
        .catch((err) => {
          alert(err.message);
        });

      data = new FormData();
      data.append("api", "bible-testaments");
      axios
        .post("/admin", data)
        .then((response) => {
          this.setState({ testaments: response.data });
        })
        .catch((err) => {
          alert(err.message);
        });
    };

    /********************
     ***** Handlers *****
     *******************/

    selectHandler = (selected) => {
      if (selected) {
        selected = JSON.parse(JSON.stringify(selected));

        selected.books = selected.books.map((testamentBook) =>
          this.state.books.find((book) => book._id === testamentBook)
        );
      }

      this.setState({ selected: selected });
    };
  }

  class BlogEntry extends RC {
    state = {};

    render = () =>
      !this.state.entry || this.state.processing
        ? re(BS.Spinner, { alert: true })
        : re(
            BS.Form,
            { onSubmit: this.submitHandler },

            re(BS.SectionHeader, {
              title: this.state.entry.title,
              subtitle: "blog entry admin form",
            }),

            re(
              BS.Container,
              null,
              re(
                BS.Row,
                null,

                re(BS.FormField, {
                  item: {
                    _id: "published",
                    title: "Published",
                    // type: "date",
                    value: this.state.entry.published,
                    maxLength: 10,
                    gridWidth: 4,
                  },
                  onChange: this.changeHandler.bind(this, "published"),
                }),

                re(BS.FormField, {
                  item: {
                    _id: "title",
                    title: "Title",
                    value: this.state.entry.title,
                    gridWidth: 8,
                  },
                  onChange: this.changeHandler.bind(this, "title"),
                }),

                re(BS.FormField, {
                  item: {
                    _id: "_id",
                    title: "ID",
                    value: this.state.entry._id,
                    disabled: true,
                    gridWidth: 6,
                  },
                }),

                re(BS.FormField, {
                  item: {
                    _id: "url",
                    title: "URL",
                    value: this.state.entry.url,
                    disabled: true,
                    gridWidth: 6,
                  },
                }),

                re(BS.FormField, {
                  item: {
                    _id: "image",
                    title: "Image",
                    value: this.state.entry.image,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "image"),
                }),

                re(BS.FormField, {
                  item: {
                    _id: "imageAlt",
                    title: "Image Alt",
                    value: this.state.entry.imageAlt,
                    lines: 5,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "imageAlt"),
                }),

                re(BS.FormField, {
                  item: {
                    _id: "description",
                    title: "Description",
                    value: this.state.entry.description,
                    lines: 5,
                    maxLength: 300,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "description"),
                }),

                this.state.entry.excerpt
                  ? re(BS.FormField, {
                      item: {
                        _id: "excerpt",
                        title: "Excerpt",
                        value: this.state.entry.excerpt,
                        disabled: true,
                        lines: 5,
                        gridWidth: 6,
                      },
                    })
                  : null,

                this.state.entry.previous || this.state.entry.next
                  ? re(
                      RF,
                      null,

                      re(BS.FormField, {
                        item: {
                          title: "Previous",
                          value: this.state.entry.previous,
                          disabled: true,
                          gridWidth: 6,
                        },
                      }),

                      re(BS.FormField, {
                        item: {
                          title: "Next",
                          value: this.state.entry.next,
                          disabled: true,
                          gridWidth: 6,
                        },
                      })
                    )
                  : null
              ),

              re(
                BS.Division,
                { className: "hstack gap-1" },

                re(
                  BS.Link,
                  {
                    to: this.state.entry.url,
                    newTab: true,
                    external: false,
                    className: "btn btn-dark",
                  },
                  "Entry Page"
                ),

                re(
                  BS.Link,
                  {
                    to:
                      "https://www.equipgodspeople.com/" +
                      this.state.entry.published.replace(/-/g, "/"),
                    newTab: true,
                    external: false,
                    className: "btn btn-dark",
                  },
                  "Old Site"
                ),

                re(
                  BS.Button,
                  { type: "submit", className: "w-100 w-md-auto" },
                  "Submit"
                )
              )
            )

            // re(BS.Preformatted, { item: this.state.entry })
          );

    /*****************
     ***** Hooks *****
     ****************/

    componentDidMount = () => {
      this.load();
    };

    /********************
     ***** Handlers *****
     *******************/

    changeHandler(field, event) {
      // grab the value
      let value = event.target.value;

      // split verses by line
      if (field === "verses") {
        value = value.trim().split("\n");
        value = value.map((verse) => verse.trim());
      }

      this.setState((prevState) => {
        // clone the blog entry
        const entry = JSON.parse(JSON.stringify(prevState.entry));

        // apply changes
        entry[field] = value;

        // clean up the published date
        entry.published = entry.published.substring(0, 10);

        // make the ID/URL based on the publish date and an SEO-friendly version of the title
        entry._id = entry.published + "-" + seo(entry.title);
        entry.url = "/egp-blog/" + entry._id;

        // make the sequence match the date
        entry.sequence = entry.published;

        // update the React state
        return { entry: entry };
      });
    }

    submitHandler = (event) => {
      event.preventDefault();

      this.setState({ processing: true });

      // parse the query string parameters
      const params = new URLSearchParams(document.location.search);

      // build out the form data
      const data = new FormData();
      data.append("api", "blog");
      data.append("_id", params.get("_id"));
      data.append("document", JSON.stringify(this.state.entry));

      axios
        .post("/admin", data)
        .then((response) => {
          // if the entry ID differs from the document ID, then redirect to the new URL
          if (params.get("_id") !== response.data._id) {
            // swap out the ID in the URL
            params.set("_id", response.data._id);

            // relocate
            location.href = new URL(
              location.origin + location.pathname + "?" + params
            );
          }
          // IDs match, update the React state
          else {
            // ensure key verses variable is an array
            if (!response.data.verses) response.data.verses = [];

            this.setState({
              entry: response.data,
              processing: false,
            });
          }
        })
        .catch((err) => {
          this.setState({ processing: false });
          alert(err.message);
        });
    };

    /*******************
     ***** Methods *****
     ******************/

    load = () => {
      this.setState({ entry: false, processing: false });

      // parse the query string parameters
      const params = new URLSearchParams(document.location.search);

      // build out the form data
      const data = new FormData();
      data.append("api", "blog");
      data.append("_id", params.get("_id"));

      axios
        .post("/admin", data)
        .then((response) => {
          // remove any timestamp from the published date
          response.data.published = response.data.published.substr(0, 10);

          // ensure key verses variable is an array
          if (!response.data.verses) response.data.verses = [];

          this.setState({ entry: response.data });
        })
        .catch((err) => {
          alert(err.message);
        });
    };
  }

  class LexiconsEntries extends RC {
    state = { languageFilter: "Greek", query: "strongs-g25" };

    render = () =>
      !this.state.languages || this.state.processing
        ? re(BS.Spinner, { alert: true })
        : re(
            BS.Container,
            null,

            re(
              BS.Form,
              {
                onSubmit: this.querySubmitHandler,
                className: "hstack gap-1 w-100 w-sm-67 w-md-50 w-lg-33 mb-4",
              },

              re(BS.Textbox, {
                type: "search",
                value: this.state.query,
                onChange: this.queryChangeHandler,
                onFocus: this.queryClearHandler,
              }),

              re(
                BS.Button,
                {
                  type: "button",
                  variant: "dark",
                  onClick: this.changeLanguageHandler,
                },
                this.state.languageFilter
              ),

              re(
                BS.Button,
                { type: "submit", variant: "primary" },
                re(BS.Icon, {
                  name: "fa-solid fa-magnifying-glass",
                  alt: "search",
                })
              )
            ),

            this.state.selected
              ? this.state.selectedID
                ? re(
                    RF,
                    { key: this.state.selected._id },

                    re(BS.SectionHeader, {
                      title: BS.rbb(this.state.selected.pageTitle),
                      subtitle: this.state.selected.shortDefinition
                        ? BS.rbb(this.state.selected.shortDefinition)
                        : "lexicon entry admin form",
                    }),

                    re(
                      BS.Form,
                      { onSubmit: this.submitHandler },

                      re(
                        BS.Row,
                        null,

                        re(BS.FormField, {
                          item: {
                            title: "Strong’s Number",
                            value: this.state.selected.strongs._id,
                            disabled: true,
                            gridWidth: 4,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Strong’s Word",
                            value: this.state.selected.strongs.word,
                            gridWidth: 4,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "strongsWord"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Strong’s Pronunciation",
                            value: this.state.selected.strongs.pronunciation,
                            gridWidth: 4,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "strongsPronunciation"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "ID",
                            value: this.state.selected._id,
                            disabled: true,
                            gridWidth: 4,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Language",
                            value: this.state.language.name,
                            disabled: true,
                            gridWidth: 4,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Letter Code",
                            maxLength: 1,
                            value: this.state.selected.letterCode,
                            gridWidth: 4,
                          },
                          onChange: this.changeHandler.bind(this, "letterCode"),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Name",
                            value: this.state.selected.name.replace(
                              /\[[^\]]+\]/g,
                              ""
                            ),
                            gridWidth: 6,
                          },
                          onChange: this.changeHandler.bind(this, "name"),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Word",
                            value: this.state.selected.word,
                            gridWidth: 6,
                          },
                          onChange: this.changeHandler.bind(this, "word"),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Pronunciation",
                            value: this.state.selected.pronunciation,
                            gridWidth: 6,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "pronunciation"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Part of Speech",
                            value: this.state.selected.partOfSpeech,
                            gridWidth: 6,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "partOfSpeech"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Short Definition",
                            value: this.state.selected.shortDefinition,
                            gridWidth: 8,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "shortDefinition"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Occurrences",
                            value: this.state.selected.occurrences,
                            gridWidth: 4,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Title",
                            value: this.state.selected.title,
                            disabled: true,
                            gridWidth: 6,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Page Title",
                            value: this.state.selected.pageTitle,
                            disabled: true,
                            gridWidth: 6,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "URL",
                            value: this.state.selected.url,
                            disabled: true,
                            gridWidth: 6,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Sequence",
                            value: this.state.selected.sequence,
                            disabled: true,
                            gridWidth: 6,
                          },
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Etymology",
                            value: this.state.selected.etymology,
                            lines: 3,
                          },
                          onChange: this.changeHandler.bind(this, "etymology"),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Comparables",
                            value: this.state.selected.comparables,
                            lines: 3,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "comparables"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Equivalents",
                            value: this.state.selected.equivalents,
                            lines: 3,
                          },
                          onChange: this.changeHandler.bind(
                            this,
                            "equivalents"
                          ),
                        }),

                        this.state.selected.lexicons.map((lexicon) =>
                          re(BS.FormField, {
                            item: {
                              title: lexicon.title,
                              value: lexicon.definition,
                              lines: 10,
                            },
                            onChange: this.changeHandler.bind(
                              this,
                              `definition-${lexicon._id}`
                            ),
                            key: this.state.selected._id + "-" + lexicon._id,
                          })
                        )

                        // re(BS.FormField, {
                        //   item: {
                        //     title: "Previous",
                        //     value: this.state.selected.previous,
                        //     disabled: true,
                        //     gridWidth: 6,
                        //   },
                        // }),

                        // re(BS.FormField, {
                        //   item: {
                        //     title: "Next",
                        //     value: this.state.selected.next,
                        //     disabled: true,
                        //     gridWidth: 6,
                        //   },
                        // }),
                      ),

                      re(
                        BS.Division,
                        { className: "mb-3" },

                        re(BS.Label, { className: "fw-bold" }, "Inflections"),

                        re(
                          BS.Row,
                          null,
                          (this.state.selected.inflections ?? [])
                            .sort((a, b) =>
                              BS.inflectionName(a.flags) >
                              BS.inflectionName(b.flags)
                                ? 1
                                : -1
                            )
                            .map((inflection, inflectionIndex) =>
                              re(
                                BS.Col,
                                {
                                  md: 6,
                                  className: "mb-2",
                                  key: inflection.name,
                                },

                                re(
                                  BS.Division,
                                  { className: "hstack gap-1" },

                                  re(
                                    BS.Division,
                                    { className: "w-100" },

                                    re(
                                      BS.Span,
                                      { className: "fs-4" },
                                      BS.rbb(inflection.name)
                                    ),

                                    inflection.strongs
                                      ? " (" +
                                          inflection.strongs.toUpperCase() +
                                          ")"
                                      : null,

                                    " – ",

                                    re(BS.Inflection, {
                                      flags: inflection.flags,
                                    })
                                  ),

                                  re(
                                    BS.Button,
                                    {
                                      bsDataToggle: "modal",
                                      bsDataTarget: "lexiconInflectionModal",
                                      onClick: this.inflectionEditHandler.bind(
                                        this,
                                        inflectionIndex,
                                        inflection
                                      ),
                                      variant: "warning",
                                    },

                                    re(BS.Icon, {
                                      name: "fa-solid fa-pencil",
                                      alt: "edit",
                                    })
                                  ),

                                  re(
                                    BS.Button,
                                    {
                                      onClick:
                                        this.inflectionDeleteHandler.bind(
                                          this,
                                          inflectionIndex
                                        ),
                                      variant: "danger",
                                    },

                                    re(BS.Icon, {
                                      name: "fa-solid fa-trash-can",
                                      alt: "delete",
                                    })
                                  )
                                )

                                // , re(BS.Preformatted, { item: inflection })
                              )
                            )
                        ),

                        re(
                          BS.Button,
                          {
                            bsDataToggle: "modal",
                            bsDataTarget: "lexiconInflectionModal",
                            onClick: this.inflectionEditHandler.bind(
                              this,
                              -1,
                              {}
                            ),
                            variant: "success",
                            className: "w-100",
                          },

                          re(BS.Icon, {
                            name: "fa-solid fa-circle-plus",
                            alt: "add",
                          })
                        )
                      ),

                      re(
                        BS.Division,
                        { className: "hstack gap-1" },

                        re(
                          BS.Link,
                          {
                            to: this.state.selected.url,
                            newTab: true,
                            external: false,
                            className: "btn btn-dark",
                          },
                          "Entry Page"
                        ),

                        re(
                          BS.Link,
                          {
                            to:
                              "https://www.equipgodspeople.com/bible-study-tools/bible-search/?search=" +
                              (this.state.selected.language === "hebrew"
                                ? "%5B"
                                : "%3C") +
                              this.state.selected.sequence.substring(2) +
                              (this.state.selected.language === "hebrew"
                                ? "%5D"
                                : "%3E") +
                              "&range=" +
                              this.state.selected.sequence.substring(0, 1),
                            newTab: true,
                            external: false,
                            className: "btn btn-dark",
                          },
                          "Search Bible"
                        ),

                        re(
                          BS.Button,
                          { type: "submit", className: "w-100 w-md-auto" },
                          "Submit"
                        )
                      )
                    ),

                    re(
                      BS.Division,
                      { className: "pagination mt-3" },

                      this.state.selected.previous
                        ? re(
                            "button",
                            {
                              onClick: this.selectHandler.bind(
                                this,
                                this.state.selected.previous
                              ),
                              className: "page-item page-link",
                            },

                            re(BS.Icon, {
                              name: "fa-solid fa-angle-left",
                              alt: "previous",
                              className: "me-2",
                            }),
                            this.state.selected.previous
                              .replace("strongs-", "")
                              .toUpperCase()
                          )
                        : null,

                      this.state.selected.next
                        ? re(
                            "button",
                            {
                              onClick: this.selectHandler.bind(
                                this,
                                this.state.selected.next
                              ),
                              className: "page-item page-link",
                            },

                            this.state.selected.next
                              .replace("strongs-", "")
                              .toUpperCase(),
                            re(BS.Icon, {
                              name: "fa-solid fa-angle-right",
                              alt: "next",
                              className: "ms-2",
                            })
                          )
                        : null
                    ),

                    re(
                      BS.Modal,
                      {
                        id: "lexiconInflectionModal",
                        onHide: this.inflectionCancelHandler,
                        onApply: this.inflectionApplyHandler,
                      },

                      re(
                        BS.Row,
                        null,

                        re(BS.FormField, {
                          item: {
                            title: "Inflected Name",
                            value: (this.state.inflection?.name ?? "").replace(
                              /\[[^\]]+\]/g,
                              ""
                            ),
                            gridWidth: 6,
                          },
                          onChange: this.inflectionChangeHandler.bind(
                            this,
                            "name"
                          ),
                        }),

                        re(BS.FormField, {
                          item: {
                            title: "Alternate Strong’s",
                            value: this.state.inflection?.strongs ?? "",
                            gridWidth: 6,
                          },
                          onChange: this.inflectionChangeHandler.bind(
                            this,
                            "strongs"
                          ),
                        })
                      ),

                      BS.inflectionTypes.map((inflectionType) =>
                        re(LexiconInflectionFlags, {
                          inflectionType: inflectionType,
                          selected: this.state.inflection?.flags ?? [],
                          onToggle: this.inflectionFlagHandler,
                          key: inflectionType._id,
                        })
                      )
                    )
                  )
                : re(BS.ListGroup, {
                    title: "Lexicon Entries",
                    items: this.state.selected
                      .filter(
                        (item) =>
                          this.state.languageFilter === "All" ||
                          item.language ===
                            this.state.languageFilter.toLowerCase()
                      )
                      .map((item) => ({
                        _id: item._id,
                        title: BS.rbb(
                          [
                            item.title,
                            item.partOfSpeech
                              ? "[" + item.partOfSpeech + "]"
                              : null,
                          ].join(" ")
                        ),
                        subtitle: [
                          item.shortDefinition,
                          item.occurrences
                            ? "[" +
                              item.occurrences +
                              " occurrence" +
                              (item.occurrences !== 1 ? "s" : "") +
                              "]"
                            : null,
                        ].join(" "),
                      })),
                    onSelect: this.selectHandler,
                    key: this.state.query,
                  })
              : null

            // , this.state.selected
            //   ? re(BS.Preformatted, {
            //       title: "Lexicon Entry",
            //       item: this.state.selected,
            //       className: "mt-3",
            //     })
            //   : null

            // , this.state.inflection
            //   ? re(BS.Preformatted, {
            //       title:
            //         "Inflection" +
            //         (this.state.inflectionIndex != null
            //           ? ` (${this.state.inflectionIndex})`
            //           : ""),
            //       item: this.state.inflection,
            //       className: "mt-3",
            //     })
            //   : null

            // , this.state.language
            //   ? re(BS.Preformatted, {
            //       title: "Language",
            //       item: this.state.language,
            //       className: "mt-3",
            //     })
            //   : null
          );

    /*****************
     ***** Hooks *****
     ****************/

    componentDidMount = () => {
      this.load();
    };

    /********************
     ***** Handlers *****
     *******************/

    changeHandler = (field, event) => {
      // grab the value
      const value = event.target.value;

      this.setState((prevState) => {
        // clone the selected item
        const selected = JSON.parse(JSON.stringify(prevState.selected));

        // apply value changes
        switch (field) {
          case "name":
            // re-wrap the value in the language tag
            if (field === "name") {
              selected[field] =
                "[" +
                this.state.language._id +
                "]" +
                value +
                "[/" +
                this.state.language._id +
                "]";
            }

            break;

          case "strongsWord":
            selected.strongs.word = value;

            break;

          case "strongsPronunciation":
            selected.strongs.pronunciation = value;

            break;

          default:
            // definitions are split out
            if (field.substring(0, 11) === "definition-") {
              // extract the lexicon ID
              const lexiconID = field.substring(11);

              // retrieve the corresponding lexicon
              const lexicon = selected.lexicons.find(
                (lexicon) => lexicon._id === lexiconID
              );

              // update the definition
              lexicon.definition = value;
            }
            // apply changes directly
            else selected[field] = value;

            break;
        }

        // redo the title based on the Strong's ID, word, and name
        selected.title = [
          selected.strongs._id,
          selected.word,
          selected.name,
        ].join(" – ");

        // redo the page title based on the Strong's ID, word, and name
        selected.pageTitle = [
          selected.strongs._id,
          titleCase(selected.word),
          selected.name,
        ].join(" – ");

        // redo the URL based on the language and ID
        selected.url = this.state.language.url + "/" + selected._id;

        // redo the sequence based on the language and Strong's ID
        selected.sequence =
          this.state.language.sequence +
          "-" +
          selected.strongs._id.substring(1).padStart(4, "0");

        // update the React state
        return { selected: selected };
      });
    };

    changeLanguageHandler = () => {
      let languageFilter;

      switch (this.state.languageFilter) {
        case "All":
          languageFilter = "Greek";

          break;

        case "Greek":
          languageFilter = "Hebrew";

          break;

        default:
          languageFilter = "All";
      }

      this.setState({ languageFilter: languageFilter });
    };

    inflectionApplyHandler = async () => {
      // build out the form data
      const data = new FormData();
      data.append("api", "lexiconConvert");
      data.append("languageID", this.state.language._id);
      data.append(
        "code",
        this.state.inflection.name.replace(/\[[^\]]+\]/g, "")
      );

      axios
        .post("/admin", data)
        .then((response) => {
          const inflection = JSON.parse(JSON.stringify(this.state.inflection));
          const selected = JSON.parse(JSON.stringify(this.state.selected));

          // wrap the name in its language BB tag
          inflection.name =
            "[" +
            this.state.language._id +
            "]" +
            response.data +
            "[/" +
            this.state.language._id +
            "]";

          // prefix Strong's with the language code
          if (inflection.strongs) {
            inflection.strongs =
              this.state.language._id.toLowerCase().substring(0, 1) +
              inflection.strongs.replace(/[^0-9]/g, "");
          }

          // ensure inflections property is an array
          if (!selected.inflections) selected.inflections = [];

          // add new inflection
          if (this.state.inflectionIndex === -1)
            selected.inflections.push(inflection);
          // update existing inflection
          else selected.inflections[this.state.inflectionIndex] = inflection;

          this.setState({ selected: selected });

          this.inflectionCancelHandler();
        })
        .catch((err) => {
          alert(err.message);
        });
    };

    inflectionCancelHandler = () => {
      this.setState({ inflection: {} });
    };

    inflectionChangeHandler = (key, event) => {
      const inflection = JSON.parse(JSON.stringify(this.state.inflection));

      inflection[key] = event.target.value;

      this.setState({ inflection: inflection });
    };

    inflectionDeleteHandler = (index) => {
      const selected = JSON.parse(JSON.stringify(this.state.selected));

      selected.inflections.splice(index, 1);

      this.setState({ selected: selected });
    };

    inflectionEditHandler = (index, inflection) => {
      this.setState({
        inflectionIndex: index,
        inflection: JSON.parse(JSON.stringify(inflection)),
      });
    };

    inflectionFlagHandler = (flag) => {
      const inflection = JSON.parse(JSON.stringify(this.state.inflection));

      // ensure that the flags property is an array
      if (!inflection.flags) inflection.flags = [];

      // add/remove the flag
      const index = inflection.flags.indexOf(flag);
      if (index === -1) inflection.flags.push(flag);
      else inflection.flags.splice(index, 1);

      // sort the array
      inflection.flags.sort();

      this.setState({ inflection: inflection });
    };

    queryChangeHandler = (event) => {
      this.setState({ query: event.target.value });
    };

    queryClearHandler = () => {
      this.setState({ query: "strongs-g" });
    };

    querySubmitHandler = (event) => {
      event.preventDefault();
      this.loadEntry();
    };

    selectHandler = (item) => {
      // convert objects to IDs only
      if (item && typeof item === "object") item = item._id;

      // update the selection in the React state
      this.setState({ query: item });

      // load the lexicon entry
      setTimeout(() => {
        this.loadEntry();
      }, 250);
    };

    submitHandler = (event) => {
      event.preventDefault();

      this.setState({ processing: true });

      // build out the form data
      const data = new FormData();
      data.append("api", "lexicon-entry");
      data.append("_id", this.state.selectedID);
      data.append("document", JSON.stringify(this.state.selected));

      axios
        .post("/admin", data)
        .then((response) => {
          this.setState({
            selected: response.data,
            selectedID: response.data._id,
            processing: false,
          });
        })
        .catch((err) => {
          this.setState({ processing: false });
          alert(err.message);
        });
    };

    /*******************
     ***** Methods *****
     ******************/

    load = () => {
      this.setState({ languages: false });

      // build out the form data
      const data = new FormData();
      data.append("api", "lexicon-languages");

      axios
        .post("/admin", data)
        .then((response) => {
          this.setState({ languages: response.data });

          this.loadEntry();
        })
        .catch((err) => {
          alert(err.message);
        });
    };

    loadEntry = () => {
      if (this.state.query) {
        // build out the form data
        let data = new FormData();
        data.append("api", "lexicon-entry");
        data.append("_id", this.state.query);

        axios
          .post("/admin", data)
          .then((response) => {
            this.setState({
              selected: response.data,
              selectedID: !Array.isArray(response.data)
                ? response.data._id
                : null,
              language: !Array.isArray(response.data)
                ? this.state.languages.find(
                    (language) => language._id === response.data.language
                  )
                : null,
            });
          })
          .catch((err) => {
            alert(err.message);
          });
      } else {
        this.setState({
          selected: false,
          selectedID: false,
          language: false,
        });
      }
    };
  }

  class LexiconInflectionFlags extends RC {
    render = () =>
      re(
        BS.Row,
        null,
        re(
          BS.Col,
          { md: 12, className: "mb-3" },

          re(
            BS.Label,
            { className: "fw-bold" },
            this.props.inflectionType.title
          ),

          re(
            BS.Row,
            null,

            this.props.inflectionType.flags.map((morphology) =>
              re(
                BS.Col,
                { md: true },

                re(
                  BS.Button,
                  {
                    onClick: this.props.onToggle.bind(this, morphology._id),
                    variant:
                      this.props.selected.indexOf(morphology._id) !== -1
                        ? "dark"
                        : "light",
                    className: "w-100 mb-1",
                    key: morphology._id,
                  },
                  morphology.title
                )
              )
            )
          )
        )
      );
  }

  class ReadingPlans extends RC {
    state = {};

    render = () =>
      !this.state.readingPlans || this.state.processing
        ? re(BS.Spinner, { alert: true })
        : !this.state.selected
        ? re(BS.ListGroup, {
            title: "Reading Plans",
            items: this.state.readingPlans.map((item) => ({
              _id: item._id,
              title: item.title,
              subtitle: `approximately ${item.minutes} minutes of reading per day`,
            })),
            onSelect: this.selectHandler,
          })
        : re(
            BS.Form,
            { onSubmit: this.submitHandler },

            re(BS.SectionHeader, {
              title: this.state.selected.title,
              subtitle: "reading plan admin form",
            }),

            re(
              BS.Container,
              null,
              re(
                BS.Row,
                null,
                re(BS.FormField, {
                  item: {
                    _id: "title",
                    title: "Title",
                    value: this.state.selected.title,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "title"),
                }),
                re(BS.FormField, {
                  item: {
                    _id: "_id",
                    title: "ID",
                    value: this.state.selected._id,
                    disabled: true,
                    gridWidth: 6,
                  },
                }),
                re(BS.FormField, {
                  item: {
                    _id: "url",
                    title: "URL",
                    value: this.state.selected.url,
                    disabled: true,
                    gridWidth: 6,
                  },
                }),
                re(BS.FormField, {
                  item: {
                    _id: "sequence",
                    title: "Sequence",
                    value: this.state.selected.sequence,
                    disabled: true,
                    gridWidth: 6,
                  },
                }),
                re(BS.FormField, {
                  item: {
                    _id: "description",
                    title: "Description",
                    value: this.state.selected.description,
                    lines: 3,
                    gridWidth: 12,
                  },
                  onChange: this.changeHandler.bind(this, "description"),
                }),
                re(BS.FormField, {
                  item: {
                    _id: "days",
                    title: "Days",
                    value: this.state.selected.days,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "days"),
                }),
                re(BS.FormField, {
                  item: {
                    _id: "minutes",
                    title: "Minutes Per Day",
                    value: this.state.selected.minutes,
                    gridWidth: 6,
                  },
                  onChange: this.changeHandler.bind(this, "minutes"),
                })
              )
            ),

            re(BS.Line, { className: "bg-dark pb-1" }),

            re(
              BS.Row,
              null,
              this.state.selected.details.map((item, itemIndex) =>
                re(
                  BS.Col,
                  { md: 3, key: itemIndex },
                  re(BS.FormField, {
                    item: {
                      _id: `details-${itemIndex}`,
                      title: `Day ${itemIndex + 1}`,
                      value: Array.isArray(item) ? item.join("; ") : item,
                    },
                    onChange: this.changeHandler.bind(
                      this,
                      `details-${itemIndex}`
                    ),
                  })
                )
              )
            ),

            re(
              BS.Button,
              { type: "submit", className: "w-100 w-md-auto" },
              "Save"
            )
            // re(BS.Line, { className: "mt-3" }),
            // re(BS.Preformatted, { item: this.state.selected })
          );

    /*****************
     ***** Hooks *****
     ****************/

    componentDidMount = () => {
      this.load();
    };

    /********************
     ***** Handlers *****
     *******************/

    changeHandler(field, event) {
      // grab the value
      const value = event.target.value;

      this.setState((prevState) => {
        // clone the selected item
        const selected = JSON.parse(JSON.stringify(prevState.selected));

        if (field.substring(0, 8) === "details-") {
          // extract the index
          const detailIndex = parseInt(field.substring(8));

          // split the details
          selected.details[detailIndex] = value.split("; ");
        } else {
          // apply changes
          selected[field] = value;

          // make the ID an SEO-friendly version of the title
          selected._id = seo(selected.title);

          // redo the URL
          selected.url = `/bible-reading-plans/${selected._id}`;

          // determine the sequence prefix
          switch (prevState.selected.days) {
            case 365:
              selected.sequence = 1;

              break;

            case 40:
              selected.sequence = 2;

              break;

            case 31:
              selected.sequence = 3;

              break;

            default:
              selected.sequence = 4;

              break;
          }

          // add the ID
          selected.sequence = selected.sequence + "-" + selected._id;
        }

        // update the React state
        return { selected: selected };
      });
    }

    selectHandler = (selected) => {
      if (selected) {
        selected = JSON.parse(
          JSON.stringify(
            this.state.readingPlans.find((item) => item._id === selected._id)
          )
        );
      }

      this.setState({
        selected: selected,
        selectedID: selected ? selected._id : null,
      });
    };

    submitHandler = (event) => {
      event.preventDefault();

      this.setState({ processing: true });

      // build out the form data
      const data = new FormData();
      data.append("api", "reading-plan");
      data.append("_id", this.state.selectedID);
      data.append("document", JSON.stringify(this.state.selected));

      axios
        .post("/admin", data)
        .then((response) => {
          this.load();

          this.setState({
            selected: response.data,
            selectedID: response.data._id,
            processing: false,
          });
        })
        .catch((err) => {
          this.setState({ processing: false });
          alert(err.message);
        });
    };

    /*******************
     ***** Methods *****
     ******************/

    load = () => {
      this.setState({ readingPlans: false });

      // build out the form data
      const data = new FormData();
      data.append("api", "reading-plans");

      axios
        .post("/admin", data)
        .then((response) => {
          this.setState({ readingPlans: response.data });
        })
        .catch((err) => {
          alert(err.message);
        });
    };
  }

  /** swap React containers with components */
  let reactContainer;

  // add the sample component to the React container
  reactContainer = document.querySelector("#react-like");
  if (reactContainer) ReactDOM.render(re(LikeButton), reactContainer);

  // add the Bible Testaments component to the React container
  reactContainer = document.querySelector("#react-bible-testaments");
  if (reactContainer) ReactDOM.render(re(BibleTestaments), reactContainer);

  // add the Bible Testaments component to the React container
  reactContainer = document.querySelector("#react-blog-entry");
  if (reactContainer) ReactDOM.render(re(BlogEntry), reactContainer);

  // add the Lexicon Entries component to the React container
  reactContainer = document.querySelector("#react-lexicons-entries");
  if (reactContainer) ReactDOM.render(re(LexiconsEntries), reactContainer);

  // add the Reading Plans component to the React container
  reactContainer = document.querySelector("#react-reading-plans");
  if (reactContainer) ReactDOM.render(re(ReadingPlans), reactContainer);
});
