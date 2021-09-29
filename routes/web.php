<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('home');
//});
//
Auth::routes();
Route::get('logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('cabinet', [App\Http\Controllers\HomeController::class, 'cabinet'])
    ->name('cabinet')
    ->middleware('auth');


/** Admin Panel */
Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    \Illuminate\Support\Facades\App::setLocale('ru');
    Route::get('',function (){
        return redirect('admin/pages');
    });

    Route::prefix('picture')->group(function () {
        Route::get('', [App\Http\Controllers\PictureController::class, 'index'])->name('admin.picture.list');
        Route::get('create', [App\Http\Controllers\PictureController::class, 'create'])->name('admin.picture.create');
    });

    Route::prefix('pages')->group(function () {
        Route::get('', [App\Http\Controllers\PagesController::class, 'index'])->name('admin.pages.list');
        Route::get('create', [App\Http\Controllers\PagesController::class, 'create'])->name('admin.pages.create');
        Route::post('create', [App\Http\Controllers\PagesController::class, 'store'])->name('admin.pages.store');
        Route::get('edit/{id}', [App\Http\Controllers\PagesController::class, 'edit'])->name('admin.pages.edit');
        Route::post('update/{id}', [App\Http\Controllers\PagesController::class, 'update'])->name('admin.pages.update');
        Route::prefix('content')->group(function () {
            Route::get('update/{page}', [App\Http\Controllers\BlockController::class, 'index'])->name('admin.pages.content.update');
            Route::post('reorder', [App\Http\Controllers\BlockController::class, 'updateBlocksOrder'])->name('admin.blocks.order.update');
        });
    });

    Route::prefix('blocks')->group(function () {
//        Route::get('create/{page}', [App\Http\Controllers\BlockController::class, 'create'])->name('admin.blocks.create');
        Route::post('create/{page}', [App\Http\Controllers\BlockController::class, 'store'])->name('admin.blocks.create');
        Route::get('edit/{block}', [App\Http\Controllers\BlockController::class, 'edit'])->name('admin.blocks.edit');
        Route::post('update/{block}', [App\Http\Controllers\BlockController::class, 'update'])->name('admin.blocks.update');
        Route::post('delete/{block}', [App\Http\Controllers\BlockController::class, 'destroy'])->name('admin.blocks.delete');
    });

    Route::prefix('contents')->group(function () {
//        Route::get('create/{block}', [App\Http\Controllers\BlockContentsController::class, 'create'])->name('admin.contents.create');
//        Route::post('create/{block}', [App\Http\Controllers\BlockContentsController::class, 'store'])->name('admin.contents.create');
        Route::get('edit/{block}', [App\Http\Controllers\BlockContentsController::class, 'edit'])->name('admin.contents.edit');
        Route::post('update/{block}', [App\Http\Controllers\BlockContentsController::class, 'update'])->name('admin.contents.update');
        Route::post('delete', [App\Http\Controllers\BlockContentsController::class, 'destroy'])->name('admin.contents.delete');
    });

    Route::prefix('templates')->group(function () {
        Route::get('', [App\Http\Controllers\TemplatesController::class, 'index'])->name('admin.templates.list');
    });

    Route::prefix('block_templates')->group(function () {
        Route::get('', [App\Http\Controllers\BlockTemplatesController::class, 'index'])->name('admin.block_templates.list');
        Route::get('create', [App\Http\Controllers\BlockTemplatesController::class, 'create'])->name('admin.block_templates.create');
        Route::post('create', [App\Http\Controllers\BlockTemplatesController::class, 'store'])->name('admin.block_templates.store');
        Route::post('load', [App\Http\Controllers\BlockTemplatesController::class, 'load'])->name('admin.block_templates.load');
        Route::get('edit/{block_template}', [App\Http\Controllers\BlockTemplatesController::class, 'edit'])->name('admin.block_templates.edit');
        Route::post('update/{block_template}', [App\Http\Controllers\BlockTemplatesController::class, 'update'])->name('admin.block_templates.update');
    });

    Route::prefix('lang``uages')->group(function () {
        Route::get('', [App\Http\Controllers\LanguagesController::class, 'index'])->name('admin.languages.list');
    });
//    \Illuminate\Support\Facades\View::getFinder()
//        ->setPaths([base_path('/resources/views/admin/position')]);
//    Position
//    Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//    Route::prefix('position')->group(function () {
//
//        Route::get('', [App\Http\Controllers\PositionController::class, 'list'])->name('admin.position.list');
//        Route::get('create', [App\Http\Controllers\PositionController::class, 'create'])->name('admin.position.create');
//        Route::get('update', [App\Http\Controllers\PositionController::class, 'list'])->name('admin.position.list');
//        Route::get('', [App\Http\Controllers\PositionController::class, 'list'])->name('admin.position.list');
//    });
});
//Route::group([
//    'prefix' => '{lang?}',
//    'where' => ['lang' => '[a-zA-Z]{2}'],
//    'middleware' => ['locale']
//    ], function () {
//        Route::get('{alias?}', [\App\Http\Controllers\PagesController::class, 'show']);
//    });
Route::get('{locale?}/{alias?}', [\App\Http\Controllers\PagesController::class, 'show'])
    ->where('locale', '[a-z]{2}')
    ->middleware('locale');
//
Route::get('/{alias?}', [\App\Http\Controllers\PagesController::class, 'show'])->middleware('locale');
//Route::get('/{alias?}')->middleware('locale');
//Route::group([
//    'prefix' => '{alias}',
////    'where' => ['lang' => '[a-zA-Z]{2}'],
//], function () {
//    Route::get
//});
