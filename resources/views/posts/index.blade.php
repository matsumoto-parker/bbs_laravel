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
                    <p class="card-text">投稿者：{{ $post->user->name }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">詳細</a>
                    <div class="row justify-content-center">
                        @if ($post->users()->where('user_id', Auth::id())->exists())
                        <div class="col-md-3">
                            <form action="{{ route('unfavorites', $post) }}" method="POST">
                                @csrf
                                <input type="submit" value="&#xf164;いいね取り消す"　class="fas btn btn-danger">
                            </form>
                        </div>
                        @else
                        <div class="col-md-3">
                            <form action="{{ route('favorites', $post) }}" method="POST">
                                @csrf
                                <input type="submit" value="&#xf164;いいね"　class="fas btn btn-success">
                            </form>
                        </div>
                        @endif
                    </div>
                    <div class="row justify-content-center">
                        <p>いいね数：{{ $post->users()->count() }} </p>
                    </div>
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
