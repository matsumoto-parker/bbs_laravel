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
                <div class="card-body">
                    <h5 class="card-title">title：</h5>
                    <p class="card-text">content：</p>
                    <a href="#" class="btn btn-primary">詳細</a>
                </div>
                <div class="card-footer text-muted">
                    posted at：
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
