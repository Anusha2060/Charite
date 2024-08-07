let sidebarshow = document.getElementById("sidebar");
let Navigation = document.getElementById("navigation");
let navitems = document.querySelectorAll("#navitems a");



function Sidebar() {
  if (sidebarshow.style.transform == "translateX(0px)") {
    sidebarshow.style.transform = "translateX(100%)";
  } else {
    sidebarshow.style.transform = "translateX(0px)";
  }
}



window.addEventListener("scroll", function () {
  if (pageYOffset > 500) {

    Navigation.style.background = "#263B5C";
  } else {
    Navigation.style.backgroundColor = "transparent";
  }
});



function Activate(data){
  console.log(data)
  navitems.forEach(a=>{
    if(a.getAttribute('id').toLowerCase()===data.toLowerCase()){ 
      this.className += " active";
    }else{
      this.className += "";
    }
    console.log(a.getAttribute('id'))
  })
}