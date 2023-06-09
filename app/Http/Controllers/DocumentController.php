<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

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
        $document = Document::create([
            'name' => $request->input('name'),
            'name' => $request->input('text'),
            'name' => $request->input('folder_id'),
        ]);

        return $document;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $document = Document::findOrFail($id);

        return $document;
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
        $document = Document::findOrFail($id);
        $documentToUpdate = $document
            ->update([
                'name' => $request->input('name') ?? $document->name,
                'text' => $request->input('text') ?? $document->text,
                'folder_id' => $request->input('folder_id') ?? $document->folder_id,
            ]);

        return $documentToUpdate;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Document::destroy($id);
        $destroyError = 0;

        $message = $document === $destroyError ? "ereur: La star n'a pas été suprimé" : "success: La star a été suprimé";

        return $message;
    }
}
