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
}
