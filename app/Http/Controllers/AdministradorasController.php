<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administradoras;

class AdministradorasController extends Controller
{
   private $ObjAdm;
   
   public function __construct()
    {
        $this->ObjAdm =new Administradoras();
    }
    public function index()
    {
        $adm=$this->ObjAdm ->all();
        return view('portal.administradoras.index',compact('adm'));
    }
}
