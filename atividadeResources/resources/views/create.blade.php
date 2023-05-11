<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h4>Cadastro</h4>
    <form action="/users" method="post">
        @csrf
        <label>Nome:</label>
        <br>
        <input type="text"  id="name" name="name">
        <br>
        <label>E-mail:</label>
        <br>
        <input type="text"  id="email" name="email">
        <br>
        <label>Idade:</label>
        <br>
        <input type="number"  id="age" name="age">
        
        <input type="submit" value="Cadastrar" >
    </form>
    
</body>
</html>