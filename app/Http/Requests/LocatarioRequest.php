<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocatarioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome_completo' => 'required|string|max:255',
            'cpf' => 'required|string|unique:locatarios,cpf,' . $this->route('locatario'),
            'nacionalidade' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefone_fixo' => 'nullable|string|max:20',
            'telefone_celular' => 'nullable|string|max:20',
            'profissao' => 'nullable|string|max:255',
            'nome_conjuge' => 'nullable|string|max:255',
            'cpf_conjuge' => 'nullable|string|unique:locatarios,cpf_conjuge,' . $this->route('locatario'),
            'nacionalidade_conjuge' => 'nullable|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome_completo.required' => 'O campo Nome Completo é obrigatório.',
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.unique' => 'Este CPF já está em uso por outro locatário.',
            'nacionalidade.required' => 'O campo Nacionalidade é obrigatório.',
            'email.email' => 'Insira um endereço de e-mail válido.',
            'telefone_fixo.max' => 'O telefone fixo deve ter no máximo :max caracteres.',
            'telefone_celular.max' => 'O telefone celular deve ter no máximo :max caracteres.',
            'profissao.max' => 'A profissão deve ter no máximo :max caracteres.',
            'nome_conjuge.max' => 'O nome do cônjuge deve ter no máximo :max caracteres.',
            'cpf_conjuge.unique' => 'Este CPF do cônjuge já está em uso por outro locatário.',
            'nacionalidade_conjuge.max' => 'A nacionalidade do cônjuge deve ter no máximo :max caracteres.',
        ];
    }
}
