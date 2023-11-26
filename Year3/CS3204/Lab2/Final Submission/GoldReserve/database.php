<?php

// $host = "awseb-e-22krcvmr22-stack-awsebrdsdatabase-2hf8vmagdiga.cg8j0mlhknbk.eu-west-1.rds.amazonaws.com";
// $admin = "goldadmin";
// $password = "12345678";
// $port = 3306;


// Create connection
$link = mysqli_connect($host="localhost", $admin="root", $password="", $port=null);
mysqli_select_db($link,"gold_chart");
$test = array();
$count = 0;
$res = mysqli_query($link,"select * from gold_graph");

if ($res->num_rows > 0) {
  // output data of each row
  while($row = $res->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Label"]. " - Amount: " . $row["Amount"]. "<br>";
  }
} else {
  echo "0 results";
}
$link->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <script src="" async defer></script>
        <a href="adddatapoint.php">
            <button>Add to Database</button>
        </a>
        <a href="removedatapoint.php">
            <button>Remove from Database</button>
        </a>
        <a href="index.php">
            <button>Return to Graph</button>
        </a>
    </body>
</html>