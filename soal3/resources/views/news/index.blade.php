@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
   @foreach($news as $news)
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-header">{{ $news->title }}</div>
                <div class="card-body">
                    <p>{{ str_limit($news->detail, 30) }}</p>
                    <a class="btn btn-success"  href="{{ action('NewsController@show', $news->id) }}">Read More</a>
                </div>
                <div class="card-footer text-muted">
                    <p>{{ $news->name }} - {{ $carbon->parse($news->created_at)->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    @endforeach
   </div>
</div>
@endsection
