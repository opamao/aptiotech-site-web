<?php

namespace App\Http\Controllers;

use App\Models\Candidatures;
use Illuminate\Http\Request;

class CandidaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidatures = Candidatures::all();
        return view('admin.candidature.candidature', compact('candidatures'));
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
            'cv' => 'required',
            'nom' => 'required',
            'email' => 'required',
            'github' => '',
            'linkedin' => '',
            'message' => '',
        ];
        $customMessages = [
            'cv.required' => "Vous devez sélectionner votre CV.",
            'nom.required' => "Vous devez saisir votre nom",
            'email.required' => "Vous devez saisir votre adresse mail",
        ];
        $request->validate($roles, $customMessages);

        $fileLogoWithExtension = $request->file('cv')->getClientOriginalName();
        $imageLogo = 'cv_web_' . time() . '_' . '.' . $fileLogoWithExtension;
        $request->file('cv')->move(public_path('/candidats'), $imageLogo);

        $equipe = new Candidatures();
        $equipe->cv_cand = $imageLogo;
        $equipe->nom_cand = $request->nom;
        $equipe->email_cand = $request->email;
        $equipe->github_cand = $request->github;
        $equipe->linkedin_cand = $request->linkedin;
        $equipe->message_cand = $request->message;

        if ($equipe->save()) {
            return back()->with('succes',  "Votre candidature a été envoyé");
        } else {
            return back()->withErrors(["Impossible d'envoyer votre candidature. Veuillez réessayer!!"]);
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
        $equipe = Candidatures::findOrFail($id);
        $imagePath = public_path('candidats/' . $equipe->cv_cand);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
        $equipe->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
