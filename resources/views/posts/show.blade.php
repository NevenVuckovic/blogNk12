@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1>{{$post->title}}</h1>
<p>
  {{$post->content}}
</p>

<h3>Comments</h3>
@foreach ($post->comments as $comment)
  <p>{{$comment->content}}</p>
@endforeach
<hr/>
<form method="POST" action="{{route('comments.store', ['post' => $post])}}">
  @csrf
  <div class="mb-3">
    <label for="content" class="form-label">Write here:</label>
    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content"></textarea>
    @include('partials.error-message', ['field' => 'content'])
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
