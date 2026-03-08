<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PartenaireController extends Controller
{
    //
    public function send(Request $request)
    {
       // Validation
        $request->validate([
            'nom'     => 'required|string|max:100',
            'prenom'  => 'required|string|max:100',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // Envoi email
        Mail::send('partenaire', $request->all(), function ($mail) use ($request) {
    $mail->to('adichad235@gmail.com')
         ->subject('Nouvelle demande de partenariat')
         ->replyTo($request->email);
});


        // Message de confirmation
        return redirect()
            ->back()
            ->with('success', 'Votre demande de partenariat a été envoyée avec succès.');
    }
}
