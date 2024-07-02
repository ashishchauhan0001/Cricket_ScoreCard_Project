<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record</title>
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
        <h2>Delete Record</h2>
        <form action="delete.php" method="POST">
            <div class="form-group">
                <label for="name">Enter Name:</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Delete">
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
            $deln = mysqli_real_escape_string($conn, $_POST['name']); // Escape input to prevent SQL injection
        
            // Perform deletion based on input
            $sql = "DELETE FROM batsman WHERE name='$deln'";
            if (mysqli_query($conn, $sql)) {
                if (mysqli_affected_rows($conn) > 0) {
                    echo '<div class="result"><p class="success">Record deleted successfully</p></div>';
                } else {
                    echo '<div class="result"><p class="error">No records found for deletion</p></div>';
                }
            } else {
                echo '<div class="result"><p class="error">Error deleting record: ' . mysqli_error($conn) . '</p></div>';
            }
        
            // Close connection
            mysqli_close($conn);
        }
        ?>
        
    </div>
</body>
</html>
