@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row">
   @foreach($news as $news)
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">{{ $news->title }}</div>
                <div class="card-body">
                    <p>{{ $news->detail }}</p>
                    
                </div>
                <div class="card-footer text-muted">
                    <p>{{ $news->user_id }} - {{ $carbon->parse($news->created_at)->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    @endforeach
   </div>
   <div class="row mt-5">
        <div class="col-md-12">
            <center>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-primary">Edit</button>
            </center>
        </div>
    </div>
</div>
@endsection
