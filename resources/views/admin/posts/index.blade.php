@extends('layouts.admin')

@section('content')

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt="" height="50"></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ $post->body }}</td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@endsection