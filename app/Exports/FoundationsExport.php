<?php

namespace App\Exports;

use App\Models\Foundation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

// class FoundationsExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public $govern ;
//     function __construct($govern_1) {
//         $this->govern = $govern_1;
//     }      
//     public function collection()
//     {
//         return Foundation::where('govern',$this->govern)->get();
//     }
// }

class FoundationsExport implements FromView
{   
    public $govern ;
    public $from ;
    public $to ;
    function __construct($govern_1,$from,$to) {
        $this->govern = $govern_1;
        $this->from = $from ;
        $this->to = $to ;

        if($from==null){
            $this->from = date('1980-01-01');
        }
        if($to==null){
            $this->to = date('2080-01-01');
        }
    }
    public function view(): View
    {
        if($this->govern == ""){
            return view('admin.export.foundations_table', [
                'foundations' => Foundation::whereBetween('autoEvaluationDate', [$this->from,$this->to])->get()
            ]);
        }
        return view('admin.export.foundations_table', [
            'foundations' => Foundation::whereBetween('autoEvaluationDate', [$this->from,$this->to])->where('govern',$this->govern)->get()
        ]);
    }
}