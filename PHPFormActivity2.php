<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="process_form.php">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
