<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;

//para executar consultas SQL é necessario importar a classe DB
use Illuminate\Support\Facades\DB;




class Teste extends Controller
{
    public function index()
        {
            //executando sql puro 
            //contando o total de registros na tabela socios
           // $resultado = DB::select("SELECT COUNT(*) total FROM socios");
           //retonando o registro e todos os dados 
           // print_r($resultado);


           //cadastrando um novo socio

           










           //consulta os socios 
           $resultado = DB::select("SELECT * FROM socios");
           
           foreach($resultado as $socio){

             echo '<p>'.$socio->nome.'</p>';

           }
        
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