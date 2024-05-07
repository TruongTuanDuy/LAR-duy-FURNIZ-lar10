<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\CategoryProductController;

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
    return view('furniz.pages.home.index');
});

Route::get('/danh-muc-san-pham', function () {
    return view('furniz.pages.category-product.index');
});

Route::get('/san-pham', function () {
    return view('furniz.pages.product.index');
});

Route::get('/danh-muc-bai-viet', function () {
    return view('furniz.pages.category-article.index');
});

Route::get('/bai-viet', function () {
    return view('furniz.pages.article.index');
});

Route::get('/gio-hang', function () {
    return view('furniz.pages.cart.index');
});

Route::get('/thanh-toan', function () {
    return view('furniz.pages.order.checkout');
});

Route::get('/dat-hang-thanh-cong', function () {
    return view('furniz.pages.order.success');
});

Route::get('/tra-cuu-don-hang', function () {
    return view('furniz.pages.order.tracking');
});

Route::get('/lien-he', function () {
    return view('furniz.pages.contact-us.index');
});

Route::get('/bang-dieu-khien', function () {
    return view('furniz.pages.dashboard.index');
});

Route::get('/gioi-thieu', function () {
    return view('furniz.templates.about-us');
});

Route::get('/404', function () {
    return view('furniz.templates.404');
});

Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    $module = 'collections';
    $controlerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::resource($module, $controlerName)->parameters([$module => 'item']);

    $module = 'categoryProducts';
    $controlerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::resource($module, $controlerName)->parameters([$module => 'item']);

    $module = 'categoryArticles';
    $controlerName = ucfirst(Str::singular($module)) . 'Controller';
    Route::resource($module, $controlerName)->parameters([$module => 'item']);


    Route::group([
        'prefix' => 'articles',
        'as' => 'articles.'
    ], function () {
        Route::get('change-ordering-{ordering}/{id}', 'ArticleController@changeOrdering')->name('change-ordering');
        Route::get('change-status-{status}/{id}', [ArticleController::class, 'changeStatus'])->name('change-status');
        Route::get('change-category-{category}/{id}', [ArticleController::class, 'changeCategory'])->name('change-category');
    });
    Route::resource('articles', ArticleController::class)->parameters(['articles' => 'item']);


    // Route::resource('products', ProductController::class)->parameters(['products' => 'item']);
    Route::get('/file-manager', [FileManagerController::class, 'index'])->name('file-manager.index');



    Route::group([
        'prefix' => 'category-articles',
        'as' => 'category-articles.'
    ], function () {
        Route::get('change-ordering-{ordering}/{id}', [CategoryArticleController::class, 'changeOrdering'])->name('change-ordering');
        Route::get('change-status-{status}/{id}', [CategoryArticleController::class, 'changeStatus'])->name('change-status');
    });

    Route::group([
        'prefix' => 'category-products',
        'as' => 'category-products.'
    ], function () {
        Route::get('change-ordering-{ordering}/{id}', [CategoryProductController::class, 'changeOrdering'])->name('change-ordering');
        Route::get('change-status-{status}/{id}', [CategoryProductController::class, 'changeStatus'])->name('change-status');
    });

    Route::group([
        'prefix' => 'collections',
        'as' => 'collections.'
    ], function () {
        Route::get('change-ordering-{ordering}/{id}', [CollectionController::class, 'changeOrdering'])->name('change-ordering');
        Route::get('change-status-{status}/{id}', [CollectionController::class, 'changeStatus'])->name('change-status');
    });
});



// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
