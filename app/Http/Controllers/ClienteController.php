<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index()
    {
        
        $clients = DB::select('SELECT * from users where cliente = 1');
        return view('admin.cliente.index', ['clientes' => $clients]);
    }

    public function home()
    {
        
        return view('cliente.home');
    }
    
    public function create()
    {
        return view('cliente.create');
    }

    public function store(Request $request)
    {
        $client = new Cliente;
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->numero = $request->input('numero');
        $client->password = Hash::make($request->input('password'));
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Cliente::find($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Cliente::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = Cliente::find($id);
        $client->name = $request->input('name');
        $client->lastname = $request->input('lastname');
        $client->numero = $request->input('numero');
        if ($request->input('password') !== null) {
            $client->password = Hash::make($request->input('password'));
        }
        $client->save();

        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Cliente::find($id);
        $client->delete();

        return redirect()->route('clients.index');
    }
}
