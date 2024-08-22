@extends('layouts.app')
@section('content')

<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Post</h3>
      <form action="{{ route('blogposts.update', ['blogpost' => $blogpost]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="Title">Title</label>
          <input type="text" class="form-control" id="Title" name="Title"
            value="{{ $blogpost->Title }}" style="width: 100%;" required>
        </div>
        <div class="form-group">
          <label for="Subtitle">Subtitle</label>
          <input type="text" class="form-control" id="Subtitle" name="Subtitle" value="{{ $blogpost->Subtitle }}" style="width: 100%;">
        </div>        
        <div class="form-group">
          <label for="BriefContent">Brief Content</label>
          <textarea class="form-control" id="BriefContent" name="BriefContent" style="width: 100%;">{{ $blogpost->BriefContent }}</textarea>
        </div>               
        <div class="form-group">
          <label for="FullContent">Full Content</label>
          <textarea class="form-control" id="FullContent" name="FullContent" style="width: 100%;">{{ $blogpost->FullContent }}</textarea>
        </div>
        <div class="form-group">
          <label for="IsPublished">Published</label>
          <input class="form-control" type="checkbox" id="IsPublished" name="IsPublished" value="{{ $blogpost->IsPublished }}" {{$blogpost->IsPublished==1?'checked':''}}>
        </div>        
        <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
      </form>
    </div>
  </div>
</div>

@endsection