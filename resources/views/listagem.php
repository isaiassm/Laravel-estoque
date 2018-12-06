<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css"> 
    
    <title>Controle de Estoque</title>
</head>
<body>
    <h1>Listagem de produtos</h1>

    <table class="table">
    <?php foreach($produtos as $p): ?>
        
    <tr>
        <td>Nome: <?= $p->nome ?></td>
        <td>Valor: <?= $p->valor?></td>
        <td>Descrição: <?= $p->descricao?></td>
        <td>Quantidade: <?= $p->quantidade?></td>
        <td>
        <a href="/produtos/mostra?id=<?= $p->id?>"> Visualizar
        </a>
        </td>
     </tr>
    <?php endforeach ?>
    </table>
</body>
</html>