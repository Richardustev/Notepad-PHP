<?php
$listar = null;
$ignoreList = array('cgi-bin', '.', '..', '._', 'create.php');
$dir = opendir('./process');

while($elemento = readdir($dir)){
    if(is_dir("./files/".$elemento)){
        $listar .= "<li><a href='./process/$elemento' target'_blank'>$elemento/</a></li>";
    } else {
        $listar .= "<li><a href='./process/$elemento' target'_blank'>$elemento/</a></li>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="estilos.css">
    <title>Notepad</title>
</head>
<body>
    <div class="header">
        <h1>PHP Notepad</h1>
    </div>
    <hr>

    <form action="./process/create.php" method="POST">
        <div class="nav">
            <ul>
                <li class="active">Index</li>            
                <li><a href="http://ricardoaraujourbe.site">My Website</a></li>
                <li><a class="btn btn-primary" href="javascript:popup()">Save</a></li>
            </ul>
        </div>

        <div class="text-area">
            <textarea name="notepad" id="notepad" placeholder="Type something here..." class="border-0"></textarea>
        </div>

        <div class="ventana animate__animated animate__zoomIn" id="ventana" style="border-top: 20px solid #0A95FF;">
        <h3>Save File</h3>
        <hr>
            Input the file's name<br>
            <input type="text" placeholder="File's name" name="fileName" id="fileName" require>
            <br><br>
            <input type="submit" name="btn" value="save">
            <a class="btn btn-danger" href="javascript:popout()">Cancel</a>
        </div>
    </form>

    <div class="files-list">
        <h5>File's list</h5>
        <p>Si creó un archivo y no aparece, presionar f5</p>
        <hr>
        <ul>
            <?php echo $listar ?>
        </ul>
    </div>

    <footer>
        <p style="text-align: center;">Website made with love</p>
        <hr>
        <p style="text-align: center; font-size: 10px;">Ricardo Araujo 28488147</p>
    </footer>

</body>
<script>
    function popup() { 
        document.getElementById('ventana').style.display="block";
    }

    function popout(){
        document.getElementById('ventana').style.display="none";
    }
</script>
</html>