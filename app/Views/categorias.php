<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h2 class="text-center w-100">
        <?php echo $titulo; ?>
    </h2>
    <div class="text-center w-100">
        <?php echo $msg; ?>
    </div>
    <p class="text-center w-100">
        <a href="<?php echo base_url('public/Categorias/inserir'); ?>" class="text-decoration-none link-secondary">Inserir Nova Categoria</a>
    </p>
    <table class="table w-80 text-center table-striped table-hover mx-auto rounded">
        <tr>
            <th class="bg-warning">Codigo da Categoria</th>
            <th class="bg-warning">Nome da Categoria</th>
            <th class="bg-warning"></th>
            <th class="bg-warning"></th>
        </tr>
        <?php foreach ($categorias as $categoria) : ?>
            <tr>
                <td>
                    <?php echo $categoria->id; ?>
                </td>
                <td>
                    <?php echo $categoria->nomecategoria; ?>
                </td>
                <td>
                    <a href="<?php echo base_url('public/Categorias/editar/'.$categoria->id.''); ?>" class="text-decoration-none link-secondary">Editar</a>
                </td>
                <td>
                    <a href="<?php echo base_url('public/Categorias/excluir/'.$categoria->id.''); ?>" class="text-decoration-none link-secondary">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>