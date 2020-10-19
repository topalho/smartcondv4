<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominios;

class CondominiosController extends Controller
{
   private $ObjCondominio;
   
   public function __construct()
    {
        $this->ObjCondominio =new Condominios();
    }
    public function index()
    {
        $condominios=$this->ObjCondominio ->all();
        return view('portal.condominios.index',compact('condominios'));
    }
}
