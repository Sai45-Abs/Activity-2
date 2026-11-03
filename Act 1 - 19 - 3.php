<html>
<head>
<title> Login Validation Form </title>
<body>
<form onsubmit="return validateForm()">
<label> Email:</label>
<input type="text" id="uname" name="uname">
<br><br>
<label>Password:</label>
<input type="password" id="pwd" name="pwd">
<br><br>
<input type="submit" value="Login">
</form>
<script>
function validateForm(){
let uname=document.getElementById("uname").value;
let pwd = document.getElementById("pwd").value;
//Email pattern
let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//Password pattern
let passwordPattern = /^(?=.[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;
if(!emailPattern.test(uname)) {
alert("Invalid email address");
return false;
}
if(!passwordPattern.test(pwd)){
alert(
"Invalid password!\n"+
"Password must have:\n"+
"- At least 8 characters\n"+
"- One uppercase letter\n"+
"- One lowercase letter\n"+
"- One number\n"+
"- One special character"
);
return false;
}
alert("Login Successful!");
return true;
}
</script>
</body>
</head>
</html>