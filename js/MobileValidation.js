function mobilefunction() {
    var mob = document.getElementById("mobile").value;

    if (mob.length < 10) {
        document.getElementById("mobilemessage").innerHTML = "* Mobile Number must be  10 Digit !";
        return false;
    }
    if (mob.length > 10) {
        document.getElementById("mobilemessage").innerHTML = "* Mobile Number must be  10 Digit !";
        return false;
    }

}