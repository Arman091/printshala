<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>dashboared</title>
    <link rel="stylesheet" href="./index.css" />
    <link rel="stylesheet" href="./dashboared.css" />
  </head>
  <body>
    <header class="header">
      <div class="logo">Print shastra</div>
      <nav class="nav">
        <ul>
          <li><a href="./index.php">Home</a></li>

          <li><a href="./dashboared.php">Dashboared</a></li>
        </ul>
      </nav>
    </header>

    <?php 
  
session_start();
$host = "localhost";
$username = "root";
$password = "Print@123";
$dbname="users";


// Establish the database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
  
else{
$sql = "SELECT * FROM user";
$result = $conn->query($sql); if ($result->num_rows > 0) { echo "
    <table class=table>
      "; echo "
      <tr>
        <th class=thed>First Name</th>
        <th class=thed>Last Name</th>
        <th class=thed>D.O.B</th>
        <th class=thed>Gender</th>
        <th class=thed>Telephone</th>
        <th class=thed>Email</th>
      </tr>
      "; while ($row = $result->fetch_assoc()) { echo "
      <tr>
        "; echo "
        <td>" . $row['first_name'] . "</td>
        "; echo "
        <td>" . $row['last_name'] . "</td>
        "; echo "
        <td>" . $row['dob'] . "</td>
        "; echo "
        <td>" . $row['gender'] . "</td>
        "; echo "
        <td>" . $row['Telephone'] . "</td>
        "; echo "
        <td>" . $row['email'] . "</td>
        "; echo "
      </tr>
      "; } echo "
    </table>
    "; 
    
    $conn->close();
    } else { echo "No results found"; } } ?>
    

  </body>
</html>
