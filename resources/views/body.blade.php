<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('Body.store')}}" method="POST" enctype="multipart/form-data">
   
   @csrf
  
   <label>
       Ingresa tu denominacion:
       <br>
       <input type="text" name="denomination">
   </label>
   <br><br>
  
  
   <br><br>
  
   <button type="submit">Enviar Formulario:</button>
  
   </form>
</body>
</html>