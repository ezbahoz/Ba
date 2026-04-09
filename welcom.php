
<?php
 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dd";

// الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استقبال البيانات
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// إدخال البيانات
$sql = "INSERT INTO meta (name, email, password, date) 
VALUES ('$name', '$email', '$password', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $conn->error;
}

// قراءة البيانات
$sql2 = "SELECT name, email, password, date FROM meta";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>" . $row["name"] . " - " . $row["email"];
    }
}

$conn->close();
?>   





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>welcome</h1>
    your name is:
    <?php
    $name= htmlspecialchars($_POST['name']);
   echo $name = $_POST['name'];
?>
<br>
your email is:
<?php
   echo $email= $_POST['email'];
    ?>
     <h1>welcome</h1>
    password
    <?php


   

?>


   
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   </head>
   <body>
    <table border="1">
        <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>DATE</th>
        </tr>
        <tr>
            <td>BAHOZ</td>
            <td>bahoz@email.com</td>
            <td>12345</td>
            <td>17263</td>
        </tr>
    </table>
   </body>
   </html> 
</body>
</html>


