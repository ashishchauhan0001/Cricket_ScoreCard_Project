<!DOCTYPE html>
<html>
<head>
  <title>Batsman Update</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .form-container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }
    .form-container h1 {
      text-align: center;
      color: #333333;
    }
    .form {
      margin-bottom: 15px;
    }
    .form label {
      display: block;
      margin-bottom: 5px;
      color: #555555;
    }
    .form input[type="text"], .form input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    .form input[type="submit"] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    .form input[type="submit"]:hover {
      background-color: #45a049;
    }
    .form input::placeholder {
      color: #999999;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Batsman Update</h1>
    <form action="Connection.php" method="POST">
      <div class="form">
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" placeholder="Name">
      </div>
      <div class="form">
        <label for="Country">Country</label>
        <input type="text" name="Country" id="Country" placeholder="Country">
      </div>
      <div class="form">
        <label for="Rank">Rank</label>
        <input type="number" name="Rank" id="Rank" placeholder="Rank">
      </div>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
