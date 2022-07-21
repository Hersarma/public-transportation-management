<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('fname', 'asc')->simplePaginate(10);
        return view('admin.clients.index', compact('clients'));
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = request()->validateWithBag('create_client', [

            'fname' => 'required',
            'lname' => 'required',
            'contact' => 'required',
            'passportId' => 'nullable|unique:clients',
            'personalId' => 'nullable|unique:clients',
            'personalIdNumber' => 'nullable|unique:clients'
        ]);

        Client::create($validate);

        return redirect(route('clients.index'))->with('crudMessage', 'Klijent uspešno kreiran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.clients.show', compact('client'));
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        if ($request['personalId'] == $client->personalId || $request['personalIdNumber'] == $client->personalIdNumber || $request['passportId'] == $client->passporId) {
            $validate = request()->validateWithBag('edit_client', [

            'fname' => 'required',
            'lname' => 'required',
            'contact' => 'required',
            'passportId' => 'nullable',
            'personalId' => 'nullable',
            'personalIdNumber' => 'nullable'
        ]);
        }else{
            $validate = request()->validateWithBag('edit_client', [

            'fname' => 'required',
            'lname' => 'required',
            'contact' => 'required',
            'passportId' => 'nullable|unique:clients',
            'personalId' => 'nullable|unique:clients',
            'personalIdNumber' => 'nullable|unique:clients'
        ]);
        }

        $client->update($validate);

        return redirect(route('clients.show', $client))->with('crudMessage', 'Klijent uspešno izmenjen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect(route('clients.index'))->with('crudMessage', 'Klijent uspešno obrisan');
    }
}
