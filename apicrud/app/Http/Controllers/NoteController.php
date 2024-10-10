<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    
    public function index():JsonResource
    {
       
        //return response()->json(Note::all(), 200);
        return NoteResource::collection(Note::all());
    }

   
    public function store(NoteRequest $request):JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $note
        ],201); //el 201 indica que un nuevo elemento ha sido creado en el servicio
    }

    public function show($id):JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

    public function update(NoteRequest $request, $id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success'=> true,
            'data' => $note
        ],200);

    }

 
    public function destroy($id):JsonResponse
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ],200);
    }
}
