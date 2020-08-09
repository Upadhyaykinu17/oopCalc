<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calc.php" method="post">
    <input type="text" name="num1" id="num1">
    <input type="text" name="num2" id="num2">
    <select name="cal" id="cal">
    <option value="add">Add</option>
    <option value="subtract">Subtract</option>
    <option value="multiply">Multiply</option>
    <option value="divide">Divide</option>
    </select>
    <button name="submit">Calculate</button>
    </form>
</body>
</html>