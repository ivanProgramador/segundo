<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

//colocando os metodos nessa classe fica mais facil controlar os dados 

class Socios
{
     public function get_socios()
      {
        return DB::select("SELECT * FROM socios");
      }

     public function delete_all()
      {
        return DB::select("DELETE FROM socios");
      }


}
