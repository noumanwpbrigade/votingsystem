

// dropdown btn to show logout button


function showbtn() {
    let logoutbtn = document.getElementById('logoutbtn');
    if(logoutbtn.style.display === 'none') {
        logoutbtn.style.display = 'block';
    }
    else {
        logoutbtn.style.display = 'none';
    }
}

// show hide Add New Candidat form


let addbutton = document.getElementById('addnewbtn');
let candidateform = document.getElementById('candidate-form');

addbutton.addEventListener('click', () => {
    candidateform.classList.add('candidate-active');
});

// close button

function closecandidateform() {
    candidateform.style.display = 'none';
}