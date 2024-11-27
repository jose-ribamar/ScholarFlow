<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <!-- Link para CSS externo (opcional) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            text-align: center; /* Centraliza o texto */
            padding: 8px; /* Espaço interno para melhorar aparência */
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Lista de Estudantes</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($students as $value)
            <tr>
                <td>{{ $value->user->name ?? 'Nome não disponível' }}</td>
                <td>{{ $value->user->cpf ?? 'CPF não disponível' }}</td>
                <td>{{ $value->user->date_of_birth ?? 'Data de nascimento não disponível' }}</td>
                <td>{{ $value->user->email ?? 'Email não disponível' }}</td>
                <td>
                    <a href="###" class="btn btn-primary">Editar</a>
                    <form action="###" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</body>
</html>
