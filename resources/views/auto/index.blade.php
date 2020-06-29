@extends('app')

@section('content')

  <h1>Auto Index</h1>
  
  @foreach ($autos as $auto)
<h2>{{ $auto->model }}</h2>
  @endforeach
    
@endsection