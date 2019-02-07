var deu_velha = true;
var rodada = 1;
var matriz_jogo = Array(3);

matriz_jogo['a'] = Array(3);
matriz_jogo['b'] = Array(3);
matriz_jogo['c'] = Array(3);

matriz_jogo['a'][1] = 0;
matriz_jogo['a'][2] = 0;
matriz_jogo['a'][3] = 0;

matriz_jogo['b'][1] = 0;
matriz_jogo['b'][2] = 0;
matriz_jogo['b'][3] = 0;

matriz_jogo['c'][1] = 0;
matriz_jogo['c'][2] = 0;
matriz_jogo['c'][3] = 0;

$(document).ready( function(){

	$('#btn_iniciar_jogo').click( function(){ //função click apos iniciar o jogo

		//valida a digitação dos apelidos dos jogadores
		if($('#entrada_apelido_jogador_1').val() == ''){
			alert('Apelido do jogador 1 não foi preenchido');
			return false;
		}

		if($('#entrada_apelido_jogador_2').val() == ''){
			alert('Apelido do jogador 2 não foi preenchido');
			return false;
		}

		//exibir os apelidos
		$('#nome_jogador_1').html($('#entrada_apelido_jogador_1').val());
		$('#nome_jogador_2').html($('#entrada_apelido_jogador_2').val());

		//contrala visualização das divs
		$('#pagina_inicial').hide();
		$('#palco_jogo').show();

	}); //Fim função click após terminar o jogo

	$('.jogada').click( function(){     //cria um parametro click após a função jogada definindo o campo id

        var id_campo_clicado = this.id;
        $('#'+id_campo_clicado).off();
		jogada(id_campo_clicado);
	});


    //-------------------Função defini jogada, e parametro da matrizjogo-------------------------
	function jogada(id){        
		var icone = '';
		var ponto = 0;

		if((rodada % 2) == 1){
			icone = 'url("imagens/marcacao_1.png")';       // rodada não for divisivel por 2 é o jogar 1
			ponto = -1;
		} else {
			icone = 'url("imagens/marcacao_2.png")';       // rodada  for divisivel por 2 é o jogar 2
			ponto = 1;
		}
		
		rodada++;

		$('#'+id).css('background-image', icone);   //função css defini 2 parametros para aplicar no id

		var linha_coluna = id.split('-');

		matriz_jogo[linha_coluna[0]][linha_coluna[1]] = ponto;
	
		verifica_combinacao();

	}

	function verifica_combinacao(){

		//verifica na horizontal
		var pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo['a'][i];
		}
		ganhador(pontos);

		pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo['b'][i];
		}
		ganhador(pontos);

		pontos = 0;
		for(var i = 1; i <= 3; i++){
			pontos = pontos + matriz_jogo['c'][i];
		}
        ganhador(pontos);
        //-----------------------------------------------------

		//verifica na vertical
		for(var l = 1; l <= 3; l++){
			pontos = 0;
			pontos += matriz_jogo['a'][l];
			pontos += matriz_jogo['b'][l];
			pontos += matriz_jogo['c'][l];

			ganhador(pontos);
		}//-----------------------------------------------------

		//verificar na diagonal
		pontos = 0;
		pontos = matriz_jogo['a'][1] + matriz_jogo['b'][2] + matriz_jogo['c'][3];
		ganhador(pontos);

		pontos = 0;
		pontos = matriz_jogo['a'][3] + matriz_jogo['b'][2] + matriz_jogo['c'][1];
        ganhador(pontos);
        
        if(rodada > 9 && deu_velha == true){
            alert('Xiiiii, tira jo ken po ai');
            $('.jogada').off();
            window.location.reload();  
        }

    }    //-----------------------------------------------------     
    

       //------------------função mensagem vencedor----------------------
	function ganhador(pontos){
		if(pontos == -3){
			var jogada_1 = $('#entrada_apelido_jogador_1').val();
			alert(jogada_1 + ' QUERO VER JOGAR COM O NANDÃO!');
            $('.jogada').off();
            deu_velha = false;
            window.location.reload();  
		
		} else if(pontos == 3){
			var jogada_2 = $('#entrada_apelido_jogador_2').val();
			alert(jogada_2 + ' QUERO VER JOGAR COM O NANDÃO!');
            $('.jogada').off();
            deu_velha = false;
            window.location.reload();  
        } 
      
	}


});