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

$subpagina = $_GET['spg'] != '' ? $_GET['spg'] : 'main';
$subpagina = $subpagina . '.php';

if (file_exists($subpagina)) {  
    include_once($subpagina); 
}

?>

    <div class="sidenav">
        <div class="col-md-6">
            <a href="?spg=main"><img class="logo" src="images/icone1.ico" alt="">
        </div>
        </a>

        <a class="teste" href="?spg=main"><img class="navimg" src="images/casa.png" alt="">
            <p class="navlat">Ínicio</p>
        </a>
        <a href="?spg=add_filme"><img class="navimg" src="images/adicionar.png" alt="">
            <p class="navlat">Adicionar</p>
        </a>
    </div>
  
    <footer>
        <img class="creathus" style="width: auto; height: auto;" src="images/creathus.png" alt="">
    </footer>

</body>

</html>