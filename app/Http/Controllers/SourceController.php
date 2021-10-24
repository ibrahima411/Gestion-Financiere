<?php

namespace App\Http\Controllers;

use App\Models\Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class SourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $source = Source::orderBy('created_at', 'desc')->paginate(20);
        return View('client.source.index', compact('source'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return View('client.source.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $source = Source::create([
            'libelle' => $request->libelle,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);
        if($request->hasFile('photo_source')){
            $photo = $request->photo_source;
            $image_new_name = time() . '.' . $photo->getClientOriginalExtension();
            $image_resize = Image::make($photo->getRealPath());
            $image_resize->resize(800, 500);
            $image_resize->save(public_path('public/storage/source/' .$image_new_name));
            $source->photo_source = '/public/storage/source/'.$image_new_name;
            }

            $source->save();
            Session::flash('success', 'Une nouvelle Source d\'Argent vient d\'être crée avec succès');

            return redirect()->route('source.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = Source::find($id);
        return view('client.source.edit', compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $source = Source::find($id);

        if($request->hasFile('photo_source')){
            $photo = $request->photo_source;
            $image_new_name = time() . '.' . $photo->getClientOriginalExtension();
            $image_resize = Image::make($photo->getRealPath());
            $image_resize->resize(800, 500);
            $image_resize->save(public_path('public/storage/source/' .$image_new_name));
            $source->photo_source = '/public/storage/source/'.$image_new_name;
            }


            $source->libelle = $request->libelle;
            $source->description = $request->description;
            $source->user_id = Auth::id();

            $source->save();
            Session::flash('success', 'Source vient d\'être modifié avec succès');

            return redirect()->route('source.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source = Source::find($id);
        $source->delete();

        return redirect()->route('source.index');
    }
}
