<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Metodo per mostrare la vista di login

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // tolgo
        // Implementa la logica di autenticazione qui se necessario

        // Logica per l'autenticazione...
        
        // Esempio di reindirizzamento dopo il login
        // Recupera tutti i prodotti dal database
        $products = Product::all();
        
        // Reindirizza all'elenco dei prodotti con i dati
        return view('products.index', compact('products'));

        // test
        // return redirect()->route('products.index');
    }

    //     // metto
    //     // Validazione dei dati di login
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     // Tentativo di login
    //     if (Auth::attempt($request->only('email', 'password'))) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('home');
    //     }

    //     // Se il login fallisce, reindirizza indietro con un errore
    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    // }

    // Metodo per effettuare il logout
    public function logout()
    {
        Auth::logout(); // Logout dell'utente
        
        return redirect()->route('login'); // Reindirizzamento alla pagina di login
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect()->route('login');
    // }
    
}
