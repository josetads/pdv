$('#cpf').on("blur", function(){

	var cpf = $('#cpf').val();

	$.ajax({

		url:BASE_URL+'venda/carregarDadosCliente',
		type:'POST',
		data:{cpf:cpf},
		dataType:'json',
		success:function(resposta){

			console.log(resposta)


			$('#nomecliente').val(resposta.lista['nome']);
			$('#idcliente').val(resposta.lista['id_cliente']);
			



		}

	});

});

var dataHora = dataFormatada()
$('#data').val(dataHora)

function dataFormatada(){

	var data = new Date()
	var dia = data.getDate()
	var mes = data.getMonth() + 1
	var ano = data.getFullYear()

	return [dia, mes, ano].join('/')
}

$('#idproduto').change( function(){

	var prod = $('#idproduto').val()

	var array_prod = prod.split('/')



	$.ajax({

		url:BASE_URL+'venda/carregarDadosProduto',
		type:'POST',
		data:{produto:array_prod[0]},
		dataType:'json',
		success:function(resposta){

			console.log(resposta)


			$('#valorprod').val(resposta.lista['valor']);
			$('#saldoprod').val(resposta.lista['qtd']);
			



		}

	});

});

$('#qtd').on("blur", function(){

	var valorunit = $('#valorprod').val().replace(",","").replace(".","")
	var qtd = $('#qtd').val().replace(",","").replace(".","")


	$('#valor_total').val(valorunit * qtd)

	  var elemento = document.getElementById('valor_total');
	  var valor = elemento.value;
	  
	  valor = valor + '';
	  valor = parseInt(valor.replace(/[\D]+/g,''));
	  valor = valor + '';
	  valor = valor.replace(/([0-9]{2})$/g, ",$1");

	  if (valor.length > 6) {
	    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
	  }
	 
	 if(valor.length < 4){

	 	$('#valor_total').val('0'+valor);

	 }else{

	 	$('#valor_total').val(valor);

	 }
	        

});

$('#desconto').on("blur", function(){

	var valor_total = $('#valorvendatotal').val().replace(",","").replace(".","")
	var desconto = $('#desconto').val().replace(",","").replace(".","")


	$('#totaldesconto').val(valor_total - desconto)

	  var elemento = document.getElementById('totaldesconto');
	  var valor = elemento.value;
	  
	  valor = valor + '';
	  valor = parseInt(valor.replace(/[\D]+/g,''));
	  valor = valor + '';
	  valor = valor.replace(/([0-9]{2})$/g, ",$1");

	  if (valor.length > 6) {
	    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
	  }
	 
	  $('#totaldesconto').val(valor);
	        

});


$('#addItemVenda').click(function(e){

	e.preventDefault();

	var id = $('#idproduto').val()
	var array_prod = id.split('/')


	if(id != '')
	{

			var valorprod = $('#valorprod').val();
			var qtd = $('#qtd').val();
			var valor_total = $('#valor_total').val();
			var desconto = $('#desconto').val();
			var totaldesconto = $('#totaldesconto').val();

			var vl =  $('#valorvendatotal').val()

			var total 

			if(vl == '')
			{

				total = valor_total

			}else{

				var a = parseInt(limpar($("#valor_total").val()), 10);
				var b = parseInt(limpar($("#valorvendatotal").val()), 10);

				var soma = a + b

				var resposta = formatarMoeda(soma)
				total = resposta


			}

			$('#valorvendatotal').val(total)


			var tr = 

				  '<tr>'+

				  		'<td>'+'</td>'+
				  		'<td>'+array_prod[1]+'</td>'+
				  		'<td>'+valorprod+'</td>'+
				  		'<td>'+qtd+'</td>'+
				  		'<td>'+valor_total+'</td>'+
				  		'<td>'+'<input type="hidden" class="pq" name="itens['+array_prod[0]+']" value="'+qtd+'"/>'+'</td>'+
				  		'<td><button type="button" class="btn btn-default" name="apagar" id="'+valor_total+'" onclick="excluirItemVenda(this)"><i style="color:red" class="fa-solid fa-trash"></i></button></td>'+
				  '</tr>'


			$('#tabelaItemVenda').append(tr)	  



	}




})
		 
function excluirItemVenda(obj){

		var a = parseInt(limpar($("#valorvendatotal").val()), 10);
		var b = parseInt(limpar(obj.id), 10);

		var soma = a - b

		var resposta = formatarMoeda(soma)
		total = resposta

		$('#valorvendatotal').val(total)
		$(obj).closest('tr').remove()




}



function limpar(x) {
    return x.replace(",", "").replace(".", "").replace("R$", "").replace(" ", "");
}

function formatarMoeda(numero) {

    if (isNaN(numero)) return "Valor não preenchido corretamente";


    var negativo = numero < 0;
    numero = Math.abs(numero);

    
    var resposta = "";

   
    var t = numero + "";

    
    for (var i = t.length - 1; i >= 0; i--) {
        var j = t.length - i;

      
        resposta = t.charAt(i) + resposta;

       
        if (j == 2) {
            resposta = "," + resposta;
        } else if (j % 3 == 2 && i != 0) {
            resposta = "." + resposta;
        }
    }

    
    if (resposta.length < 4) {
        resposta = "0,00".substring(0, 4 - resposta.length) + resposta;
    }
 
    
    if (negativo) resposta = "-" + resposta;

    
    return resposta;
}





