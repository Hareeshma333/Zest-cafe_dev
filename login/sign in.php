<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate user input
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email) || empty($password)) {
        echo "Email/Password cannot be empty.";
    } else {
        // Connect to the database
        $conn = mysqli_connect("localhost", "root", "root123", "haree");

        // Prepare the SQL query
        $sql = "SELECT * FROM sign WHERE email='$email' AND password='$password'";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Fetch the data
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            // Set session variables
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];

            // Redirect to dashboard
            header("Location: index.php");
        } else {
            echo "Email/Password is incorrect.";
        }

        // Close the connection
        mysqli_close($conn);
    }
}
?>
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>
    <h2>Sign In</h2>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Sign In">
        <a href="sign up.html" class="link">No a member?</a>
    </form>
</body>
</html> -->
