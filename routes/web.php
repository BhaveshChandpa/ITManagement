<?php

use App\Exports\ExportCctv;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\NvrController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SwitchhController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportComplaint;
use App\Exports\ExportComputer;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use App\Imports\ComputerExcel;
use App\Imports\ExcelCctv;
use App\Imports\ExcelComplaint;
use App\Imports\ExcelComputer;
use App\Imports\ExcelHpe;
use App\Exports\ExportHpe;
use App\Exports\ExportNvr;
use App\Imports\ExcelNvr;
use App\Models\Cctv;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


route::resource('/complaints', ComplaintController::class);
// route::get('/complains/complaintsexport', [ComplaintController::class, 'exportComplaint'])->name('export.complaints');


route::get('/complains/complaintsexport', function(){

    return Excel::download(new ExportComplaint, 'users.xlsx');

})->name('export.complaints');


Route::get('/complaintupload', function (){
    return view("complaint.import");
})->name('complaint.upload');

route::post('/complaintupload', function(Request $request){
    // dd($request->file( ));
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Get the uploaded file
    $file = $request->file('file');

    // Process the Excel file
    Excel::import(new ExcelComplaint, $file);

    return redirect()->back()->with('success', 'Excel file imported successfully!');

})->name('complaint.store');


route::get('/complaintsexport', function(){

    return Excel::download(new ExportComputer, 'complaints.xlsx');

})->name('export.complaints');









//------------------------------------------------------------------------------------------------------//

route::resource('/computer', ComputerController::class);

// route::post('/computerupload', [ExcelController::class, 'import'])->name('computer.store');

// route::get('/computers/computersexport', [ComputerController::class, 'exportComputer'])->name('computer.export');

// route::get('/computerupload', [ExcelController::class, 'upload'])->name('computer.upload');
Route::get('/computerupload', function (){
    return view("computer.import");
})->name('computer.upload');

route::post('/computerupload', function(Request $request){
    // dd($request->file( ));
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Get the uploaded file
    $file = $request->file('file');

    // Process the Excel file
    Excel::import(new ExcelComputer, $file);

    return redirect()->back()->with('success', 'Excel file imported successfully!');

})->name('Computers.store');


route::get('/computers/computersexports', function(){

    return Excel::download(new ExportComputer, 'computers.xlsx');

})->name('export.computers');




// ------------------------------------------------------------------------------------------------------------------------------------------------

route::resource('hpe', SwitchhController::class);



Route::get('/hpeupload', function (){
    return view("hpe.import");
})->name('hpe.upload');

route::post('/hpeupload', function(Request $request){
    // dd($request->file( ));
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Get the uploaded file
    $file = $request->file('file');

    // Process the Excel file
    Excel::import(new ExcelHpe, $file);

    return redirect()->back()->with('success', 'Excel file imported successfully!');

})->name('hpe.store');


route::get('/hpes/hpeexports', function(){

    return Excel::download(new ExportHpe, 'hpes.xlsx');

})->name('export.hpes');



route::get('/hpe/{id}/nvr', [SwitchhController::class, 'nvr'])->name('hpe.nvr');

route::get('/hpe/{id}/cctv', [SwitchhController::class, 'cctv'])->name('hpe.cctv');


// -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



route::resource('nvr', NvrController::class);

Route::get('/nvrupload', function (){
    return view("nvr.import");
})->name('nvr.upload');

route::post('/nvrupload', function(Request $request){
    // dd($request->file( ));
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Get the uploaded file
    $file = $request->file('file');

    // Process the Excel file
    Excel::import(new ExcelNvr, $file);

    return redirect()->back()->with('success', 'Excel file imported successfully!');

})->name('nvr.store');


route::get('/nvrs/nvrexports', function(){

    return Excel::download(new ExportNvr, 'nvrs.xlsx');

})->name('export.nvrs');


route::get('/nvr/{id}/cctv', [NvrController::class, 'cctv'])->name('nvr.cctv');
route::get('/nvr/{id}/hpe', [NvrController::class, 'hpe'])->name('nvr.hpe');




// -------------------------------------------------------------------------------------------------


route::resource('cctv', CctvController::class);


Route::get('/cctvupload', function (){
    return view("cctv.import");
})->name('cctv.upload');

route::post('/cctvupload', function(Request $request){
    // dd($request->file( ));
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    // Get the uploaded file
    $file = $request->file('file');

    // Process the Excel file
    Excel::import(new ExcelCctv, $file);

    return redirect()->back()->with('success', 'Excel file imported successfully!');

})->name('cctv.store');


route::get('/cctvs/cctvexports', function(){

    return Excel::download(new ExportCctv, 'cctvs.xlsx');

})->name('export.cctvs');




route::get('/cctv/{id}/hpe', [CctvController::class, 'hpe'])->name('cctv.hpe');
route::get('/cctv/{id}/nvr', [CctvController::class, 'nvr'])->name('cctv.nvr');
