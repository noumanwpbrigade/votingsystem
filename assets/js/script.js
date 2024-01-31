// show login form

let loginbtn = document.getElementById('login-btn');
let loginform = document.getElementById('logoinform');

loginbtn.addEventListener('click', () => {
    loginform.classList.add('logoin-active');
});

// login form close button

let formclosebtn = document.getElementsByClassName('crosse-icon')[0];

formclosebtn.addEventListener('click', ()=>{
    loginform.classList.remove('logoin-active');
})

// hide session message

let sessionwrapper = document.getElementById('alert-session');

function hidewraper(){
    console.log('Hide wrapper function called');
    sessionwrapper.style.display = 'none';
}