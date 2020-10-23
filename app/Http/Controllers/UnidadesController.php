<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidades;

class UnidadesController extends Controller
{
   private $ObjUnidade;
   
   public function __construct()
    {
        $this->ObjUnidade =new Unidades();
    }
    public function index()
    {
        $unidades=$this->ObjUnidade ->all();
        return view('portal.unidades.index',compact('unidades'));
    }
    public function create()
    {
        return view('portal.unidades.create');
    }
}
