<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Vendas</title>
  <link rel="stylesheet" href="style.css">
  <!-- Latest compiled and minified CSS -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <link href="<?php echo BASE_URL ?>app/Assets/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <script src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>

  <link rel="stylesheet" href="<?php echo BASE_URL?>app/Assets\css\stylemenu.css">
</head>

<body>
  <h3 style="text-align: center; color:gray;"><b>SISTEMA PONTO DE VENDA 5.0</b></h3>


  <nav class="navbar navbar-default bg-secondary ">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header text-white">
        <ul>
            <li>
                <a href="<?php echo BASE_URL; ?>home">Home</a>
            </li>
           

            <li class="dropdown">
                <a href="#">Vendas</a>

                <div class="dropdown-menu">
                    <a href="<?php echo BASE_URL; ?>cliente">Cliente</a>
                    <a href="<?php echo BASE_URL;?>venda">PDV</a>
                   
                </div>
            </li>




            <li class="dropdown">
                <a href="#">Estoque</a>

                <div class="dropdown-menu">
                    <a href="<?php echo BASE_URL; ?>produto">Produtos</a>
                    <a href="<?php echo BASE_URL;?>entrada">Entrada</a>
                    <a href="<?php echo BASE_URL;?>saida">Saída</a>
                </div>
            </li>
          
        </ul>
      </div>
        <div class="text-white">

        <?php echo @$_SESSION['AuthUser'][2]; ?>

        <li class="dropdown">
                <a href="<?php echo BASE_URL;?>login/deslogar"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>

                
                   
                </div>
            </li>


      </div>
      </div>
  </div>
    </nav>





  <!-- <nav class="navbar navbar-default bg-secondary ">
    <div class="container-fluid">
   
      <div class="navbar-header text-white">
        <a class="navbar-brand text-white" href="<?php echo BASE_URL; ?>home">Home</a>
        <a class="navbar-brand text-white" href="<?php echo BASE_URL; ?>cliente">Clientes</a>
        <a class="navbar-brand text-white" href="<?php echo BASE_URL; ?>produto">Produtos</a>
        <a class="navbar-brand text-white" href="vendas.php">Vendas</a>
      
     
      </div>

        
      <div class="text-white">

       
      </div>
    </div>
    </div>
  </nav> -->