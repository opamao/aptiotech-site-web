<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contacts.contact', compact('contacts'));
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
            'email' => 'required',
            'phone' => 'required',
            'locale' => 'required',
            'date' => 'required',
            'mapping' => 'required',
        ];
        $customMessages = [
            'email.required' => "L'adresse e-mail est obligatoire.",
            'phone.required' => "Le numéro de téléphone est obligatoire.",
            'locale.required' => "La localisation est obligatoire.",
            'date.required' => "L'horaire de travail est obligaotire.",
            'mapping.required' => "Le lien de map de localisation est obligatoire.",
        ];
        $request->validate($roles, $customMessages);

        $contact = new Contacts();
        $contact->email_cont = $request->email;
        $contact->phone_cont = $request->phone;
        $contact->local_cont = $request->locale;
        $contact->travail_cont = $request->date;
        $contact->map_cont = $request->mapping;

        if ($contact->save()) {
            return back()->with('succes',  "Le contact a été ajoué");
        } else {
            return back()->withErrors(["Impossible d'ajouter le slide'. Veuillez réessayer!!"]);
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
        $roles = [
            'email' => 'required',
            'phone' => 'required',
            'locale' => 'required',
            'date' => 'required',
            'mapping' => 'required',
        ];
        $customMessages = [
            'email.required' => "L'adresse e-mail est obligatoire.",
            'phone.required' => "Le numéro de téléphone est obligatoire.",
            'locale.required' => "La localisation est obligatoire.",
            'date.required' => "L'horaire de travail est obligaotire.",
            'mapping.required' => "Le lien de map de localisation est obligatoire.",
        ];
        $request->validate($roles, $customMessages);

        Contacts::where('idcont', $id)
            ->update([
                'email_cont' => $request->email,
                'phone_cont' => $request->phone,
                'local_cont' => $request->locale,
                'travail_cont' => $request->date,
                'map_cont' => $request->mapping,
            ]);

        return back()->with('succes', "La modification a été effectué");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contacts::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
