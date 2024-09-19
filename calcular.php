<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operacao'];

if ($op == 'adicao') {
    echo "O resultado desta adição é: " . ($num1 + $num2);
}
if ($op == 'subtracao') {
    echo "O resultado desta subtração é: " . ($num1 - $num2);
}
if ($op == 'multiplicacao') {
    echo "O resultado desta multiplicação é: " . ($num1 * $num2);
}
if ($op == 'divisao') {
    if ($num2 != 0) {
        echo "O resultado desta divisão é: " . ($num1 / $num2);
    } else {
        echo "Erro: Divisão por zero!";
    }
}
?>
