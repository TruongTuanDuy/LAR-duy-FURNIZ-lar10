<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Collection as MainModel;

class CollectionController extends AdminController
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->pathViewController = 'admin.pages.collection.';
        // $this->controllerName     = 'collection';
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items  = $this->model->listItems($this->params, ['task'  => 'admin-list-items']);
        return view($this->pathViewController .  'index', [
            'params'    => $this->params,
            'items'     => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->pathViewController .  'create', [
            'params'        => $this->params,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = $this->model->storeItem($request->all());
        $item->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->route('admin.collections.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $item = Collection::find($id);
        // dd($item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = MainModel::find($id);
        return view($this->pathViewController .  'edit', [
            'params'        => $this->params,
            'item'         => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->params = $request->all();
        $this->params['id'] = $id;
        $item = $this->model->updateItem($this->params);
        if ($request->hasFile('image')) {
            $item->clearMediaCollection('images');
            $item->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->route('admin.collections.edit', ['item' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $params["id"]             = $id;
        $this->model->deleteItem($params, ['task' => 'delete-item']);
        return redirect()->route('admin.collections.index');
    }
}
