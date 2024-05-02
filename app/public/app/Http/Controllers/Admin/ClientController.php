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
        $clients = Client::all();
        return view('admin.dashboard', compact('clients'));
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
    public function edit(Client $client, Role $roles)
    {
        $roles=Role::class;
        $user = auth()->user();
        $user_id=$user->id;
        $client = Client::findOrFail($user_id);

        // Verifica se l'utente autenticato sta modificando il suo operatore, se l'id non corrisponde a quello dell'utente loggato porta alla pagina d'errore
        if (!$user) {
            return response()->json(["errore"]);
        }

        return view('admin.clients.edit', compact('client','user','roles'));
    }

    /**
     * Aggiornamento di un cliente
     */
    public function update(UpdateclientRequest $request, Client $client)
    {
        $validatedData = $request->validated();
    
        // Aggiorna solo i campi definiti in UpdateclientRequest
        $client->update($validatedData['client']);
    
        return redirect()->route('admin.dashboard');
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
