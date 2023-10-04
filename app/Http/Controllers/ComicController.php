<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $dati = Comic::all();

        return view("comics.index", ["comics" => $dati]);
    }



    public function show($id)
    {
        $selected_comic = Comic::findOrFail($id);

        return view("comics.show", ["selected_comic" => $selected_comic]);
    }

    public function create(){
        return view("comics.create");
    }



    public function store(Request $request){
        $data = $request->all();

        $data['artists'] = explode(",", $data["artists"]);
        $data['writers'] = explode(",", $data["writers"]);

        $comic = new Comic();

        $comic->fill($data);

        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }


    public function edit($id){

        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact($comic));
    } 


    public function update(Request $request, $id){
        $comic = Comic::findOrFail($id);

        $newComic = $request->all();

        $comic->update($newComic);

        return redirect()->route("comics.show", $comic->id);

    }

    public function destroy($id){

        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route("comics.index");
    }
}
