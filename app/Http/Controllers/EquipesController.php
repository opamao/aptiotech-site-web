<?php

namespace App\Http\Controllers;

use App\Models\Equipes;
use Illuminate\Http\Request;

class EquipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipes = Equipes::all();
        return view('admin.equipe.equipe', compact('equipes'));
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
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
        ];
        $customMessages = [
            'avatar.required' => "Vous devez sélectionner la photo.",
            'nom.required' => "Vous devez saisir son nom.",
            'prenom.required' => "Vous devez saisir son prénom.",
            'poste.required' => "Vous devez saisir son poste.",
        ];
        $request->validate($roles, $customMessages);

        $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
        $imageLogo = 'equipe_web_' . time() . '_' . '.' . $fileLogoWithExtension;
        $request->file('avatar')->move(public_path('/equipes'), $imageLogo);

        $equipe = new Equipes();
        $equipe->photo_equip = $imageLogo;
        $equipe->nom_equip = $request->nom;
        $equipe->prenom_equip = $request->prenom;
        $equipe->poste_equip = $request->poste;

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
            'nom' => 'required',
            'prenom' => 'required',
            'poste' => 'required',
        ];
        $customMessages = [
            'nom.required' => "Vous devez saisir son nom.",
            'prenom.required' => "Vous devez saisir son prénom.",
            'poste.required' => "Vous devez saisir son poste.",
        ];
        $request->validate($roles, $customMessages);

        if ($request->avatar != null) {

            $equipe = Equipes::findOrFail($id);
            $imagePath = public_path('equipes/' . $equipe->image_equip);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
            $imageLogo = 'equipe_web_' . time() . '_' . '.' . $fileLogoWithExtension;
            $request->file('avatar')->move(public_path('/equipes'), $imageLogo);

            Equipes::where('idequip', $id)
                ->update([
                    'photo_equip' => $imageLogo,
                    'nom_equip' => $request->nom,
                    'prenom_equip' => $request->prenom,
                    'poste_equip' => $request->poste,
                ]);

            return back()->with('succes', "La modification a été effectué");
        } else {
            Equipes::where('idequip', $id)
                ->update([
                    'nom_equip' => $request->nom,
                    'prenom_equip' => $request->prenom,
                    'poste_equip' => $request->poste,
                ]);

            return back()->with('succes', "La modification a été effectué");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipe = Equipes::findOrFail($id);
        $imagePath = public_path('equipes/' . $equipe->image_equip);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $equipe->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
