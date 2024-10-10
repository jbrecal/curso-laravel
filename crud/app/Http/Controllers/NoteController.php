<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Note;
use Illuminate\View\View;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
  public function index(): View
  {
    $notes = Note::all();
    return view('note.index',compact('notes'));
  }

  //FUNCION CREATE
  public function create(): View
  {
    return view('note.create');
  }

  public function store(NoteRequest $request):RedirectResponse //al ser POST estamos recepcionando una petición que la pasamos como argumento
  {
    Note::create($request->all());
    return redirect()->route('note.index')->with('success', 'Note created');
  }


  public function edit(Note $note): View   //de esta forma refactorizamos código
  {
    return view('note.edit',compact('note'));  //le pasamos con el compact el note que hemos recepcionado para que ahora el formulario pueda ubicar cada uno de los valores que tiene para que el usuario pueda modificarlos
  }

    //FUNCION UPDATE

    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
       
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    //FUNCION SHOW
    public function show(Note $note): View
    {
        return view('note.show', compact('note'));
    }

    //FUNCION DELETE
    public function destroy(Request $request, Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
    }
}
