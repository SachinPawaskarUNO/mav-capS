<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
use Auth;

class FileController extends Controller
{
    public function upload(Request $request) {
        $file = new File();
        $user = Auth::user();
        $file->user_id=$user->id;
        $file->original_filename = $request->file('file')->getClientOriginalName();
        $file->file_path = Storage::putFile('files', $request->file('file') );
        $file->save();
        return 'files/'. $file->id .'/download';
    }
    public function download(File $file)
    {
        return response()->download(Storage::disk()->getDriver()->getAdapter()->applyPathPrefix($file->file_type));
    }
}
