<!DOCTYPE html>
<html>
<head><title>Calculator</title></head>
<body>
<h1>Basic Calculator</h1>

<?php
if(isset($_POST['submit'])){
    if(is_numeric($_POST['num1']) && is_numeric($_POST['num2'])){
        if($_POST['operator']=='add'){
            $result = $_POST['num1'] + $_POST['num2'];
        }
        if($_POST['operator']=='minus'){
            $result = $_POST['num1'] - $_POST['num2'];
        }
        if($_POST['operator']=='multiply'){
            $result = $_POST['num1'] * $_POST['num2'];
        }
        if($_POST['operator']=='division'){
            $result = $_POST['num1'] / $_POST['num2'];
        }
        echo '<h5>';
        echo "The result is: ".$result."\n";
        echo '</h5>';
    }
}



?>

<form method="post" action="calc.php">
<input type="text" name="num1">
<select name="operator">
    <option value ="add">ADDITION</option>
    <option value ="minus">MINUS</option>
    <option value ="multiply">MULTIPLICATION</option>
    <option value ="division">DIVISION</option>
    </select>
    <input name="num2" type="text">
    <input type="submit" name="submit">
    </form>

</body>
</html>