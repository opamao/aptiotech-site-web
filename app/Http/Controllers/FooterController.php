<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footer = Footer::all();
        return view('admin.footer.footer', compact('footer'));
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
            'libelle' => 'required',
            'lien' => 'required',
        ];
        $customMessages = [
            'libelle.required' => "Le libelle est obligatoire.",
            'lien.required' => "Le lien est obligatoire.",
        ];
        $request->validate($roles, $customMessages);

        $contact = new Footer();
        $contact->libelle_foot = $request->libelle;
        $contact->lien_foot = $request->lien;

        if ($contact->save()) {
            return back()->with('succes',  "Le lien a été ajoué");
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
            'libelle' => 'required',
            'lien' => 'required',
        ];
        $customMessages = [
            'libelle.required' => "Le libelle est obligatoire.",
            'lien.required' => "Le lien est obligatoire.",
        ];
        $request->validate($roles, $customMessages);

        Footer::where('idfoot', $id)
            ->update([
                'libelle_foot' => $request->libelle,
                'lien_foot' => $request->lien,
            ]);

        return back()->with('succes', "La modification a été effectué");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Footer::findOrFail($id)->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
