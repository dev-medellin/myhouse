@extends('admin.templates.content')
@section('body')
@include('admin.pages.projects.'.$data['page'].'')
@include('admin.modal.insertProj')
@endsection