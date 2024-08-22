@extends('layouts.app')
@section('content')

<style>
#blog-posts {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#blog-posts td, #blog-posts th {
  border: 1px solid #ddd;
  padding: 8px;
}

#blog-posts tr:nth-child(even){background-color: #f2f2f2;}

#blog-posts tr:hover {background-color: #ddd;}

#blog-posts th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>

<h1>Blogpost</h1>
<a href="{{ route('blogposts.create') }}" class="button btn">Create New Blog Post</a>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<table id="blog-posts">
    <thead>
        <tr>
            <th>Title</th>
            <th>Subtitle</th>
            <th>BriefContent</th>
            <th>FullContent</th>
            <th>IsPublished</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogposts as $blogpost)
        <tr>
            <td>{{ $blogpost->Title }}</td>
            <td>{{ $blogpost->Subtitle }}</td>
            <td>{{ $blogpost->BriefContent }}</td>
            <td>{{ $blogpost->FullContent }}</td>
            <td>{{ $blogpost->IsPublished }}</td>        
            <td>
                <a href="{{ route('blogposts.edit', ['blogpost' => $blogpost]) }}">Edit</a>
                <form action="{{ route('blogposts.destroy', ['blogpost' => $blogpost]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection