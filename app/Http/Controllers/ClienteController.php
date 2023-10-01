<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $clientes =[
        ['id'=>1, 'nome' => 'pedro'],
        ['id'=>2, 'nome' => 'joao']
];
    public function __construct()
    {   $clientes = session('clientes');
        if (!isset($clientes))
            session(['clientes' => $this->clientes]);

    }

    public function index()
    {
        $clientes = session('clientes');
        return view('clientes.index')-> with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $clientes = session('clientes');
        if( count($clientes)> 0){
            $id = end($clientes)['id'] + 1;
        }
        $id = count($clientes) + 1;
        $nome = $request->nome;
        $dados = ['id'=> $id, 'nome' => $nome];
        $clientes[] = $dados;
        session(['clientes'=> $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        $cliente = $clientes[$index];
        return view('clientes.edit', compact(['cliente']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
         $clientes[$index]['nome'] = $request->nome;
        session(['clientes'=> $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = session('clientes');
        $index = $this->getIndex($id, $clientes);
        array_splice($clientes, $index, 1);
        session(['clientes'=> $clientes]);
        return redirect()->route('clientes.index');

    }
    private function getIndex($id, $clientes){
        $ids = array_column($clientes, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
