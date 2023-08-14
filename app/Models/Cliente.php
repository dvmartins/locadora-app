<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function rules() {
        return [
            'nome' => 'required|unique:clientes,nome,'.$this->id.'|min:3',
            'cpf'  => 'required|integer|unique:clientes,cpf,'.$this->id.'|min:11'
        ];
    }
}
