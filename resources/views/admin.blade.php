@extends('layouts.app')

@section('content')
    <admin :qas='@json($data)' :settings='@json($viewData)'/>
@endsection



