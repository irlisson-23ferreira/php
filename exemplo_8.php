<html>
<Head>
</Head>
<body>
<?php
echo "<h2> Estrutura Condicional (swith) </h2>";
$dia=getdate();
echo "<br>";
switch ($dia['wday']){
case 5:
echo "finalmente Sexta";
break;
case 6:
echo "Super sábado";
break;
case 0:
echo "Domingo sonolento";
break;
case 2:
echo "aula de programação";
break;
default:
echo "estou esperando pelo início da greve";
}
?>
</body>
</html>
