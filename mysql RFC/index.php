<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>web con mysql</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <form action="index.php" method="post">
            <label>nombre:</label>
            <input type="text" name="nombre"><br>
            <label>edad:</label>
            <input type="text" name="edad"><br>
            <label>sexo:</label>
            <select name="sexo">
                <option value="hombre">hombre</option>
                <option value="mujer">mujer</option>
            </select><br>
            <label>RFC:</label>
            <input type="text" name="rfc"><br>
            <input type="submit" value="guardar" name="button">
        </form>
        <table>
            <thead>
                <tr><th>nombre</th><th>edad</th><th>sexo</th><th>RFC</th></tr>
            </thead>
            <tbody id="tbody"></tbody>
        </table>
        <?php include "servidor.php";?>
    </body>
</html>