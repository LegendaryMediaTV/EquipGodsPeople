"use strict";

export class HTML extends React.Component {
  /** render the React component */
  render(properties) {
    // extract tag
    const tag = properties.tag;
    delete properties.tag;

    // ensure className is a string
    properties.className = properties.className.join(" ");
    if (!properties.className) delete properties.className;

    // translate HTML attributes
    if (properties.direction) properties.dir = properties.direction;
    delete properties.direction;

    // translate ARIA attributes
    if (properties.ariaRole) properties.role = properties.ariaRole;
    delete properties.ariaRole;

    // translate Bootstrap data attributes
    if (properties.bsDataBackdrop)
      properties["data-bs-backdrop"] = properties.bsDataBackdrop;
    delete properties.bsDataBackdrop;
    if (properties.bsDataContent)
      properties["data-bs-content"] = properties.bsDataContent;
    delete properties.bsDataContent;
    if (properties.bsDataKeyboard)
      properties["data-bs-keyboard"] = properties.bsDataKeyboard;
    delete properties.bsDataKeyboard;
    if (properties.bsDataDismiss)
      properties["data-bs-dismiss"] = properties.bsDataDismiss;
    delete properties.bsDataDismiss;
    if (properties.bsDataHTML)
      properties["data-bs-html"] = properties.bsDataHTML;
    delete properties.bsDataHTML;
    if (properties.bsDataPlacement)
      properties["data-bs-placement"] = properties.bsDataPlacement;
    delete properties.bsDataPlacement;
    if (properties.bsDataTarget) {
      properties["data-bs-target"] =
        (properties.bsDataTarget.indexOf("#") !== 0 ? "#" : "") +
        properties.bsDataTarget;
    }
    delete properties.bsDataTarget;
    if (properties.bsDataToggle)
      properties["data-bs-toggle"] = properties.bsDataToggle;
    delete properties.bsDataToggle;
    if (properties.bsDataTrigger)
      properties["data-bs-trigger"] = properties.bsDataTrigger;
    delete properties.bsDataTrigger;

    // extract children
    const children = properties.children.length ? properties.children : null;
    delete properties.children;

    // generate the React element
    if (children) return React.createElement(tag, properties, ...children);
    else return React.createElement(tag, properties);
  }

  /** merge React and custom properties */
  mergeProperties() {
    const properties = {};

    // extract keys from the React properties
    const keys = Object.keys(this.props);

    // merge in React properties
    for (const key of keys) {
      if (this.props[key] != null) {
        properties[key] = Array.isArray(this.props[key])
          ? this.props[key].slice()
          : this.props[key];
      }
    }

    // ensure children property is an array
    if (!Array.isArray(properties.children)) {
      properties.children =
        properties.children != null ? [properties.children] : [];
    }

    // ensure className is an array
    if (!Array.isArray(properties.className)) {
      properties.className = properties.className
        ? properties.className.split(/\s+/)
        : [];
    }

    return properties;
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// HTML
////////////////////////////////////////////////////////////////////////////////

export class Abbreviation extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "abbr";

    // popover toggler
    if (properties.popover) {
      const children = properties.children;
      properties.children = [
        React.createElement(
          Link,
          {
            popover: {
              title: properties.popover.title,
              content: properties.popover.content,
            },
          },
          ...children
        ),
      ];
    }
    delete properties.popover;

    // render via parent method
    return super.render(properties);
  }
}

export class Article extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "article";

    // render via parent method
    return super.render(properties);
  }
}

export class Aside extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "aside";

    // render via parent method
    return super.render(properties);
  }
}

export class Bold extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "b";

    // render via parent method
    return super.render(properties);
  }
}

export class Break extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "br";

    // render via parent method
    return super.render(properties);
  }
}

export class ButtonHTML extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "button";
    if (!properties.type) properties.type = "button";

    // render via parent method
    return super.render(properties);
  }
}

export class Citation extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "cite";

    // render via parent method
    return super.render(properties);
  }
}

export class Division extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    if (!properties.tag) properties.tag = "div";

    // render via parent method
    return super.render(properties);
  }
}

export class Emphasis extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "em";

    // render via parent method
    return super.render(properties);
  }
}

export class Footer extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "footer";

    // render via parent method
    return super.render(properties);
  }
}

export class Header extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "header";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading1 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h1";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading2 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h2";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading3 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h3";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading4 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h4";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading5 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h5";

    // render via parent method
    return super.render(properties);
  }
}

export class Heading6 extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "h6";

    // render via parent method
    return super.render(properties);
  }
}

export class Icon extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "i";

    // add FontAwesome/Bootstrap classes
    properties.className.push(properties.name);
    if (properties.variant)
      properties.className.push(`text-${properties.variant}`);
    delete properties.variant;

    // ensure alt text
    if (properties.ariaLabel == null) {
      if (properties.alt != null) properties.ariaLabel = properties.alt;
      else {
        properties.ariaLabel = properties.name
          .replace("-alt", "")
          .replace(/^[a-z-]+ [a-z]{2}-/, "")
          .replace(/-fill$/, "")
          .replace(/-/g, " ");
      }
    }
    delete properties.alt;
    delete properties.name;

    // render via parent method
    return super.render(properties);
  }
}

export class IFrame extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "iframe";

    // image properties
    properties.src = properties.url;
    delete properties.url;

    // render via parent method
    return super.render(properties);
  }
}

export class Image extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "img";

    // image properties
    properties.src = properties.url;
    delete properties.url;
    properties.alt = properties.alt ?? "";

    // add Bootstrap classes
    if (properties.fluid) properties.className.push("img-fluid");
    delete properties.fluid;
    if (properties.thumbnail) properties.className.push("img-thumbnail");
    delete properties.thumbnail;

    // render via parent method
    return super.render(properties);
  }
}

export class Italics extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "i";

    // render via parent method
    return super.render(properties);
  }
}

export class Line extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "hr";

    // render via parent method
    return super.render(properties);
  }
}

export class Link extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "a";

    // popover toggler
    if (properties.popover) {
      properties.ariaRole = "button";
      properties.bsDataToggle = "popover";
      properties.bsDataTrigger = "focus";
      properties.bsDataPlacement = "bottom";
      properties.bsDataHTML = true;
      properties.title = properties.popover.title;
      properties.bsDataContent = properties.popover.content;
      if (properties.to) {
        if (!properties.ariaRole) properties.ariaRole = "button";
      } else if (!properties.variant) properties.variant = "muted";
    } else {
      // configure settings
      properties.external =
        properties.to &&
        properties.to.match(/^https?:/i) &&
        properties.external !== false;
    }
    delete properties.popover;

    // add link attributes
    if (properties.to) {
      properties.href = properties.to;
      if (properties.newTab) {
        properties.target = "_blank";
        properties.rel = "noopener";
      }
    }
    // add ARIA attributes to non-links
    else {
      if (!properties.ariaRole) properties.ariaRole = "button";
      if (properties.tabIndex == null) properties.tabIndex = 0;
    }
    delete properties.to;
    delete properties.newTab;

    // add external icon child
    if (properties.external)
      properties.children.push(
        React.createElement(Icon, {
          name: "fa-solid fa-up-right-from-square",
          alt: "external link",
          variant: "muted",
          className: "small ps-1 align-text-top",
        })
      );
    delete properties.external;

    // add Bootstrap classes
    if (properties.disabled) properties.className.push("disabled");
    if (properties.bsDataToggle === "popover")
      properties.className.push("cursor-help");
    if (properties.variant)
      properties.className.push(`link-${properties.variant}`);
    delete properties.variant;

    // render via parent method
    return super.render(properties);
  }
}

export class List extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // determine the HTML tag
    if (!properties.tag) properties.tag = properties.ordered ? "ol" : "ul";
    delete properties.ordered;

    // convert items property to list item children
    if (properties.items) {
      properties.items.map((item) =>
        properties.children.push(
          React.createElement(ListItem, { key: item }, item)
        )
      );
    }
    delete properties.items;

    // render via parent method
    return super.render(properties);
  }
}

export class ListItem extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "li";

    // render via parent method
    return super.render(properties);
  }
}

export class Main extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "main";

    // render via parent method
    return super.render(properties);
  }
}

export class NavHTML extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "nav";

    // render via parent method
    return super.render(properties);
  }
}

export class Paragraph extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "p";

    // render via parent method
    return super.render(properties);
  }
}

export class Preformatted extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "pre";

    // convert title/item property to children
    if (properties.item) {
      properties.children.push(properties.title ? `${properties.title}: ` : "");
      properties.children.push(JSON.stringify(properties.item, null, 2));
    }
    delete properties.item;
    delete properties.title;

    // render via parent method
    return super.render(properties);
  }
}

export class Section extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "section";

    // render via parent method
    return super.render(properties);
  }
}

export class Small extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "small";

    // render via parent method
    return super.render(properties);
  }
}

export class Span extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "span";

    // render via parent method
    return super.render(properties);
  }
}

export class Strong extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "strong";

    // render via parent method
    return super.render(properties);
  }
}

export class Subscript extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "sub";

    // render via parent method
    return super.render(properties);
  }
}

export class Superscript extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "sup";

    // render via parent method
    return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Layout
////////////////////////////////////////////////////////////////////////////////

export class Col extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    if (
      !properties.xs &&
      !properties.sm &&
      !properties.md &&
      !properties.lg &&
      !properties.xl &&
      !properties.xxl
    )
      properties.className.push("col");
    else {
      if (properties.xs) {
        properties.className.push(
          `col${properties.xs !== true ? `-${properties.xs}` : ""}`
        );
      }
      if (properties.sm) {
        properties.className.push(
          `col-sm${properties.sm !== true ? `-${properties.sm}` : ""}`
        );
      }
      if (properties.md) {
        properties.className.push(
          `col-md${properties.md !== true ? `-${properties.md}` : ""}`
        );
      }
      if (properties.lg) {
        properties.className.push(
          `col-lg${properties.lg !== true ? `-${properties.lg}` : ""}`
        );
      }
      if (properties.xl) {
        properties.className.push(
          `col-xl${properties.xl !== true ? `-${properties.xl}` : ""}`
        );
      }
      if (properties.xxl) {
        properties.className.push(
          `col-xxl${properties.xxl !== true ? `-${properties.xxl}` : ""}`
        );
      }
    }
    delete properties.xs;
    delete properties.sm;
    delete properties.md;
    delete properties.lg;
    delete properties.xl;
    delete properties.xxl;

    // render via parent method
    return super.render(properties);
  }
}

export class Container extends Section {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push(
      `container${
        properties.fluid !== false
          ? `-${properties.fluid === true ? "fluid" : properties.fluid || "lg"}`
          : ""
      }`
    );
    delete properties.fluid;

    // render via parent method
    return super.render(properties);
  }
}

export class Row extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("row");

    // render via parent method
    return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Content
////////////////////////////////////////////////////////////////////////////////

export class Blockquote extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "blockquote";

    // add Bootstrap classes
    properties.className.push("blockquote");

    // render via parent method
    return super.render(properties);
  }
}

export class BlockquoteFooter extends Footer {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("blockquote-footer");

    // render via parent method
    return super.render(properties);
  }
}

export class DefinitionList extends Row {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "dl";

    // convert item property to definition term/data children
    if (properties.items) {
      for (const [itemID, item] of Object.entries(properties.items)) {
        properties.children.push(
          React.createElement(DefinitionListTerm, null, `${itemID}:`)
        );
        properties.children.push(
          React.createElement(DefinitionListData, null, item)
        );
      }
    }
    delete properties.items;

    // render via parent method
    return super.render(properties);
  }
}

export class DefinitionListData extends Col {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "dd";

    // add Bootstrap classes
    properties.sm = 8;
    properties.md = 9;
    properties.lg = 10;

    // render via parent method
    return super.render(properties);
  }
}

export class DefinitionListTerm extends Col {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "dt";

    // add Bootstrap classes
    properties.sm = 4;
    properties.md = 3;
    properties.lg = 2;

    // render via parent method
    return super.render(properties);
  }
}

export class Display1 extends Heading1 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-1");

    // render via parent method
    return super.render(properties);
  }
}

export class Display2 extends Heading2 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-2");

    // render via parent method
    return super.render(properties);
  }
}

export class Display3 extends Heading3 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-3");

    // render via parent method
    return super.render(properties);
  }
}

export class Display4 extends Heading4 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-4");

    // render via parent method
    return super.render(properties);
  }
}

export class Display5 extends Heading5 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-5");

    // render via parent method
    return super.render(properties);
  }
}

export class Display6 extends Heading6 {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("display-6");

    // render via parent method
    return super.render(properties);
  }
}

export class Lead extends Paragraph {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("lead");

    // render via parent method
    return super.render(properties);
  }
}

export class VisuallyHidden extends Span {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("visually-hidden");

    // call parent renderer
    return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
/////////// Forms
////////////////////////////////////////////////////////////////////////////////

export class Form extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "form";

    // add form properties
    properties.action = properties.url;
    delete properties.url;
    if (!properties.method) properties.method = "post";

    // render via parent method
    return super.render(properties);
  }
}

export class FormField extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // extract non-HTML properties
    if (!properties.id) properties.id = properties.item._id;
    properties.disabled = properties.item.disabled;
    properties.lines = properties.item.lines;
    properties.maxLength = properties.item.maxLength;
    properties.name = properties.item.name;
    properties.options = properties.item.options;
    properties.type = properties.item.type;
    properties.value = properties.item.value;
    const title = properties.item.title;
    const gridWidth = properties.item.gridWidth ?? 12;

    // determine the form component type
    let component;
    switch (properties.item.type) {
      case "dropdown":
        component = Select;

        break;

      default:
        component = Textbox;
    }

    // remove custom properties
    delete properties.item;

    // render as a column, containing a label and the corresponding component
    return React.createElement(
      Col,
      { md: gridWidth, className: "mb-3" },

      React.createElement(
        Label,
        { for: properties.id, className: "fw-bold" },
        title
      ),

      React.createElement(component, properties)
    );
  }
}

export class Label extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "label";

    // add Bootstrap classes
    properties.className.push("form-label");

    // render via parent method
    return super.render(properties);
  }
}

export class Select extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "select";

    // add Bootstrap classes
    properties.className.push("form-select");

    // convert options property to children
    if (properties.options) {
      for (const option of properties.options) {
        properties.children.push(
          React.createElement(SelectOption, {
            item: option,
            selected:
              typeof option === "object"
                ? option._id === properties.selected
                : option === properties.selected,
          })
        );
      }
    }
    delete properties.options;
    delete properties.selected;

    // render via parent method
    return super.render(properties);
  }
}

export class SelectOption extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag) properties.tag = "option";

    // convert item property to children
    if (properties.item) {
      if (typeof properties.item === "object") {
        properties.value = properties.item._id ?? "";
        properties.children.push(
          properties.item.title ?? properties.item.name ?? properties.item._id
        );
      } else {
        properties.value = item;
        properties.children.push(item);
      }
    }
    delete properties.item;

    // render via parent method
    return super.render(properties);
  }
}

export class Textbox extends HTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the HTML tag
    if (!properties.tag)
      properties.tag = properties.lines > 1 ? "textarea" : "input";

    // add textarea attributes
    if (properties.lines > 1) {
      properties.rows = properties.lines;
      properties.children = properties.children.concat(properties.value);
      delete properties.value;
    }
    delete properties.lines;

    // add Bootstrap classes
    properties.className.push("form-control");

    // render via parent method
    return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Components
////////////////////////////////////////////////////////////////////////////////

export class Alert extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes/attributes
    properties.className.push("alert");
    properties.className.push(`alert-${properties.variant ?? "info"}`);
    delete properties.variant;
    properties.ariaRole = "alert";

    // render via parent method
    return super.render(properties);
  }
}

export class AlertHeading extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes/attributes
    properties.className.push("alert-heading");
    properties.className.push("h3");

    // render via parent method
    return super.render(properties);
  }
}

export class AlertLink extends Link {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes/attributes
    properties.className.push("alert-link");

    // render via parent method
    return super.render(properties);
  }
}

export class Button extends ButtonHTML {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // popover toggler
    if (properties.popover) {
      properties.bsDataToggle = "popover";
      properties.bsDataTrigger = "focus";
      properties.bsDataPlacement = "bottom";
      properties.bsDataHTML = true;
      properties.title = properties.popover.title;
      properties.bsDataContent = properties.popover.content;
      if (!properties.variant) {
        properties.variant = "link";
        properties.className.push("link-muted");
      }
      properties.className.push("cursor-help");
    }
    delete properties.popover;

    // add Bootstrap classes
    properties.className.push("btn");
    properties.className.push(
      `btn-${properties.outline ? "outline-" : ""}${
        properties.variant || "primary"
      }`
    );
    delete properties.outline;
    delete properties.variant;
    if (properties.size) properties.className.push(`btn-${properties.size}`);
    delete properties.size;

    // render via parent method
    return super.render(properties);
  }
}

export class Collapse extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("collapse");

    // render via parent method
    return super.render(properties);
  }
}

export class ListGroup extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add default onSelect behavior
    if (!properties.onSelect)
      properties.onSelect = (selected) =>
        alert(JSON.stringify(selected, null, 2));

    // convert items property to list item children
    if (Array.isArray(properties.items)) {
      properties.children = properties.children.concat(
        properties.items.map((item) =>
          React.createElement(ListGroupItem, {
            to: item.url,
            title: item.title,
            subtitle: item.subtitle,
            onSelect: item.url ? null : properties.onSelect,
            item: item,
          })
        )
      );
    }
    delete properties.items;
    delete properties.onSelect;

    // prepend the title element to the children
    if (properties.title) {
      const titleClassName = "list-group-item bg-secondary mb-0";
      properties.children.unshift(
        properties.size === "lg"
          ? React.createElement(
              Heading2,
              { className: titleClassName },
              properties.title
            )
          : React.createElement(
              Heading3,
              { className: titleClassName },
              properties.title
            )
      );
    }
    delete properties.title;

    // add Bootstrap classes
    properties.className.push("list-group");
    if (properties.size)
      properties.className.push(`list-group-${properties.size}`);
    delete properties.size;

    // render via parent method
    return super.render(properties);
  }
}

export class ListGroupItem extends Link {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // use title/subitle as children
    if (properties.title != null) {
      properties.children.push(properties.title);
      if (properties.subtitle) {
        properties.children.push(
          React.createElement(
            Division,
            { className: "fst-italic small text-muted" },
            properties.subtitle
          )
        );
      }
    }
    delete properties.title;
    delete properties.subtitle;

    // add selection handler to non-links
    if (properties.onSelect && !properties.to) {
      const onSelect = properties.onSelect;
      const item = properties.item;

      properties.onClick = () => {
        onSelect(item);
      };
    }
    delete properties.onSelect;
    delete properties.item;

    // add Bootstrap classes
    properties.className.push("list-group-item");
    properties.className.push("list-group-item-action");
    if (properties.disabled) properties.className.push("disabled");

    // render via parent method
    return super.render(properties);
  }
}

export class Modal extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // extract custom properties
    const onHide = properties.onHide;
    delete properties.onHide;
    const onApply = properties.onApply;
    delete properties.onApply;

    // extract wrapper properties
    const id = properties.id ?? "modal";
    delete properties.id;
    const title = properties.title;
    delete properties.title;

    // add Bootstrap classes
    properties.className.push("modal-body");

    // render via parent method
    return React.createElement(
      Division,
      {
        id: id,
        bsDataBackdrop: "static",
        bsDataKeyboard: false,
        tabIndex: -1,
        ariaLabelledBy: id + "Label",
        ariaHidden: true,
        className: "modal fade",
      },

      React.createElement(
        Division,
        { className: "modal-dialog modal-dialog-centered modal-xl" },
        React.createElement(
          Division,
          { className: "modal-content" },

          title
            ? React.createElement(
                Division,
                { className: "modal-header" },

                React.createElement(
                  Heading5,
                  {
                    id: id + "Label",
                    className: "modal-title",
                  },
                  title
                ),

                React.createElement(Button, {
                  onClick: onHide,
                  bsDataDismiss: "modal",
                  ariaLabel: "close",
                  variant: "close",
                })
              )
            : null,

          React.createElement(
            Division,
            { className: "modal-body" },
            super.render(properties)
          ),

          React.createElement(
            Division,
            { className: "modal-footer" },

            React.createElement(
              Button,
              { bsDataDismiss: "modal", onClick: onHide, variant: "warning" },
              "Cancel"
            ),

            React.createElement(
              Button,
              { bsDataDismiss: "modal", onClick: onApply },
              "Apply"
            )
          )
        )
      )
    );
  }
}

export class Nav extends List {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // convert items property to nav item children
    if (Array.isArray(properties.items)) {
      properties.children = properties.children.concat(
        properties.items.map((item) =>
          React.createElement(
            NavItem,
            null,
            React.createElement(
              NavLink,
              {
                to: item.url,
                active:
                  properties.activeItem != null &&
                  item._id.toString() === properties.activeItem,
              },
              item.title
            )
          )
        )
      );
    }
    delete properties.items;
    delete properties.activeItem;

    // add previous button
    if (properties.previous) {
      properties.children.unshift(
        React.createElement(
          NavItem,
          null,
          React.createElement(
            NavLink,
            { to: properties.previous.url },
            React.createElement(Icon, {
              name: "fa-solid fa-angle-left",
              alt: "previous",
              className: "pe-2",
            }),
            properties.previous.title
          )
        )
      );
    }
    delete properties.previous;

    // add next button
    if (properties.next) {
      properties.children.push(
        React.createElement(
          NavItem,
          null,
          React.createElement(
            NavLink,
            { to: properties.next.url },
            properties.next.title,
            React.createElement(Icon, {
              name: "fa-solid fa-angle-right",
              alt: "next",
              className: "ps-2",
            })
          )
        )
      );
    }
    delete properties.next;

    // add Bootstrap classes
    properties.className.push("nav");
    if (properties.tabs) properties.className.push("nav-tabs");
    else if (properties.vertical) {
      properties.className.push("flex-column");
      if (properties.vertical !== true) {
        properties.className.push(`flex-${properties.vertical}-row`);
      }
    }
    delete properties.tabs;
    delete properties.vertical;
    if (properties.justify) {
      properties.className.push(
        `justify-content-${
          properties.justify === true ? "between" : properties.justify
        }`
      );
    }
    delete properties.justify;

    // render via parent method
    return super.render(properties);
  }
}

export class NavItem extends ListItem {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("nav-item");

    // render via parent method
    return super.render(properties);
  }
}

export class NavLink extends Link {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("nav-link");
    if (properties.active) properties.className.push("active");
    delete properties.active;

    // render via parent method
    return super.render(properties);
  }
}

export class Pagination extends List {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // convert link property to nav item children
    if (Array.isArray(properties.items)) {
      properties.children = properties.children.concat(
        properties.items.map((item) =>
          React.createElement(
            PaginationItem,
            null,
            React.createElement(
              PaginationLink,
              {
                to: item.url,
                active:
                  properties.activeItem != null &&
                  item._id.toString() === properties.activeItem,
              },
              item.title
            )
          )
        )
      );
    }
    delete properties.items;

    // add previous button
    if (properties.previous) {
      properties.children.unshift(
        React.createElement(
          PaginationItem,
          null,
          React.createElement(
            PaginationLink,
            { to: properties.previous.url },
            React.createElement(Icon, {
              name: "fa-solid fa-angle-left",
              alt: "previous",
              className: "pe-2",
            }),
            properties.previous.title
          )
        )
      );
    }
    delete properties.previous;

    // add next button
    if (properties.next) {
      properties.children.push(
        React.createElement(
          PaginationItem,
          null,
          React.createElement(
            PaginationLink,
            { to: properties.next.url },
            properties.next.title,
            React.createElement(Icon, {
              name: "fa-solid fa-angle-right",
              alt: "next",
              className: "ps-2",
            })
          )
        )
      );
    }
    delete properties.next;

    // add Bootstrap classes
    properties.className.push("pagination");
    if (properties.size)
      properties.className.push(`pagination-${properties.size}`);
    delete properties.size;

    // extract the wrapper class
    const wrapperClassName = properties.wrapperClassName;
    delete properties.wrapperClassName;

    // render via parent method
    return React.createElement(
      NavHTML,
      { className: wrapperClassName },
      super.render(properties)
    );
  }
}

export class PaginationItem extends ListItem {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("page-item");
    if (properties.active) {
      properties.className.push("active");
      properties.ariaCurrent = "page";
    }
    delete properties.active;
    if (properties.disabled) properties.className = "disabled";

    // render via parent method
    return super.render(properties);
  }
}

export class PaginationLink extends Link {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("page-link");

    // render via parent method
    return super.render(properties);
  }
}

export class Spinner extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add ARIA attributes
    properties.ariaRole = "status";

    // add Bootstrap classes
    properties.className.push("spinner-border");

    // add screen reader child
    properties.children.push(
      React.createElement(VisuallyHidden, null, "loading …")
    );

    // render within an alert
    if (properties.alert || properties.title) {
      // extract title
      const title = properties.title;
      delete properties.alert;
      delete properties.title;

      // default variant to info
      if (!properties.variant) properties.variant = "info";

      return React.createElement(
        Alert,
        { className: `text-center ${title ? "py-4" : "py-5"}` },
        title ? React.createElement(AlertHeading, null, title) : null,
        super.render(properties)
      );
    }
    // call parent renderer
    else return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Custom Bootstrap Components
////////////////////////////////////////////////////////////////////////////////

export class Breakpoints extends Row {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("bg-info");
    properties.className.push("py-1");
    properties.className.push("my-1");
    properties.className.push("text-center");

    // add child elements for each breakpoint
    properties.children.push(
      React.createElement(Col, { xs: true, className: "d-sm-none" }, "XS")
    );
    properties.children.push(
      React.createElement(
        Col,
        { sm: true, className: "d-none d-sm-block d-md-none" },
        "SM"
      )
    );
    properties.children.push(
      React.createElement(
        Col,
        { md: true, className: "d-none d-md-block d-lg-none" },
        "MD"
      )
    );
    properties.children.push(
      React.createElement(
        Col,
        { lg: true, className: "d-none d-lg-block d-xl-none" },
        "LG"
      )
    );
    properties.children.push(
      React.createElement(
        Col,
        { xl: true, className: "d-none d-xl-block d-xxl-none" },
        "XL"
      )
    );
    properties.children.push(
      React.createElement(
        Col,
        { xxl: true, className: "d-none d-xxl-block" },
        "XXL"
      )
    );

    // render via parent method
    return super.render(properties);
  }
}

export class Embed extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add iframe child
    properties.children.push(
      React.createElement(IFrame, {
        url: properties.url,
        title: properties.title,
        allowFullScreen: true,
      })
    );
    delete properties.url;
    delete properties.title;

    // add Bootstrap classes
    properties.className.push("ratio");
    properties.className.push("ratio-16x9");

    // render via parent method
    return super.render(properties);
  }
}

////////////////////////////////////////////////////////////////////////////////
////////// Custom Functions
////////////////////////////////////////////////////////////////////////////////

/** BB Code to React: https://www.bbcode.org/reference.php */
// TODO: rename this and its references to bb() and remove import of functions.bb() when complete
export const rbb = (text) => {
  let output = text;

  // HTML
  output = reactReplace(output, /\[b\](.+?)\[\/b\]/, (match) =>
    React.createElement(Bold, null, match[1])
  );
  output = reactReplace(output, /\[i\](.+?)\[\/i\]/, (match) =>
    React.createElement(Italics, null, match[1])
  );
  output = reactReplace(output, /\[sub\](.+?)\[\/sub\]/, (match) =>
    React.createElement(Subscript, null, match[1])
  );
  output = reactReplace(output, /\[sup\](.+?)\[\/sup\]/, (match) =>
    React.createElement(Superscript, null, match[1])
  );
  output = reactReplace(output, /\n/, () => React.createElement(Break));

  // TODO: requires lexiconConvert()
  // // Greek code tag
  // output = reactReplace(output,
  //   /\[greekCode\](.+?)\[\/greekCode\]/,
  //   (match) => React.createElement(Greek, null, lexiconConvert("G", match[1]))
  // );
  output = reactReplace(output, /\[greekCode\](.+?)\[\/greekCode\]/, (match) =>
    React.createElement(
      Greek,
      null,
      match[1]
        .replace(/A/g, "Α")
        .replace(/a/g, "α")
        .replace(/B/g, "Β")
        .replace(/b/g, "β")
        .replace(/G/g, "Γ")
        .replace(/g/g, "γ")
        .replace(/D/g, "Δ")
        .replace(/d/g, "δ")
        .replace(/E/g, "Ε")
        .replace(/e/g, "ε")
        .replace(/Z/g, "Ζ")
        .replace(/z/g, "ζ")
        .replace(/H/g, "Η")
        .replace(/h/g, "η")
        .replace(/Y/g, "Θ")
        .replace(/y/g, "θ")
        .replace(/I/g, "Ι")
        .replace(/i/g, "ι")
        .replace(/K/g, "Κ")
        .replace(/k/g, "κ")
        .replace(/L/g, "Λ")
        .replace(/l/g, "λ")
        .replace(/M/g, "Μ")
        .replace(/m/g, "μ")
        .replace(/N/g, "Ν")
        .replace(/n/g, "ν")
        .replace(/X/g, "Ξ")
        .replace(/x/g, "ξ")
        .replace(/O/g, "Ο")
        .replace(/o/g, "ο")
        .replace(/P/g, "Π")
        .replace(/p/g, "π")
        .replace(/R/g, "Ρ")
        .replace(/r/g, "ρ")
        .replace(/S/g, "Σ")
        .replace(/s/g, "σ")
        .replace(/v/g, "ς")
        .replace(/T/g, "Τ")
        .replace(/t/g, "τ")
        .replace(/U/g, "Υ")
        .replace(/u/g, "υ")
        .replace(/F/g, "Φ")
        .replace(/f/g, "φ")
        .replace(/C/g, "Χ")
        .replace(/c/g, "χ")
        .replace(/Q/g, "Ψ")
        .replace(/q/g, "ψ")
        .replace(/W/g, "Ω")
        .replace(/w/g, "ω")
    )
  );

  // TODO: requires lexiconConvert()
  // // Hebrew code tag
  // output = reactReplace(output,
  //   /\[hebrewCode\](.+?)\[\/hebrewCode\]/,
  //   (match) => React.createElement(Hebrew, null, lexiconConvert("H", match[1]))
  // );

  // Greek language tag
  output = reactReplace(output, /\[greek\](.+?)\[\/greek\]/, (match) =>
    React.createElement(Greek, null, match[1])
  );

  // Hebrew language tag
  output = reactReplace(output, /\[hebrew\](.+?)\[\/hebrew\]/, (match) =>
    React.createElement(Hebrew, null, match[1])
  );

  // lexicon links
  output = reactReplace(
    output,
    /\[strongs id="([^"]+)"( tvm="([^"]+)"( tvm2="([^"]+)")?)? \/\]/,
    (match) =>
      React.createElement(LexiconLink, {
        to: match[1],
        tvm: match[3],
        tvm2: match[5],
      })
  );

  // Small Caps tag
  output = reactReplace(output, /\[sc\](.+?)\[\/sc\]/, (match) =>
    React.createElement(Verse, null, match[1])
  );

  // Verse tag
  output = reactReplace(output, /\[verse\](.+?)\[\/verse\]/, (match) =>
    React.createElement(Verse, null, match[1])
  );

  return output;
};

/** BB Code to HTML string: https://www.bbcode.org/reference.php */
const bbHTML = (text) => {
  // general replacements
  let output = text;

  // HTML
  output = output
    .replace(/\[b\](.+?)\[\/b\]/g, (match, p1) => `<b>${p1}</b>`)
    .replace(/\[i\](.+?)\[\/i\]/g, (match, p1) => `<i>${p1}</i>`)
    .replace(/\[sub\](.+?)\[\/sub\]/g, (match, p1) => `<sub>${p1}</sub>`)
    .replace(/\[sup\](.+?)\[\/sup\]/g, (match, p1) => `<sup>${p1}</sup>`);

  output = output.replace(/\n/g, (match) => "<br>");

  // TODO: requires lexiconConvert()
  // // Greek code tag
  // output = output.replace(/\[greekCode\](.+?)\[\/greekCode\]/g, (match, p1) =>
  //   `<span class="greek">${lexiconConvert("G", p1)}</span>`
  // );

  // TODO: requires lexiconConvert()
  // // Hebrew code tag
  // output = output.replace(/\[hebrewCode\](.+?)\[\/hebrewCode\]/g, (match, p1) =>
  //   `<span class="hebrew">${lexiconConvert("H", p1)}</span>`
  // );

  // Greek language tag
  output = output.replace(
    /\[greek\](.+?)\[\/greek\]/g,
    (match, p1) => `<span class="greek">${p1}</span>`
  );

  // Hebrew language tag
  output = output.replace(
    /\[hebrew\](.+?)\[\/hebrew\]/g,
    (match, p1) => `<span class="hebrew">${p1}</span>`
  );

  // TODO: add TVM/TVM2 support
  // TODO: use the LexiconLink component somehow (static functions?), instead of just upper-casing
  // lexicon links
  output = output.replace(/\[strongs id="([^"]+)" \/\]/g, (match, p1) =>
    p1.toUpperCase()
  );

  // Small Caps tag
  output = output.replace(
    /\[sc\](.+?)\[\/sc\]/g,
    (match, p1) => `<span class="text-smallcaps">[${p1}]</span>`
  );

  // Verse tag
  output = output.replace(
    /\[verse\](.+?)\[\/verse\]/g,
    (match, p1) => `<span class="verse">[${p1}]</span>`
  );

  return output;
};

/** BB Code to plain text: https://www.bbcode.org/reference.php */
const bbText = (text) => {
  // general replacements
  let output = text;

  // HTML
  output = output
    .replace(/\[b\](.+?)\[\/b\]/g, (match, p1) => `**${p1}**`)
    .replace(/\[i\](.+?)\[\/i\]/g, (match, p1) => `*${p1}*`)
    .replace(/\[sub\](.+?)\[\/sub\]/g, (match, p1) => p1)
    .replace(/\[sup\](.+?)\[\/sup\]/g, (match, p1) => p1);

  // Greek code tag
  output = output.replace(/\[greekCode\](.+?)\[\/greekCode\]/g, (match, p1) =>
    lexiconConvert("G", p1)
  );

  // Hebrew code tag
  output = output.replace(/\[hebrewCode\](.+?)\[\/hebrewCode\]/g, (match, p1) =>
    lexiconConvert("H", p1)
  );

  // Greek language tag
  output = output.replace(/\[greek\](.+?)\[\/greek\]/g, (match, p1) => p1);

  // Hebrew language tag
  output = output.replace(/\[hebrew\](.+?)\[\/hebrew\]/g, (match, p1) => p1);

  // TODO: add TVM/TVM2 support
  // lexicon links
  output = output.replace(/\[strongs id="([^"]+)" \/\]/g, (match, p1) =>
    p1.toUpperCase()
  );

  // Small Caps tag
  output = output.replace(/\[sc\](.+?)\[\/sc\]/g, (match, p1) => p1);

  // Verse tag
  output = output.replace(
    /\[verse\](.+?)\[\/verse\]/g,
    (match, p1) => `[${p1}]`
  );

  return output;
};

/** retrieve form data as JSON */
const formData = (form) => {
  let output = {};

  // loop through form elements, adding them to the data output
  const elements = form.elements;
  for (let index = 0; index < elements.length; index++) {
    // determine the key name
    const name = elements[index].name ?? elements[index].id;

    // determine the value (not an unchecked radio)
    let value;
    if (elements[index].type === "radio")
      value = elements[index].checked ? elements[index].value : undefined;
    else if (elements[index].type === "checkbox")
      value = !elements[index].checked
        ? false
        : elements[index].value !== "on"
        ? elements[index].value
        : true;
    else value = elements[index].value;

    // only track named elements
    if (name && value != null) {
      // key already exists, add it to an array of values
      if (name in output) {
        // convert current value to an array, if not already
        if (!Array.isArray(output[name])) output[name] = [output[name]];

        // append the new value
        output[name].push(value);
      }
      // new key, add it as a simple value
      else output[name] = value;
    }
  }

  return output;
};

/** convert inflection flags to the inflection's short name */
export const inflectionName = (flags) => {
  let output = [];

  for (const inflectionType of inflectionTypes) {
    for (const inflectionFlag of inflectionType.flags) {
      if (flags.indexOf(inflectionFlag._id) !== -1)
        output.push(inflectionFlag._id);
    }
  }

  return output.join("");
};

/** array containing inflection types and their flags */
export const inflectionTypes = [
  {
    _id: "type",
    title: "Type",
    flags: [
      { _id: "Adj", title: "Adjective" },
      { _id: "Adv", title: "Adverb" },
      // { _id: "Art", title: "Definite Article" },
      { _id: "Conj", title: "Conjunction" },
      // { _id: "Interj", title: "Interjection" },
      { _id: "Noun", title: "Noun" },
      { _id: "Ptc", title: "Participle" },
      { _id: "Prep", title: "Preposition" },
      { _id: "Pron", title: "Pronoun" },
      { _id: "Vb", title: "Verb" },
      { _id: "Vbl", title: "Verbal" },
    ],
  },
  {
    _id: "subtype",
    title: "Sub-Type",
    flags: [
      { _id: "Pers", title: "Personal" },
      { _id: "Dem", title: "Demonstrative" },
      { _id: "Rel", title: "Relative" },
      { _id: "Correl", title: "Correlative" },
      { _id: "Indef", title: "Indefinite" },
      { _id: "Interrog", title: "Interrogative" },
      { _id: "Refl", title: "Reflexive" },
      { _id: "Recip", title: "Reciprocal" },
    ],
  },
  {
    _id: "tense",
    title: "Tense",
    flags: [
      { _id: "Pres", title: "Present" },
      { _id: "Impf", title: "Imperfect" },
      { _id: "Fut", title: "Future" },
      { _id: "Aor", title: "Aorist" },
      { _id: "Perf", title: "Perfect" },
      { _id: "Plup", title: "Pluperfect" },
      { _id: "Futpf", title: "Future Perfect" },
    ],
  },
  {
    _id: "voice",
    title: "Voice",
    flags: [
      { _id: "Act", title: "Active" },
      { _id: "Middle", title: "Middle" },
      { _id: "Pass", title: "Passive" },
      { _id: "Depon", title: "Deponent" },
    ],
  },
  {
    _id: "mood",
    title: "Mood",
    flags: [
      { _id: "Indic", title: "Indicative" },
      { _id: "Subjunc", title: "Subjunctive" },
      { _id: "Opt", title: "Optative" },
      { _id: "Impv", title: "Imperative" },
    ],
  },
  {
    _id: "person",
    title: "Person",
    flags: [
      { _id: "1", title: "1st Person" },
      { _id: "2", title: "2nd Person" },
      { _id: "3", title: "3rd Person" },
    ],
  },
  {
    _id: "case",
    title: "Case",
    flags: [
      { _id: "Nom", title: "Nominative" },
      { _id: "Acc", title: "Accusative" },
      { _id: "Gen", title: "Genitive" },
      { _id: "Dat", title: "Dative" },
      { _id: "Voc", title: "Vocative" },
    ],
  },
  {
    _id: "number",
    title: "Number",
    flags: [
      { _id: "Sg", title: "Singular" },
      // { _id: "Dl", title: "Dual" },
      { _id: "Pl", title: "Plural" },
    ],
  },
  {
    _id: "gender",
    title: "Gender",
    flags: [
      { _id: "Masc", title: "Masculine" },
      { _id: "Fem", title: "Feminine" },
      { _id: "Neut", title: "Neuter" },
    ],
  },
];

/** activate Bootstrap popovers */
export const popovers = (element) => {
  // retrieve all of the uninitiated Bootstrap popover togglers (but we are initiated, aren't we, Bruce?)
  const popoverTogglers = Array.from(
    element.querySelectorAll('[data-bs-toggle="popover"]')
  ).filter((element) => !!element.getAttribute("title"));

  // initiate the Bootstrap popovers in chunks of 25
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

/** replace pattern with results of callback(match) as React elements */
const reactReplace = (children, pattern, callback) => {
  const output = [];

  // ensure the children property is an array
  if (!Array.isArray(children)) {
    if (children) children = [children];
    else children = [];
  }
  // console.log("Children:", children);

  for (const child of children) {
    // parse strings
    if (typeof child === "string") {
      // console.log("String:", child);

      if (child.search(pattern) !== -1) {
        let startIndex = 0;

        do {
          let partial = child.substring(startIndex);
          // console.log("Partial from", startIndex, "position:", partial);

          let matchIndex = partial.search(pattern);
          // console.log("Match index:", matchIndex);

          if (matchIndex !== -1) {
            // add pre-match text
            if (matchIndex !== 0) {
              // console.log("Pre-match text:", partial.substring(0, matchIndex));
              output.push(partial.substring(0, matchIndex));
            }

            // add match
            const found = partial.match(pattern);
            // console.log("Adding callback results for match:", found[0]);
            output.push(callback(found));

            startIndex += matchIndex + found[0].length;
          } else {
            output.push(partial);
            startIndex = -1;
          }
        } while (startIndex !== -1);
      }
      // doesn't contain search item, leave it alone
      else output.push(child);
    }
    // non-string, leave it alone
    else {
      // console.log("Non-string:", child);

      // TODO: allow recursive looks at child elements
      output.push(child);
    }
  }

  return output;
};

const sleep = (milliseconds) =>
  new Promise((resolve) => setTimeout(resolve, milliseconds));

////////////////////////////////////////////////////////////////////////////////
////////// Custom Components
////////////////////////////////////////////////////////////////////////////////

export class BiblePassage extends HTML {
  render(properties) {
    let output;

    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // extract passage
    const passage = properties.passage;
    delete properties.passage;

    // extract version
    const version = properties.version;
    delete properties.version;

    // extract variant
    const variant = properties.variant;
    delete properties.variant;

    // filter verses
    const verses = version.verses.filter(
      (verse) => passage.verses.indexOf(verse.number) !== -1
    );

    // render by variant
    switch (variant) {
      case "scripture":
        output = React.createElement(
          React.Fragment,
          null,

          React.createElement(Heading2, null, version.title),

          React.createElement(
            Heading3,
            null,

            passage.chapter.title + " (" + version.abbreviation + ")"
          ),

          this.passageFormatted(passage, version, verses, { breaks: true })
        );

        break;

      default:
        output = `Placeholder for ${variant}`;
    }

    return output;
  }

  /*******************
   ***** Methods *****
   ******************/

  /** embed footnotes in the verse text */
  embedFootnotes = (passage, verse, embedAsPopover) => {
    // replace degree marks with a placeholder
    let output = rbb(verse.text.replace(/°/g, "&deg;"));

    // swap out degree placeholders with embedded footnotes
    if (Array.isArray(verse.footnotes)) {
      for (
        let footNoteIndex = 0;
        footNoteIndex < verse.footnotes.length;
        footNoteIndex++
      ) {
        output = reactReplace(output, "&deg;", () =>
          React.createElement(
            Link,
            {
              title: embedAsPopover
                ? null
                : bbText(verse.footnotes[footNoteIndex]),
              popover: embedAsPopover
                ? {
                    title: `Footnote for ${passage.chapter.title}:${
                      verse.number
                    }${
                      footNoteIndex > 1
                        ? String.fromCharCode(footNoteIndex + 97)
                        : ""
                    }`,
                    content: verse.footnotes[footNoteIndex],
                  }
                : null,
              className: "footnote-marker",
            },
            "°"
          )
        );
      }
    }

    // return results, replacing any remaining placeholders with degree marks
    return reactReplace(output, /&deg;/, () => "°");
  };

  /** create a formatted Bible passage block using the given properties */
  passageFormatted(passage, version, chapterVerses, properties) {
    // extract verses with text
    const verses = chapterVerses.filter((verse) => verse.text);

    return React.createElement(
      React.Fragment,
      null,

      // show scriptures
      verses.length
        ? React.createElement(
            Paragraph,
            null,
            verses.length === 1
              ? this.embedFootnotes(
                  passage,
                  verses[0],
                  properties.popovers !== false
                )
              : verses.map((verse, verseIndex) =>
                  React.createElement(
                    React.Fragment,
                    null,

                    React.createElement(Verse, null, verse.number),

                    " ",

                    this.embedFootnotes(
                      passage,
                      verse,
                      properties.popovers !== false
                    ),

                    verseIndex < verses.length - 1
                      ? properties.breaks
                        ? React.createElement(Break)
                        : " "
                      : null
                  )
                )
          )
        : null

      // React.createElement(Preformatted, { title: "Passage", item: passage }),
      // React.createElement(Preformatted, { title: "Version", item: version }),
      // React.createElement(Preformatted, {
      //   title: "Chapter Verses",
      //   item: chapterVerses,
      // }),
      // React.createElement(Preformatted, {
      //   title: "Properties",
      //   item: properties,
      // })
      // React.createElement(Preformatted, { title: "Verses", item: verses })
    );
  }
}

export class BibleSearchForm extends Form {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add attributes/classes
    properties.action = "/search";
    properties.className.push("row gx-1 mb-5");

    const passage = properties.passage;
    delete properties.passage;

    // extract submit handler
    const onSubmit = properties.onSubmit;
    delete properties.onSubmit;

    if (onSubmit) {
      properties.onSubmit = (event) => {
        event.preventDefault();

        // gather and send back the form data
        const data = formData(event.target);
        onSubmit(data.search, data.version);
      };
    }

    // extract version change handler
    const onChangeVersions = properties.onChangeVersions;
    delete properties.onChangeVersions;

    // create a local change handler to gather and send back the form's version data
    const changeHandler = onChangeVersions
      ? (event) => {
          const data = formData(event.target.parentNode.parentNode);
          onChangeVersions(data.version);
        }
      : null;

    // ensure the selected list is an array
    if (properties.selected) {
      if (!Array.isArray(properties.selected))
        properties.selected = [properties.selected];
    } else properties.selected = [];

    // define column settings
    const columnSettings = {
      xs: 12,
      md: 6,
      lg: 4,
      xl: 3,
      xxl: 2,
      className: "mb-1",
    };

    // add search textbox
    properties.children.push(
      React.createElement(
        Col,
        { ...columnSettings },
        React.createElement(Textbox, {
          name: "search",
          type: "search",
          defaultValue: passage?.title || "",
          placeholder: "search",
          ariaLabel: "search",
        })
      )
    );

    // add selected versions
    for (
      let selectedIndex = 0;
      selectedIndex < properties.selected.length;
      selectedIndex++
    ) {
      properties.children.push(
        React.createElement(
          Col,
          {
            ...columnSettings,
            onChange: changeHandler,
            key: selectedIndex,
          },
          React.createElement(VersionSelect, {
            number: selectedIndex + 1,
            versions: properties.versions,
            selected: properties.selected[selectedIndex],
          })
        )
      );
    }

    // add a blank version selector
    properties.children.push(
      React.createElement(
        Col,
        {
          ...columnSettings,
          onChange: changeHandler,
          key: properties.selected.length,
        },
        React.createElement(VersionSelect, {
          number: properties.selected.length + 1,
          versions: properties.versions,
        })
      )
    );

    // remove custom properties
    delete properties.selected;
    delete properties.versions;

    // add the submit button
    properties.children.push(
      React.createElement(
        Col,
        { ...columnSettings },
        React.createElement(
          Button,
          { type: "submit", className: "w-100" },
          "Search"
        )
      )
    );

    // render via parent method
    return super.render(properties);
  }
}

export class BibleSearchScriptures extends Division {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // determine point when it becomes crowded
    const many = properties.versions.length > 2;

    // add classes/attributes
    properties.className.push(many ? "d-lg-flex" : "d-md-flex");

    for (
      let versionIndex = 0;
      versionIndex < properties.versions.length;
      versionIndex++
    ) {
      properties.children.push(
        React.createElement(
          Division,
          {
            className: many ? "px-lg-2" : "px-md-2",
            key: `${versionIndex}-${properties.versions[versionIndex]}-${properties.passage.title}`,
          },

          React.createElement(BiblePassage, {
            passage: properties.passage,
            version: properties.versions[versionIndex],
            variant: "scripture",
          })
        )
      );
    }

    // remove custom properties
    delete properties.passage;
    delete properties.versions;

    // render via parent method
    return !many
      ? React.createElement(
          Container,
          { fluid: "lg", className: "gx-0" },
          super.render(properties)
        )
      : super.render(properties);
  }
}

export class Greek extends Span {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add EGP classes
    properties.className.push("greek");

    // render via parent method
    return super.render(properties);
  }
}

export class Hebrew extends Span {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add EGP classes
    properties.className.push("hebrew");
    properties.direction = "rtl"; // letters go from right to left

    // render via parent method
    return super.render(properties);
  }
}

export class Inflection extends Span {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    properties.children.push(
      React.createElement(
        React.Fragment,
        null,
        inflectionTypes.map((inflectionType) =>
          React.createElement(
            React.Fragment,
            { key: inflectionType._id },
            inflectionType.flags.map((inflectionFlag) =>
              properties.flags.indexOf(inflectionFlag._id) !== -1
                ? React.createElement(
                    Span,
                    { key: inflectionFlag._id },
                    inflectionFlag._id
                  )
                : null
            )
          )
        )
      )
    );
    delete properties.flags;

    // render via parent method
    return super.render(properties);
  }
}

export class LexiconLink extends Link {
  state = {};

  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // set the entry in the pseudo-React state
    if (!("_reactInternals" in this)) this.setEGPState();
    // still loading
    else if (!this.state.entry)
      return React.createElement(
        React.Fragment,
        null,
        properties.to.toUpperCase()
      );

    // set the URL
    properties.to = this.state.entry.url;

    // add popover to the link
    properties.popover = {
      title: bbHTML(this.state.entry.title),
      content: bbHTML(
        [
          "<p>" +
            [
              "[b]Strong’s ID:[/b] ",
              this.state.entry.strongs._id,
              "\n",

              "[b]Word:[/b] ",
              this.state.entry.name,
              "\n",

              "[b]Transliteration:[/b] ",
              this.state.entry.word,
              "\n",

              "[b]Pronunciation:[/b] ",
              this.state.entry.pronunciation,
              "\n",

              "[b]Part of Speech:[/b] ",
              this.state.entry.partOfSpeech,

              this.state.entry.occurrences
                ? [
                    "\n",

                    "[b]Occurrences:[/b] ",
                    this.state.entry.occurrences,
                  ].join("")
                : null,
            ].join("") +
            "</p>",

          this.state.entry.shortDefinition
            ? `<p>${bbText(this.state.entry.shortDefinition)}</p>`
            : null,

          `<p class="mt-2 mb-0"><a href="${properties.to}">view the full lexicon entry</a></p>`,
        ].join("")
      ),
    };

    // add default child
    if (!properties.children.length)
      properties.children.push(this.state.entry.strongs._id);

    // render via parent method
    return super.render(properties);
  }

  /*****************
   ***** Hooks *****
   ****************/

  /** initialize component once mounted */
  async componentDidMount() {
    const maxAttempts = 10;

    // get the Bible versions
    for (let attempt = 0; attempt < maxAttempts; attempt++) {
      try {
        const response = await axios.get(
          `/api/lexicon-entries/${this.props.to}`
        );
        this.setState({ entry: response.data });
        break;
      } catch (err) {
        console.log(
          `Entry ${this.props.to} (${attempt + 1}):`,
          new Date().toISOString(),
          err.message
        );
        await sleep(1000);
      }
    }
  }

  /*******************
   ***** Methods *****
   ******************/

  /** set the pseudo-React state */
  setEGPState() {
    // derive entry information
    const languageID = this.properties.to.toLowerCase().substring(0, 1);
    const numberID = this.properties.to.substring(1, 5).replace(/^0+/, "");

    // update the state variable
    this.state.entry = language(languageID).entries.find(
      (entry) => entry._id === `strongs-${languageID}${numberID}`
    ) ?? {
      strongs: { _id: `lexicon entry missing for ${this.properties.to}` },
    };
  }
}

export class PreviousNext extends Nav {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add Bootstrap classes
    properties.className.push("border");
    properties.className.push("border-2");
    properties.className.push("border-muted");
    properties.className.push("rounded");
    properties.className.push("bg-light");

    // set Nav attributes
    properties.vertical = "md";
    properties.justify = properties.next && !properties.previous ? "end" : true;

    // render via parent method
    return super.render(properties);
  }
}

export class SectionHeader extends Header {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add ARIA attributes
    properties.ariaLabel = properties.label || "section title";
    delete properties.label;

    // add custom classes
    properties.className.push("SectionHeader");
    if (properties.variant) {
      properties.className.push(`bg-${properties.variant}`);
      properties.className.push("py-4");
      properties.className.push(properties.first ? "mb-element" : "my-element");
    }
    delete properties.variant;
    delete properties.first;

    // add title
    properties.children.push(
      React.createElement(
        Heading2,
        properties.titleID ? { id: properties.titleID } : null,
        properties.title
      )
    );
    delete properties.titleID;
    delete properties.title;

    // add line
    properties.children.push(
      React.createElement(Line, {
        className:
          "bg-primary pb-1 position-relative start-50 translate-middle",
      })
    );

    // add subtitle
    if (properties.subtitle) {
      properties.children.push(
        React.createElement(Lead, null, properties.subtitle)
      );
    }
    delete properties.subtitle;

    // call parent renderer
    return super.render(properties);
  }
}

export class SectionWithHeader extends Section {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // create a title ID if it has a section ID
    if (!properties.titleID && properties.id)
      properties.titleID = `${properties.id}-SectionHeader`;

    // add ARIA attributes
    if (properties.titleID) properties.ariaLabelledBy = properties.titleID;

    // add the section header to the top
    properties.children.unshift(
      React.createElement(SectionHeader, {
        id: properties.id,
        title: properties.title,
        subtitle: properties.subtitle,
        titleID: properties.titleID,
        variant: "light",
        first: properties.first,
      })
    );
    delete properties.id;
    delete properties.title;
    delete properties.subtitle;
    delete properties.titleID;
    delete properties.first;

    // call parent renderer
    return super.render(properties);
  }
}

export class SmallCaps extends Span {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add EGP classes
    properties.className.push("text-smallcaps");

    // render via parent method
    return super.render(properties);
  }
}

export class Verse extends Superscript {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add EGP classes
    properties.className.push("text-muted");

    // wrap in brackets
    properties.children.unshift("[");
    properties.children.push("]");

    // render via parent method
    return super.render(properties);
  }
}

class VersionSelect extends Select {
  render(properties) {
    // merge React and custom properties
    if (!properties) properties = this.mergeProperties();

    // add the name
    if (!properties.name) properties.name = "version";

    // add the label
    if (!properties.ariaLabel)
      properties.ariaLabel = `slot selector ${properties.number}`;

    // turn versions into dropdown options
    properties.options = properties.versions.slice();
    delete properties.versions;

    // prepend placeholder option
    properties.options.unshift({
      title: properties.number
        ? `slot ${properties.number}`
        : "select a version",
    });
    delete properties.number;

    // render via parent method
    return super.render(properties);
  }
}
