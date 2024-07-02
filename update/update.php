<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batsman Record</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        .form-group input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 14px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #555;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }

        .result p {
            color: #333;
        }

        .error {
            color: #a94442;
        }

        .success {
            color: #3c763d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Batsman Record Update</h2>
        <form action="update.php" method="POST">
            <div class="form-group">
                <label for="name">Enter Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="country">Enter Country:</label>
                <input type="text" id="country" name="country">
            </div>
            <div class="form-group">
                <label for="rank">Enter Rank:</label>
                <input type="text" id="rank" name="rank">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Update">
            </div>
        </form>

        <?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish connection to database
    $conn = mysqli_connect("localhost", "root", "", "project");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get input from form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $rank = mysqli_real_escape_string($conn, $_POST['rank']);

    // Update query
    $sql = "UPDATE batsman SET country='$country', rank='$rank' WHERE name='$name'";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        if (mysqli_affected_rows($conn) > 0) {
            echo '<div class="result"><p class="success">Record updated successfully</p></div>';
        } else {
            echo '<div class="result"><p class="error">Record not found for update</p></div>';
        }
    } else {
        echo '<div class="result"><p class="error">Error updating record: ' . mysqli_error($conn) . '</p></div>';
    }

    // Close connection
    mysqli_close($conn);
}
?>

    </div>
</body>
</html>
