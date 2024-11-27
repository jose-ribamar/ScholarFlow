<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- @endif --}}

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <div class="title">{{ __('Estudante') }}</div>
            </h2>
        </x-slot>
    
        <div class="container">
            <div class="turma-title">
                <span>
                   
                    <a href="{{ route('students.create')}}">
                        <i class="material-icons">add</i>
                    </a>
                </span>
            </div>
    
            <div class="table-container">
               @include('students._list')
            </div>
        </div>
    </x-app-layout>
    
    
</body>
</html>
