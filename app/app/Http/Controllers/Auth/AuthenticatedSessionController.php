<?php

namespace App\Http\Controllers\Auth;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
/*         $request->authenticate();
    
        $request->session()->regenerate();
    
        // Get the authenticated user
      
        $user = auth()->user();
        $user_id=$user->id;
        $cliente=Client::findOrFail($user_id) ;
    
        // Increment client's punti (assuming $user has a 'punti' attribute)
        $cliente->punti++;
        $cliente->save();
    
        // Optional: Dispatch notification (implement logic if using trait)
        if (method_exists($this, 'dispatchLoginNotification')) {
            $this->dispatchLoginNotification($user);
        }
    
        return redirect()->intended(RouteServiceProvider::HOME); */

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
