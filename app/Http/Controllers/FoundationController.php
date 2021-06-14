<?php

namespace App\Http\Controllers;
use App\Models\Foundation;
use App\Models\Foundationsupport;
use App\Models\Notification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FoundationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function test(Request $request){
    //     dd($request->file('fileToUpload'));
    // }
    public function index()
    {
        //
        $foundation = Auth::user()->foundation;
        $notifications = Notification::where('group',$foundation->group)->orWhere('group','all')->where('active',1)->get();
        // dd($notifications->active);
        // dd($foundation->image);
        return view('foundation.main_page',compact('foundation','notifications'));
    }

    public function notificationsBrowse()
    {
        //
        $foundation = Auth::user()->foundation;
        $notifications = Notification::where('group',$foundation->group)->orWhere('group','all')->where('active',1)->get();
        // dd($notifications->active);
        // dd($foundation->image);
        return view('foundation.notifications_browse',compact('foundation','notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        //
        return view('foundation.create_foundation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $user = Auth::user();
        
        // dd($request->recordDate);
        if($request->hasFile('image')){
            $profileImageName = $user->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();
            $path_profile_photo = $request->file('image')->storeAs('foundations_profile_photos',$profileImageName,'public');


            $recordDecisionName = $user->id.'_decision'.time().'.'.request()->recordDecision->getClientOriginalExtension();
            $path_decision = $request->file('recordDecision')->storeAs('record_decisions',$recordDecisionName,'public');


            $socialLetterName = $user->id.'_letter'.time().'.'.request()->socialLetter->getClientOriginalExtension();
            $path_social_letter = $request->file('socialLetter')->storeAs('social_letter',$socialLetterName,'public');
            // dd($request->file('image'));
        }
        // dd(Auth::user()->name);
        $user_1 = User::where('id',Auth::user()->id)->update([
            'avatar'=> $path_profile_photo,
        ]);
        
        $foundation = Foundation::create([
            'image'=> $path_profile_photo,
            'name' => $request->name,
            'govern' => $request->govern,
            'village' => $request->village,
            'state' => $request->state,
            'local' => $request->local,
            'management' => $request->management,
            'recordNumber' => $request->recordNumber,
            'recordYear' => $request->recordYear,
            'recordDate' => $request->recordDate,
            'description' => $request->description,
            'firstPersonName' => $request->firstPersonName,
            'firstPersonRole' => $request->firstPersonRole,
            'firstPersonPhone' => $request->firstPersonPhone,
            'secondPersonName' => $request->secondPersonName,
            'secondPersonRole' => $request->secondPersonRole,
            'secondPersonPhone' => $request->secondPersonPhone,
            'thirdPersonName' => $request->thirdPersonName,
            'thirdPersonRole' => $request->thirdPersonRole,
            'thirdPersonPhone' => $request->thirdPersonPhone,
            'landPhone' => $request->landPhone,
            'mobilePhone' => $request->mobilePhone,
            'fax' => $request->fax,
            'email' => $request->email,
            'recordDecision' => $path_decision,
            'socialLetter' => $path_social_letter,
            'user_id' => $user->id,
            'userEmail' => $user->email,

            
        ]);
       return redirect('/foundation/main_page');
    }
    public function autoEvaluation()
    {
        //
        $foundation = Auth::user()->foundation;
        return view('foundation/evaluation_form',compact('foundation'));
    }



    public function autoEvaluationStore(Request $request){
        $foundation = Auth::user()->foundation;
        $timestamp = date('Y-m-d H:i:s');
        // dd($request->autoEvaluationSection1);
        Foundation::where('user_id', Auth::user()->id )->update([
            'autoEvaluationDone' => 1 ,
            'autoEvaluationSec1' => $request->autoEvaluationSection1,
            'autoEvaluationSec2' => $request->autoEvaluationSection2,
            'autoEvaluationSec3' => $request->autoEvaluationSection3,
            'autoEvaluationSec4' => $request->autoEvaluationSection4,
            'autoEvaluationSec5' => $request->autoEvaluationSection5,
            'autoEvaluationSec6' => $request->autoEvaluationSection6,
            'autoEvaluationSec7' => $request->autoEvaluationSection7,
            'autoEvaluationSec8' => $request->autoEvaluationSection8,
            'autoEvaluationSec9' => $request->autoEvaluationSection9,
            'autoEvaluationSec10' => $request->autoEvaluationSection10,
            'autoEvaluationTech' => $request->selfAssessment ,
            'autoEvaluationFin' => $request->financialAssessment ,
            'autoEvaluationTotal' => $request->autoEvaluationTotal,
            'autoEvaluationDate' => $timestamp,
            'workScope' => $request->workScope ,
            'workFields' => $request->workFields ,
            'autoEvaluationClass' => $request->autoEvaluationClass,
        ]);    
        return redirect('foundation/auto_evaluation_result');

    }

    public function autoEvalResult(){
        $foundation = Auth::user()->foundation;
        return view('foundation.auto_evaluation_result',compact('foundation'));
    }

    public function evalStore(Request $request){
        $foundation = Auth::user()->foundation;

        $evalTechTotal = $request->evalTechSec1 + $request->evalTechSec2 +$request->evalTechSec3 + $request->evalTechSec4 + $request->evalTechSec5 + $request->evalTechSec6;
        // dd($evalTechTotal);
        $evalFinTotal = $request->evalFinSec1 + $request->evalFinSec2 +$request->evalFinSec3 + $request->evalFinSec4 + $request->evalFinSec5 + $request->evalFinSec6 + $request->evalFinSec7 + $request->evalFinSec8 + $request->evalFinSec9;
        $evalTotal = $evalFinTotal + $evalTechTotal;
        if($evalTotal >= 70){
            $evalClass = "أ";
        }else if($evalTotal < 70 && $evalTotal >= 60){
            $evalClass = "ب";
        }else if($evalTotal < 60 && $evalTotal >= 50){
            $evalClass = "ج";
        }else{
            $evalClass = "د";
        }

        $timestamp = date('Y-m-d H:i:s');
        $expirationDate = date("Y-m-d H:i:s", strtotime($timestamp . "+1 year"));
        // dd($expirationDate);

        Foundation::where('id', $request->id )->update([
            'evalDone' => 1 ,
            'evalTechSec1' => $request->evalTechSec1,
            'evalTechSec2' => $request->evalTechSec2,
            'evalTechSec3' => $request->evalTechSec3,
            'evalTechSec4' => $request->evalTechSec4,
            'evalTechSec5' => $request->evalTechSec5,
            'evalTechSec6' => $request->evalTechSec6,
            'evalFinSec1' => $request->evalFinSec1,
            'evalFinSec2' => $request->evalFinSec2,
            'evalFinSec3' => $request->evalFinSec3,
            'evalFinSec4' => $request->evalFinSec4,
            'evalFinSec5' => $request->evalFinSec5 ,
            'evalFinSec6' => $request->evalFinSec6 ,
            'evalFinSec7' => $request->evalFinSec7,
            'evalFinSec8' => $request->evalFinSec7,
            'evalFinSec9' => $request->evalFinSec9 ,
            'evalTechTotal' => $evalTechTotal ,
            'evalFinTotal' => $evalFinTotal ,
            'evalTotal' => $evalTotal ,
            'evalClass' => $evalClass,
            'evalDate' => $timestamp,
            'evalExpirationDate' => $expirationDate,
        ]);    
        return redirect('/admin/add_evaluation');
    }

    public function supportStore(Request $request){
        // $foundation = foundation::user()->foundation;
        $support = Foundationsupport::updateOrCreate([
            'foundation_id' => $request->foundation_id ,
            'support_id' => $request->support_id ,
        ]);

            // dd(Foundation::where('id',$request->foundation_id)->first()->supports);
       
        return redirect('/admin/add_support');
    }

    public function evaluationResult(){
        $foundation = Auth::user()->foundation;
        $supportsTech1 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الأول : البيانات الأساسية')->get();
        $supportsTech2 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الثانى : نظام العضوية')->get();
        $supportsTech3 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الثالث : إدارة البرامج و المشروعات')->get();
        $supportsTech4 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الرابع : إدارة الموارد البشرية')->get();
        $supportsTech5 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الخامس : نظام المعلومات و التوثيق')->get();
        $supportsTech6 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم السادس : نظام القيادة و اتخاذ القرارات داخل الجمعية')->get();


        $supportsFin1 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الأول  : وجود نظام محاسبة و رقابة داخلية')->get();
        $supportsFin2 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الثانى : وجود لائحة داخلية مكتوبة و معتمدة للجمعية شاملة')->get();
        $supportsFin3 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الثالث : النقدية(الخزينة و البنك)')->get();
        $supportsFin4 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الرابع : المخازن')->get();
        $supportsFin5 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الخامس : متابعة مصروفات الجمعية')->get();
        $supportsFin6 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم السادس : الأصول الثابتة')->get();
        $supportsFin7 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم السابع : المشتريات و مصروفات الأنشطة')->get();
        $supportsFin8 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم الثامن : المبيعات و الإيرادات')->get();
        $supportsFin9 = Foundation::where('user_id',Auth::user()->id)->first()->supports()->where('section','القسم التاسع : التقارير المالية')->get();

        // dd($supportsTech2);
        return view('foundation.evaluation_details',compact('foundation','supportsTech1','supportsTech2','supportsTech3','supportsTech4','supportsTech5','supportsTech6','supportsFin1','supportsFin2','supportsFin3','supportsFin4','supportsFin5','supportsFin6','supportsFin7','supportsFin8','supportsFin9'));
    }
    
    public function foundationProfileEdit(){
        $foundation = Auth::user()->foundation;
        return view('foundation.foundation_profile_edit',compact('foundation'));
    }

    public function foundationProfileEditStore(Request $request){
        if($request->hasFile('image')){
            $profileImageName = Auth::user()->id.'_image'.time().'.'.request()->image->getClientOriginalExtension();
            $path_profile_photo = $request->file('image')->storeAs('foundations_profile_photos',$profileImageName,'public');
            Foundation::where('user_id', Auth::user()->id )->update([
                'image'=> $path_profile_photo,
                'name' => $request->name,
                'govern' => $request->govern,
                'village' => $request->village,
                'state' => $request->state,
                'local' => $request->local,
                'management' => $request->management,
                'recordNumber' => $request->recordNumber,
                'recordYear' => $request->recordYear,
                'description' => $request->description,
                'firstPersonName' => $request->firstPersonName,
                'firstPersonRole' => $request->firstPersonRole,
                'firstPersonPhone' => $request->firstPersonPhone,
                'secondPersonName' => $request->secondPersonName,
                'secondPersonRole' => $request->secondPersonRole,
                'secondPersonPhone' => $request->secondPersonPhone,
                'thirdPersonName' => $request->thirdPersonName,
                'thirdPersonRole' => $request->thirdPersonRole,
                'thirdPersonPhone' => $request->thirdPersonPhone,
                'landPhone' => $request->landPhone,
                'mobilePhone' => $request->mobilePhone,
                'fax' => $request->fax,
                'email' => $request->email,
    
    
                
            ]);

            // dd($request->file('image'));
        }else{
            Foundation::where('user_id', Auth::user()->id )->update([
                'name' => $request->name,
                'govern' => $request->govern,
                'village' => $request->village,
                'state' => $request->state,
                'local' => $request->local,
                'management' => $request->management,
                'recordNumber' => $request->recordNumber,
                'recordYear' => $request->recordYear,
                'description' => $request->description,
                'firstPersonName' => $request->firstPersonName,
                'firstPersonRole' => $request->firstPersonRole,
                'firstPersonPhone' => $request->firstPersonPhone,
                'secondPersonName' => $request->secondPersonName,
                'secondPersonRole' => $request->secondPersonRole,
                'secondPersonPhone' => $request->secondPersonPhone,
                'thirdPersonName' => $request->thirdPersonName,
                'thirdPersonRole' => $request->thirdPersonRole,
                'thirdPersonPhone' => $request->thirdPersonPhone,
                'landPhone' => $request->landPhone,
                'mobilePhone' => $request->mobilePhone,
                'fax' => $request->fax,
                'email' => $request->email,
    
    
                
            ]);
        }
  
       return redirect('/foundation/main_page');
        // return view('foundation.foundation_profile_edit',compact('foundation'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
