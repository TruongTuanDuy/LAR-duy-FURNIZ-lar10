<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\ProductCategory as MainModel;

class ProductCategoryController extends AdminController
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->pathViewController = 'admin.productCategories.';
        $this->params['category_root'] = FALSE;
    }

    public function updateTree(Request $request)
    {
        $data = $request->data;
        $root = MainModel::find(1);
        MainModel::rebuildSubtree($root, $data);
        return response()->json($data);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items  = $this->model->listItems($this->params, ['task'  => 'admin-list-items']);
        return view($this->pathViewController .  'index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->params['category_root'] = TRUE;
        $nodes = $this->model->listItems($this->params, ['task' => 'admin-list-items-in-select-box']);
        return view($this->pathViewController .  'create', compact('nodes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->params = $request->all();
        $this->model->storeItem($this->params);
        return redirect()->route("{$this->pathViewController}create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainModel $item)
    {
        $this->params['id'] = $item->id;
        $this->params['category_root'] = TRUE;
        $nodes = $this->model->listItems($this->params, ['task' => 'admin-list-items-in-select-box']);
        return view($this->pathViewController .  'edit', compact(
            'item',
            'nodes',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainModel $item)
    {
        $this->params = $request->all();
        $this->model->updateItem($this->params, $item);
        return redirect()->route("{$this->pathViewController}index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainModel $item)
    {
        $this->model->deleteItem($item);
        return redirect()->route("{$this->pathViewController}index");
    }
}