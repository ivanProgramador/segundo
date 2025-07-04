<?php



namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Socio;
use Socios;



class Teste extends Controller
{
    public function index()
    {
        $socios = Socio::where('nome','bruno')->get();

        foreach ($socios as $socio) {
            echo $socio->nome . '<br>';
        }

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