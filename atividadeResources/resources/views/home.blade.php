<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="/users/create" >Cadastrar Usuário</a>
                </li>
                <li>
                    <a href="/users/edit"  >Editar Usuário</a>
                </li>
                <li>
                    <a href="/users/delete"  >Apagar Usuário</a>
                </li>
            </ul>
        </nav>
    </header>
   
    @foreach ($users as $user)

        <p>ID: {{$user['id']}}</p>
        <p>Nome: {{$user['name']}}</p>
        <p>Email: {{$user['email']}}</p>
        <p>Idade: {{$user['age']}}</p>

    @endforeach
</body>
</html>