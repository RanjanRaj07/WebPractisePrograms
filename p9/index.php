<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stringManupulation</title>
    <style>
                body{
    margin: 0;
    padding: 0;
}

.qus{
    position: relative;
    width: 80%;
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
}
.display-area {
    width: 60%;
    position: relative;
    justify-content: center;
    align-items: center;
    text-align: left;
    margin: auto;
    border: solid 2px green;
    border-radius: 10px;
    margin-top: 10px;
}
.display-area h3,h4{
    margin-left: 10px;
}
    </style>
</head>
<body>
    <div class="qus">
        <h1>program 9</h1>
        <h4>#Question - Write a PHP program named states.py that declares a variable states with value "Mississippi
Alabama Texas Massachusetts Kansas". write a PHP program that does the following:<ul><li>Search for a word in variable states that ends in xas. Store this word in element 0 of a list
named statesList.</li>
        <li>Search for a word in states that begins with k and ends in s. Perform a case-insensitive
comparison. [Note: Passing re.Ias a second parameter to method compile performs a
case-insensitive comparison.] Store this word in element1 of statesList.</li><li>Search for a word in states that begins with M and ends in s. Store this word in
element 2 of the list.</li><li>Search for a word in states that ends in a. Store this word in element 3 of the list.</li></ul></h4>
    </div>
    <div class="display-area">
    <?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = array();
$states1 = explode(' ', $allTheStates);
$i = 0;

echo '<h3> All states = '. $allTheStates.'</h3>';
//states that ends in xas
foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<h3>The States that ends in xas: " . $state . "</h3>";
 }
}
//states that begins with k and ends in s
foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<h3>The states that begins with k ans ends in s: " . $state ."</h3>";
 }
}
//states that begins with M and ends in s
foreach($states1 as $state) {
 if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<h3>The states that begins with M and ends in s: " . $state . "</h3>";
 }
}
//states that ends in a
foreach($states1 as $state) {
 if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<h3> The states that ends in a: " . $state . "</h3>";
 }
}
foreach ($statesArray as $element => $value) {
 echo( "<h4>" . $value . " is the element " . $element . "</h4>");
}
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