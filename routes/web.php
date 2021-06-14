<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\Foundation;
use App\Models\Support;
use App\Models\Foundationsupport;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
// use Illuminate\Http\Request;

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

Route::get('/', [App\Http\Controllers\MainPageController::class,'index'])->name('landing_page');
;
Route::get('/lab', function(){
    if(Auth::user()){
        $foundation = Auth::user()->foundation;
        return view('lab',compact('foundation'));
        dd($foundation);
    }else{
        $foundation = null;
        return view('lab',compact('foundation'));
        dd($foundation);
    }
 
})->name('lab');

// Route::get('/test2', function(){
//     return view('create_foundation2');
// });
// Route::get('/test3', function(){
//     $foundation = Foundation::where('id',24)->first();
//     return view('foundation.evaluation_form',compact('foundation'));
// });
Route::get('/admin/export', function(){
    // $foundation = Foundation::where('id',24)->first();
    return view('admin.export.export_data');
})->middleware(['auth','adminaccess']);
Route::post('/admin/export',[App\Http\Controllers\ExportController::class,'store'] )->middleware(['auth','adminaccess']);

Route::get('/admin/export_governs', function(){
    // $foundation = Foundation::where('id',24)->first();
    return view('admin.export.export_governs');
})->middleware(['auth','adminaccess']);
Route::post('/admin/export_governs',[App\Http\Controllers\ExportController::class,'storeGoverns'] )->middleware(['auth','adminaccess']);

Route::post('/admin/export',[App\Http\Controllers\ExportController::class,'store'] )->middleware(['auth','adminaccess']);

Route::get('/admin/export_foundation_PDF', function(){
    return view('admin.export.foundationPDF');
})->middleware(['auth','adminaccess']);
Route::post('/admin/export_foundation_PDF',[App\Http\Controllers\ExportController::class,'exportPDF'] )->middleware(['auth','adminaccess']);

Route::get('/admin/add_evaluation', function(){
    $foundations = Foundation::all();
    return view('admin.eval.eval_form',compact('foundations'));
})->middleware(['auth','adminaccess']);

Route::post('/admin/add_evaluation',[App\Http\Controllers\FoundationController::class,'evalStore']);

Route::get('/admin/add_support', function(){
    $foundations = Foundation::all();
    $supports = Support::all();
    return view('admin.eval.add_support',compact('foundations','supports'));
})->middleware(['auth','adminaccess']);

Route::get('/admin/support/delete/{foundation_id}/{support_id}', function($foundation_id,$support_id){
    $support = Foundationsupport::where('foundation_id',$foundation_id)->where('support_id',$support_id)->first();
    $support->delete();
    return redirect('/admin/add_support');

})->name('delete_support')->middleware(['auth','adminaccess']);

Route::post('/admin/add_support',[App\Http\Controllers\FoundationController::class,'supportStore']);


// Route::post('/uploadfile', [App\Http\Controllers\FoundationController::class,'test']);
Route::get('foundation/register', [App\Http\Controllers\FoundationController::class,'register'])->name('foundation.register');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','checkadmin','verified'])->name('dashboard');

Route::get('/foundation/main_page',[App\Http\Controllers\FoundationController::class,'index'])
            ->middleware(['auth','documented','verified']);

Route::get('/foundation/auto_evaluation',[App\Http\Controllers\FoundationController::class,'autoEvaluation'])
            ->middleware(['auth','documented','verified']);

Route::post('/foundation/auto_evaluation',[App\Http\Controllers\FoundationController::class,'autoEvaluationStore'])
            ->middleware(['auth','documented','verified']);  
           
Route::get('/foundation/evaluation_result',[App\Http\Controllers\FoundationController::class,'evaluationResult'])
            ->middleware(['auth','documented','verified']);   

Route::get('/create_foundation', [App\Http\Controllers\FoundationController::class,'create'])->middleware(['auth','undocumented']);

Route::post('/create_foundation',[App\Http\Controllers\FoundationController::class,'store'])->middleware(['auth','undocumented']);     

Route::get('foundation/foundation_profile_edit', [App\Http\Controllers\FoundationController::class,'foundationProfileEdit'])->middleware(['auth','documented','verified'])->name('foundation.edit');

Route::post('foundation/foundation_profile_edit', [App\Http\Controllers\FoundationController::class,'foundationProfileEditStore'])->middleware(['auth','documented','verified'])->name('foundation.edit');

Route::get('foundation/notifications',[App\Http\Controllers\FoundationController::class,'notificationsBrowse'])->middleware(['auth','documented','verified'])->name('foundation.notifications');

Route::get('foundation/auto_evaluation_result',[App\Http\Controllers\FoundationController::class,'autoEvalResult'])->middleware(['auth','documented','verified'])->name('foundation.autoEvalResult');


Route::get('/email/verify',function(){
    return view();
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/',[App\Http\Controllers\NewsController::class,'index'])->name('news');
    Route::get('/{id}',[App\Http\Controllers\NewsController::class,'show'])->name('news.show');
});


Route::post('/test2', function(Request $request){
    $validated = $request->validate([
        'image' => 'required',
        'name'  => 'required',
        'govern'  => 'required',
        // 'village' => 'required',
        // 'state' => 'required',
        'local' => 'required',
        'management'=> 'required',
        'recordNumber'=> 'required',
        'recordYear' => 'required',
        'recordDate' => 'required', 
        'description' => 'required|max:191',
        'firstPersonName'=> 'required',
        'firstPersonRole' => 'required',
        'firstPersonPhone'=> 'required|numeric',
        // 'secondPersonName',
        // 'secondPersonRole',
        'secondPersonPhone' => 'numeric',
        // 'thirdPersonName',
        // 'thirdPersonRole',
        // 'thirdPersonPhone' => 'numeric',
        // 'landPhone' => 'numeric',
        // 'mobilePhone' => 'required|numeric',
        // 'fax' => 'numeric', 
        // 'email',
        'recordDecision'=> 'required|file',
        'socialLetter' => 'required|file',
    ]);
    // return redirect()->back();
    
});