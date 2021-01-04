@extends('layouts.app')

@section('content')




<div class="jumbotron">
  <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div>
      <div class="form-group @if($errors->get('titre')) has-error @endif">
        <label for="titre">Titre:</label>
        <input type="text" class="form-control" placeholder="Enter titre" name="titre">
        @if ($errors->has('titre'))
        <span class="text-danger">{{ $errors->first('titre') }}</span>
        @endif
      </div>
      <div class="form-group @if($errors->has('presantation')) has-error @endif">
        <label for="presantation">Presantation:</label>

        <textarea class="form-control" rows="5" name="presantation"></textarea>
        @if ($errors->has('presantation'))
        <span class="text-danger">{{ $errors->first('presantation') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label for="">image</label>
        <input type="file" class="form-control" name="photo">


        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </form>
</div>
@endsection