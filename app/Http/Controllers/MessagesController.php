<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Messages::all();

        return view('admin.contacts.message', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = [
            'phone' => '',
            'nom' => '',
            'email' => 'required',
            'message' => 'required',
        ];
        $customMessages = [
            'message.required' => "Veuillez entrer votre message",
            'email.required' => "Veuillez saisir votre adresse e-mail",
        ];
        $request->validate($roles, $customMessages);

        $equipe = new Messages();
        $equipe->nom_mes = $request->nom;
        $equipe->email_mes = $request->email;
        $equipe->phone_mes = $request->phone;
        $equipe->message_mes = $request->message;

        if ($equipe->save()) {
            return back()->with('succes',  "Votre message a été envoyé");
        } else {
            return back()->withErrors(["Impossible d'envoyer le message'. Veuillez réessayer!!"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Messages::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
