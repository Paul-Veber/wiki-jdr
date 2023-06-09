<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
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
        $folder = Folder::create([
            'name' => $request->input('name'),
            'name' => $request->input('folder_id'),
        ]);

        return $folder;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $folder = Folder::find($id)->with('folders', 'documents')->get();

        return $folder;
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
                $folder = Folder::findOrFail($id);
        $folderToUpdate = $folder
            ->update([
                'name' => $request->input('name') ?? $folder->name,
                'folder_id' => $request->input('folder_id') ?? $folder->folder_id,
            ]);

        return $folderToUpdate;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $document = Folder::destroy($id);
        $destroyError = 0;

        $message = $document === $destroyError ? "ereur: La star n'a pas été suprimé" : "success: La star a été suprimé";

        return $message;
    }
}
