En este archivo explicare por que este archivo es seguro contra la practica FileUpload

Primero que nada, en el repositorio procesamos los archivos subidos en "procesar_evaluacion.php"

Desde la primera linea de codigo que es:

```ruby
if ($_SERVER["REQUEST_METHOD"] == "POST")
```

Esto verifica si la solicitud al script es de tipo POST. En este caso, esperamos que los datos del formulario se envíen mediante el método POST.

```ruby
$target_file = $target_dir . uniqid() . basename($_FILES["evidence"]["name"]);
```

Garantiza que cada archivo subido tenga un nombre único. Esto es importante para evitar posibles colisiones de nombres, especialmente si varios usuarios suben archivos al mismo tiempo. uniqid() genera un identificador único basado en la marca de tiempo actual, lo que lo hace improbablemente repetitivo.

```ruby
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
```

Se obtiene la extensión del archivo (en minúsculas) para determinar su tipo MIME.

Aunque en el formulario HTML se especifica que solo se deben permitir archivos PDF (accept=".pdf"), la validación del tipo MIME proporciona una capa adicional de seguridad. Es posible que un usuario malintencionado intente subir un archivo con una extensión modificada para evadir las restricciones. Al verificar el tipo MIME, nos aseguramos de que el archivo realmente coincide con la extensión indicada.

```ruby
if ($_FILES["evidence"]["size"] > 2 * 1024 * 1024) { echo "El archivo es demasiado grande. Tamaño máximo permitido: 2MB."; } else { ... }
```

 Se verifica que el tamaño del archivo no supere los 2 Megabytes, que es lo necesario para subir una simple captura de pantalla en un PDF
