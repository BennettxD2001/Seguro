<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación Docente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Evaluación Docente</h1>

    <!-- Formulario para subir archivos de evaluación -->
    <form action="procesar_evaluacion.php" method="post" enctype="multipart/form-data">
        <label for="evidence">Subir Evaluación (PDF):</label>
        <input type="file" name="evidence" accept=".pdf" required>
        <br>
        <small>Tamaño máximo: 2MB</small>
        <br>
        <button type="submit">Subir Evaluación</button>
    </form>
</body>
</html>
