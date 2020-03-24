<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $videogames = Videogame::all();
      return view('videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
        'titolo' => 'required|string|max:255',
        'casa_produttrice' => 'required|string|max:255',
        'Codice' => 'required|string|max:255',
        'prezzo' => 'required|numeric|min:1|max:9999.99',
        'genere' => 'required|string',
        ]);

        $newVideogame = new Videogame;

        $newVideogame->fill($data);
        $saved = $newVideogame->save();

        if ($saved) {
            $videogame = Videogame::all()->last();
            return redirect()->route('videogames.show', compact('Videogame'));
        }
        dd('Non salvato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Videogame $videogame)
     {
         if(empty($videogame)) {
             abort('404');
         }

         return view('videogames.show', compact('videogame'));
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Videogame $videogame)
    {
        if (empty($videogame)) {
          abort('404');
        }
        return view('videogames.create', compact('videogame'));
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
      $videogame = Videogame::find($id);
      if(empty($videogame)) {
          abort('404');
      }

      $data = $request->all();
      $request->validate($this->validationShoe);
      $updated = $shoe->update($data);
      if ($updated) {
          $videogame = Videogame::find($id);
          return redirect()->route('videogames.show', compact('videogame'));
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Videogame $videogame)
    {
      $id = $videogame->id;
        $deleted = $videogame->delete();
        $data = [
            'id' => $id,
            'videogames' => Videogame::all()
        ];

        return view('videogames.index', $data);
    }
  }
