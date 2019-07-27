var
  recentTheme = "light",
  themeLight = ["bg-gradient-primary"],
  themeDark = ["bg-gradient-dark"];

function toggleTheme() {
  switch (recentTheme) {
    case "light":
      themeLight.forEach(function (element, index) {
        $("." + element).addClass(themeDark[index])
      });

      break;
    case "dark":
      break;
  }
}

$("#themeDark").on("click", toggleTheme());