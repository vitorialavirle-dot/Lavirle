
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Calculadora</title>
</head>
<body>
    <h1>Calculadora em PHP</h1>

    <form method="POST">
        <input type="number" name="numero1" placeholder="Primeiro número" required>
        <input type="number" name="numero2" placeholder="Segundo número" required>
        <button type="submit">Somar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $n1 = filter_input(INPUT_POST, "numero1", FILTER_VALIDATE_FLOAT);
        $n2 = filter_input(INPUT_POST, "numero2", FILTER_VALIDATE_FLOAT);

        if ($n1 !== false && $n1 !== null && $n2 !== false && $n2 !== null) {
            $resultado = $n1 + $n2;
            echo "<h2>Resultado: $resultado</h2>";
        } else {
            echo "<p>Digite dois números válidos.</p>";
        }
    }
    ?>
</body>
</html>
