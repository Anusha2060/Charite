let sidebarshow = document.getElementById("sidebar");

function Sidebar() {
  if ((sidebarshow.style.transform == "translateX(0px)")) {
    sidebarshow.style.transform = "translateX(100%)";
  }
  else{
    sidebarshow.style.transform = "translateX(0px)";
  }
}
