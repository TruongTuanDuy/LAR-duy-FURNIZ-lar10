<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Product as MainModel;
use App\Models\ProductCategory;
use App\Models\Collection;

class ProductController extends AdminController
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->pathViewController = 'admin.products.';
        $this->params['category_root'] = FALSE;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($this->params);
        $items  = $this->model->listItems($this->params, ['task'  => 'admin-list-items']);
        $productCategory = new ProductCategory();
        $categoryList = $productCategory->listItems($this->params, ['task' => 'admin-list-items-in-select-box']);

        return view($this->pathViewController .  'index', [
            'params'    => $this->params,
            'items'     => $items,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategory = new ProductCategory();
        $categoryList = $productCategory->listItems($this->params, ['task' => 'admin-list-items-in-select-box']);
        return view($this->pathViewController .  'create', [
            'params'        => $this->params,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = $this->model->storeItem($request->all());
        $item->addMediaFromRequest('image')->toMediaCollection('images');
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
        $productCategory = new ProductCategory();
        $categoryList = $productCategory->listItems($this->params, ['task' => 'admin-list-items-in-select-box']);

        return view($this->pathViewController .  'edit', [
            'params'        => $this->params,
            'item'         => $item,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainModel $item)
    {
        $this->params = $request->all();
        $item = $this->model->updateItem($this->params, $item);
        if ($request->hasFile('image')) {
            $item->clearMediaCollection('images');
            $item->addMediaFromRequest('image')->toMediaCollection('images');
        }
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
