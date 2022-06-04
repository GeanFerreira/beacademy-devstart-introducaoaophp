<?php

    $produto1 = [
        "produto" => "<b>Curso HTML</b>",
        "imagem" => '<img class="img" src="assets/img/html-logo.png" alt="Ícone HTML">',
        "descricao" => "O <b>HTML</b> <i>Hypertext Markup Language</i>, é uma das linguagens que utilizamos para
        desenvolver website.",
        "preco" => 29.99,
    ];

    $produto2 = [
        "produto" => "<b>Curso CSS</b>",
        "imagem" => '<img class="img" src="assets/img/css-logo.png" alt="Ícone CSS">',
        "descricao" => 'O <i>Cascading</i> Style Sheets (<b>CSS</b>) é uma "folha de estilo" e utilizada para
        definir a aparência em páginas da internet.',
        "preco" => 39.99,
    ];

    $produto3 = [
        "produto" => "<b>Curso JavaScript</b>",
        "imagem" => '<img class="img" src="assets/img/javascript-logo.svg" alt="Ícone Javascript">',
        "descricao" => "Em um navegador web o <b>JavaScript</b> pode ser ligado aos objetos deste ambiente para
        prover um controle programático sobre eles.",
        "preco" => 29.99,
    ];

    $produto4 = [
        "produto" => "<b>Curso PHP</b>",
        "imagem" => '<img class="img" src="assets/img/php-logo.svg" alt="Ícone PHP">',
        "descricao" => "O <b>PHP</b> muito utilizado, e especialmente adequada para o desenvolvimento
        web e que pode ser embutida dentro do HTML.",
        "preco" => 49.99,
    ];

    $produto5 = [
        "produto" => "<b>Curso Laravel</b>",
        "imagem" => '<img calss="img" src="assets/img/laravel-logo.svg" alt="Ícone Laravel">',
        "descricao" => "<b>Laravel</b> é um framework livre , voltado para web e feito em PHP. E serve para desenvolver aplicações web com padrão de arquitetura MVC.",
        "preco" => 29.99,
    ];


    $produtos = [
        $produto1,
        $produto2,
        $produto3,
        $produto4,
        $produto5,
    ];
?>

<link rel="stylesheet" href="assets/css/estilo.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5" style="text-align:center">Cursos iniciantes para Frontend e Backend</h1>

<hr>

<table class="table table-bordered table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Produtos</th>
            <th>Imagem</th>
            <th>Descrição</th>
            <th>Preço R$</th>
        </tr>
    </thead>

    <tfoot class="table-dark" style="text-align:right">
        <tr>
            <td colspan="4" class="td-foot" style="font-size: .8rem">*desconto de 10% na compra de dois ou mais produtos</td>
        </tr>
    </tfoot>

    <tbody>
        <?php
            foreach($produtos as $cadaProduto) {
                echo '<tr>';
                    echo '<td>' . $cadaProduto['produto'] . '</td>';
                    echo '<td>' . $cadaProduto['imagem'] . '</td>';
                    echo '<td>' . $cadaProduto['descricao'] . '</td>';
                    echo '<td>' . $cadaProduto['preco'] . '</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>
</div>