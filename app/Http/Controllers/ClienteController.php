<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ClienteController extends Controller
{

    public function index()
    {
        return view('clients.index');
    }
    public function show(Cliente $client)
    {
        return view('clients.show')->with('client', $client);
    }
    public function showAll() 
    {
        return view('clients.showAll')->with('clients', Cliente::all());
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all()); 
        session()->flash('success','Cliente cadastrado com sucesso');
        return redirect(route('client.index'));

    }
    public function edit(Cliente $client)
    {
        return view('clients.edit')->with('client',$client);
    }
    public function update(Request $request, Cliente $client)
    {
        $client->update($request->all());
        session()->flash('success','Cliente cadastrado com sucesso');
        return redirect(route('client.showAll'));
    }

    public function destroy(Cliente $client)
    {
        $client->delete();
        session()->flash('danger', 'Cliente apagado com sucesso!');
        return redirect(route('client.showAll'));
    }

    

}
