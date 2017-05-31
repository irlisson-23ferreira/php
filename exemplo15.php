<html>
<Head>
<meta charset="utf-8"/>
</Head>
<body>
<?php
function mais5($numero){
$numero += 5;
}
echo "<h1>*****Passagem de parâmetro</h1>";
$a=3;
mais5($a);
echo "valor da variável a = $a <br>";
?>
</body>
</html>