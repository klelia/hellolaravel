@extends('layouts.app')
@section('page-title', 'Tutti i prodotti - La Molisana')

@section('content')
   <h1>Products</h1>
   <ul>
      @foreach ($products as  $pasta)
          <li>{{$pasta['titolo']}}
          <img src="{{$pasta['src-h']}}" alt="{{$pasta['titolo']}}">
         </li>
      @endforeach
   </ul>
@endsection
