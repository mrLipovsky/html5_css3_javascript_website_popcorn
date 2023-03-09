// NAVIGATION MENU //

// classList - shows/gets all classes
// contains - checks classList for specific class
// add - add class
// remove - remove class
// toggle - toggles class

// const navToggle = document.querySelector('.nav-toggle');
// const links = document.querySelector('.nav__center--menu');

// navToggle.addEventListener('click', function () {
//     links.classList.toggle('show-links');
//     if (navToggle) {
//         // Not called
//         navToggle.addEventListener('click', () => {
//           alert('You clicked the button');
//         });
//       }
// });

const navToggle = document.querySelector('.nav__button-toggle');
const links = document.querySelector('.nav__center--menu');

navToggle.addEventListener('click', function(){
    console.log("hello"); 
    links.classList.toggle('show-nav__center--menu');
});


//JS FORM REGISTER GRAPHIC//
function elementFocus(object){
  object.style.transform = 'scale(1.05)'
}

function elementLostFocus(object){
  object.style.transform = 'scale(1)'
}


// JS FORM VALIDATION //
const names = document.getElementById('username');
const password = document.getElementById('password');
const form = document.getElementById('form__register');
const errorElement = document.getElementById('error');

// form.addEventListener('submit', e => {
//   e.preventDefault();

//   validateInputs();
// });

const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
}

const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
};

const isValidEmail = email => {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

const validateInputs = () => { 
  const usernameValue = names.value.trim();
  const emailValue = email.value.trim();
  const passwordValue = password.value.trim();

  if(usernameValue === ''){
    setError(names, 'Username is required' );
  } else {
    setSuccess(names);
  }
  if(emailValue === '') {
    setError(email, 'Email is required');
  } else if (!isValidEmail(emailValue)){
    setError(email, "provide a valid email.")
  }else {
    setSuccess(email);
  }
  if(passwordValue === '') {
    setError(password, 'password is required');
  } else if (passwordValue.length < 8) {
    setError(password, 'Password mus be at least 8 characters.')
  } else {
    setSuccess(password)
  }
};
// JS FORM VALIDATION END //

