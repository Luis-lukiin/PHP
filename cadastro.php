<?php

$v1 = $_POST['valor_1'];
$v2 = $_POST['valor_2'];

$v1 = new DateTime($v1);
$v2 = new DateTime($v2);

$dia1 = $v1->diff($v2);
$dia2 = $v2->diff($v1);

echo "<h3>".("diferença de data")."</h3>"."<hr>";

echo ("A primeira data é: ");

echo $v1 ->format('d/m/Y')."<br>";

echo ("A segunda data é: ");

echo $v2 ->format("d/m/Y")."<br>";

echo ("Há uma diferença de ");

echo $dia1->days;

echo (" dias de um ao outro.")."<br>";

if ($v1->format("N")==1) $dia1 = "segunda-feira";
if ($v1->format("N")==2) $dia1 = "terça-feira";
if ($v1->format("N")==3) $dia1 = "quarta-feira";
if ($v1->format("N")==4) $dia1 = "quinta-feira";
if ($v1->format("N")==5) $dia1 = "sexta-feira";
if ($v1->format("N")==6) $dia1 = "sabado";
if ($v1->format("N")==7) $dia1 = "domingo";

if ($v2->format("N")==1) $dia2 = "segunda-feira";
if ($v2->format("N")==2) $dia2 = "terça-feira";
if ($v2->format("N")==3) $dia2 = "quarta-feira";
if ($v2->format("N")==4) $dia2 = "quinta-feira";
if ($v2->format("N")==5) $dia2 = "sexta-feira";
if ($v2->format("N")==6) $dia2 = "sabado";
if ($v2->format("N")==7) $dia2 = "domingo";

echo "<h3>".("dias da semana")."</h3>"."<hr>";
echo ("O primeiro dia é ");
echo $dia1."<br>";
echo ("O segundo dia é ");
echo $dia2."<br>";
