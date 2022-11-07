<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./resultado.php" method="post">
        <div class="form first">
            <div class="details personal">
                <span class="title">Departamento Piso Nº 1</span>
                <div class="fields">
                    <div class="input-field">
                        <label>Ingrese Lectura Anterior</label>
                        <input type="number" name="anterior1" step="any" required>
                </div>
                <div class="input-field">
                    <label>Ingrese Lectura Actual</label>
                    <input type="number" name="actual1" step="any" required>
                 </div>
            </div>
        </div>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>