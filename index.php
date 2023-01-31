<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercise_Ninja</title>
    </head>
    <body>
        <form action="confirmForm.php" method="post">
            <p>First name: <input type="text" name="firstname" required/></p>
            <label for="color"> Color :</label>
            <select name="color" required>
                <option value="">Choix de la couleur</option>
                <option value="Blue">Blue</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
            </select>
            <input type="submit" name="submit" value="Submit" />
        </form>    
    </body>
</html>
