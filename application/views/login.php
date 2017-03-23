<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="width:400px; margin: 0 auto">
        <form action="<?php echo base_url()?>index.php/login/auth_in" method="post">
            <input type="text" name="user">
            <input type="password" name="pswd">
            <button type="submit">login in</button>
        </form>
        <a href="<?php echo site_url('register')?>">register</a>
        </form>
    </div>
</body>
</html>