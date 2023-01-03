@extends('contructor.templates.content')
@section('body')
@include('contructor.pages.projects.'.$data['page'].'')
@include('contructor.modal.insertProj')
@endsection