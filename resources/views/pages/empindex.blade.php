@extends('layouts.base-layout') 
@section('content')
   <h1>Employee: {{ $emps -> count() }}</h1> 
  <ul>
    @foreach ($emps as $emp)
      <li>
        {{ $emp -> name }} {{ $emp -> surname}}:
        {{ $emp -> tasks() -> count() }}
        <ul>
          @foreach ($emp -> tasks as $task)
              <li> {{$task -> id}} {{$task -> name}}</li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </ul>
@endsection