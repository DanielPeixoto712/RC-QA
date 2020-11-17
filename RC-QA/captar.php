<?php
if (isset($_POST['dimensao'])>0 && isset($_POST['inicio'])>0 && isset($_POST['fim'])) {
 
 	
$Dim=$_POST["dimensao"];
$In=$_POST["inicio"];
$Fi=$_POST["fim"];
$pesquisar=$_POST['valorp'];
$soma=0;
$produto=0;
$media=0;


echo "Valores do Array: ";
for ($i=0; $i <$Dim ; $i++) { 
	$num[$i]=rand(1,$Fi);
	echo  $num[$i].' ';	
	$soma=$soma+$num[$i];
	$produto=$soma*$num[$i];
	$media=$soma/$Dim;
}




foreach ($num as $chave => $num) {

	if ($pesquisar==$num) {
		$chave=$chave+1;
		echo "<br>";
		echo "O valor " .$pesquisar. " encontra-se na posicao " .$chave. " do vetor  <br>";
	}
	
}
echo "A soma é: " .$soma. "<br>";
echo "O produto é: ".$produto. "<br>";
echo "A media é: ".$media;





 }






?>