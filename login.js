function validate_login()
{
valid=true;
if(document.input.user.value=="")
{
alert("Enter your username");
document.input.user.focus();
valid=false;
}
else
if(document.input.pass.value=="")
{
alert("Enter your password");
document.input.pass.focus();
valid=false;
}
return valid;
}