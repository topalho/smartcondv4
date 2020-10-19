<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boletos;

class BoletosController extends Controller
{
   private $Boletos;
   
   public function __construct()
    {
        $this->Boletos =new Boletos();
    }
    public function index()
    {
        $boletos=$this->Boletos ->all();
        return view('portal.boletos.index',compact('boletos'));
    }
}
