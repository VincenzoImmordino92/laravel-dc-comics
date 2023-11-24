<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newComics = Comic::orderBy('id','desc')->paginate(10);
        return view('comics.index', compact('newComics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comic_form_data = $request->all();

        $form_new_comic = new Comic();

       /*  $form_comic->title = $comic_form_data['title'];

        $form_comic->description = $comic_form_data['description'];
        $form_comic->thumb = $comic_form_data['thumb'];
        $form_comic->price = $comic_form_data['price'];
        $form_comic->series = $comic_form_data['series'];
        $form_comic->sale_date = $comic_form_data['sale_date'];
        $form_comic->type = $comic_form_data['type'];
        $form_comic->artists = $comic_form_data['artists'];
        $form_comic->writers = $comic_form_data['writers']; */

        $comic_form_data['slug'] = Comic::generateSlug($comic_form_data['title']);
        $form_new_comic->fill($comic_form_data);

        $form_new_comic->save();

        return redirect()->route('comics.show',$form_new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
       /*  $comic = Comic::where('slug',$id)->first(); */
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_modifica_data = $request->all();

        if($comic->title === $form_modifica_data['title']){
            $form_modifica_data['slug'] = $comic->slug;
        }else{
        $form_modifica_data['slug'] = Comic::generateSlug($form_modifica_data['title']);
        }
        $comic->update($form_modifica_data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
