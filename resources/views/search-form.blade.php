@extends('layouts.app')

@section('content')
    <div class="header-container">
        <nav class="serch-restaurant">
            <form class="form-inline my-2 my-lg-0 ml-2" action="{{ route('search') }}" method="GET">
                @csrf
                <div class="form-group">
                    <input type="search" class="form-control mr-sm-2" name="search" value="{{ old('search') }}" placeholder="" aria-label="search...">
                </div>
                <input type="submit" value="search" class="btn btn-info">
            </form>
        </nav>
    </div>
@endsection
