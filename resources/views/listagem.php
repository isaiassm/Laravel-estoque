<<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta charset="utf-8" />
    <title>Controle de Estoque</title>
</head>
<body>
    <h1>Listagem de produtos</h1>

    <table class="table">
    <?php foreach($produtos as $p): ?>
        
    <tr>
        <td><?= $p->nome ?></td>
        <td><?= $p->valor?></td>
        <td><?= $p->descricao?></td>
        <td><?= $p->quantidade?></td>
     </tr>
    <?php endforeach ?>
    </table>
</body>
</html>