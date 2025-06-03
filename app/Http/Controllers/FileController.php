<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\File;

class FileController extends Controller
{
    public function index(){

    }

    public function upload(Request $request)
{
    $request->validate(['file' => 'required|file|max:204800']); // 200 MB per chunk max

    $path = $request->file('file')->store('uploads', 'public');

    return response()->json(['path' => $path]);
}

public function search(Request $request)
{
    $query = $request->get('query');
    $files = File::where('name', 'like', "%$query%")->get();
    return response()->json($files);
}

}
