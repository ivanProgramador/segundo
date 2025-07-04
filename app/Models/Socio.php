<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Socio extends Model
{
   protected $table = 'socios'; // Define o nome da tabela se for diferente do plural do nome do modelo

   protected $fillable = ['nome','telefone']; // Campos que podem ser preenchidos em massa

}