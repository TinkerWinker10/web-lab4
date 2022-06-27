<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Requests</title>
</head>
<body>
    <form action = "" method = "post">
        <p> Your name: <input type="text" name = "name"/></p>
        <p> Your age: <input type="text" name = "age"/></p>
        <p><input type="submit"></p>
</form>
Hi <?php echo htmlspecialchars($_POST['name']);?> 
 You are <?php echo (int)($_POST['age']);?> old.

</body>
</html>

