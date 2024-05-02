<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Client;
use App\Models\Role;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateclientRequest;




class ClientController extends Controller
{
    /**
     * Elenco dei clienti
     */
    public function index()
    {
        // Recupera l'utente connesso
        $user = auth()->user();
        $user_id=$user->id;
        $cliente=Client::findOrFail($user_id) ;
        $clienti = Client::all();
        $users = User::all();

        return view('admin.dashboard', compact('clienti',"cliente","users"));

    }
    
    
    /**
     * Visualizzazione di un cliente
     */
    public function show(User $user)
    {
        // Recupera l'utente connesso
        $user = auth()->user();
        $user_id=$user->id;
        $cliente=Client::findOrFail($user_id) ;
        
        
        // Visualizza i dettagli del cliente
        return view('admin.clients.show', compact('cliente','user'));
        return view('admin.admin', compact('cliente','user'));
    }
    
    
    /**
     * Salvataggio di un nuovo cliente
     */ 
    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return redirect()->route('clienti.index');
    }  
    
    /**
     * Creazione di un nuovo cliente
     */
/*     public function create()
    {
    } */

    /**
     * Modifica di un cliente
     */
    public function edit(Client $client)
    {
        // Display the edit form for the selected client
        return view('admin.clients.edit', compact('client'));
    }

    public function update(UpdateclientRequest $UpdateclientRequest, $client_id)
    {
        // Validate and update the client's points
        $validatedData = $UpdateclientRequest->validated();

        $client = Client::find($client_id);
        $client->update($validatedData['client']);

        $updatedPoints = $UpdateclientRequest->input('client.punti');
        $client->punti = $updatedPoints;
        $client->save();

        return redirect()->to(route('admin.clienti', $client_id));
    }
    
    
    

    /**
     * Eliminazione di un cliente
     */
/*     public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index');
    } */
}
