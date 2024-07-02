<?php
$Name = $_POST['Name'];      // Assuming 'Name' is sent via POST method
$Country = $_POST['Country'];  // Assuming 'Country' is sent via POST method
$Rank = $_POST['Rank'];      // Assuming 'Rank' is sent via POST method

$servername = "localhost";   // Server name or IP address where MySQL is hosted
$username = "root";          // MySQL username
$password = "";              // MySQL password
$dbname = "project";         // Database name

// Create a new MySQLi object to connect to MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    echo "Connected successfully\n\n<br>";
    
    // Echo out the received data for debugging purposes
    echo "Name: $Name<br>";
    echo "Country: $Country<br>";
    echo "Rank: $Rank<br>";
    
    // Prepare an SQL statement for inserting data into 'batsman' table
    $stmt = $conn->prepare("INSERT INTO batsman (Name, Country, Rank) VALUES (?, ?, ?)");
    
    // Bind parameters with types: 'ssi' means string, string, integer
    $stmt->bind_param("ssi", $Name, $Country, $Rank);
    
    // Execute the prepared statement
    $stmt->execute();
    
    echo "Registered successfully"; // Output success message
    
    // Close the prepared statement and MySQL connection
    $stmt->close();
    $conn->close();
}
?>
