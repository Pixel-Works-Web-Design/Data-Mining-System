function mobilefunction(){
    var mob = document.getElementById("admin_mobile").value;
  
    
    if(isNaN(mob))
    {
      document.getElementById("mobilemessage").innerHTML = "* Enter only Digits !";
      return false;
    }
    if(mob.length < 10)
    {
      document.getElementById("mobilemessage").innerHTML = "* Mobile Number must be  10 Digit !";
      return false;
    }
    if(mob.length > 10)
    {
      document.getElementById("mobilemessage").innerHTML = "* Mobile Number must be  10 Digit !";
      return false;
    }
    
}