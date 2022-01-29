<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="POST">
        Enter Your Favroite color: 
        <input type="text" name ="favcolor">
        <input type="submit" name = "submit" value="Check Now">
    </form>

    <p>
        My Favroite Color is
        <?php
        if(isset($_POST['submit'])){
            $favcolor = $_POST['favcolor'];
            echo $favcolor;
        }
        
        ?>
    </p>
</body>
</html>