<?php

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
use App\Imports\ExcelComplaint;
use App\Imports\ExcelComputer;

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

})->name('computer.store');


route::get('/computers/computersexport', function(){

    return Excel::download(new ExportComputer, 'computers.xlsx');

})->name('export.computers');




// ------------------------------------------------------------------------------------------------------------------------------------------------




route::resource('switch', SwitchhController::class);













route::resource('nvr', NvrController::class);
route::resource('cctv', CctvController::class);