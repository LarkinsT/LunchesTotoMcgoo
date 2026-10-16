<!Doctype html>
<html>
<head>
    <title>Lunches</title>
</head>
<body>
    <h1>Header Here</h1>
    <form action = "adduser.php" method = "post">
        Forename: <input type = "text" name = "forename" placeholder = "Enter your firstname"><br>
        Surname: <input type = "text" name = "surname" placeholder = "Enter your surname"><br>
        House: <input type = "text" name = "house" placeholder = "Enter your house"><br>
        Year: <input type = "number" name = "year" placeholder = "Enter your year group"><br>
        Balance: <input type = "number" name = "balance" placeholder = "Enter your balance"><br>
        Role: <input type = "radio" name = "role" value = "student">Student
        <input type = "radio" name = "role" value = "Teacher">Teacher<br>
        Password: <input type = "password" name = "password" placeholder = "Enter your password"><br>
        <input type = "submit" name = "role" value = "Submit">
    </form>
</body>
</html>