var
  recentTheme = "light",
  themeLight = ["bg-gradient-primary"],
  themeDark = ["bg-gradient-dark"];

$("#themeDark").on("click", function () {
  switch (recentTheme) {
    case "light":
      themeLight.forEach(function (element, index) {
        $("." + element).addClass(themeDark[index])
      });
      break;
    case "dark":
      themeDark.forEach(function (element, index) {
        $("." + element).addClass(themeLight[index])
      });
      break;
  }
});