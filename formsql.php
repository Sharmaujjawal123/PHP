<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mess = $_POST['message'];

        // Escape inputs to prevent SQL injection
   

        $query = "INSERT INTO FORM VALUES ('$name', '$email', '$mess')";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Success";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
