<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    protected $pathViewController = '';
    protected $model;
    protected $params             = [];
    // protected $controllerName     = '';

    public function __construct()
    {
        // $this->params["pagination"]["totalItemsPerPage"] = 3;
        // view()->share('controllerName', $this->controllerName);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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


    public function changeOrdering(Request $request)
    {
        $params["currentOrdering"]  = $request->ordering;
        $params["id"]             = $request->id;
        $result = $this->model->changeItem($params, ['task' => 'change-ordering']);
        echo json_encode($result);
    }

    public function changeStatus(Request $request)
    {
        $params["currentStatus"]  = $request->status;
        $params["id"]             = $request->id;
        // $params['controllerName']  = $this->controllerName;
        $result = $this->model->changeItem($params, ['task' => 'change-status']);
        echo json_encode($result);
    }

    public function changeCategory(Request $request)
    {
        $params["currentCategory"]      = $request->category;
        $params["id"]                   = $request->id;
        $result = $this->model->changeItem($params, ['task' => 'change-category']);
        echo json_encode($result);
    }
}
