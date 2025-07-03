<?php



namespace App\Http\Controllers;

use App\Models\Socios as ModelsSocios;
use Illuminate\Http\Request;




use Illuminate\Support\Facades\DB;
use Socios;

class Teste extends Controller
{
    public function index()
      {

        return view('home');  
        
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