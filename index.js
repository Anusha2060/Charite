let sidebarshow = document.getElementById("sidebar");
let Navigation = document.getElementById("navigation");


function Sidebar() {
  if (sidebarshow.style.transform == "translateX(0px)") {
    sidebarshow.style.transform = "translateX(100%)";
  } else {
    sidebarshow.style.transform = "translateX(0px)";
  }
}

window.addEventListener("scroll", function () {
  console.log(pageYOffset);
  if (pageYOffset > 300) {

    Navigation.style.background = "#263B5C";
  } else {
    Navigation.style.backgroundColor = "transparent";
  }
});
