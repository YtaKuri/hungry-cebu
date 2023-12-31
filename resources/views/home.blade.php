@extends('layouts.app')

@section('content')
<div class="content">
    <div class="header-container">
        <nav class="serch-restaurant d-flex justify-content-center" style="min-height: 80vh;">
            <form class="form-inline my-2 my-lg-0 ml-2 w-100 d-flex align-items-center justify-content-center" method="GET" action="{{ route('search') }}">
                <div class="form-group">
                    <input type="search" class="form-control" name="search"  value="{{request('search')}}" placeholder="" aria-label="search...">
                </div>
                <input type="submit" value="search" class="btn btn-info ml-2">
            </form>
        </nav>
    </div>
</div>
@endsection


@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
