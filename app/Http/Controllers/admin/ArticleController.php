<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\Article as MainModel;
use App\Models\CategoryArticle;

class ArticleController extends AdminController
{
    public function __construct()
    {
        $this->model = new MainModel();
        $this->pathViewController = 'admin.pages.article.';
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
        $categoryArticle = new CategoryArticle();
        $categoryList = $categoryArticle->listItems(null, ['task' => 'admin-list-items-category']);
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
        $this->params = $request->all();
        $this->model->addMediaFromRequest('thumb')->toMediaCollection();
        $this->model->storeItem($this->params);
        return redirect()->route('admin.articles.index');
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
    public function edit(string $id)
    {
        $item = MainModel::find($id);
        $categoryArticle = new CategoryArticle();
        $categoryList = $categoryArticle->listItems(null, ['task' => 'admin-list-items-category']);
        return view($this->pathViewController .  'edit', [
            'params'        => $this->params,
            'item'         => $item,
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->params = $request->all();
        $this->params['id'] = $id;
        $this->model->updateItem($this->params);
        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $params["id"]             = $id;
        $this->model->deleteItem($params, ['task' => 'delete-item']);
        return redirect()->route('admin.articles.index');
    }
}
