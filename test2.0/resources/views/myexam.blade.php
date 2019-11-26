@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/myexam.css')}}">

<div class="container mb-4">
    <div class="text-center header-text">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm container your-create">
                <div class="row">
                    <div class="col-sm-6 card-content">
                        <h1>0</h1>
                        <h3>Created</h3>
                    </div>
                    <div class="col-sm-6 card-content"><i class="fa fa-edit icon-size"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm container your-running">
                <div class="row">
                    <div class="col-sm-6 card-content">
                        <h1>0</h1>
                        <h3>Running</h3>
                    </div>
                    <div class="col-sm-6 card-content"><i class="fa fa-rocket icon-size"></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm container your-join">
                <div class="row">
                    <div class="col-sm-6 card-content">
                        <h1>0</h1>
                        <h3>Join</h3>
                    </div>
                    <div class="col-sm-6 card-content"><i class="fa fa-mortar-board icon-size"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="search">
        <h3 class="d-inline">My exam created</h3>
        <form class="form-inline my-2 my-lg-0 search-form">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <div class="hero-content text-center">
        <a href="#" onclick="document.getElementById('create').style.display='block'" class="btn clever-btn">Create
            exam</a>
        <div id="create" class="modal">
            <form action="{{route('postmyexam')}}" method="POST">
                @csrf
                <div class="animate container container-modal bg-light">
                    <span onclick="document.getElementById('create').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <div class="container">
                        <h2 class="pt-2 pb-4">Create exam</h2>

                        <label style="float: left;">
                            <h6>Name Exam :</h6>
                        </label>
                        <input type="text" name="exam_name" class="form-control" required>
                        <label style="float: left;">
                            <h6>Describe Exam:</h6>
                        </label>
                        <textarea class="form-control" name="exam_describe"></textarea>
                        <button type="submit" class="btn clever-btn mt-4 mb-4 bg-dark text-white">Create Exam</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<script>
    var modal = document.getElementById('create');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
</script>
@endsection