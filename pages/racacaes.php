<!DOCTYPE html>

<?php
	include ("conectar.php");
	$dados = getDados();
	$round = (int)$dados["rnd"];
    $totalrodadas = 20;

	// calcula medias
	$mbrin = (int)$dados["sbrin"] / $round;
	$mpeso = (float)$dados["speso"] / $round;
	$magre = (int)$dados["sagre"] / $round;
	$magil = (int)$dados["sagil"] / $round;
	$mobed = (int)$dados["sobed"] / $round;

    if($round > $totalrodadas){
        $percentual = ((int)$dados["correto"] / ($round - $totalrodadas))*100;
    }

	$qtde = qtdeCachorros();
	$numbers = range(1, $qtde-1); // $qtde = 62
	srand((float)microtime()*1000000);
	shuffle($numbers);

	$cao1 = selectCachorroPorId( $numbers[0] );
	$cao2 = selectCachorroPorId( $numbers[1] );
	$cao3 = selectCachorroPorId( $numbers[2] );

    $sugestao = getSugestao($numbers[0],$numbers[1],$numbers[2]);

    $qtd1 = qtdeSelecionado2($numbers[0]);
    $qtd2 = qtdeSelecionado2($numbers[1]);
    $qtd3 = qtdeSelecionado2($numbers[2]);

	$foto1 = "../imgs/".$cao1["foto"];
	$foto2 = "../imgs/".$cao2["foto"];
	$foto3 = "../imgs/".$cao3["foto"];
?>

<head>
    <meta charset="utf-8">
    <title>Raças de cães</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <style type="text/css">
        td:hover {
        	background-color: green;
        }
        td {
        	font-size: 22px;
        	font-family: "Courier New", Monospace;
        	margin-left: auto;
			margin-right: auto;
        }
 
    </style>
    <header>
		<h5 class="btn"><?php echo "Round: "; echo $round;?></h5><?php
		echo "$numbers[0] "; echo "$numbers[1] "; echo "$numbers[2]";
        //echo " / $qtd1 "; echo "$qtd2 "; echo "$qtd3";

		if($round >= 5){ ?>
			<input float="left" type="submit" value="Sugestão" onclick="mostrarSugestao()" />
		<?php } ?>
		<!-- <a href="../index.php" width="16%" height="20%" align="right" class="btn gray">Salvar</a> -->
		<a href="../index.php" width="16%" height="20%" align="right" class="btn gray">Voltar</a>
	</header>
</head>

<body>
	
    <table align="center" border="1">
        <tr>
            <td>
                <table border="1">
			        <tr>
                        <td align="center"><b><?=$cao1["nome"]?></b></td>
                    </tr>
                    <tr>
                        <td><img src="<?=$foto1?>" width="275" height="275"></td>
                    </tr>
                    <tr>
                        <td><b>Brincalhão: <?=$cao1["brincalhao"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Peso (Kg): <?=$cao1["peso"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agressividade: <?=$cao1["agressividade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agilidade: <?=$cao1["agilidade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Obediência: <?=$cao1["obediencia"]?></b></td>
                    </tr>
                    <tr>
                        <td align='center'>
              				<form method="POST">
                                <input type="hidden" value="<?=$cao1["cachorro_id"]?>" name="escolhido" />
                                <input type="hidden" value="<?=$cao2["cachorro_id"]?>" name="outro1" />
								<input type="hidden" value="<?=$cao3["cachorro_id"]?>" name="outro2" />
								<button type="submit">Selecionar</button>
							</form>
                        </td>
                    </tr>
                </table>
            </td>

            <td>
                <table border="1">
                    <tr>
                        <td align="center"><b><?=$cao2["nome"]?></b></td>
                    </tr>
                    <tr>
                        <td><img src="<?=$foto2?>" width="275" height="275"></td>
                    </tr>
                    <tr>
                        <td><b>Brincalhão: <?=$cao2["brincalhao"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Peso (Kg): <?=$cao2["peso"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agressividade: <?=$cao2["agressividade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agilidade: <?=$cao2["agilidade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Obediência: <?=$cao2["obediencia"]?></b></td>
                    </tr>
	                <tr>
                        <td align='center' width="150px">
                           	<form method="POST">
								<!--<input type="hidden" value="<?=$cao2["cachorro_id"]?>" name="atualizarMedias" />-->
                                <input type="hidden" value="<?=$cao1["cachorro_id"]?>" name="outro1" />
                                <input type="hidden" value="<?=$cao2["cachorro_id"]?>" name="escolhido" />
                                <input type="hidden" value="<?=$cao3["cachorro_id"]?>" name="outro2" />
								<button type="submit">Selecionar</button>
							</form>
                        </td>
                    </tr>
                </table>
            </td>

            <td>
                <table border="1">
                    <tr>
                        <td align="center"><b><?=$cao3["nome"]?></b></td>
                    </tr>
                    <tr>
                        <td><img src="<?=$foto3?>" width="275" height="275"></td>
                    </tr>
                    <tr>
                        <td><b>Brincalhão: <?=$cao3["brincalhao"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Peso (Kg): <?=$cao3["peso"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agressividade: <?=$cao3["agressividade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Agilidade: <?=$cao3["agilidade"]?></b></td>
                    </tr>
                    <tr>
                        <td><b>Obediência: <?=$cao3["obediencia"]?></b></td>
                    </tr>
                    <tr>
                        <td align='center'>
                        	<form method="POST">
								<!--<input type="hidden" value="<?=$cao3["cachorro_id"]?>" name="atualizarMedias" />-->
                                <input type="hidden" value="<?=$cao1["cachorro_id"]?>" name="outro1" />
                                <input type="hidden" value="<?=$cao2["cachorro_id"]?>" name="outro2" />
                                <input type="hidden" value="<?=$cao3["cachorro_id"]?>" name="escolhido" />
								<button type="submit">Selecionar</button>
							</form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

<footer>
	<div id="container">
	    <div id="box-1" class="box">
	    	<?php
			if($round > 0){

				echo "<b><font color=\"#FF0000\">MÉDIAS:</font></b></br>";
		        echo "brincalhao: "; echo number_format($mbrin, 2, '.', '')."</br>";
		        echo "peso: "; echo number_format($mpeso, 2, '.', '')."</br>";
		        echo "agressividade: "; echo number_format($magre, 2, '.', '')."</br>";
		        echo "agilidade: "; echo number_format($magil, 2, '.', '')."</br>";
		        echo "obediencia: "; echo number_format($mobed, 2, '.', '');
			}
			?>
	    </div>
	    <div id="box-2" class="box">

	    </div>
	    <div id="box-3" class="box">
	    	<?php
			if($round >= $totalrodadas){
				echo "<b><font color=\"#FF0000\">ACURÁCIA DAS SUGESTÕES:</font></b></br>";
                echo "<div class='percentualacertos'>".number_format($percentual, 1, '.', '')."%</div>";
                echo "Acertos: "; echo (int)$dados["correto"]." / ";
                echo "Palpites: "; echo ($round - $totalrodadas);
			}
			?>
	    </div>
	</div>

</footer>

<script type="text/javascript">
	function mostrarSugestao(){
		<?php
        echo 'alert("'.addslashes($sugestao["nome"]).'");';
	    ?>
	}

    document.addEventListener("keydown", function(e){
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)){
            e.preventDefault();
            mostrarSugestao();
        }
    }, false);
</script>
