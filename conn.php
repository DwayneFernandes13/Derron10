<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php

// Read SQL queries from your .sql file

$sql_file = fopen("projectdatabase.sql", "r");

$sql_content = fread($sql_file, filesize("projectdatabase.sql"));

fclose($sql_file);



// Execute each SQL query

$queries = explode(";", $sql_content);

foreach ($queries as $query) {

    if (trim($query) != "") {

        $conn->query($query);

    }

}



echo "Database updated successfully!";



$conn->close();



?> 