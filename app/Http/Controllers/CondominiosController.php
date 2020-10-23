<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominios;

class CondominiosController extends Controller
{
    private $ObjCondominio;

    public function __construct()
    {
        $this->ObjCondominio = new Condominios();
    }
    public function index()
    {
        $condominios = $this->ObjCondominio->all();
        return view('portal.condominios.index', compact('condominios'));
    }
    public function create()
    {
        return view('portal.condominios. create');
    }
    public function store(Request $request)
    {
        $this->ObjCondominio->create([
            'name' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'endereco' => $request->endereco,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
        ]);
        return redirect('condominios/index');
    }
}
