<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index (Request $request) {
        $file = $request->file("file");
        // return $file;

        Storage::disk("local")->put("/a", $request->file("file"));
        return 'deu carai';
    }
}
