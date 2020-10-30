@extends('layouts.module.system')

@section('content')
@include('article.category._nav')

<form action="{{ route('article.category.update',$category) }}" method="post">
  @csrf
  @method('PUT')
  @include('article.category._form')

  <button class="btn btn-primary btn-sm mt-3">保存提交</button>
</form>

@endsection