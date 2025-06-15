(function () {
  // AutoComplete 1: Food & Drinks
  const m = new autoComplete({
    selector: "#autoComplete",
    placeHolder: "Search for Food & Drinks Combo",
    data: {
      src: [
        "Pizza, Soda", "Burger, Milkshake", "Tacos, Margarita", "Pasta, Red Wine",
        "Sushi, Green Tea", "Steak, Whiskey", "Salad, Sparkling Water",
        "Chicken Wings, Beer", "Fish and Chips, Lemonade", "Burrito, Iced Tea"
      ],
      cache: true
    },
    resultItem: { highlight: true },
    events: {
      input: {
        selection: (e) => {
          const t = e.detail.selection.value;
          m.input.value = t;
        }
      }
    }
  });

  // AutoComplete 2: Colors
  const p = new autoComplete({
    selector: "#autoComplete-color",
    placeHolder: "Search For Advanced Colors...",
    data: {
      src: [
        "Lavender", "Turquoise", "Coral", "Sapphire", "Emerald", "Rose Gold", "Azure",
        "Goldenrod", "Amethyst", "Crimson", "Periwinkle", "Mint Green", "Tangerine",
        "Charcoal", "Champagne", "Aqua", "Ruby", "Topaz", "Cerulean", "Pearl"
      ],
      cache: true
    },
    resultsList: {
      element: (e, t) => {
        const i = document.createElement("p");
        i.innerHTML = t.results.length > 0
          ? `Displaying <strong>${t.results.length}</strong> out of <strong>${t.matches.length}</strong> results`
          : `Found <strong>${t.matches.length}</strong> matching results for <strong>"${t.query}"</strong>`;
        e.prepend(i);
      },
      noResults: true,
      maxResults: 15,
      tabSelect: true
    },
    resultItem: { highlight: true },
    events: {
      input: {
        selection: (e) => {
          const t = e.detail.selection.value;
          p.input.value = t;
        }
      }
    }
  });

  // Basic Phone Input
  const h = document.querySelector("#phone");
  window.intlTelInput(h, {
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  // Phone validation
  const n = document.querySelector("#phone-validation");
  const b = document.querySelector("#btn");
  const s = document.querySelector("#error-msg");
  const o = document.querySelector("#valid-msg");

  const g = [
    "Invalid number",
    "Invalid country code",
    "Too short",
    "Too long",
    "Invalid number"
  ];

  const r = window.intlTelInput(n, {
    initialCountry: "us",
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  const l = () => {
    n.classList.remove("error");
    s.innerHTML = "";
    s.classList.add("hide");
    o.classList.add("hide");
  };

  const u = (e) => {
    n.classList.add("error");
    s.innerHTML = e;
    s.classList.remove("hide");
  };

  b.addEventListener("click", () => {
    l();
    if (!n.value.trim()) {
      u("Required");
    } else if (r.isValidNumberPrecise()) {
      o.classList.remove("hide");
    } else {
      const e = r.getValidationError();
      const t = g[e] || "Invalid number";
      u(t);
    }
  });

  n.addEventListener("change", l);
  n.addEventListener("keyup", l);

  // Phone only countries
  const v = document.querySelector("#phone-only-countries");
  window.intlTelInput(v, {
    onlyCountries: [
      "al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk", "ee", "fo", "fi", "fr", "de", "gi",
      "gr", "va", "hu", "is", "ie", "it", "lv", "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl",
      "no", "pl", "pt", "ro", "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"
    ],
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  // Phone hidden input in form
  const S = document.querySelector("#phone-hidden-input");
  const w = document.querySelector("#form");
  const a = document.querySelector("#message");

  const y = window.intlTelInput(S, {
    initialCountry: "us",
    hiddenInput: () => "full_phone",
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  w.onsubmit = () => {
    if (!y.isValidNumber()) {
      a.innerHTML = "Invalid number. Please try again.";
      return false;
    }
  };

  const c = new URLSearchParams(window.location.search).get("full_phone");
  if (c) {
    a.innerHTML = `Submitted hidden input value: ${c}`;
  }

  // Other phone inputs
  const T = document.querySelector("#phone-existing-number");
  window.intlTelInput(T, {
    initialCountry: "us",
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  const f = document.querySelector("#phone-show-selected-dial-code");
  window.intlTelInput(f, {
    initialCountry: "us",
    showSelectedDialCode: true,
    utilsScript: "/assets/libs/intl-tel-input/build/js/utils.js"
  });

  // Dual list boxes
  new DualListbox(".select1");

  let d = new DualListbox(".select2", {
    availableTitle: "Available numbers",
    selectedTitle: "Selected numbers",
    addButtonText: ">",
    removeButtonText: "<",
    addAllButtonText: ">>",
    removeAllButtonText: "<<",
    searchPlaceholder: "search numbers"
  });

  d.addEventListener("added", function (e) {
    console.log(e);
  });

  d.addEventListener("removed", function (e) {
    console.log(e);
  });

  new DualListbox(".select3", {
    showAddButton: false,
    showAddAllButton: false,
    showRemoveButton: false,
    showRemoveAllButton: false
  });
})();
