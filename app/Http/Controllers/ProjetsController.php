<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projets::all();
        return view('admin.projets.projets', compact('projets'));
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
            'libelle' => 'required',
            'description' => 'required',
        ];
        $customMessages = [
            'avatar.required' => "Vous devez sélectionner la photo.",
            'libelle.required' => "Vous devez saisir le titre du projet.",
            'description.required' => "Vous devez saisir une bref description du projet.",
        ];
        $request->validate($roles, $customMessages);

        $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
        $imageLogo = 'projet_web_' . time() . '_' . '.' . $fileLogoWithExtension;
        $request->file('avatar')->move(public_path('/projets'), $imageLogo);

        $equipe = new Projets();
        $equipe->photo_pro = $imageLogo;
        $equipe->libelle_pro = $request->libelle;
        $equipe->descripton_pro = $request->description;

        if ($equipe->save()) {
            return back()->with('succes',  "Le slide a été ajoué");
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
            'description' => 'required',
        ];
        $customMessages = [
            'libelle.required' => "Vous devez saisir le titre du projet.",
            'description.required' => "Vous devez saisir une bref description du projet.",
        ];
        $request->validate($roles, $customMessages);

        if ($request->avatar != null) {

            $equipe = Projets::findOrFail($id);
            $imagePath = public_path('projets/' . $equipe->photo_pro);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
            $imageLogo = 'projet_web_' . time() . '_' . '.' . $fileLogoWithExtension;
            $request->file('avatar')->move(public_path('/projets'), $imageLogo);

            Projets::where('idpro', $id)
                ->update([
                    'photo_pro' => $imageLogo,
                    'libelle_pro' => $request->libelle,
                    'descripton_pro' => $request->description,
                ]);

            return back()->with('succes', "La modification a été effectué");
        } else {
            Projets::where('idpro', $id)
                ->update([
                    'libelle_pro' => $request->libelle,
                    'descripton_pro' => $request->description,
                ]);

            return back()->with('succes', "La modification a été effectué");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projet = Projets::findOrFail($id);
        $imagePath = public_path('projets/' . $projet->photo_pro);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $projet->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
