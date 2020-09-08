
const formLeft = document.querySelector('.form-left');
formLeft.addEventListener('submit', function (evt) {
    evt.preventDefault();

    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var designation = document.getElementById('designation').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;

    window.localStorage.setItem('fname',fname);
    window.localStorage.setItem('lname',lname);
    window.localStorage.setItem('designation',designation);
    window.localStorage.setItem('phone',phone);
    window.localStorage.setItem('email',email);
    window.localStorage.setItem('address',address);



});

function check() {
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var designation = document.getElementById('designation').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var birthDate = document.getElementById('birthDate').value;

    if((fname && lname && designation && phone && email && address && birthDate)===""){
        alert('Please Enter All Information Properly!');
        return false;
    }else {
        window.location = 'dashboard.php';
    }
}



