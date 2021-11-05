<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Notepad</title>
</head>
<body>
    <div class="header">
        <h1>PHP Notepad</h1>
    </div>
    <hr>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="nav">
            <ul>
                <li><a href="#" class="active">Index</a></li>            
                <li><a href="http://ricardoaraujourbe.site">My Website</a></li>
                <li><a href="">Import Text</a></li>
                <li><a href="">Save</a></li>
            </ul>
        </div>

        <div class="text-area">
            <textarea name="notepad" id="notepad" placeholder="Type something here..." class="border-0"></textarea>
        </div>
    </form>

    <footer>
        <p style="text-align: center;">Website made with love</p>
        <hr>
        <p style="text-align: center; font-size: 10px;">Ricardo Araujo 28488147</p>
    </footer>

</body>
</html>