<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?php echo NOME_SISTEMA ?></title>
    <link href="<?php echo BASE_URL ?>app/Assets/css/styles.css" rel="stylesheet" />

    <style type="text/css">
        .c {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;


        }
    </style>

</head>

<body class="bg-primary">
    <div class="c">

        <div class="container">

          
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">

                        <?php if(isset($error) && !empty($error)){?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo @$error ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                            </div>

                            <?php }?>
                            <h3 class="text-center font-weight-light my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo BASE_URL ?>login">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputEmail" name="email" type="email" placeholder="Digite seu e-mail" />
                                    <label for="inputEmail">E-mail</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputPassword" name="senha" type="password" placeholder="Digite sua senha" />
                                    <label for="inputPassword">Senha</label>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="">Recuperar Senha?</a>
                                    <button class="btn btn-primary">Logar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>app/Assets/js/scripts.js"></script>
</body>

</html>