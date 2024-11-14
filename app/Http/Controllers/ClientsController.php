<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('admin.clients.clients', compact('clients'));
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
            'avatar' => 'required',
        ];
        $customMessages = [
            'avatar.required' => "Vous devez sélectionner le client.",
        ];
        $request->validate($roles, $customMessages);

        $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
        $imageLogo = 'client_web_' . time() . '_' . '.' . $fileLogoWithExtension;
        $request->file('avatar')->move(public_path('/clients'), $imageLogo);

        $client = new Clients();
        $client->image_cli = $imageLogo;

        if ($client->save()) {
            return back()->with('succes',  "Le client a été ajoué");
        } else {
            return back()->withErrors(["Impossible d'ajouter le client'. Veuillez réessayer!!"]);
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
        $client = Clients::findOrFail($id);
        $imagePath = public_path('clients/' . $client->image_cli);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $client->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
