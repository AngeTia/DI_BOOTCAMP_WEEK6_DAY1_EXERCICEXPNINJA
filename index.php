<html>
    <head>
        <title>
            Exercice XP NINJA
        </title>
    </head>
    <body>
        <form action="confirmForm.php" method="post">
            Username: <input type="text" name="username" placeholder="enter name" required/><br/><br/>
            Select your favourite colors:<br/>
            Red<input type="checkbox" name="check_list[]" value="red"/><br/>
            Blue<input type="checkbox" name="check_list[]" value="blue"/><br/>
            Green<input type="checkbox" name="check_list[]" value="green"/><br/>
            Yellow<input type="checkbox" name="check_list[]" value="yellow"/><br/>
            Pink<input type="checkbox" name="check_list[]" value="pink"/><br/>
            Black<input type="checkbox" name="check_list[]" value="black"/><br/>
            White<input type="checkbox" name="check_list[]" value="white"/><br/><br/>
            <input type="submit" name="submit" value="Submit"/><br/>
        </form>
    </body>
</html>