<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- se aqui no h1 a variavel for $nome, la no ProdutosController.php a variavel que aparece em no metodo "public function show($nome, $valor)" tem que ser a mesma, se mudar o nome aqui tem que mudar o nome lá, e vice versa.-->
    <h1>O nome do produto é <?php echo $nome ?> e seu valor é <?php echo $valor ?></h1>
</body>
</html>