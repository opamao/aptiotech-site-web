<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slides::all();
        return view('admin.accueil.slide', compact('slides'));
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
            'avatar.required' => "Vous devez sélectionner le slide.",
        ];
        $request->validate($roles, $customMessages);

        $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
        $imageLogo = 'slide_web_' . time() . '_' . '.' . $fileLogoWithExtension;
        $request->file('avatar')->move(public_path('/slides'), $imageLogo);

        $slides = new Slides();
        $slides->image_slide = $imageLogo;

        if ($slides->save()) {
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
            'avatar' => 'required',
        ];
        $customMessages = [
            'avatar.required' => "Nom entreprise obligatoire",
        ];
        $request->validate($roles, $customMessages);

        if ($request->avatar != null) {
            $fileLogoWithExtension = $request->file('avatar')->getClientOriginalName();
            $imageLogo = 'slide_web' . time() . '_' . '.' . $fileLogoWithExtension;
            $request->file('avatar')->move(public_path('/slides'), $imageLogo);

            Slides::where('idslide', $id)
                ->update([
                    'image_slide' => $request->avatar,
                ]);

            return back()->with('succes', "La modification a été effectué");
        } else {
            return back()->withErrors(["Impossible de mettre a jour l'image."]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = Slides::findOrFail($id);

        $imagePath = public_path('slides/' . $slide->image_slide);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $slide->delete();

        return back()->with('succes', "La suppression a été effectué");
    }
}
