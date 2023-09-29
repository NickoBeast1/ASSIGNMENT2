<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
</head>

    <h1>STEELEX USER REGISTRATION FORM</h1>
    <form  action ="process.php" method="post">
<label>Enter your ID number</label>
<input type= "text" name="id_number" required>
<br>
<label>First Name</label>
<input type="text" name ="Fname" required>
<br>
<label>Last Name</label>
<input type ="text" name = "Lname"required>
<br>
<label>Email Address</label>
<input type="email" name="email_address" required>
<br>
<label>Phone Number</label>
<input type="tel"name="phone_number" required>
<br>
<label for="Username">Enter your Username</label>
<input type="text" name="username" required>
<br>
<label>Enter your Desired Password</label>
<input type="password" name="create_password" placeholder ="8 mixed Characters min"required>
<br>
<label>Confirm Password</label>
<input type="password" name="confirm_password" required>
<br>
<button type="submit">OK</button>

    </form>

