<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Client; // Assuming the model is named Client
use App\Models\User; // Assuming the model is named Client


class AuthRoleController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return response()->json([$user]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }


    public function Accesso()
    {
        $user = Auth::user();
        if ($user) {
            return response()->json(['true'], 401);;
        } else {
            return response()->json(['error' => 'Non autorizzato'], 401);
        }
    }

    public function getClientData()
    {
        $user = Auth::user();

        if ($user) {
            $userId = $user->id;
            $cliente = Client::find($userId); // Use Client model to find by ID

            if ($cliente) {
                return response()->json([$cliente]);
            } else {
                return response()->json(['error' => 'Cliente non trovato'], 404); // Handle client not found
            }
        } else {
            return response()->json(['error' => 'Non autorizzato'], 401);
        }

        
    }

}
