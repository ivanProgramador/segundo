<?php



namespace App\Http\Controllers;

use App\Models\Socios as ModelsSocios;
use Carbon\Carbon;
use Illuminate\Http\Request;




use Illuminate\Support\Facades\DB;
use Socios;

class Teste extends Controller
{
    public function index()
      {
         // aqui o processo e bem simples 
         //so tem uma novidade que seria a classe carbon que possui varias funcvionalizades que ajudam com data/hora 

         DB::table('socios')->insert([
            'nome'=>'Bruno',
            'Telefone'=>'8577776666',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
         ]);

        //return view('home');  
        
       }

     public function contatos()
        {
            return view('contatos');
        }

    public function servicos()
    {
        return view('servicos');
    }
}