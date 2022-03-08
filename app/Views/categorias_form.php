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
    <h2 class="text-center w-100 mt-3">
        <?php echo $titulo; ?>
    </h2>
    <p class="text-center w-100 mb-5">
        <a href="<?php echo base_url('public/Categorias/index'); ?>"  class="text-decoration-none link-secondary">Voltar para a lista de categorias</a>
    </p>
    <p class="w-100 text-center">
        <strong><?php echo $msg; ?></strong>
    </p>
    <form method="post" class="text-center w-40 mx-auto mt-2 bg-secondary py-3 rounded">
        <div class="mb-3 w-50 mx-auto">
            <input type="hidden" name="id" value="<?php echo (isset($categoria) ? $categoria-> id : '' ) ?>"/>
            <label class="form-label text-white">Nome da Categoria: </label>
            <input type="text" name="nomecategoria" class="form-control" value="<?php echo (isset($categoria) ? $categoria-> nomecategoria : '' ) ?>"/>
        </div>
       <p>
        <input type="submit" value="<?php echo $acao; ?>" class="btn bg-white text-dark"/>
       </p>
    </form>
</body>
</html>