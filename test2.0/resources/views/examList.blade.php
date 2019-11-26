@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/examList.css')}}">
<script src="{{asset('js/select2/select2.min.js')}}"></script>
<script src="{{asset('js/examList.js')}}"></script>

<!-- ##### List Exam Area ##### -->
<div class="table100 ver1" margin-bottom: 100px;>
    <table data-vertable="ver1">
        <thead>
            <tr class="row100 head">
                <th class="column100 column1" data-column="column1">Exam List</th>
            </tr>
        </thead>
        <tbody>
            @foreach($exams as $exam)
                <tr class="row100">
                    <td class="column100"><a href="/exam/1">{{$exam->exam_name}}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- ##### List Exam Area ##### -->
@endsection