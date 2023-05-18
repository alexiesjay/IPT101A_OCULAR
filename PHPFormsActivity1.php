<!DOCTYPE html>
<html>
<head>
  <title>User Registration Form</title>
</head>
<body>
  <h2>User Registration Form</h2>
  <form action="submit.php" method="POST">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required><br><br>
  
    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
  
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
  
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
  
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
  
    <input type="submit" value="Submit">
  </form>
</body>
</html>
