
@extends('layouts.app')

@section('content')
 <div class="jumbotron">
  <form action="{{url('cv/update/'.$cv->id)}}" method="POST">
    <input type="hidden" name="_method" value="put">
    {{csrf_field()}}
  <div>
    <div class="form-group">
      <label for="titre">Titre:</label>
      <input type="text" class="form-control"  placeholder="Enter titre" name="titre" value="{{$cv->titre}}">
      @if ($errors->has('titre'))
                    <span class="text-danger">{{ $errors->first('titre') }}</span>
                @endif
    </div>
    <div class="form-group">
      <label for="presantation">Presantation:</label>
     
      <textarea class="form-control" rows="5" name="presantation">{{$cv->presantation}}</textarea>
      @if ($errors->has('presantation'))
                    <span class="text-danger">{{ $errors->first('presantation') }}</span>
                @endif
    </div>
   <div align='center'>
      <button type="submit" class="btn btn-danger" >Modifier</button>
    </div>
</div>
  </form>
</div>
@endsection