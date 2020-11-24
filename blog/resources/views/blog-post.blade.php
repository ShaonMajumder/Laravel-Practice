@extends('layout')
@section('content')
    {!! $wel !!}{{ $data['tid'] }}
    {!!
        $posts = App\BlogPost::all(); 
        foreach($posts as $post){
            echo "{$post->title}\n";
        }
    !!}
@endsection
