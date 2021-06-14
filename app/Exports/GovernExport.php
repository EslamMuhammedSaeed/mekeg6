<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Foundation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GovernExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $governs ;
    
    function __construct($governs) {
        $this->governs = $governs;
    }
    public function view(): View
    {
        $governs = $this->governs;
        foreach($governs as $govern){
            // array_push($count,Foundation::where('autoEvaluationDone',1)->where('govern',$govern)->count());
            $govern->count = Foundation::where('autoEvaluationDone',1)->where('govern',$govern->govern)->count();
            $govern->A = Foundation::where('govern',$govern->govern)->where('autoEvaluationClass','أ')->count();
            $govern->B = Foundation::where('govern',$govern->govern)->where('autoEvaluationClass','ب')->count();
            $govern->C = Foundation::where('govern',$govern->govern)->where('autoEvaluationClass','ج')->count();
            $govern->D = Foundation::where('govern',$govern->govern)->where('autoEvaluationClass','د')->count();
        }
        //
        // if($this->govern == ""){
        //     return view('admin.export.governs_table', [
        //         'foundations' => Foundation::whereBetween('autoEvaluationDate', [$this->from,$this->to])->get()
        //     ]);
        // }
        return view('admin.export.governs_table', [
            'governs' => $this->governs,
            // 'count' => $count,
            // 'count' => Foundation::where('autoEvaluationDone',1)->where('govern',$this->govern)->count(),
            // 'Aclassified' => Foundation::where('govern',$this->govern)->where('autoEvaluationClass','أ')->count() ,
            // 'Bclassified' => Foundation::where('govern',$this->govern)->where('autoEvaluationClass','ب')->count() ,
            // 'Cclassified' => Foundation::where('govern',$this->govern)->where('autoEvaluationClass','ج')->count() ,
            // 'Dclassified' => Foundation::where('govern',$this->govern)->where('autoEvaluationClass','د')->count() ,
            // 'foundations' => Foundation::where('govern',$this->govern)->get()
        ]);
    }
}
