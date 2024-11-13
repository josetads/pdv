$('#idproduto').change(function(){

	var prod = $('#idproduto').val();

	$.ajax({

		url:BASE_URL+'entrada/carregarDadosProduto',
		type:'POST',
		data:{produto:prod},
		dataType:'json',
		success:function(resposta){

			console.log(resposta)


			$('#valorprod').val(resposta.lista['valor']);
			$('#codprod').val(resposta.lista['codproduto']);
			$('#descricaoprod').val(resposta.lista['descricao']);
			$('#saldo').val(resposta.lista['qtd']);



		}

	});

});

$('#idprodutosaida').change(function(){

	var prod = $('#idprodutosaida').val();

	$.ajax({

		url:BASE_URL+'saida/carregarDadosProduto',
		type:'POST',
		data:{produto:prod},
		dataType:'json',
		success:function(resposta){

			//console.log(resposta)


			$('#valorprod').val(resposta.lista['valor']);
			$('#codprod').val(resposta.lista['codproduto']);
			$('#descricaoprod').val(resposta.lista['descricao']);
			$('#saldo').val(resposta.lista['qtd']);



		}

	});

});