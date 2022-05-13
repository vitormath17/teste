<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icone1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/index.css">

    <title>Catálogo de Filmes | CREATHUS</title>

    <style>



    </style>
</head>

<body>
    <?php 

$subpagina = $_GET['spg'] != '' ? $_GET['spg'] : 'menu';
$subpagina = $subpagina . '.php';

if (file_exists($subpagina)) {  
    include_once($subpagina); 
}

?>

    <div class="sidenav">
        <div class="col-md-6">
            <a href=""><img class="logo" src="images/icone1.ico" alt="">
        </div>
        </a>

        <a class="teste" href="index.php"><img class="navimg" src="images/casa.png" alt="">
            <p class="navlat">Ínicio</p>
        </a>
        <a href="add_filme.php"><img class="navimg" src="images/adicionar.png" alt="">
            <p class="navlat">Adicionar</p>
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <p class="nav">Últimos filmes adicionados</p>

                <div>

                </div>

                <form method="GET" name="form2" id="form2" style="visibility: hidden; display: none;">
                    <input type="hidden" name="id_filme" value="<?php echo $_GET['id_filme']; ?>" />

                    <input type="hidden" name="spg" value="<?php echo $_GET['spg']; ?>" />
                </form>
                <form name="form2" method="GET" class="d-flex" action="">
                    <input type="hidden" name="id_filme" value="<?php echo $_GET['search']; ?>" />
                    <input type="hidden" name="spg" value="<?php echo $_GET['spg']; ?>" />
                    <input class="form-control me-2" name="search" id="search" value="<?= $_GET['search'];?>"
                        style="background: #03052e; color:#f16f2d; border-color: #f16f2d; border-width: 1px; border-radius: 2px;"
                        type="text" placeholder="Buscar">
                    <button class="btn btn-outline-warning" style="margin-top:10px;" type="submit">Buscar</button>
                </form>

            </div>

        </div>
    </nav>
    <?php
include_once('database/config.php');

$sql = 'SELECT id_filme, autor, imagem, descricao, titulo FROM filme ';
if ($_GET['search']!='') {
  $sql .= " WHERE titulo LIKE '%" . $_GET['search'] . "%' ";
}
$sql .= ' ORDER BY id_filme DESC';
$res = mysql_query($sql) or die(mysql_error());
?>

    <div class="container">

        <?php
while ($row = mysql_fetch_assoc($res)) {
    echo '<div class="slide">';
    echo '<a class="filmes" href="?spg=sinopse&id_filme='. $row['id_filme'] .'">';
    echo '<img class="capa" src="' . $row['imagem'] . '" alt="">';
    echo '<img class="estrelas" src="images/estrelas.png" alt="">';
    echo '<h5>' . utf8_encode($row['titulo']). '</h5>';
    echo '<h6>' . utf8_encode($row['autor']) . '</h6>';
    echo '</a>';
    echo '</div>';
}

?>

    </div>

    <footer>
        <img class="creathus" style="width: auto; height: auto;" src="images/creathus.png" alt="">
    </footer>

</body>

</html>