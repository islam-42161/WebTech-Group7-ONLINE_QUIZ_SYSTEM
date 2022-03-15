<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Page</title>
</head>
<body>
    <form action="" method="post">
        
<table width="100%">
    <tr><td><h2>Student account registration</h2></td></tr>
    <tr><td colspan="4"><hr></td></tr>

<tr>
    <td><label for="username">Username:</label></td>
    <td> <input type="text" name="username" id="username_input"> </td>
</tr>
<tr>
    <td><label for="email">Email:</label></td>
    <td> <input type="text" name="email" id="email_input"> </td>
</tr>
<tr>
    <td><label for="firstname">First name:</label></td>
    <td> <input type="text" name="firstname" id="firstname_input"> </td>
    <td><label for="lastname">Last name:</label></td>
    <td> <input type="text" name="lastname" id="lastname_input"> </td>
</tr>
<tr>
    <td><label for="gender">Your Gender:</label></td>
    <td>
        <input type="radio" name="gender" id="gender_male_radio" value="Male"> Male
        <input type="radio" name="gender" id="gender_female_radio" value="Female"> Female
        <input type="radio" name="gender" id="gender_other_radio" value="Other"> Other
    </td>
</tr>
<tr>
    <td><label for="phone">Contact Info:</label></td>
    <td> <input type="tel" id="phone" name="phone"> </td>    
</tr>

<tr>
    <td><label for="password">Passowrd:</label></td>
    <td> <input type="password" name="password" id="password_input"> </td>
</tr>
<tr>
    <td><label for="confirmpassword">Confirm Passowrd:</label></td>
    <td> <input type="password" name="confirmpassword" id="confirmpassword_input"> </td>
</tr>

<tr><td colspan="4">
    <hr>
</td></tr>

<tr>
    <td><label for="registerunder">Register under group:</label></td>
    <td><input type="text" name="registerunder" id="registerunderId" title="Group name"></td>
</tr>

</table>
<button type="reset" name="Reset">Reset</button>
<button type="submit" name="StudentSubmit">Sign Up</button>

    <p>
  		Already a member? <a href="Login.php">Sign in</a>
  	</p>    
</form>

<?php include '../Control/RegistrationAuth.php';?>
</body>
</html>