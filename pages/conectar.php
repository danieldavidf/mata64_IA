<?php

	if(isset($_POST['escolhido'])) {

		$medias = getDados();
		$novornd = ((int)$medias["rnd"]);
		$novornd++;
		$dog = selectCachorroPorId( $_POST['escolhido'] );

		$sucesso = addSelecionado( $_POST['escolhido'] );

		if ($novornd==1) {
			$novobrin = $dog["brincalhao"];
			$novopeso = $dog["peso"];
			$novoagre = $dog["agressividade"];
			$novoagil = $dog["agilidade"];
			$novoobed = $dog["obediencia"];
		} else {
			$novobrin = $dog["brincalhao"] + (int)$medias["sbrin"];
			$novopeso = $dog["peso"] + (float)$medias["speso"];
			$novoagre = $dog["agressividade"] + (int)$medias["sagre"];
			$novoagil = $dog["agilidade"] + (int)$medias["sagil"];
			$novoobed = $dog["obediencia"] + (int)$medias["sobed"];
		}

		$corr = (int)$medias["correto"];
		if ($novornd > 20) {
			$sugest = getSugestao($_POST['escolhido'],$_POST['outro1'],$_POST['outro2']);
			if ( $sugest["nome"] === $dog["nome"] ) { $corr++; }
		}

		$banco = abrirBanco();
		$sql = "UPDATE dados SET sbrin=$novobrin,speso=$novopeso,sagre=$novoagre,sagil=$novoagil,sobed=$novoobed,rnd=$novornd,correto=$corr WHERE dado_id=1";
		$banco->query($sql);
		$banco->close();
		voltarMain();
	}

	function abrirBanco(){
		$conexao = new mysqli("localhost","root","teste","pets");
		return $conexao;
	}

	function iniciar(){
		$banco = abrirBanco();
		// ZERAR MEDIAS
		$sql = "UPDATE dados SET sbrin=0,speso=0,sagre=0,sagil=0,sobed=0,rnd=0,correto=0 WHERE dado_id=1";
		$banco->query($sql);
		// ZERAR SELECIONADOS
		$sql = "DELETE FROM selecionados WHERE ID != 0";
		$banco->query($sql);
		$banco->close();
		return 1;
	}

	function getDados(){
		$banco = abrirBanco();
		$sql = "SELECT * FROM dados WHERE dado_id=1";
		$resultado = $banco->query($sql);
		$banco->close();
		$dados = mysqli_fetch_assoc($resultado);
		return $dados;
	}

	function getSugestao($idog1, $idog2, $idog3){
		
		$dados = getDados();
		$round = (int)$dados["rnd"];
		$id1 = (int)$idog1;
		$id2 = (int)$idog2;
		$id3 = (int)$idog3;

		// calcular medias
		$mbrin = (int)$dados["sbrin"] / $round;
		$mpeso = (float)$dados["speso"] / $round;
		$magre = (int)$dados["sagre"] / $round;
		$magil = (int)$dados["sagil"] / $round;
		$mobed = (int)$dados["sobed"] / $round;

		$cao1 = selectCachorroPorId( $id1 );
		$cao2 = selectCachorroPorId( $id2 );
		$cao3 = selectCachorroPorId( $id3 );

		// calcular diferenças
	    if ($round > 0) {
	        // diferenças 1
	        if ( (float)$mbrin>$cao1["brincalhao"] ) {
	            $difbrin1 = (float)$mbrin - $cao1["brincalhao"];
	        } else {
	            $difbrin1 = $cao1["brincalhao"] - (float)$mbrin;
	        }
	        if ( (float)$mpeso>$cao1["peso"] ) {
	            $difpeso1 = (float)$mpeso - $cao1["peso"];
	        } else {
	            $difpeso1 = $cao1["peso"] - (float)$mpeso;
	        }
	        if ( (float)$magre>$cao1["agressividade"] ) {
	            $difagre1 = (float)$magre - $cao1["agressividade"];
	        } else {
	            $difagre1 = $cao1["agressividade"] - (float)$magre;
	        }
	        if ( (float)$magil>$cao1["agilidade"] ) {
	            $difagil1 = (float)$magil - $cao1["agilidade"];
	        } else {
	            $difagil1 = $cao1["agilidade"] - (float)$magil;
	        }
	        if ( (float)$mobed>$cao1["obediencia"] ) {
	            $difobed1 = (float)$mobed - $cao1["obediencia"];
	        } else {
	            $difobed1 = $cao1["obediencia"] - (float)$mobed;
	        }

	        // diferenças 2
	        if ( (float)$mbrin>$cao2["brincalhao"] ) {
	            $difbrin2 = (float)$mbrin - $cao2["brincalhao"];
	        } else {
	            $difbrin2 = $cao2["brincalhao"] - (float)$mbrin;
	        }
	        if ( (float)$mpeso>$cao2["peso"] ) {
	            $difpeso2 = (float)$mpeso - $cao2["peso"];
	        } else {
	            $difpeso2 = $cao2["peso"] - (float)$mpeso;
	        }
	        if ( (float)$magre>$cao2["agressividade"] ) {
	            $difagre2 = (float)$magre - $cao2["agressividade"];
	        } else {
	            $difagre2 = $cao2["agressividade"] - (float)$magre;
	        }
	        if ( (float)$magil>$cao2["agilidade"] ) {
	            $difagil2 = (float)$magil - $cao2["agilidade"];
	        } else {
	            $difagil2 = $cao2["agilidade"] - (float)$magil;
	        }
	        if ( (float)$mobed>$cao2["obediencia"] ) {
	            $difobed2 = (float)$mobed - $cao2["obediencia"];
	        } else {
	            $difobed2 = $cao2["obediencia"] - (float)$mobed;
	        }

	        // diferenças 3
	        if ( (float)$mbrin>$cao3["brincalhao"] ) {
	            $difbrin3 = (float)$mbrin - $cao3["brincalhao"];
	        } else {
	            $difbrin3 = $cao3["brincalhao"] - (float)$mbrin;
	        }
	        if ( (float)$mpeso>$cao3["peso"] ) {
	            $difpeso3 = (float)$mpeso - $cao3["peso"];
	        } else {
	            $difpeso3 = $cao3["peso"] - (float)$mpeso;
	        }
	        if ( (float)$magre>$cao3["agressividade"] ) {
	            $difagre3 = (float)$magre - $cao3["agressividade"];
	        } else {
	            $difagre3 = $cao3["agressividade"] - (float)$magre;
	        }
	        if ( (float)$magil>$cao3["agilidade"] ) {
	            $difagil3 = (float)$magil - $cao3["agilidade"];
	        } else {
	            $difagil3 = $cao3["agilidade"] - (float)$magil;
	        }
	        if ( (float)$mobed>$cao3["obediencia"] ) {
	            $difobed3 = (float)$mobed - $cao3["obediencia"];
	        } else {
	            $difobed3 = $cao3["obediencia"] - (float)$mobed;
	        }
	    }

		$nroselects1 = qtdeSelecionado( $id1 );
	    $nroselects2 = qtdeSelecionado( $id2 );
	    $nroselects3 = qtdeSelecionado( $id3 );

	    if ((int)$nroselects1 > (int)$nroselects2) {
	    	if ((int)$nroselects1 > (int)$nroselects3) {
	    	  	return $cao1;
	    	}     	        
	    } elseif ((int)$nroselects2 > (int)$nroselects1) { 
	    	if ((int)$nroselects2 > (int)$nroselects3) {
	    		return $cao2;
	    	}
	        
	    } elseif ((int)$nroselects3 > (int)$nroselects1) {
	    	if ((int)$nroselects3 > (int)$nroselects2) {
	    		return $cao3;
	    	}
	        
	    }
	    	$diftotal1=$difbrin1+$difpeso1+$difagre1+$difagil1+$difobed1;
		    $diftotal2=$difbrin2+$difpeso2+$difagre2+$difagil2+$difobed2;
		    $diftotal3=$difbrin3+$difpeso3+$difagre3+$difagil3+$difobed3;

		    if ($diftotal1 < $diftotal2 && $diftotal1 < $diftotal3) {
		        return $cao1;
		    } elseif ($diftotal2 < $diftotal1 && $diftotal2 < $diftotal3) {
		        return $cao2;
		    } elseif ($diftotal3 < $diftotal1 && $diftotal3 < $diftotal2) {
		        return $cao3;
		    }
	    
	}

	function selectCachorroPorId($cachorro_id){
		$banco = abrirBanco();
		$sql = "SELECT * from cachorros WHERE cachorro_id=".$cachorro_id;
		$resultado = $banco->query($sql);
		$banco->close();
		$dog = mysqli_fetch_assoc($resultado);
		return $dog;
	}

	function qtdeCachorros(){
		$banco = abrirBanco();
		$sql = "SELECT * from cachorros";
		$resultado = $banco->query($sql);
		$banco->close();
		$num_rows = mysqli_num_rows($resultado);
		return $num_rows;
	}

	function addSelecionado($cachorro_id){
		$banco = abrirBanco();
		$sql = "INSERT INTO selecionados (selecionado) VALUES (".$cachorro_id.")";
		$banco->query($sql);
		$banco->close();
		return 1;
	}

	function qtdeSelecionado($cachorro_id){
		$banco = abrirBanco();
		$sql = "SELECT COUNT(selecionado) from selecionados WHERE selecionado=".$cachorro_id;
		$resultado = $banco->query($sql);
		// $banco->close();
		// $num_rows = mysqli_num_rows($resultado);
		return $resultado;
	}

	function qtdeSelecionado2($cachorro_id){
		$banco = abrirBanco();
		//$sql = "SELECT COUNT(selecionado) from selecionados WHERE selecionado=".$cachorro_id;
		$sql = "SELECT * from selecionados WHERE selecionado=".$cachorro_id;
		$resultado = $banco->query($sql);
		$banco->close();
		$num_rows = mysqli_num_rows($resultado);
		return $num_rows;
	}

	function voltarMain(){
		header("location: racacaes.php");
	}

	function voltarIndex(){
		header("location: ../index.php");
	}
