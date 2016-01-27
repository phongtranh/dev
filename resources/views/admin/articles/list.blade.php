@extends('admin/admin_app')

@section('content')
    <h3>Articles list</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td><a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a></td>
                <td>{{ $article->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection