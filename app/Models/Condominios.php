<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominios extends Model
{
    protected $table="condominios";
    protected $fillable=['name','email','telefone','endereco','numero','complemento','cidade','estado'];
}
