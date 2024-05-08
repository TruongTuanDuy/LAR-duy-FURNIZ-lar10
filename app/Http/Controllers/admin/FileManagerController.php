<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    private $pathViewController = 'admin.fileManager.';

    public function index(Request $request)
    {
        return view($this->pathViewController .  'index', []);
    }
}
