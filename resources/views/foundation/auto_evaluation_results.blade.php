@extends('foundation.master')

@section('content')

<div class="text-center">{{$request->autoEvaluationSection1}}</div> 
<div class="text-center">{{$request->autoEvaluationSection2}}</div> 
<div class="text-center">{{$request->autoEvaluationSection3}}</div> 
<div class="text-center">{{$request->autoEvaluationSection4}}</div> 
<div class="text-center">{{$request->autoEvaluationSection5}}</div> 
<div class="text-center">{{$request->autoEvaluationSection6}}</div> 
<div class="text-center">{{$request->autoEvaluationSection7}}</div> 
<div class="text-center">{{$request->autoEvaluationSection8}}</div> 
<div class="text-center">{{$request->autoEvaluationSection9}}</div> 
<div class="text-center">{{$request->autoEvaluationSection10}}</div> 
<div class="text-center">{{$request->selfAssessment}}</div> 
<div class="text-center">{{$request->financialAssessment}}</div> 
<div class="text-center">{{$request->autoEvaluationTotal}}</div> 
<div class="text-center">{{$request->workScope }}</div> 
<div class="text-center">{{$request->workFields}}</div> 
<div class="text-center">{{$request->autoEvaluationClass}}</div> 


@endsection