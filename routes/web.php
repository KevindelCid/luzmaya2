<?php
use App\nawal;
use App\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NawalController;
use Carbon\Carbon;
use App\Http\Controllers\CholqinfoController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ReunionesController;
use App\Http\Controllers\AgendaController;
use App\Mail\ReservacionMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Auth;

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

Route::get('nawales/ver', function () {
    
    return view('nawales/ver');
});



Route::get('aprender', function () {
    
    return view('aprender/index');
})->name('aprender.index');

Route::get('preguntas', function () {
    
    return view('preguntas/index');
})->name('preguntas.index');

Route::get('cron-jobs/notify-newday', function () {
    
    return view('cron-jobs/notify-newday');
});


Route::get('orden_nawales', function () {
    
    return view('orden/orden_nawales');
})->name('orden.index');

Route::get('jugar/sopadeletras', function () {
    
    return view('sopa/sopadeletras');
})->name('sopa');



Route::get('ajqijab', function () {
    
    return view('ajqijab');
});

Route::get('bienvenida', function () {
    
    return view('welcome');
})->name('bienvenida');

Route::get('pagar', function () {
    
    return redirect('bienvenida');
});

Route::get('ajqijab/solicitud', function () {
    
    return view('ajqijab/solicitud');
});
Route::get('ajqijab/eres_ajqij', function () {
    
    return view('ajqijab/eres_ajqij');
});


Route::get('nawales/ver', function () {
    
    return view('nawales.ver');
});
Route::get('/cholqij', function () {
    
    return view('cholqij/cholqij');
})->name('cholqij');




Route::get('/cholqij/hoy', function () {
    
    return view('cholqij.hoy');

})->name('hoy');

Route::get('/', function () {
    
    return view('home');
})->name('home');



// Route::get('admin/cp',[AdminController::class,'index'])->name('cp')->middleware('auth');


Route::resource('nawales/ver', 'NawalController'::class);
Route::resource('ajqijab', 'AjqijabController'::class);
// Route::resource('cholqij', 'CholqinfoController'::class);
Route::resource('nawales/crear', 'NawalController'::class);
Route::get('/cholqij/hoy',[CholqinfoController::class,'index']);
Route::get('ajqijab',[AjqijabController::class,'index']);
Route::get('ajqijab/solicitud',[AjqijabController::class,'solis']);
Route::get('ajqijab/eres_ajqij',[AjqijabController::class,'eres']);

Route::get('ajqijab/create',[AjqijabController::class,'create']);




Route::get('/nawales/ver',[NawalController::class,'index']);
Route::get('/nawales/crear',[NawalController::class,'create']);

Route::get('ajqijab', 'AjqijabController@index')->name('ajqijab.index');

Route::get('ajqijab/create', 'AjqijabController@create')->name('ajqijab.create');

Route::get('/nawales/ver', 'NawalController@index')->name('nawales.ver');

Route::get('/cholqij/hoy', 'CholqinfoController@index')->name('cholqij.hoy');


Route::get('/admin/cp', 'AdminController@index')->name('cp')->middleware('auth');


Route::get('/admin/perfil-solicitante/{id}/{ids}/{ide}', 'AdminController@perfil')->name('ps')->middleware('auth');


Route::post('/admin/perfil-solicitante', 'AdminController@acept')->name('acept')->middleware('auth');
Route::post('/admin/perfil-solicitante/ne', 'AdminController@negation')->name('negation')->middleware('auth');


Route::get('/admin/perfil-solicitante/rechazar/{id}', 'AdminController@rechazar')->name('rechazar')->middleware('auth');
Route::get('/admin/negocios', 'AdminController@negocios')->name('negocios')->middleware('auth');

Route::get('/admin/detalles/{id}', 'AdminController@detalles')->name('detalles')->middleware('auth');
Route::get('/admin/confirmar-pago/{idp}/{ide}', 'AdminController@pago')->name('pago')->middleware('auth');


Route::post('nawales/crear','NawalController@create')->name('nawales.crear');

Route::get('/ajqijab/perfil/{id}', 'AjqijabController@verperfil');

Route::get('/ajqijab/perfil/srcs/{id}', 'AjqijabController@verperfil2');



Route::post('/ajqijab/validate-ajqij', 'AjqijabController@validatea')->name('val')->middleware('auth');


Route::get('/ajqijab/solicitud', 'AjqijabController@solis')->name('soli')->middleware('auth','verified');

Route::get('/ajqijab/eres_ajqij', 'AjqijabController@eres')->name('ajqijab.eres')->middleware('auth','verified');

Route::get('/perfil/config', 'PerfilController@config')->name('perfil.config');

Route::post('/perfil/config','HomeController@profileUpdate');


Route::post('/perfil/eventito', 'AgendaController@eventito');

Route::post('/admin/confirmation/{id}', 'AdminController@confirmation');

Route::post('/admin/confirmationAll/{id}', 'AdminController@confirmationAll');

Route::post('/confirmar/cfree', 'PagosController@confirmationfree');




// Route::get('reservacion', function(){

//     $data = array(
//         'name'      =>  'Esto es un nombre',
//         'message'   =>  'esto es lo que quiero decir'
//     );


//     Mail::to('kevindelcid731@gmail.com')->send(new ReservacionMailable($data));


    
//     return 'mensaje enviado';
// });


Route::post('/pagar/eventito', 'AgendaController@active');

Route::get('/pagar/verificacion', 'PagosController@token')->middleware('auth','verified');


Route::post('/evento', 'AjqijabController@evento');

Route::post('pagar', 'PagosController@index')->name('pagar.index')->middleware('auth','verified');

Route::post('/ajqijab/eventitoajqij', 'AgendaController@eventitoajqij');


Route::get('/perfil', 'AgendaController@index')->name('perfil.index');
Route::get('pagar', function(){

return view('home');

});

Route::post('/perfil/guardar', 'AgendaController@guardar');

Route::post('/perfil/guardarContinuacion', 'AgendaController@guardarContinuacion');

Route::post('/perfil/editar', 'AgendaController@editar');



Route::post('/pagar/active', 'AgendaController@active');

Route::get('/perfil/listar', 'AgendaController@listar');

Route::get('/ajqijab/perfil/listar', 'AjqijabController@listar');

Route::get('/reuniones/{enlace}', 'ReunionesController@index')->name('reuniones.index')->middleware('auth','verified');

Route::get('/reuniones/p/{enlace}', 'ReunionesController@indexp')->name('reuniones.indexp');

Route::get('/reuniones', 'ReunionesController@indexdos')->name('reuniones.index')->middleware('auth','verified');
// Route::get('/reuniones/{enlace}', 'ReunionesController@enla');

// Route::post('/perfil/agregar', 'EventoController@store');



Route::resource('/perfil', 'AgendaController'::class)->middleware('auth','verified');




Auth::routes(['verify' => true]);

Route::get('/inicio', 'HomeController@index')->name('inicio');
