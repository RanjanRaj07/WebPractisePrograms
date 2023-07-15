<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>digitalClock</title>
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
    text-align: center;
}

.qus h1{
    margin: 5px;
}
.qus h4{
    margin: 0px;
}

.display-area {
    width: 70%;
    height: 400px;
    display: flex;
    position: relative;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: auto;
    border: solid 2px green;
    border-radius: 10px;
    margin-top: 40px;
    background-color: black;
    color: whitesmoke;
    font-size: 30px;
}


    </style>
</head>
<body>
    <div class="qus">
        <h1>program 7</h1>
        <h4>#Question - Write a PHP program to display a digital clock which displays the current time of the server.</h4>
    </div>
    <div class="display-area">
        <h3>
        <?php
            echo "server time: <span style='color:white';>" . date("h:i:s a"). "</span>";
            echo "<br/> <br/>";
            echo "date : <span style='color:red';>" . date("d-m-Y"). "</span>";
            echo "<br/>";
            echo "current time: <span style='color:red';>" . date("h:i:s a") . "</span>";
        ?>
        </h3>
    </div>
    <div class="myName" style="
    position : absolute;
    margin-left: 300px;
    font-weight: bold;
    font-style: italic;
"><p>~Ranjan G - 1SK20CS039</p></div>
    
</body>
</html>