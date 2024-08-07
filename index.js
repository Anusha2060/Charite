let sidebarshow = document.getElementById("sidebar");
let Navigation = document.getElementById("navigation");
let PopUp = document.getElementById("PopUp");

let navitems = document.querySelectorAll("#navitems a");

const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

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



function Activate(data) {
  console.log(data)
  navitems.forEach(a => {
    if (a.getAttribute('id').toLowerCase() === data.toLowerCase()) {
      this.className += " active";
    } else {
      this.className += "";
    }
    console.log(a.getAttribute('id'))
  })
}

function ShowPop() {
  PopUp.style.top='40%'
 
}
function RemovePop() {
  PopUp.style.top='-100%'

}

function Submit() {
  let firstname = document.getElementById('firstname').value;
  let lastname = document.getElementById('lastname').value;
  let email = document.getElementById('email').value;
  let message = document.getElementById('message').value;
  let country = document.getElementById('country').value;
  let donation = document.getElementById('donation').value;
  let agegroup = document.getElementById('agegroup').value;

  // errors
  let countryerror = document.getElementById('countryerror');
  let agegrouperror = document.getElementById('agegrouperror');
  let donationerror = document.getElementById('donationerror');
  let messageerror = document.getElementById('messageerror');
  let emailerror = document.getElementById('emailerror');
  let firstnameerror = document.getElementById('firstnamerror');
  let lastnameerror = document.getElementById('lastnameerror');

  countryerror.innerText=''
  agegrouperror.innerText=''
  donationerror.innerText=''
  messageerror.innerText=''
  emailerror.innerText=''
  firstnameerror.innerText=''
  lastnameerror.innerText=''

  console.log(firstname, lastname, email, message, country, donation, agegroup)
  if (firstname.length > 0 && lastname.length > 0 && email.length > 0 && message.length > 0 && country.length > 0 && donation.length > 0 && agegroup.length > 0) {

    if(!emailRegex.test(email)){
      emailerror.innerText = 'email is address is not valid'

    }else{
      ShowPop()
    }
  } else {
    if (firstname.length <= 0) {
      console.log("fdf")
      firstnameerror.innerHTML = 'firstname is required'
    }
    if (lastname.length <= 0) {
      lastnameerror.innerText = 'last name is required'

    }
    if (email.length <= 0) {
      emailerror.innerText = 'email is required'

    }
    if (message.length <= 0) {
      messageerror.innerText = 'message is required'

    }
    if (country.length <= 0) {
      countryerror.innerText = 'country  is required'

    }
    if (donation.length <= 0) {
      donationerror.innerText = 'dontation is required'

    }

    if (agegroup.length <= 0) {
      agegrouperror.innerText = 'age group is required'

    }
  }
}