<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edg">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo base_url();?>index.php/register/add_user_index" method="post">
        <input type="text" name="user">
        <input type="text" name="pswd">
        <button type="submit">register</button>
    </form>
</body>
</html>