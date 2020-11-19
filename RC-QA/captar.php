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
	
}

$media=$soma/$Dim;
$trocou=true;
echo "<br>Array oordenado <br>";






while ($trocou) {
	$trocou=false;

for ($i=0; $i <$Dim-1; $i++) { 
	if ($num[$i]>$num[$i+1]) {
		$trocou=true;
		$troca=$num[$i];
		$num[$i]=$num[$i+1];
		$num[$i+1]=$troca;
		
	}
}
}
for ($i=0; $i <$Dim ; $i++) { 
	echo  $num[$i].'<br> ';	

}




foreach ($num as $chave => $num) {

	if ($pesquisar==$num) {
		$chave=$chave+1;
		echo "<br>";
		echo "O valor " .$pesquisar. " encontra-se na posicao " .$chave. " do vetor  <br>";
	}
	
}
echo "<br>A soma é: " .$soma. "<br>";
echo "O produto é: ".$produto. "<br>";
echo "A media é: ".$media;






 }






?>