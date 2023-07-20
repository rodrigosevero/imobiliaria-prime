<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocatarioRequest;
use App\Models\Locatario;
use Illuminate\Http\Request;

class LocatarioController extends Controller
{
    // ...

    public function create()
    {
        return view('locatarios.create');
    }

    public function store(LocatarioRequest $request)
    {
        $data = $request->all();

        // Verificar se os campos do cônjuge foram preenchidos e adicionar na requisição
        if (isset($data['nome_conjuge']) && isset($data['cpf_conjuge']) && isset($data['nacionalidade_conjuge'])) {
            $data['nome_conjuge'] = $data['nome_conjuge'];
            $data['cpf_conjuge'] = $data['cpf_conjuge'];
            $data['nacionalidade_conjuge'] = $data['nacionalidade_conjuge'];
        }

        Locatario::create($data);
        return redirect()->route('locatarios.index');
    }

    public function edit(Locatario $locatario)
    {
        return view('locatarios.edit', compact('locatario'));
    }

    public function update(LocatarioRequest $request, Locatario $locatario)
    {
        $data = $request->all();

        // Verificar se os campos do cônjuge foram preenchidos e adicionar na requisição
        if (isset($data['nome_conjuge']) && isset($data['cpf_conjuge']) && isset($data['nacionalidade_conjuge'])) {
            $locatario->nome_conjuge = $data['nome_conjuge'];
            $locatario->cpf_conjuge = $data['cpf_conjuge'];
            $locatario->nacionalidade_conjuge = $data['nacionalidade_conjuge'];
            $locatario->save();
        } else {
            $locatario->update($data);
        }

        return redirect()->route('locatarios.index');
    }
}
