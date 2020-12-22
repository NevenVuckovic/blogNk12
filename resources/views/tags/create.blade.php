@extends('layouts.app')

@section('title', 'Create post')

@section('content')
<form method="POST" action="/tags">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Write here:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
      @include('partials.error-message', ['field' => 'name'])
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection
