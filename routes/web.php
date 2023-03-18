<!-- <?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EngineController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;

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


Route::get('/', function () {
    return view('hello.login.index');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authanticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// route untuk memberikan function store dari RegisterController kepada /register yang mana methodnya POST

Route::resource('/dashboard', DashboardController::class);
Route::resource('/absensi', AbsensiController::class);
Route::resource('student', StudentController::class);
Route::resource('rayon', RayonController::class);
Route::resource('rombel', RombelController::class);
Route::get('report/datatable', [ReportController::class, 'datatables'])->name('report.datatable'); //datatable 'channel'
Route::resource('report', ReportController::class);
Route::get('/cetak', [ReportController::class, 'cetak']);
Route::get('/main', [ReportController::class, 'main']);
Route::get('/kehadiran', [AbsensiController::class, 'kehadiran']);
Route::get('/ketidakhadiran', [AbsensiController::class, 'ketidakhadiran']);
Route::get('/index2', [AbsensiController::class, 'index2']);
Route::get('/validate', [AbsensiController::class, 'next']);

route::group(['middleware' =>['auth']], function() {
});

route::get('import', [EngineController::class, 'import'])->name('import');






