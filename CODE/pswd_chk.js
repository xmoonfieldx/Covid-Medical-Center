function chkPasswords() {
 var User = document.getElementById("Username");
 var Pswd = document.getElementById("Password");
 if (User.value == "" || Pswd.Value == "") {
 alert("Fill both the details. \n");
 return false;
 }
 else
 return true;
}
