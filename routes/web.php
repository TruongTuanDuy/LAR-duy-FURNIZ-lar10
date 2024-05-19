<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ArticleCategoryController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('frontend.pages.home.index');
});

Route::get('/danh-muc-san-pham', function () {
    return view('frontend.pages.category-product.index');
});

Route::get('/san-pham', function () {
    return view('frontend.pages.product.index');
});

Route::get('/danh-muc-bai-viet', function () {
    return view('frontend.pages.category-article.index');
});

Route::get('/bai-viet', function () {
    return view('frontend.pages.article.index');
});

Route::get('/gio-hang', function () {
    return view('frontend.pages.cart.index');
});

Route::get('/thanh-toan', function () {
    return view('frontend.pages.order.checkout');
});

Route::get('/dat-hang-thanh-cong', function () {
    return view('frontend.pages.order.success');
});

Route::get('/tra-cuu-don-hang', function () {
    return view('frontend.pages.order.tracking');
});

Route::get('/lien-he', function () {
    return view('frontend.pages.contact-us.index');
});

Route::get('/bang-dieu-khien', function () {
    return view('frontend.pages.dashboard.index');
});

Route::get('/gioi-thieu', function () {
    return view('frontend.templates.about-us');
});

Route::get('/404', function () {
    return view('frontend.templates.404');
});


Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {

    $module = 'collections';
    $controllerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::group([
        'prefix' => $module,
        'as' => $module,
    ], function () use ($controllerName) {
        Route::get('change-ordering-{ordering}/{id}', $controllerName . '@changeOrdering')->name('.change-ordering');
        Route::get('change-status-{status}/{id}', $controllerName . '@changeStatus')->name('.change-status');
    });
    Route::resource($module, $controllerName)->parameters([$module => 'item']);


    $module = 'articleCategories';
    $controllerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::group([
        'prefix' => $module,
        'as' => $module,
    ], function () use ($controllerName) {
        // Route::get('change-ordering-{ordering}/{id}', [CategoryArticleController::class, 'changeOrdering'])->name('change-ordering');
        Route::get('change-ordering-{ordering}/{id}', $controllerName . '@changeOrdering')->name('.change-ordering');
        Route::get('change-status-{status}/{id}', $controllerName . '@changeStatus')->name('.change-status');
    });
    // Route::resource('categoryArticles', CategoryArticleController::class)->parameters(['categoryArticles' => 'item']);
    Route::resource($module, $controllerName)->parameters([$module => 'item']);


    $module = 'articles';
    $controllerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::group([
        'prefix' => $module,
        'as' => $module,
    ], function () use ($controllerName) {
        Route::get('change-ordering-{ordering}/{id}', $controllerName . '@changeOrdering')->name('.change-ordering');
        Route::get('change-status-{status}/{id}', $controllerName . '@changeStatus')->name('.change-status');
        Route::get('change-category-{category}/{id}', $controllerName . '@changeCategory')->name('.change-category');
    });
    Route::resource($module, $controllerName)->parameters([$module => 'item']);

    $module = 'products';
    $controllerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::group([
        'prefix' => $module,
        'as' => $module,
    ], function () use ($controllerName) {
        Route::get('change-ordering-{ordering}/{id}', $controllerName . '@changeOrdering')->name('.change-ordering');
        Route::get('change-status-{status}/{id}', $controllerName . '@changeStatus')->name('.change-status');
        Route::get('change-category-{category}/{id}', $controllerName . '@changeCategory')->name('.change-category');
    });
    Route::resource($module, $controllerName)->parameters([$module => 'item']);


    $module = 'productCategories';
    $controllerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::group([
        'prefix' => $module,
        'as' => $module,
    ], function () use ($controllerName) {
        Route::get('change-ordering-{ordering}/{id}', $controllerName . '@changeOrdering')->name('.change-ordering');
        Route::get('change-status-{status}/{id}', $controllerName . '@changeStatus')->name('.change-status');
        Route::post('update-tree', $controllerName . '@updateTree')->name('.updateTree');
    });
    Route::resource($module, $controllerName)->parameters([$module => 'item']);


    // Route::resource('products', ProductController::class)->parameters(['products' => 'item']);

    Route::get('file-manager', 'FileManagerController@index')->name('fileManager.index');
});



// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
