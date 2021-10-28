<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/test', function (Request $request) {
//     return response()->json('hello');
// });



Route::get ('/test',[MyController::class,'Test']);





// Route::get (          '/admin_page',             [App\Http\Controllers\MyController::class, 'admin_page'       ])->name(      'admin_page'     );
// Route::get (         '/creat_product',           [App\Http\Controllers\MyController::class, 'CreatDProd'       ])->name(     'creat_product'   );
// Route::post(      '/creat_product/submit',       [App\Http\Controllers\MyController::class, 'CreatedSubmit'    ])->name( 'creat_product_submit');
// Route::get (           '/products',              [App\Http\Controllers\MyController::class, 'CreatDataProd'    ])->name(       'products'      );
// Route::get (       '/products/del/{id}',         [App\Http\Controllers\MyController::class, 'ProdDel'          ])->name(        'ProdDel'      );
// Route::get (           '/recyclebin',            [App\Http\Controllers\MyController::class, 'RecycleBin'       ])->name(      'recyclebin'     );
// Route::get (      '/recyclebin/restore/{id}',    [App\Http\Controllers\MyController::class, 'RecycleBinRes'    ])->name(      'recycleDel'     );
// Route::get (      '/recyclebin/delete/{id}',     [App\Http\Controllers\MyController::class, 'RecycleBinDel'    ])->name(      'deletebase'     );
// Route::get (       '/settings/{id}/{name}',      [App\Http\Controllers\MyController::class, 'SettingsProd'     ])->name(       'settings'      );
// Route::get (        '/Card/added/{id}',          [App\Http\Controllers\MyController::class, 'AddToCard'        ])->name(       'CardCreat'     );
// Route::get (             '/Card',                [App\Http\Controllers\MyController::class, 'Card'             ])->name(       'AddToCard'     );
// Route::get (         '/Card/res/{id}',           [App\Http\Controllers\MyController::class, 'CardRes'          ])->name(        'CardRes'      );
// Route::get (        '/Card/amount/{id}',         [App\Http\Controllers\MyController::class, 'CardAmount'       ])->name(      'CardAmount'     );
// Route::get (          '/categories',             [App\Http\Controllers\MyController::class, 'Categories'       ])->name(     'Categori_page'   );
// Route::get (        '/categories/creat',         [App\Http\Controllers\MyController::class, 'CreatCategories'  ])->name(    'Categori_page_cr' );
// Route::post(       '/categories/created',        [App\Http\Controllers\MyController::class, 'CreatedCat'       ])->name(   'Categori_created'  );
// Route::get (  '/categori_settings/{name}/{id}',  [App\Http\Controllers\MyController::class, 'SettingCat'       ])->name(   'categori_settings' );
// Route::get (      '/categori_redactor/{id}',     [App\Http\Controllers\MyController::class, 'RedCatDat'        ])->name(   'categori_redactor' );
// Route::post(  '/categori_redactor/complate/{id}',[App\Http\Controllers\MyController::class, 'RedCat'           ])->name(        'red_cat'      );

