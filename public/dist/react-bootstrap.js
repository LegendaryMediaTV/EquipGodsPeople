"use strict";export class HTML extends React.Component{render(e){const t=e.tag;delete e.tag,e.className=e.className.join(" "),e.className||delete e.className,e.direction&&(e.dir=e.direction),delete e.direction,e.ariaRole&&(e.role=e.ariaRole),delete e.ariaRole,e.bsDataBackdrop&&(e["data-bs-backdrop"]=e.bsDataBackdrop),delete e.bsDataBackdrop,e.bsDataContent&&(e["data-bs-content"]=e.bsDataContent),delete e.bsDataContent,e.bsDataKeyboard&&(e["data-bs-keyboard"]=e.bsDataKeyboard),delete e.bsDataKeyboard,e.bsDataDismiss&&(e["data-bs-dismiss"]=e.bsDataDismiss),delete e.bsDataDismiss,e.bsDataHTML&&(e["data-bs-html"]=e.bsDataHTML),delete e.bsDataHTML,e.bsDataPlacement&&(e["data-bs-placement"]=e.bsDataPlacement),delete e.bsDataPlacement,e.bsDataTarget&&(e["data-bs-target"]=(0!==e.bsDataTarget.indexOf("#")?"#":"")+e.bsDataTarget),delete e.bsDataTarget,e.bsDataToggle&&(e["data-bs-toggle"]=e.bsDataToggle),delete e.bsDataToggle,e.bsDataTrigger&&(e["data-bs-trigger"]=e.bsDataTrigger),delete e.bsDataTrigger;const r=e.children.length?e.children:null;return delete e.children,r?React.createElement(t,e,...r):React.createElement(t,e)}mergeProperties(){const e={},t=Object.keys(this.props);for(const r of t)null!=this.props[r]&&(e[r]=Array.isArray(this.props[r])?this.props[r].slice():this.props[r]);return Array.isArray(e.children)||(e.children=null!=e.children?[e.children]:[]),Array.isArray(e.className)||(e.className=e.className?e.className.split(/\s+/):[]),e}}export class Abbreviation extends HTML{render(e){if(e||(e=this.mergeProperties()),e.tag||(e.tag="abbr"),e.popover){const t=e.children;e.children=[React.createElement(Link,{popover:{title:e.popover.title,content:e.popover.content}},...t)]}return delete e.popover,super.render(e)}}export class Article extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="article"),super.render(e)}}export class Aside extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="aside"),super.render(e)}}export class Bold extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="b"),super.render(e)}}export class Break extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="br"),super.render(e)}}export class ButtonHTML extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="button"),e.type||(e.type="button"),super.render(e)}}export class Citation extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="cite"),super.render(e)}}export class Division extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="div"),super.render(e)}}export class Emphasis extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="em"),super.render(e)}}export class Footer extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="footer"),super.render(e)}}export class Header extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="header"),super.render(e)}}export class Heading1 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h1"),super.render(e)}}export class Heading2 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h2"),super.render(e)}}export class Heading3 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h3"),super.render(e)}}export class Heading4 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h4"),super.render(e)}}export class Heading5 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h5"),super.render(e)}}export class Heading6 extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="h6"),super.render(e)}}export class Icon extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="i"),e.className.push(e.name),e.variant&&e.className.push(`text-${e.variant}`),delete e.variant,null==e.ariaLabel&&(null!=e.alt?e.ariaLabel=e.alt:e.ariaLabel=e.name.replace("-alt","").replace(/^[a-z-]+ [a-z]{2}-/,"").replace(/-fill$/,"").replace(/-/g," ")),delete e.alt,delete e.name,super.render(e)}}export class IFrame extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="iframe"),e.src=e.url,delete e.url,super.render(e)}}export class Image extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="img"),e.src=e.url,delete e.url,e.alt=e.alt??"",e.fluid&&e.className.push("img-fluid"),delete e.fluid,e.thumbnail&&e.className.push("img-thumbnail"),delete e.thumbnail,super.render(e)}}export class Italics extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="i"),super.render(e)}}export class Line extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="hr"),super.render(e)}}export class Link extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="a"),e.popover?(e.ariaRole="button",e.bsDataToggle="popover",e.bsDataTrigger="focus",e.bsDataPlacement="bottom",e.bsDataHTML=!0,e.title=e.popover.title,e.bsDataContent=e.popover.content,e.to?e.ariaRole||(e.ariaRole="button"):e.variant||(e.variant="muted")):e.external=e.to&&e.to.match(/^https?:/i)&&!1!==e.external,delete e.popover,e.to?(e.href=e.to,e.newTab&&(e.target="_blank",e.rel="noopener")):(e.ariaRole||(e.ariaRole="button"),null==e.tabIndex&&(e.tabIndex=0)),delete e.to,delete e.newTab,e.external&&e.children.push(React.createElement(Icon,{name:"fa-solid fa-up-right-from-square",alt:"external link",variant:"muted",className:"small ps-1 align-text-top"})),delete e.external,e.disabled&&e.className.push("disabled"),"popover"===e.bsDataToggle&&e.className.push("cursor-help"),e.variant&&e.className.push(`link-${e.variant}`),delete e.variant,super.render(e)}}export class List extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag=e.ordered?"ol":"ul"),delete e.ordered,e.items&&e.items.map((t=>e.children.push(React.createElement(ListItem,{key:t},t)))),delete e.items,super.render(e)}}export class ListItem extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="li"),super.render(e)}}export class Main extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="main"),super.render(e)}}export class NavHTML extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="nav"),super.render(e)}}export class Paragraph extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="p"),super.render(e)}}export class Preformatted extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="pre"),e.item&&(e.children.push(e.title?`${e.title}: `:""),e.children.push(JSON.stringify(e.item,null,2))),delete e.item,delete e.title,super.render(e)}}export class Section extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="section"),super.render(e)}}export class Small extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="small"),super.render(e)}}export class Span extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="span"),super.render(e)}}export class Strong extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="strong"),super.render(e)}}export class Subscript extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="sub"),super.render(e)}}export class Superscript extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="sup"),super.render(e)}}export class Col extends Division{render(e){return e||(e=this.mergeProperties()),e.xs||e.sm||e.md||e.lg||e.xl||e.xxl?(e.xs&&e.className.push("col"+(!0!==e.xs?`-${e.xs}`:"")),e.sm&&e.className.push("col-sm"+(!0!==e.sm?`-${e.sm}`:"")),e.md&&e.className.push("col-md"+(!0!==e.md?`-${e.md}`:"")),e.lg&&e.className.push("col-lg"+(!0!==e.lg?`-${e.lg}`:"")),e.xl&&e.className.push("col-xl"+(!0!==e.xl?`-${e.xl}`:"")),e.xxl&&e.className.push("col-xxl"+(!0!==e.xxl?`-${e.xxl}`:""))):e.className.push("col"),delete e.xs,delete e.sm,delete e.md,delete e.lg,delete e.xl,delete e.xxl,super.render(e)}}export class Container extends Section{render(e){return e||(e=this.mergeProperties()),e.className.push("container"+(!1!==e.fluid?`-${!0===e.fluid?"fluid":e.fluid||"lg"}`:"")),delete e.fluid,super.render(e)}}export class Row extends Division{render(e){return e||(e=this.mergeProperties()),e.className.push("row"),super.render(e)}}export class Blockquote extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="blockquote"),e.className.push("blockquote"),super.render(e)}}export class BlockquoteFooter extends Footer{render(e){return e||(e=this.mergeProperties()),e.className.push("blockquote-footer"),super.render(e)}}export class DefinitionList extends Row{render(e){if(e||(e=this.mergeProperties()),e.tag||(e.tag="dl"),e.items)for(const[t,r]of Object.entries(e.items))e.children.push(React.createElement(DefinitionListTerm,null,`${t}:`)),e.children.push(React.createElement(DefinitionListData,null,r));return delete e.items,super.render(e)}}export class DefinitionListData extends Col{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="dd"),e.sm=8,e.md=9,e.lg=10,super.render(e)}}export class DefinitionListTerm extends Col{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="dt"),e.sm=4,e.md=3,e.lg=2,super.render(e)}}export class Display1 extends Heading1{render(e){return e||(e=this.mergeProperties()),e.className.push("display-1"),super.render(e)}}export class Display2 extends Heading2{render(e){return e||(e=this.mergeProperties()),e.className.push("display-2"),super.render(e)}}export class Display3 extends Heading3{render(e){return e||(e=this.mergeProperties()),e.className.push("display-3"),super.render(e)}}export class Display4 extends Heading4{render(e){return e||(e=this.mergeProperties()),e.className.push("display-4"),super.render(e)}}export class Display5 extends Heading5{render(e){return e||(e=this.mergeProperties()),e.className.push("display-5"),super.render(e)}}export class Display6 extends Heading6{render(e){return e||(e=this.mergeProperties()),e.className.push("display-6"),super.render(e)}}export class Lead extends Paragraph{render(e){return e||(e=this.mergeProperties()),e.className.push("lead"),super.render(e)}}export class VisuallyHidden extends Span{render(e){return e||(e=this.mergeProperties()),e.className.push("visually-hidden"),super.render(e)}}export class Form extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="form"),e.action=e.url,delete e.url,e.method||(e.method="post"),super.render(e)}}export class FormField extends HTML{render(e){e||(e=this.mergeProperties()),e.id||(e.id=e.item._id),e.disabled=e.item.disabled,e.lines=e.item.lines,e.maxLength=e.item.maxLength,e.name=e.item.name,e.options=e.item.options,e.type=e.item.type,e.value=e.item.value;const t=e.item.title,r=e.item.gridWidth??12;let s;if("dropdown"===e.item.type)s=Select;else s=Textbox;return delete e.item,React.createElement(Col,{md:r,className:"mb-3"},React.createElement(Label,{for:e.id,className:"fw-bold"},t),React.createElement(s,e))}}export class Label extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="label"),e.className.push("form-label"),super.render(e)}}export class Select extends HTML{render(e){if(e||(e=this.mergeProperties()),e.tag||(e.tag="select"),e.className.push("form-select"),e.options)for(const t of e.options)e.children.push(React.createElement(SelectOption,{item:t,selected:"object"==typeof t?t._id===e.selected:t===e.selected}));return delete e.options,delete e.selected,super.render(e)}}export class SelectOption extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag="option"),e.item&&("object"==typeof e.item?(e.value=e.item._id??"",e.children.push(e.item.title??e.item.name??e.item._id)):(e.value=item,e.children.push(item))),delete e.item,super.render(e)}}export class Textbox extends HTML{render(e){return e||(e=this.mergeProperties()),e.tag||(e.tag=e.lines>1?"textarea":"input"),e.lines>1&&(e.rows=e.lines,e.children=e.children.concat(e.value),delete e.value),delete e.lines,e.className.push("form-control"),super.render(e)}}export class Alert extends Division{render(e){return e||(e=this.mergeProperties()),e.className.push("alert"),e.className.push(`alert-${e.variant??"info"}`),delete e.variant,e.ariaRole="alert",super.render(e)}}export class AlertHeading extends Division{render(e){return e||(e=this.mergeProperties()),e.className.push("alert-heading"),e.className.push("h3"),super.render(e)}}export class AlertLink extends Link{render(e){return e||(e=this.mergeProperties()),e.className.push("alert-link"),super.render(e)}}export class Button extends ButtonHTML{render(e){return e||(e=this.mergeProperties()),e.popover&&(e.bsDataToggle="popover",e.bsDataTrigger="focus",e.bsDataPlacement="bottom",e.bsDataHTML=!0,e.title=e.popover.title,e.bsDataContent=e.popover.content,e.variant||(e.variant="link",e.className.push("link-muted")),e.className.push("cursor-help")),delete e.popover,e.className.push("btn"),e.className.push(`btn-${e.outline?"outline-":""}${e.variant||"primary"}`),delete e.outline,delete e.variant,e.size&&e.className.push(`btn-${e.size}`),delete e.size,super.render(e)}}export class Collapse extends Division{render(e){return e||(e=this.mergeProperties()),e.className.push("collapse"),super.render(e)}}export class ListGroup extends Division{render(e){if(e||(e=this.mergeProperties()),e.onSelect||(e.onSelect=e=>alert(JSON.stringify(e,null,2))),Array.isArray(e.items)&&(e.children=e.children.concat(e.items.map((t=>React.createElement(ListGroupItem,{to:t.url,title:t.title,subtitle:t.subtitle,onSelect:t.url?null:e.onSelect,item:t}))))),delete e.items,delete e.onSelect,e.title){const t="list-group-item bg-secondary mb-0";e.children.unshift("lg"===e.size?React.createElement(Heading2,{className:t},e.title):React.createElement(Heading3,{className:t},e.title))}return delete e.title,e.className.push("list-group"),e.size&&e.className.push(`list-group-${e.size}`),delete e.size,super.render(e)}}export class ListGroupItem extends Link{render(e){if(e||(e=this.mergeProperties()),null!=e.title&&(e.children.push(e.title),e.subtitle&&e.children.push(React.createElement(Division,{className:"fst-italic small text-muted"},e.subtitle))),delete e.title,delete e.subtitle,e.onSelect&&!e.to){const t=e.onSelect,r=e.item;e.onClick=()=>{t(r)}}return delete e.onSelect,delete e.item,e.className.push("list-group-item"),e.className.push("list-group-item-action"),e.disabled&&e.className.push("disabled"),super.render(e)}}export class Modal extends Division{render(e){e||(e=this.mergeProperties());const t=e.onHide;delete e.onHide;const r=e.onApply;delete e.onApply;const s=e.id??"modal";delete e.id;const a=e.title;return delete e.title,e.className.push("modal-body"),React.createElement(Division,{id:s,bsDataBackdrop:"static",bsDataKeyboard:!1,tabIndex:-1,ariaLabelledBy:s+"Label",ariaHidden:!0,className:"modal fade"},React.createElement(Division,{className:"modal-dialog modal-dialog-centered modal-xl"},React.createElement(Division,{className:"modal-content"},a?React.createElement(Division,{className:"modal-header"},React.createElement(Heading5,{id:s+"Label",className:"modal-title"},a),React.createElement(Button,{onClick:t,bsDataDismiss:"modal",ariaLabel:"close",variant:"close"})):null,React.createElement(Division,{className:"modal-body"},super.render(e)),React.createElement(Division,{className:"modal-footer"},React.createElement(Button,{bsDataDismiss:"modal",onClick:t,variant:"warning"},"Cancel"),React.createElement(Button,{bsDataDismiss:"modal",onClick:r},"Apply")))))}}export class Nav extends List{render(e){return e||(e=this.mergeProperties()),Array.isArray(e.items)&&(e.children=e.children.concat(e.items.map((t=>React.createElement(NavItem,null,React.createElement(NavLink,{to:t.url,active:null!=e.activeItem&&t._id.toString()===e.activeItem},t.title)))))),delete e.items,delete e.activeItem,e.previous&&e.children.unshift(React.createElement(NavItem,null,React.createElement(NavLink,{to:e.previous.url},React.createElement(Icon,{name:"fa-solid fa-angle-left",alt:"previous",className:"pe-2"}),e.previous.title))),delete e.previous,e.next&&e.children.push(React.createElement(NavItem,null,React.createElement(NavLink,{to:e.next.url},e.next.title,React.createElement(Icon,{name:"fa-solid fa-angle-right",alt:"next",className:"ps-2"})))),delete e.next,e.className.push("nav"),e.tabs?e.className.push("nav-tabs"):e.vertical&&(e.className.push("flex-column"),!0!==e.vertical&&e.className.push(`flex-${e.vertical}-row`)),delete e.tabs,delete e.vertical,e.justify&&e.className.push(`justify-content-${!0===e.justify?"between":e.justify}`),delete e.justify,super.render(e)}}export class NavItem extends ListItem{render(e){return e||(e=this.mergeProperties()),e.className.push("nav-item"),super.render(e)}}export class NavLink extends Link{render(e){return e||(e=this.mergeProperties()),e.className.push("nav-link"),e.active&&e.className.push("active"),delete e.active,super.render(e)}}export class Pagination extends List{render(e){e||(e=this.mergeProperties()),Array.isArray(e.items)&&(e.children=e.children.concat(e.items.map((t=>React.createElement(PaginationItem,null,React.createElement(PaginationLink,{to:t.url,active:null!=e.activeItem&&t._id.toString()===e.activeItem},t.title)))))),delete e.items,e.previous&&e.children.unshift(React.createElement(PaginationItem,null,React.createElement(PaginationLink,{to:e.previous.url},React.createElement(Icon,{name:"fa-solid fa-angle-left",alt:"previous",className:"pe-2"}),e.previous.title))),delete e.previous,e.next&&e.children.push(React.createElement(PaginationItem,null,React.createElement(PaginationLink,{to:e.next.url},e.next.title,React.createElement(Icon,{name:"fa-solid fa-angle-right",alt:"next",className:"ps-2"})))),delete e.next,e.className.push("pagination"),e.size&&e.className.push(`pagination-${e.size}`),delete e.size;const t=e.wrapperClassName;return delete e.wrapperClassName,React.createElement(NavHTML,{className:t},super.render(e))}}export class PaginationItem extends ListItem{render(e){return e||(e=this.mergeProperties()),e.className.push("page-item"),e.active&&(e.className.push("active"),e.ariaCurrent="page"),delete e.active,e.disabled&&(e.className="disabled"),super.render(e)}}export class PaginationLink extends Link{render(e){return e||(e=this.mergeProperties()),e.className.push("page-link"),super.render(e)}}export class Spinner extends Division{render(e){if(e||(e=this.mergeProperties()),e.ariaRole="status",e.className.push("spinner-border"),e.children.push(React.createElement(VisuallyHidden,null,"loading …")),e.alert||e.title){const t=e.title;return delete e.alert,delete e.title,e.variant||(e.variant="info"),React.createElement(Alert,{className:"text-center "+(t?"py-4":"py-5")},t?React.createElement(AlertHeading,null,t):null,super.render(e))}return super.render(e)}}export class Breakpoints extends Row{render(e){return e||(e=this.mergeProperties()),e.className.push("bg-info"),e.className.push("py-1"),e.className.push("my-1"),e.className.push("text-center"),e.children.push(React.createElement(Col,{xs:!0,className:"d-sm-none"},"XS")),e.children.push(React.createElement(Col,{sm:!0,className:"d-none d-sm-block d-md-none"},"SM")),e.children.push(React.createElement(Col,{md:!0,className:"d-none d-md-block d-lg-none"},"MD")),e.children.push(React.createElement(Col,{lg:!0,className:"d-none d-lg-block d-xl-none"},"LG")),e.children.push(React.createElement(Col,{xl:!0,className:"d-none d-xl-block d-xxl-none"},"XL")),e.children.push(React.createElement(Col,{xxl:!0,className:"d-none d-xxl-block"},"XXL")),super.render(e)}}export class Embed extends Division{render(e){return e||(e=this.mergeProperties()),e.children.push(React.createElement(IFrame,{url:e.url,title:e.title,allowFullScreen:!0})),delete e.url,delete e.title,e.className.push("ratio"),e.className.push("ratio-16x9"),super.render(e)}}export const rbb=e=>{let t=e;return t=reactReplace(t,/\[b\](.+?)\[\/b\]/,(e=>React.createElement(Bold,null,e[1]))),t=reactReplace(t,/\[i\](.+?)\[\/i\]/,(e=>React.createElement(Italics,null,e[1]))),t=reactReplace(t,/\[sub\](.+?)\[\/sub\]/,(e=>React.createElement(Subscript,null,e[1]))),t=reactReplace(t,/\[sup\](.+?)\[\/sup\]/,(e=>React.createElement(Superscript,null,e[1]))),t=reactReplace(t,/\n/,(()=>React.createElement(Break))),t=reactReplace(t,/\[greekCode\](.+?)\[\/greekCode\]/,(e=>React.createElement(Greek,null,e[1].replace(/A/g,"Α").replace(/a/g,"α").replace(/B/g,"Β").replace(/b/g,"β").replace(/G/g,"Γ").replace(/g/g,"γ").replace(/D/g,"Δ").replace(/d/g,"δ").replace(/E/g,"Ε").replace(/e/g,"ε").replace(/Z/g,"Ζ").replace(/z/g,"ζ").replace(/H/g,"Η").replace(/h/g,"η").replace(/Y/g,"Θ").replace(/y/g,"θ").replace(/I/g,"Ι").replace(/i/g,"ι").replace(/K/g,"Κ").replace(/k/g,"κ").replace(/L/g,"Λ").replace(/l/g,"λ").replace(/M/g,"Μ").replace(/m/g,"μ").replace(/N/g,"Ν").replace(/n/g,"ν").replace(/X/g,"Ξ").replace(/x/g,"ξ").replace(/O/g,"Ο").replace(/o/g,"ο").replace(/P/g,"Π").replace(/p/g,"π").replace(/R/g,"Ρ").replace(/r/g,"ρ").replace(/S/g,"Σ").replace(/s/g,"σ").replace(/v/g,"ς").replace(/T/g,"Τ").replace(/t/g,"τ").replace(/U/g,"Υ").replace(/u/g,"υ").replace(/F/g,"Φ").replace(/f/g,"φ").replace(/C/g,"Χ").replace(/c/g,"χ").replace(/Q/g,"Ψ").replace(/q/g,"ψ").replace(/W/g,"Ω").replace(/w/g,"ω")))),t=reactReplace(t,/\[greek\](.+?)\[\/greek\]/,(e=>React.createElement(Greek,null,e[1]))),t=reactReplace(t,/\[hebrew\](.+?)\[\/hebrew\]/,(e=>React.createElement(Hebrew,null,e[1]))),t=reactReplace(t,/\[strongs id="([^"]+)"( tvm="([^"]+)"( tvm2="([^"]+)")?)? \/\]/,(e=>React.createElement(LexiconLink,{to:e[1],tvm:e[3],tvm2:e[5]}))),t=reactReplace(t,/\[sc\](.+?)\[\/sc\]/,(e=>React.createElement(SmallCaps,null,e[1]))),t=reactReplace(t,/\[verse\](.+?)\[\/verse\]/,(e=>React.createElement(Verse,null,e[1]))),t};const bbHTML=e=>{let t=e;return t=t.replace(/\[b\](.+?)\[\/b\]/g,((e,t)=>`<b>${t}</b>`)).replace(/\[i\](.+?)\[\/i\]/g,((e,t)=>`<i>${t}</i>`)).replace(/\[sub\](.+?)\[\/sub\]/g,((e,t)=>`<sub>${t}</sub>`)).replace(/\[sup\](.+?)\[\/sup\]/g,((e,t)=>`<sup>${t}</sup>`)),t=t.replace(/\n/g,(e=>"<br>")),t=t.replace(/\[greek\](.+?)\[\/greek\]/g,((e,t)=>`<span class="greek">${t}</span>`)),t=t.replace(/\[hebrew\](.+?)\[\/hebrew\]/g,((e,t)=>`<span class="hebrew">${t}</span>`)),t=t.replace(/\[strongs id="([^"]+)" \/\]/g,((e,t)=>t.toUpperCase())),t=t.replace(/\[sc\](.+?)\[\/sc\]/g,((e,t)=>`<span class="text-smallcaps">[${t}]</span>`)),t=t.replace(/\[verse\](.+?)\[\/verse\]/g,((e,t)=>`<span class="verse">[${t}]</span>`)),t};export const bbText=e=>{let t=e;return t=t.replace(/\[b\](.+?)\[\/b\]/g,((e,t)=>`**${t}**`)).replace(/\[i\](.+?)\[\/i\]/g,((e,t)=>`*${t}*`)).replace(/\[sub\](.+?)\[\/sub\]/g,((e,t)=>t)).replace(/\[sup\](.+?)\[\/sup\]/g,((e,t)=>t)),t=t.replace(/\[greekCode\](.+?)\[\/greekCode\]/g,((e,t)=>lexiconConvert("G",t))),t=t.replace(/\[hebrewCode\](.+?)\[\/hebrewCode\]/g,((e,t)=>lexiconConvert("H",t))),t=t.replace(/\[greek\](.+?)\[\/greek\]/g,((e,t)=>t)),t=t.replace(/\[hebrew\](.+?)\[\/hebrew\]/g,((e,t)=>t)),t=t.replace(/\[strongs id="([^"]+)" \/\]/g,((e,t)=>t.toUpperCase())),t=t.replace(/\[sc\](.+?)\[\/sc\]/g,((e,t)=>t)),t=t.replace(/\[verse\](.+?)\[\/verse\]/g,((e,t)=>`[${t}]`)),t};const formData=e=>{let t={};const r=e.elements;for(let e=0;e<r.length;e++){const s=r[e].name??r[e].id;let a;a="radio"===r[e].type?r[e].checked?r[e].value:void 0:"checkbox"===r[e].type?!!r[e].checked&&("on"===r[e].value||r[e].value):r[e].value,s&&null!=a&&(s in t?(Array.isArray(t[s])||(t[s]=[t[s]]),t[s].push(a)):t[s]=a)}return t};export const inflectionName=e=>{let t=[];for(const r of inflectionTypes)for(const s of r.flags)-1!==e.indexOf(s._id)&&t.push(s._id);return t.join("")};export const inflectionTypes=[{_id:"type",title:"Type",flags:[{_id:"Adj",title:"Adjective"},{_id:"Adv",title:"Adverb"},{_id:"Conj",title:"Conjunction"},{_id:"Noun",title:"Noun"},{_id:"Ptc",title:"Participle"},{_id:"Prep",title:"Preposition"},{_id:"Pron",title:"Pronoun"},{_id:"Vb",title:"Verb"},{_id:"Vbl",title:"Verbal"}]},{_id:"subtype",title:"Sub-Type",flags:[{_id:"Pers",title:"Personal"},{_id:"Dem",title:"Demonstrative"},{_id:"Rel",title:"Relative"},{_id:"Correl",title:"Correlative"},{_id:"Indef",title:"Indefinite"},{_id:"Interrog",title:"Interrogative"},{_id:"Refl",title:"Reflexive"},{_id:"Recip",title:"Reciprocal"}]},{_id:"tense",title:"Tense",flags:[{_id:"Pres",title:"Present"},{_id:"Impf",title:"Imperfect"},{_id:"Fut",title:"Future"},{_id:"Aor",title:"Aorist"},{_id:"Perf",title:"Perfect"},{_id:"Plup",title:"Pluperfect"},{_id:"Futpf",title:"Future Perfect"}]},{_id:"voice",title:"Voice",flags:[{_id:"Act",title:"Active"},{_id:"Middle",title:"Middle"},{_id:"Pass",title:"Passive"},{_id:"Depon",title:"Deponent"}]},{_id:"mood",title:"Mood",flags:[{_id:"Indic",title:"Indicative"},{_id:"Subjunc",title:"Subjunctive"},{_id:"Opt",title:"Optative"},{_id:"Impv",title:"Imperative"}]},{_id:"person",title:"Person",flags:[{_id:"1",title:"1st Person"},{_id:"2",title:"2nd Person"},{_id:"3",title:"3rd Person"}]},{_id:"case",title:"Case",flags:[{_id:"Nom",title:"Nominative"},{_id:"Acc",title:"Accusative"},{_id:"Gen",title:"Genitive"},{_id:"Dat",title:"Dative"},{_id:"Voc",title:"Vocative"}]},{_id:"number",title:"Number",flags:[{_id:"Sg",title:"Singular"},{_id:"Pl",title:"Plural"}]},{_id:"gender",title:"Gender",flags:[{_id:"Masc",title:"Masculine"},{_id:"Fem",title:"Feminine"},{_id:"Neut",title:"Neuter"}]}];export const popovers=e=>{const t=Array.from(e.querySelectorAll('[data-bs-toggle="popover"]')).filter((e=>!!e.getAttribute("title")));for(const e of t.slice(0,25)){new bootstrap.Popover(e);const t=setInterval((()=>{e.getAttribute("title")||(e.removeAttribute("href"),e.setAttribute("tabindex",0),clearInterval(t))}),250)}};const reactReplace=(e,t,r)=>{const s=[];Array.isArray(e)||(e=e?[e]:[]);for(const a of e)if("string"==typeof a)if(-1!==a.search(t)){let e=0;do{let l=a.substring(e),n=l.search(t);if(-1!==n){0!==n&&s.push(l.substring(0,n));const a=l.match(t);s.push(r(a)),e+=n+a[0].length}else s.push(l),e=-1}while(-1!==e)}else s.push(a);else s.push(a);return s},sleep=e=>new Promise((t=>setTimeout(t,e)));export class BiblePassage extends HTML{render(e){let t;e||(e=this.mergeProperties());const r=e.passage;delete e.passage;const s=e.version;delete e.version;const a=e.variant;delete e.variant;const l=s.verses.filter((e=>-1!==r.verses.indexOf(e.number)));if("scripture"===a)t=React.createElement(React.Fragment,null,React.createElement(Heading2,null,s.title),React.createElement(Heading3,null,r.chapter.title+" ("+s.abbreviation+")"),this.passageFormatted(r,s,l,{breaks:!0}));else t=`Placeholder for ${a}`;return t}embedFootnotes=(e,t,r)=>{let s=rbb(t.text.replace(/°/g,"&deg;"));if(Array.isArray(t.footnotes))for(let a=0;a<t.footnotes.length;a++)s=reactReplace(s,"&deg;",(()=>React.createElement(Link,{title:r?null:bbText(t.footnotes[a]),popover:r?{title:`Footnote for ${e.chapter.title}:${t.number}${a>1?String.fromCharCode(a+97):""}`,content:t.footnotes[a]}:null,className:"footnote-marker"},"°")));return reactReplace(s,/&deg;/,(()=>"°"))};passageFormatted(e,t,r,s){const a=r.filter((e=>e.text));return React.createElement(React.Fragment,null,a.length?React.createElement(Paragraph,null,1===a.length?this.embedFootnotes(e,a[0],!1!==s.popovers):a.map(((t,r)=>React.createElement(React.Fragment,null,React.createElement(Verse,null,t.number)," ",this.embedFootnotes(e,t,!1!==s.popovers),r<a.length-1?s.breaks?React.createElement(Break):" ":null)))):null)}}export class BibleSearchForm extends Form{render(e){e||(e=this.mergeProperties()),e.action="/search",e.className.push("row gx-1 mb-5");const t=e.passage;delete e.passage;const r=e.onSubmit;delete e.onSubmit,r&&(e.onSubmit=e=>{e.preventDefault();const t=formData(e.target);r(t.search,t.version)});const s=e.onChangeVersions;delete e.onChangeVersions;const a=s?e=>{const t=formData(e.target.parentNode.parentNode);s(t.version)}:null;e.selected?Array.isArray(e.selected)||(e.selected=[e.selected]):e.selected=[];const l={xs:12,md:6,lg:4,xl:3,xxl:2,className:"mb-1"};e.children.push(React.createElement(Col,{...l},React.createElement(Textbox,{name:"search",type:"search",defaultValue:t?.title||"",placeholder:"search",ariaLabel:"search"})));for(let t=0;t<e.selected.length;t++)e.children.push(React.createElement(Col,{...l,onChange:a,key:t},React.createElement(VersionSelect,{number:t+1,versions:e.versions,selected:e.selected[t]})));return e.children.push(React.createElement(Col,{...l,onChange:a,key:e.selected.length},React.createElement(VersionSelect,{number:e.selected.length+1,versions:e.versions}))),delete e.selected,delete e.versions,e.children.push(React.createElement(Col,{...l},React.createElement(Button,{type:"submit",className:"w-100"},"Search"))),super.render(e)}}export class BibleSearchScriptures extends Division{render(e){e||(e=this.mergeProperties());const t=e.versions.length>2;e.className.push(t?"d-lg-flex":"d-md-flex");for(let r=0;r<e.versions.length;r++)e.children.push(React.createElement(Division,{className:t?"px-lg-2":"px-md-2",key:`${r}-${e.versions[r]}-${e.passage.title}`},React.createElement(BiblePassage,{passage:e.passage,version:e.versions[r],variant:"scripture"})));return delete e.passage,delete e.versions,t?super.render(e):React.createElement(Container,{fluid:"lg",className:"gx-0"},super.render(e))}}export class Greek extends Span{render(e){return e||(e=this.mergeProperties()),e.className.push("greek"),super.render(e)}}export class Hebrew extends Span{render(e){return e||(e=this.mergeProperties()),e.className.push("hebrew"),e.direction="rtl",super.render(e)}}export class Inflection extends Span{render(e){return e||(e=this.mergeProperties()),e.children.push(React.createElement(React.Fragment,null,inflectionTypes.map((t=>React.createElement(React.Fragment,{key:t._id},t.flags.map((t=>-1!==e.flags.indexOf(t._id)?React.createElement(Span,{key:t._id},t._id):null))))))),delete e.flags,super.render(e)}}export class LexiconLink extends Link{state={};render(e){if(e||(e=this.mergeProperties()),"_reactInternals"in this){if(!this.state.entry)return React.createElement(React.Fragment,null,e.to.toUpperCase())}else this.setEGPState();return e.to=this.state.entry.url,e.popover={title:bbHTML(this.state.entry.title),content:bbHTML(["<p>"+["[b]Strong’s ID:[/b] ",this.state.entry.strongs._id,"\n","[b]Word:[/b] ",this.state.entry.name,"\n","[b]Transliteration:[/b] ",this.state.entry.word,"\n","[b]Pronunciation:[/b] ",this.state.entry.pronunciation,"\n","[b]Part of Speech:[/b] ",this.state.entry.partOfSpeech,this.state.entry.occurrences?["\n","[b]Occurrences:[/b] ",this.state.entry.occurrences].join(""):null].join("")+"</p>",this.state.entry.shortDefinition?`<p>${bbText(this.state.entry.shortDefinition)}</p>`:null,`<p class="mt-2 mb-0"><a href="${e.to}">view the full lexicon entry</a></p>`].join(""))},e.children.length||e.children.push(this.state.entry.strongs._id),super.render(e)}async componentDidMount(){for(let e=0;e<10;e++)try{const e=await axios.get(`/api/lexicon-entries/${this.props.to}`);this.setState({entry:e.data});break}catch(t){console.log(`Entry ${this.props.to} (${e+1}):`,(new Date).toISOString(),t.message),await sleep(1e3)}}setEGPState(){const e=this.properties.to.toLowerCase().substring(0,1),t=this.properties.to.substring(1,5).replace(/^0+/,"");this.state.entry=language(e).entries.find((r=>r._id===`strongs-${e}${t}`))??{strongs:{_id:`lexicon entry missing for ${this.properties.to}`}}}}export class PreviousNext extends Nav{render(e){return e||(e=this.mergeProperties()),e.className.push("border"),e.className.push("border-2"),e.className.push("border-muted"),e.className.push("rounded"),e.className.push("bg-light"),e.vertical="md",e.justify=!(e.next&&!e.previous)||"end",super.render(e)}}export class SectionHeader extends Header{render(e){return e||(e=this.mergeProperties()),e.ariaLabel=e.label||"section title",delete e.label,e.className.push("SectionHeader"),e.variant&&(e.className.push(`bg-${e.variant}`),e.className.push("py-4"),e.className.push(e.first?"mb-element":"my-element")),delete e.variant,delete e.first,e.children.push(React.createElement(Heading2,e.titleID?{id:e.titleID}:null,e.title)),delete e.titleID,delete e.title,e.children.push(React.createElement(Line,{className:"bg-primary pb-1 position-relative start-50 translate-middle"})),e.subtitle&&e.children.push(React.createElement(Lead,null,e.subtitle)),delete e.subtitle,super.render(e)}}export class SectionWithHeader extends Section{render(e){return e||(e=this.mergeProperties()),!e.titleID&&e.id&&(e.titleID=`${e.id}-SectionHeader`),e.titleID&&(e.ariaLabelledBy=e.titleID),e.children.unshift(React.createElement(SectionHeader,{id:e.id,title:e.title,subtitle:e.subtitle,titleID:e.titleID,variant:"light",first:e.first})),delete e.id,delete e.title,delete e.subtitle,delete e.titleID,delete e.first,super.render(e)}}export class SmallCaps extends Span{render(e){return e||(e=this.mergeProperties()),e.className.push("text-smallcaps"),super.render(e)}}export class Verse extends Superscript{render(e){return e||(e=this.mergeProperties()),e.className.push("text-muted"),e.children.unshift("["),e.children.push("]"),super.render(e)}}class VersionSelect extends Select{render(e){return e||(e=this.mergeProperties()),e.name||(e.name="version"),e.ariaLabel||(e.ariaLabel=`slot selector ${e.number}`),e.options=e.versions.slice(),delete e.versions,e.options.unshift({title:e.number?`slot ${e.number}`:"select a version"}),delete e.number,super.render(e)}}