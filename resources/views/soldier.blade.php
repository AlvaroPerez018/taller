<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario Soldier <h1>
<form action="{{route('Soldier.store')}}" method="POST" enctype="multipart/form-data">
   
   @csrf
  
   <label>
       Ingresa tu nombre:
       <br>
       <input type="text" name="name">
   </label>
   <br><br>

   <label>
       Ingresa tu apellido:
       <br>
       <input type="text" name="lastname">
   </label>
   <br><br>

   <br><br>

   <label>
       Ingresa tu grado:
       <br>
       <input type="text" name="degree">
   </label>
   <br><br>
  
   <button type="submit">Enviar Formulario:</button>
  
   </form>
</body>
</html>