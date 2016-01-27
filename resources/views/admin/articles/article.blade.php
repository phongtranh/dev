@extends('admin/admin_app')

@section('content')
    <h3>{{ $article->title }}</h3>
    <small>Created at: {{ $article->created_at }}</small>
    <p>{{$article->content}}</p>
@endsection