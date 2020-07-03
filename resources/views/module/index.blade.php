@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        已安装模块列表
    </div>
    <div class="card-body pt-0 pb-0">
        @foreach ($modules as $module)
        <section class="border-bottom row align-items-center pb-3 pt-3">
            <div class="col-sm-1 pb-3 pb-sm-0">
                <img src="/modules/{{ $module['name'] }}/static/preview.jpg" class="rounded-circle">
            </div>
            <div class="col-sm-10 small text-secondary pb-3 pb-sm-0">
                <strong> {{ $module['title'] }} </strong> {{ $module['description'] }}
                <br>
                标识：{{ $module['name'] }}
                版本：{{ $module['version'] }}
            </div>
            <div class="col-sm-1 text-left text-sm-right ">
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    @if ($module['installed'])
                    <btn-del action="{{ route('admin.module.uninstall',$module['name']) }}"></btn-del>
                    @else
                    <a href="{{ route('admin.module.install',$module['name']) }}" class="btn btn-outline-success">安装</a>
                    @endif
                </div>
            </div>
        </section>
        @endforeach
    </div>
</div>
@endsection