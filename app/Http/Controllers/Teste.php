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
        DB::table('socios')->where('nome','carlos')->delete();

      
        
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