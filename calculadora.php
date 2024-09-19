<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="post" action="calcular.php">
        <input type="number" name="num1" placeholder="Número 1" required>
        <select name="operacao">
            <option value="adicao">Adição</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
        <input type="number" name="num2" placeholder="Número 2" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
