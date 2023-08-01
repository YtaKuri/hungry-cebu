@extends('layouts.app')

@section('content')
@foreach ($stores as $store)
    <a href="{{ route('posts.show', [$store->id]) }}">
        <main>
            <div class="main-container">
                <section class="restaurant">
                    <h1 class="restaurant-title">{{ $store->name }}</h1>
                    <img class="restaurant-image" src="{{ asset('storage/' . str_replace('public/', '', $store->store_img)) }}">
                </section>
            </div>
        </main>
    </a>
@endforeach
{{ $stores->links() }}  <!-- ページネーションのリンクを追加 -->
@endsection
