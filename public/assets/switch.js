window.addEventListener("load", () => {
  const themeBtn = document.querySelectorAll("[data-hs-theme-click-value]");
  let html = document.querySelector("html");

  themeBtn.forEach(($item) => {
    $item.addEventListener("click", () => {
      if (html.classList.contains("dark")) {
        html.classList.remove("dark");
        localStorage.removeItem("layout-theme");
        localStorage.removeItem("zynixdarktheme");
        localStorage.removeItem("zynixMenu");
        localStorage.removeItem("zynixHeader");
        localStorage.removeItem("darkBgRGB");
        localStorage.removeItem("bodyBgRGB");
        html.setAttribute("data-menu-styles", "light");
        html.setAttribute("data-header-styles", "light");
        // document.getElementById("switcher-menu-light").checked = true;
        // document.getElementById("switcher-header-light").checked = true;
        html.style.removeProperty("--body-bg");
        html.style.removeProperty("--dark-bg");
        html.style.removeProperty('--body-bg-rgb');
        html.style.removeProperty('--body-bg-rgb2');
        html.style.removeProperty("--light");
        html.style.removeProperty("--form-control-bg");
        html.style.removeProperty("--input-border");  
        localStorage.removeItem("hs_theme");
        if(localStorage.getItem("zynixlayout") == "horizontal"){
          html.setAttribute('data-menu-styles', 'light');
        }
        if (document.querySelector("#hs-overlay-switcher")) {
          document.getElementById("switcher-light-theme").checked = true;
        }
      } else {
        if (document.querySelector("#hs-overlay-switcher")) {
          document.getElementById("switcher-dark-theme").checked = true;
          document.getElementById("switcher-header-dark").checked = true;
        }
        html.setAttribute("class", "dark");
        localStorage.setItem("layout-theme", "dark");
        html.setAttribute("data-header-styles", "dark");
        html.setAttribute("data-menu-styles", "dark");
        // document.getElementById("switcher-menu-dark").checked = true;
        // document.getElementById("switcher-header-dark").checked = true;
        localStorage.removeItem("zynixMenu");
        localStorage.removeItem("zynixHeader");
        localStorage.setItem("zynixdarktheme", true);
        localStorage.removeItem("zynixlighttheme");
        localStorage.setItem("zynixMenu", "dark");
        localStorage.setItem("zynixHeader", "dark");
        localStorage.removeItem("hs_theme");
      }
    });
  });
});