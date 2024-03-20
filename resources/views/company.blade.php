<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Formulario <h1/>
<form action="{{route('Company.store')}}" method="POST" enctype="multipart/form-data">
   
   @csrf
  
   <label>
       Ingresa tu actividad:
       <br>
       <input type="text" name="activity">
   </label>
   <br><br>
  
  
   <br><br>
  
   <button type="submit">Enviar Formulario:</button>
  
   </form>
</body>
</html>