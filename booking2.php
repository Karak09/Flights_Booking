<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
</head>
<body>
    <h1>Thank You!</h1>
    
    <?php
    // Safely retrieve POST data
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $father = $_POST['father'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $address = $_POST['address'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $location = $_POST['location'] ?? '';
    $destination = $_POST['destination'] ?? '';
    $travel = $_POST['travel'] ?? '';
    $journey = $_POST['journey'] ?? '';
    $member = $_POST['member'] ?? '';

    // Database connection details
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "tab5";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check the connection
    if (!$conn) {
        die("Server connection failed: " . mysqli_connect_error());
    } else {
        echo "Server connected successfully!";
    }

    //// Escape the inputs to prevent SQL injection
    //$name = mysqli_real_escape_string($conn, $name);
    //$age = mysqli_real_escape_string($conn, $age);
    //$father = mysqli_real_escape_string($conn, $father);
    //$number = mysqli_real_escape_string($conn, $number);
    //$address = mysqli_real_escape_string($conn, $address);
    //$gender = mysqli_real_escape_string($conn, $gender);
    //$location = mysqli_real_escape_string($conn, $location);
    //$destination = mysqli_real_escape_string($conn, $destination);
    //$travel = mysqli_real_escape_string($conn, $travel);
    //$date = mysqli_real_escape_string($conn, $date);
    //$member = mysqli_real_escape_string($conn, $member);

    // Construct the SQL query, wrapping string values in single quotes
    $sql = "INSERT INTO `flights` (`name`, `age`, `father`, `mobile`, `address`, `gender`, `location`, `destination`, `travel`, `journey`, `member`)
            VALUES ('$name', '$age', '$father', '$mobile', '$address', '$gender', '$location', '$destination', '$travel', '$journey', '$member')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        echo "<p>Thank You for submitting your details!</p>";
        echo "<p>Happy Journey!</p>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
    ?>

</body>
</html>
