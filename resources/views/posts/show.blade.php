@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Detail page</h1>
            <a href="{{ route('posts.create')}}" class="btn btn-primary">新規投稿</a>
            <div class="card text-center">
                <div class="card-header">
                    bbs
                </div>
                <div class="card-body">
                    <h5 class="card-title">title：{{ $post->title }}</h5>
                    <p class="card-text">content：{{ $post->body }}</p>
                    @if ( $post->user_id === Auth::id() )
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">編集画面へ</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="削除" class="btn btn-danger" onclick='return confirm("削除しますか？？");'>
                    </form>
                    @endif
                </div>
                <div class="card-footer text-muted">
                    posted at：{{ $post->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection