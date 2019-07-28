var
  themeLight = ["bg-gradient-primary", "bg-white", "bg-light", "text-gray-900", "text-gray-800", "text-gray-700", "text-gray-600", "text-primary", "text-dark", "btn-primary", "btn-outline-primary", "border-primary"],
  themeDark = ["bg-gradient-dark", "bg-black", "bg-gray-800", "text-gray-100", "text-gray-200", "text-gray-300", "text-gray-400", "text-white", "text-light", "btn-light", "btn-outline-light", "border-light"];

var logourl = $("#logo").attr("src");

function setTheme() {
  if (localStorage.getItem("recentTheme") == "dark") {
    themeLight.forEach(function (element, index) {
      $("." + element).addClass(themeDark[index]).removeClass(element);
    });
    $("#logo").attr("src", logourl + "/logo_dark.png");
    $("#toggleTheme").addClass("fa-toggle-on").removeClass("fa-toggle-off");
  }
  else {
    themeDark.forEach(function (element, index) {
      $("." + element).addClass(themeLight[index]).removeClass(element);
    });
    $("#logo").attr("src", logourl + "/logo.png");
    $("#toggleTheme").addClass("fa-toggle-off").removeClass("fa-toggle-on");
  }
}

$(document).ready(function () {

  $("#themeDark").on("click", function () {
    if (localStorage.getItem("recentTheme") == "dark") localStorage.setItem("recentTheme", "light");
    else localStorage.setItem("recentTheme", "dark");
    setTheme();
  });
});