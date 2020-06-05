@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>List page</h1>
            <a href="{{ route('posts.create')}}" class="btn btn-primary">新規投稿</a>
            <div class="card text-center">
                <div class="card-header">
                    bbs
                </div>
                @foreach ($posts as $post)
                <div class="card-body">
                    <h5 class="card-title">title：{{ $post->title }}</h5>
                    <p class="card-text">content：{{ $post->body }}</p>
                    <a href="#" class="btn btn-primary">詳細</a>
                </div>
                <div class="card-footer text-muted">
                    posted at：{{ $post->created_at }}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
