<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentrecords</title>
    <style>
                body{
    margin: 0;
    padding: 0;
}

.qus{
    position: relative;
    width: 60%;
    margin: auto;
    justify-content: center;
    align-items: center;
    text-align: left;
}

.qus h1{
    text-align: center;
    margin: 5px;
}
.qus h4{
    margin: 0px;
    text-align: center;
}
.qus ul{
    text-align: left;
    margin-left: 200px;
}
.display-area {
    width: 60%;
    height: 450px;
    /* display: flex; */
    position: relative;
    justify-content: center;
    align-items: center;
    text-align: left;
    margin: auto;
    border: solid 2px green;
    border-radius: 10px;
    margin-top: 10px;
    margin-bottom: 30px;
}
.display-area ol{
    margin: 15px;
    margin-left: 10px;
}
.display-area li{
    margin: 15px;
}
table, td, th {
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}

table { 
    margin: auto; 
}
#head table, th, tr{
    background-color: #0000;
    color: white;
}
    </style>
</head>
<body>
    <div class="qus">
        <h1>program 10</h1>
        <h4>#Question - Write a PHP program to sort the student records which are stored in the database using selection
sort.</h4>
    </div>
    <div class="display-area">
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weblab";
$a=[[]];
$b=[[]];
// Create connection

// Opens a new connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection and return an error description from the last connection error, if any
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM student";
// performs a query against thedatabase 
$result = $conn->query($sql);
echo "<br>";
echo "<center> <h3>BEFORE SORTING</h3></center>"; 
echo "<table border='2'>";
if($result)
{
    echo'<tr id="head" style="background-color: black;"><th>USN</th><th>NAME</th><th>Address</th></tr>'; 
    // output data of each row and fetches a result row as an associative array
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row["usn"]."</td>";
        echo "<td>". $row["name"]."</td>";
        echo "<td>". $row["address"]."</td></tr>";
        array_push($a,[$row["usn"],$row["name"],$row["address"]]);
    }

    foreach ($a as $key => $rowSORT) {
        // replace 0 with the field's index/key
        if($key!=0){
            $b[$key]  = $rowSORT[0];
        }
    }
    array_multisort($b, SORT_ASC, $a);
}
else echo "<center style='color:red'> Table is Empty</center>";
echo "</table>";

echo "<br>";
echo "<center> <h3>AFTER SORTING</h3></center>"; 
echo "<table border='2'>";
if($result)
{
    echo'<tr id="head" style="background-color: black;"><th>USN</th><th>NAME</th><th>Address</th></tr>'; 
    $n=count($a);
    for ( $i = 0 ; $i<($n-1) ; $i++)
    {
        echo "<tr>";
        echo "<td>". $a[$i][0]."</td>";
        echo "<td>". $a[$i][1]."</td>";
        echo "<td>". $a[$i][2]."</td>";
        echo "</tr>";
    }
}
else echo "<center style='color:red'> Table is Empty</center>";
echo "</table>";

$conn->close();
?>
    </div>
    <div class="myName" style="
    position : absolute;
    margin-left: 300px;
    font-weight: bold;
    font-style: italic;
"><p>~Ranjan G - 1SK20CS039</p></div>
    
</body>
</html>