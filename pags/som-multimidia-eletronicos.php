<?php
    require_once('../assets/scripts/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/personalizacoes.min.css">
    <link rel="stylesheet" href="../assets/css/itens-personalizacoes.min.css">
    <link rel="stylesheet" href="../assets/css/estilos-importantes.css">

    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="../assets/js/java.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/js-bootstrap/bootstrap.bundle.min.js"></script>

    <title>Turn Motors | Som, Multimídia e Eletrônicos</title>
</head>
<body id="container__body">

        <?php 
          require_once('../assets/components/header.php');
        ?>

    <main>
        <div class="main__title">
            <h1>Som, Multimídia e Eletrônicos</h1>
        </div>
        <div class="card-container">
            <?php
                $categoria = 'som-multimidia-eletronicos';
                @require_once('../assets/components/cards-produto.php');
            ?>
        </div>
    </main>

    <?php 
        require_once('../assets/components/footer.php');
    ?>

</body>
</html>

<?php