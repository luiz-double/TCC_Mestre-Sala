<?php require_once("../controladorBarbearia/MSsessao_barbearia.php") ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagens/logo_com_fundo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../barbearia_arquivos_css/MSaltProcedimento.css">
    <title>Cadastre um procedimento</title>
</head>
<body>
    <?php require_once("../componentes/menuBarbearia.php") ?>
    <div class="espacamento">
    <h1 style="color:white;"><?= $_SESSION['NomeBarbearia'] ?></h1>
    </div>
    <div class="pg_principal container">

            <form class="row g-3 needs-validation" action="" method="post" enctype="multipart/form-data">

                    <!--Cadastro de novo procedimento-->
                       <input type="hidden" name="codigo" value="<?= $_POST['codigo'] ?>">
                       
                        <div class="col-md-4 position-relative">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?=$linha['Nome'] ?>">
                            <div class="valid-tooltip">
                            Certo
                            </div>
                            <div class="invalid-tooltip">
                                Informe o nome do procedimento
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="descricao" class="form-label">Descrição</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="descricao" name="descricao" value="<?= $linha['Descricao'] ?>">
=======
                            <input type="text" class="form-control" id="descricao" name="descricao"  required>
>>>>>>> a3a0564ba0242b5b51b827a23049e7e4df8e8009
                            <div class="valid-tooltip">
                            Certo
                            </div>
                            <div class="invalid-tooltip">
                                Informe a descrição do procedimento
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="valor" class="form-label">Valor</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="valor" name="valor" value="<?= $linha['Valor'] ?>">
=======
                            <input type="text" class="form-control" id="valor" name="valor"  required>
>>>>>>> a3a0564ba0242b5b51b827a23049e7e4df8e8009
                            <div class="valid-tooltip">
                            Certo
                            </div>
                            <div class="invalid-tooltip">
                                Informe o valor do procedimento
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="Tempo_estimado" class="form-label">Tempo Estimado</label>
<<<<<<< HEAD
                            <input type="text" class="form-control" id="Tempo_estimado" name="Tempo_estimado" value="<?= $linha['Tempo_estimado'] ?>">
=======
                            <input type="text" class="form-control" id="Tempo_estimado" name="Tempo_estimado"  required>
>>>>>>> a3a0564ba0242b5b51b827a23049e7e4df8e8009
                            <div class="valid-tooltip">
                            Certo
                            </div>
                            <div class="invalid-tooltip">
                                Informe o tempo estimado
                            </div>
                        </div>
                        <div class="col-md-4 position-relative">
                        <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status" required>
<<<<<<< HEAD
                            <option selected="" disabled="" value=""><?= $linha['StatusProcedimento'] ?></option>
                            <option>Ativo</option>
                            <option>Futuramente ativo</option>
                            <option>Inativo</option>
=======
                            <option selected="" disabled="" value="">Escolha</option>
                            <option>Ativo</option>
                            <option>Futuramente ativo</option>
>>>>>>> a3a0564ba0242b5b51b827a23049e7e4df8e8009
                            </select>
                            <div class="invalid-tooltip">
                                Por favor selecione o status do procedimento
                            </div>
                        </div>
                        
                        <div class="col-12">
<<<<<<< HEAD
                            <button class="btn btn-primary" type="submit" name="alterar" id="alterar">Salvar</button>
=======
                            <button class="btn btn-primary" type="submit" name="cadastrar" id="cadastrar">Submit form</button>
>>>>>>> a3a0564ba0242b5b51b827a23049e7e4df8e8009
                        </div>
                        
            </form>
    </div>

<script src="/arquivos_js/MScadastro_barbearia.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
    <?php require_once("../componentes/rodape.php") ?>
</html>