<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h1> Exemplo 14_3</h1>
<?php
function testeStatic(){
static $a =0;
$a+=25;
echo "Valor dá Variável a = $a <br>";
}
echo "<h1> Variável Estatística </h1>";
testeStatic();
testeStatic();
testeStatic();
?>
</body>
</html>