<!DOCTYPE html>

<html>
<head>
  <title>Page Title</title>
</head>
<body>

<?php
$first="";
>

<?php
$firstName="";
$lastName="";
$email="";
$age="";
$website="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["firstName"])) {
$firstName = "First name is required";
}
else {
$firstName = test_input($_POST["firstName"]);
}
if (empty($_POST["lastName"])) {
$lastName = "Last name is required";
}
else {
$lastName = test_input($_POST["lastName"]);
}
if (empty($_POST["email"])) {
$email = "Email is required";
}
else {
$email = test_input($_POST["email"]);
}
if (is_numeric ($_POST["age"]))  {}
else { $age ="Age must be numeric";
}

}
echo $firstName;
echo $lastName;
echo $email;
echo $age;

?>



<form action="." method="POST">
   <input type="text" name="firstName" placeholder="*First Name" /><br>
   <input type="text" name="lastName" placeholder="*Last Name" /><br>
   <input type="text" name="email" placeholder="*Email" /><br>
   <input type="text" name="age" placeholder="Age" /><br>
   <input type="text" "name="website" placeholder="Website" /><br>
   <input type="submit" name="submit" value="Submit" />
</form>





</body>
</html>