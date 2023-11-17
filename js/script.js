// Add custom JavaScript here


const body = document.querySelector('body')
body.classList.add('bg-light')

// JavaScript to handle category selection and navigation
document.addEventListener("DOMContentLoaded", function () {
  var select = document.getElementById("category-select");
  var form = document.getElementById("category-select-form");

  if (select && form) {
      select.addEventListener("change", function () {
          var selectedValue = select.value;
          if (selectedValue) {
              window.location = selectedValue;
          }
      });
  }
});

const formCheckoutInput = document.querySelectorAll('body > div > main > div > div > article > div > div > form.checkout.woocommerce-checkout input')
if(formCheckoutInput.length !== 0) {
  formCheckoutInput.forEach(input => {
    if(input.getAttribute('type') !== 'checkbox') {
      input.classList.add('form-control')
    }
  });
}

const formLoginInputs = document.querySelectorAll('#customer_login > div.u-column1.col-1 > form input')
const formLoginRegisterInputs = document.querySelectorAll('#customer_login > div.u-column2.col-2 > form input')
if(formLoginInputs.length !== 0 && formLoginRegisterInputs.length !== 0) {
  formLoginInputs.forEach(input => {
    if(input.getAttribute('type') !== 'checkbox') {
      input.classList.add('form-control')
    }
  });

  formLoginRegisterInputs.forEach(input => {
    if(input.getAttribute('type') !== 'checkbox') {
      input.classList.add('form-control')
    }
  });
}


const userDashboardDiv = document.querySelector('body > div.container-custom.container--narrow.page-section')
const ulUserDashboard = document.querySelector('.woocommerce-MyAccount-navigation ul')
const liUserDashboard = document.querySelector('.woocommerce-MyAccount-navigation ul li')
if(userDashboardDiv && ulUserDashboard) {
  userDashboardDiv.classList.add('container')
  ulUserDashboard.classList.add('list-group list-group-flush')
  liUserDashboard.classList.add('list-group-item')
}


const placeh = document.querySelector("#wpcf7-f79-o1 > form > p > span.wpcf7-form-control-wrap > input").setAttribute('placeholder', 'Ingresa tu email')
console.log(placeh);


// Replace Text In Header
const checkReplace = document.querySelector(".replace-me");

if (checkReplace !== null) {
  const replace = new ReplaceMe(checkReplace, {
    animation: "animated fadeIn",
    speed: 2000,
    separator: ",",
    loopCount: "infinite",
    autoRun: true,
  });
}