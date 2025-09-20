<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Nuevo mensaje de contacto desde tu portafolio</h2>
    
    <p><strong>Nombre:</strong> {{ $contactData['nombre'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $contactData['telefono'] }}</p>
    <p><strong>Mensaje:</strong> {{ $contactData['mensaje'] }}</p>
    
    <hr>
    <p>Este mensaje fue enviado desde el formulario de contacto de tu portafolio.</p>
</body>
</html>