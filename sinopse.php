<?php
include_once('database/config.php');
date_default_timezone_set('America/Manaus');
$sql = "SELECT * FROM filme WHERE id_filme='" . $_GET['id_filme'] . "'";
$res = mysql_query($sql) or die(mysql_error());
$menu = mysql_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="css/sinopse.css">
    <link rel="icon" href="images/icone1.ico">
    <title>Sinopse - <?php echo $menu['titulo'];?></title>
</head>

<form method="GET" name="form2" id="form2" style="visibility: hidden; display: none;">
    <input type="hidden" name="id_filme" value="<?php echo $_GET['id_filme']; ?>" />
    <input type="hidden" name="spg" value="<?php echo $_GET['spg']; ?>" />
</form>

<body>
    <a href="?spg=main" class="btn btn-warning pull-right">Voltar</a>
    <div class="sidenav">
        <div class="col-md-6">
            <a href="?spg=main"><img class="logo" src="images/icone1.ico" alt="">
        </div>
        </a>

        <a class="teste" href="?spg=main"><img class="navimg" src="images/casa.png" alt="">
            <p class="navlat">Ínicio</p>
        </a>
        <a href="add_filme.php"><img class="navimg" src="images/adicionar.png" alt="">
            <p class="navlat">Adicionar</p>
        </a>
    </div>

    <div class="row">
        <div class="slide">
            <img class="capa" src="<?php echo $menu['imagem'];?>" alt="">



        </div>
        <div class="slide_filho">
            <h1><?php echo utf8_encode($menu['titulo']);?></h1>
            <br>
            <p class="card-text"><?php echo utf8_encode($menu['descricao']);?></p>

        </div>
    </div>
    <footer>
        <img class="creathus" style="width: auto; height: auto;" src="images/creathus.png" alt="">
    </footer>

</body>

</body>

</html>