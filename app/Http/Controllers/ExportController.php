<?php

namespace App\Http\Controllers;
use App\Exports\FoundationsExport;
use App\Exports\GovernExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

use Illuminate\Http\Request;
use App\Models\Foundation;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $from = date($request->startDate);
        $to = date($request->endDate);

        // Reservation::whereBetween('autoEvaluationDate', [$from, $to])->get();
        $foundations = Foundation::where('autoEvaluationDate', $from)->where('govern',$request->govern)->get();
        return Excel::download(new FoundationsExport($request->govern,$request->startDate,$request->endDate), 'foundations.xlsx');
  

        // return view('admin.export.tableToExport',compact('foundations'));
        // dd($foundations);

    }
    public function storeGoverns(Request $request)
    {
 
    //    $foundations = Foundation::where('autoEvaluationDate', $from)->where('govern',$request->govern)->get();
        $governs = Foundation::select('govern')->distinct()->get();
        // dd($governs[0]->govern);
        // return Excel::download(new GovernExport($request->govern), 'governs.xlsx');
        return Excel::download(new GovernExport($governs), 'governs.xlsx');


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
    public function exportPDF(Request $request)
    {
        $foundation = Foundation::where('id',$request->id)->first();
        // $pdf = \PDF::loadView('admin.export.foundation_table_PDF', compact('foundation'));
        // return $pdf->download('foundation.pdf');
         // at the top of the file
        PDF::SetFont('aealarabiya','',18);
        PDF::setRTL(true);
        PDF::SetTitle($foundation->name);
        PDF::AddPage();
        $header = '<div >
                        <h4 style="color:green">?????? ?????????????? : '.$foundation->name.'</h4>
                        <h6 style="">?????????? ???????????? : '.$foundation->id.'</h6>
                        <h6 style="">???????????? ?????????? : '.$foundation->workFields.'</h6>
                        <h6 style="">???????????????? : '.$foundation->govern.'</h6>
                        <h6 style="">???????????? : '.$foundation->local.'</h6>
                        <h6 style="">???????????? : '.$foundation->village.'</h6>
                        <h6 style="">?????????? ?????????????? : '.$foundation->autoEvaluationDate.'</h6>
                        <h6 style="">?????????????? : '.$foundation->autoEvaluationClass.'</h6>

                        <h6 style="">?????????? ?????????????? : </h6>

                        <table style="border:1px solid black; font-size:13px;text-align:center">
                            <tr style="border:1px solid black">
                                <th style="border:1px solid black">???????? ??????????????</th>
                                <th style="border:1px solid black">???????? ????????????</th>
                                <th style="border:1px solid black"> ??????????????</th>
                            </tr>
                            <tr style="border:1px solid black">
                                <td>?????????????? ??????????????</td>
                                <td>35</td>
                                <td>'.$foundation->autoEvaluationTech.'</td>
                            </tr>
                            <tr style="border:1px solid black">
                                <td>?????????????? ????????????</td>
                                <td>65</td>
                                <td>'.$foundation->autoEvaluationFin.'</td>
                            </tr>
                            <tr style="border:1px solid black">
                                <td>????????????????</td>
                                <td>100</td>
                                <td>'.$foundation->autoEvaluationTotal.'</td>
                            </tr>
                            
                            </table>
                            <h6 style=""> ?????????? ?????????????? ?????????? : </h6>

                            <table style="border:1px solid black; font-size:13px;text-align:center">
                                <tr style="border:1px solid black">
                                    <th style="border:1px solid black">??????????</th>
                                    <th style="border:1px solid black">???????? ????????????</th>
                                    <th style="border:1px solid black"> ??????????????</th>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>??????????</td>
                                    <td>19</td>
                                    <td>'.$foundation->autoEvaluationSec1.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>1</td>
                                    <td>'.$foundation->autoEvaluationSec2.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>9</td>
                                    <td>'.$foundation->autoEvaluationSec3.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>2</td>
                                    <td>'.$foundation->autoEvaluationSec4.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>2</td>
                                    <td>'.$foundation->autoEvaluationSec5.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>2</td>
                                    <td>'.$foundation->autoEvaluationSec6.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>27</td>
                                    <td>'.$foundation->autoEvaluationSec7.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>14</td>
                                    <td>'.$foundation->autoEvaluationSec8.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>14</td>
                                    <td>'.$foundation->autoEvaluationSec9.'</td>
                                </tr>
                                <tr style="border:1px solid black">
                                    <td>????????????</td>
                                    <td>10</td>
                                    <td>'.$foundation->autoEvaluationSec10.'</td>
                                </tr>
                                
                                </table>
                    </div>';
        PDF::WriteHTML($header , true , 0, true , 0);

        // PDF::Write(0,'?????? ?????????????? : ' .$foundation->name);
        PDF::Output('foundation.pdf');

    }

}
