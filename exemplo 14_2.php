<html>
<head>
<meta charset="utf-8" />
</head>
<body>
<h1> Exemplo 14_2</h1>
<?php
function testeGlobal(){
global $a;
$a=25;
}
echo "<h1> Variável Global </h1>";
$a = 0;
testeGlobal();
echo "Valor dá variável a = $a";
?>
</body>
</html>