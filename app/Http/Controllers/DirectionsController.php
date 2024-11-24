<?php

use App\Models\User;
use App\Models\Direction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

public function register(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|confirmed|min:6',
        'cpf' => 'required|string|size:11',
        'date_of_birth' => 'required|date',
    ]);

    DB::beginTransaction();

    try {
        // Criar o registro em `users`
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Criar o registro em `Directions`
        Direction::create([
            'name' => $data['name'],
            'cpf' => $data['cpf'],
            'date_of_birth' => $data['date_of_birth'],
            'email' => $data['email'],
            'created_by' => $user->id,
        ]);

        DB::commit();

        return redirect()->route('login')->with('success', 'Usuário registrado com sucesso!');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Erro ao registrar o usuário: ' . $e->getMessage());
    }
}
