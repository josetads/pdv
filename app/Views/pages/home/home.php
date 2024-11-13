
<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active"></li>
        </ol>
<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Entradas do Dia</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$lista['totalentrada'];?></div>
					</div>
					<div class="col-auto">
                    <i class="fa-solid fa-arrow-right-to-bracket fa-2x text-success" ></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Saídas do Dia</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$saidas ?></div>
					</div>
					<div class="col-auto">
						<i class="fa-solid fa-right-from-bracket fa-2x text-danger"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
    
		<div class="card <?php echo $corTotal2 ?> shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold <?php echo $corTotal ?> text-uppercase mb-1">Saldo do Dia</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo number_format($lista4['totalvenda'],2,",",".");?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-dollar-sign fa-2x <?php echo $corTotal ?>"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
   

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card <?php echo $corTotal2Mes ?> shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold <?php echo $corTotalMes ?> text-uppercase mb-1">Saldo do Mês</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo number_format($lista5['totalvenda'],2,",","."); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-dollar-sign fa-2x <?php echo $corTotalMes ?>"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">


						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Clientes:</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$lista1['totalclientes']?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-info"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Usuários</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$saidas ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-success"></i>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-danger shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Produtos</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo @$lista2['totalprodutos'] ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-box fa-2x text-primary"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	
   

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card <?php echo $corTotal2Mes ?> shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold <?php echo $corTotalMes ?> text-uppercase mb-1">Total de Vendas</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo number_format($lista3['totalvenda'],2,",","."); ?></div>
					</div>
					<div class="col-auto">
						<i class="fas fa-list fa-2x <?php echo $corTotalMes ?>"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
















