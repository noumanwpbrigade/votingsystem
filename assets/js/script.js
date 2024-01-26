
// show login form

let loginbtn = document.getElementById('login-btn');
let loginform = document.getElementById('logoinform');

loginbtn.addEventListener('click', () => {
    loginform.classList.add('logoin-active');
});

// show and hide the Add New Candidate Form
let addnewbtn = document.getElementById('addnewbtn');
let candidateform = document.getElementById('candidate-form');

loginbtn.addEventListener('click', () => {
    candidateform.classList.add('logoin-active');
});


// login form close button

let formclosebtn = document.getElementsByClassName('crosse-icon')[0];

formclosebtn.addEventListener('click', ()=>{
    loginform.classList.remove('logoin-active');
})