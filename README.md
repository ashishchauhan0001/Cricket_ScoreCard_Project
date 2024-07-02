# Player Ranking System

This PHP project is a player ranking system where users can log in to add, update, and delete player rankings.

## Features
- User login and authentication
- Add, update, and delete player rankings
- Secure user authentication and authorization


## Requirements
- XAMPP (or any other local server with PHP and MySQL)
- Web browser (e.g., Chrome, Firefox)

## Installation

### Step 1: Clone the Repository
First, clone the repository to your local machine using the following command:
```bash
https://github.com/ashishchauhan0001/Cricket_ScoreCard_Project.git
```

### Step 2: Move to XAMPP htdocs Directory
Move the cloned repository to the XAMPP `htdocs` directory. Replace `your-project-folder` with the name of your project folder:
```bash
mv player-ranking-system /path-to-xampp/htdocs/your-project-folder
```

### Step 3: Start XAMPP
Open XAMPP and start the Apache and MySQL modules.

### Step 4: Create a Database
1. Open your web browser and go to `http://localhost/phpmyadmin`.
2. Create a new database. Name it `project`.

### Step 5: Import Database
1. Click on the `project` database.
2. Go to the `Import` tab.
3. Choose the `project.sql` file located in the `database` folder of the project.
4. Click `Go` to import the database.

### Step 6: Configure Database Connection
Open the `index.php` file in the project folder and update the database connection settings:
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```

### Step 7: Access the Project
Open your web browser and go to `http://localhost/your-project-folder`.

## Usage
1. Register a new user account or log in with an existing account.
2. Add, update, or delete player rankings through the web interface.

## Contributing
Feel free to contribute to this project by creating a pull request or reporting issues.


---

Enjoy using the Player Ranking System!
```

Make sure to replace `your-username` and `your-project-folder` with the appropriate values for your repository and project folder.
