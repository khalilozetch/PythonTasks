<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/insertemp.css">
</head>
<body>

    <form action="../../controll/admin/insertemp.php" method="post">
  <div class="container">
    <h1>Register a new employee</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" required>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="adddress"><b>Address</b></label>
    <input type="text" placeholder="Adress" name="address" required>
    <label for="phone"><b>Phone</b></label>
    <input type="tel" placeholder="phone" name="phone" required>
    <hr>

    <button type="submit"  name="insertemp" value="insertemp" class="registerbtn">Register</button>
  </div>
  
  
</form>

</body>
</html>
