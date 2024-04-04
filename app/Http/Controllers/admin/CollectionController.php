<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Collection as MainModel;
use App\Models\Collection;
use PHPUnit\TestRunner\TestResult\Collector;

class CollectionController extends AdminController
{
    public function __construct()
    {
        $this->pathViewController = 'admin.pages.collection.';
        // $this->controllerName     = 'collection';
        $this->model = new MainModel();

        // parent::__construct();

    }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     // return view('admin.pages.collection.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Collection::find($id);
        //
        dd($item);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
    }
}
