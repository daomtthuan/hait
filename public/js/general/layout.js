$(document).ready(function () {

  var
    themeLight = ["bg-gradient-primary", "text-gray-700", "bg-white", "text-primary", "text-dark", "btn-primary", "btn-outline-primary"],
    themeDark = ["bg-gradient-dark", "text-gray-500", "bg-black", "text-white", "text-light", "btn-light", "btn-outline-light"];

  function setTheme() {
    if (localStorage.getItem("recentTheme") == "dark") {
      themeLight.forEach(function (element, index) {
        $("." + element).toggleClass(themeDark[index]).toggleClass(element);
      });
      $("#toggleTheme").addClass("fa-toggle-on").removeClass("fa-toggle-off");
    }
    else {
      themeDark.forEach(function (element, index) {
        $("." + element).toggleClass(themeLight[index]).toggleClass(element);
      });
      $("#toggleTheme").addClass("fa-toggle-off").removeClass("fa-toggle-on");
    }
  }
  
  setTheme();

  $("#themeDark").on("click", function () {
    if (localStorage.getItem("recentTheme") == "dark") localStorage.setItem("recentTheme", "light");
    else localStorage.setItem("recentTheme", "dark");
    setTheme();
  });

});