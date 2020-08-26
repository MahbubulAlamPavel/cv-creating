function validation() {

    var email = document.getElementById('email').value;
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


    if (email == "") {
        alert("Please enter your email address!");
        return false;
    } else {
        if (email.match(mailformat)) {
            return true;
        } else {
            alert("You have entered an invalid email address!");
            return false;
        }
    }

    var password = document.getElementById("password").value;
        if (password == "") {
            alert("Please enter a password!");
            return false
        } else {
            return true;
        }




}
