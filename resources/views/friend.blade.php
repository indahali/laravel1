@extends('layouts.app')

@section('title', 'urutan')

@section('content')

@foreach ($friends as $friend)
<h1> urutan ke - {{ $friend['ke'] }}</h1>
<h2> nomor ke - {{ $friend['nomor'] }}</h2> 
@endforeach

@endsection