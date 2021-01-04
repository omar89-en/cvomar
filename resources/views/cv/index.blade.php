@extends('layouts.app')

@section('content')




<div class="jumbotron" >
 
  <h1 align="center">Les liste</h1>
  <div  class="float-sm-right" >
    <a href="{{url('create')}}" class="btn btn-success">Nv cv</a>
  </div>
  
<table class="table table-borderless">

 
  <thead>
    <tr>
      
      <th scope="col">Titre</th>
      <th scope="col">Presantation</th>
      <th scope="col" >Date Creation</th>
        <th scope="col" >Action</th> 
       
    </tr>
  </thead>
  <tbody>
   @foreach($cvs as $cv)
    <tr>
      <td>{{$cv->titre}} <br> {{$cv->user->name}}</td>
      <td>{{$cv->presantation}}</td>
      <td>{{$cv->created_at}}</td>
      <td>
        <form action="{{url('cvs/'.$cv->id.'/destroy')}}" method="post"> 
          {{csrf_field()}}
          {{method_field('DELETE')}}

           <a href="" class="btn btn-primary">show</a>
           <a href="{{url('cv/'.$cv->id. '/edit')}}" class="btn btn-default">Edit</a>
  
            <button type="submit" class="btn btn-danger" >suprime</button>
        </form>


      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
