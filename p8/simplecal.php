<?php
    $num = '';
    $operator = '';
    $result='';
    $cookie_name1='num';
    $cookie_value1='';
    $cookie_name2='op';
    $cookie_value2='';
    $clearflag=0;

    if(isset($_POST['display'])){
        $num=$_POST['display'];
    }else { $num = '';}

    if(isset($_POST['submit'])){
        $num=$_POST['display'].$_POST['submit'];
    }else{
        $num='';
    }

    if(isset($_POST['op'])){
        $cookie_value1 = $_POST['display'];
        setcookie($cookie_name1,$cookie_value1);

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2,$cookie_value2);

        $num='';
    }

    if(isset($_POST['equals'])){
        $num=$_POST['display'];
        $operator= $_COOKIE['op'];
        try{
        switch($operator){
            case '+':
                $result=$_COOKIE['num']+$num;
                break;
            case '-':
                $result=$_COOKIE['num']-$num;
                break;
            case '/':
                if($num=='0'){
                    echo $result='divide by zero error';
                }else
                $result=$_COOKIE['num']/$num;
                break;
            case '*':
                $result=$_COOKIE['num']*$num;
                break;
        }
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

        $num=$result;
    }

    if(isset($_POST['clear'])){
        $clearflag=1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpCalculator</title>
    <style></style>
</head>
<body>
    <h1 style="position:relative; margin-left: 35%;">Simple calculator using php</h1>
    <form action="simplecal.php" method="post">
        <table border="1" style="width: 20%; height: 250px; position: relative; margin: auto; margin-top: 60px;" >
            <tr><td colspan="4"><input style="width: 97%; height: 85%;" type="text" name="display" value=<?php if($clearflag==0         )  echo $num; else echo '';?>></td></tr> 

            <tr>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="7"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="9"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="8"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="op" value="/"></td>
            </tr>
            <tr>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="4"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="5"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="6"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="op" value="+"></td>
            </tr>
            <tr>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="1"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="2"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="3"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="op" value="-"></td>
            </tr>
            <tr>
                <td><input style="width: 100%; height: 100%; " type="submit" name="clear" value="C"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="submit" value="0"></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="equals" value="="></td>
                <td><input style="width: 100%; height: 100%; " type="submit" name="op" value="*"></td>
            </tr>
        </table>
    </form>
    <div class="myName" style="
    position : absolute;
    margin-left: 300px;
    font-weight: bold;
    font-style: italic;
"><p>~Ranjan G - 1SK20CS039</p></div>
</body>
</html>