<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vistorscount</title>
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
    background-color: rgb(195, 255, 104);
    font-size: 30px;
}


    </style>
</head>
<body>
    <div class="qus">
        <h1>program 6</h1>
        <h4>#Question - Write a PHP program to keep track of the number of visitors visiting the web page and to display
        this count of visitors, with proper headings.</h4>
    </div>
    <div class="display-area">
        <?php
        $file = 'count.txt';
        $count = strval(file_get_contents($file));
        file_put_contents($file,intval($count)+1);
        echo("<h3>you are visitour count is : ".$count."</h3>");
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