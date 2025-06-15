// Basic Tagify Initialization
var u = document.querySelector("input[name=basic]");
new Tagify(u);

// Tags4
var r = document.querySelector("input[name=tags4]");
var a = new Tagify(r);

// Readonly mix
r = document.querySelector("input[name=tags-readonly-mix]");
a = new Tagify(r);

// Custom Dropdown
var p = document.querySelector('input[name="input-custom-dropdown"]');
a = new Tagify(p, {
  whitelist: [...],
  maxTags: 10,
  dropdown: {
    maxItems: 20,
    classname: "tags-look",
    enabled: 0,
    closeOnSelect: false
  }
});

// Disabled user input
var g = document.querySelector("input[name=tags-disabled-user-input]");
new Tagify(g, {
  whitelist: [1, 2, 3, 4, 5],
  userInput: false
});

// Drag sort
r = document.querySelector("input[name=drag-sort]");
a = new Tagify(r);
new DragSort(a.DOM.scope, {
  selector: "." + a.settings.classNames.tag,
  callbacks: { dragEnd: () => a.updateValueByDOMTags() }
});

// Select mode
r = document.querySelector("input[name=tags-select-mode]");
a = new Tagify(r, {
  enforceWhitelist: true,
  mode: "select",
  whitelist: ["first option", "second option", "third option"],
  blacklist: ["foo", "bar"]
});
a.on("add", e => console.log(e.detail));
a.DOM.input.addEventListener("focus", e => console.log(e));

// Mix Mode
const c = [
  { value: 100, text: "kenny", title: "Kenny McCormick" },
  { value: 200, text: "cartman", title: "Eric Cartman" },
  ...
];
const d = ["Homer simpson", "Marge simpson", ...];
r = document.querySelector("[name=mix]");
a = new Tagify(r, {
  mode: "mix",
  pattern: /@|#/,
  tagTextProp: "text",
  whitelist: [...c, ...d].map(e => (typeof e === "string" ? { value: e } : e)),
  validate: e => !/[^a-zA-Z0-9 ]/.test(e.value),
  dropdown: {
    enabled: 1,
    position: "text",
    mapValueTo: "text",
    highlightFirst: true
  },
  callbacks: {
    add: console.log,
    remove: console.log
  }
});
a.on("input", e => {
  const t = e.detail.prefix;
  if (t) {
    if (t === "@") a.whitelist = c;
    if (t === "#") a.whitelist = d;
    if (e.detail.value.length > 1) a.dropdown.show(e.detail.value);
  }
  console.log(a.value);
  console.log('mix-mode "input" event value:', e.detail);
});
a.on("add", e => console.log(e));

// Users list with templates
var M = document.querySelector("input[name=users-list-tags]");

function tagTemplate(e) {
  return `
    <tag title="${e.email}" contenteditable='false' spellcheck='false' tabIndex="-1"
      class="tagify__tag ${e.class || ""}" ${this.getAttributes(e)}>
      <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
      <div>
        <div class='tagify__tag__avatar-wrap'>
          <img onerror="this.style.visibility='hidden'" src="${e.avatar}">
        </div>
        <span class='tagify__tag-text'>${e.name}</span>
      </div>
    </tag>`;
}

function dropdownItemTemplate(e) {
  return `
    <div ${this.getAttributes(e)} class='tagify__dropdown__item ${e.class || ""}' tabindex="0" role="option">
      ${e.avatar ? `
      <div class='tagify__dropdown__item__avatar-wrap'>
        <img onerror="this.style.visibility='hidden'" src="${e.avatar}">
      </div>` : ""}
      <strong>${e.name}</strong>
      <span>${e.email}</span>
    </div>`;
}

function dropdownHeaderTemplate(e) {
  return `
    <header data-selector='tagify-suggestions-header'
      class="${this.settings.classNames.dropdownItem} ${this.settings.classNames.dropdownItem}__addAll">
      <strong style='grid-area: add'>${this.value.length ? "Add Remaining" : "Add All"}</strong>
      <span style='grid-area: remaning'>${e.length} members</span>
      <a class='remove-all-tags'>Remove all</a>
    </header>`;
}

a = new Tagify(M, {
  tagTextProp: "name",
  skipInvalid: true,
  dropdown: {
    closeOnSelect: false,
    enabled: 0,
    classname: "users-list",
    searchKeys: ["name", "email"]
  },
  templates: {
    tag: tagTemplate,
    dropdownItem: dropdownItemTemplate,
    dropdownHeader: dropdownHeaderTemplate
  },
  whitelist: [
    { value: 1, name: "Justinian Hattersley", avatar: "...", email: "...", team: "A" },
    ...
  ],
  transformTag: (tagData, tagify) => {
    const { name, email } = parseNameEmail(tagData.name);
    tagData.name = name;
    tagData.email = email || tagData.email;
  },
  validate: ({ name, email }) => {
    if (!email && name) {
      const parsed = parseNameEmail(name);
      name = parsed.name;
      email = parsed.email;
    }
    return name ? validateEmail(email) ? true : "Invalid email" : "Missing name";
  }
});

a.dropdown.createListHTML = (whitelist) => {
  const grouped = whitelist.reduce((acc, item) => {
    const team = item.team || "Not Assigned";
    acc[team] = acc[team] || [];
    acc[team].push(item);
    return acc;
  }, {});

  const renderGroup = (group) => group.map(i => a.settings.templates.dropdownItem.call(a, i)).join("");

  return Object.entries(grouped)
    .map(([team, members]) =>
      `<div class="tagify__dropdown__itemsGroup" data-title="Team ${team}:">${renderGroup(members)}</div>`)
    .join("");
};

a.on("dropdown:select", handleSelect).on("edit:start", handleEditStart);

function handleSelect(e) {
  if (e.detail.event.target.matches(".remove-all-tags")) {
    a.removeAllTags();
  } else if (e.detail.elm.classList.contains(`${a.settings.classNames.dropdownItem}__addAll`)) {
    a.dropdown.selectAll();
  }
}

function handleEditStart({ detail: { tag, data } }) {
  a.setTagTextNode(tag, `${data.name} <${data.email}>`);
}

function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function parseNameEmail(input) {
  const parts = input.split(/<(.*?)>/g);
  const name = parts[0].trim();
  const email = (parts[1] || "").replace(/<(.*?)>/g, "").trim();
  return { name, email };
}
