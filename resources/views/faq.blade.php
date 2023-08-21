@extends('layouts.app')
@section('content')
    <Question :qas='@json($data)' :settings='@json($viewData)'/>
@endsection
