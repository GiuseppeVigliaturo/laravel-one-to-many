@extends('layouts.base-layout') 
@section('content')
   <h1>Task: {{ $tasks -> count() }}</h1> 
  <ul>
    @foreach ($tasks as $task)
      <li>
        {{ $task -> name }} {{ $task -> description}}:
        
      </li>
    @endforeach
  </ul>
@endsection