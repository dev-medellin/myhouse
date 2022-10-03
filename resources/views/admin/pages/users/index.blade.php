@extends('admin.templates.content')
@section('body')
@include('admin.pages.users.'.$data['page'].'')
@endsection