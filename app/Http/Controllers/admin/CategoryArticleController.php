<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\CategoryArticle as MainModel;

class CategoryArticleController extends AdminController
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->pathViewController = 'admin.categoryArticles.';
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
        $this->model->storeItem($request->all());
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
        return view($this->pathViewController .  'edit', [
            'item'         => $item,
        ]);
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
