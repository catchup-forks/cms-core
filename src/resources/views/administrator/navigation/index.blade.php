@extends('admin::layouts.master')

@section('title')
{{trans('cms::navigation.index.title')}} | @parent
@endsection

@section('page-title')
    @pageHeader('cms::navigation.index.title', 'cms::navigation.index.description', 'cms::navigation.index.icon')
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-list"></i>&nbsp;{{trans('cms::navigation.index.lists')}}
            </h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            {!! $dataTable->table(['class' => 'table table-hover margin-top-30']) !!}
        </div>
    </div>
@stop

@push('scripts')
{!! $dataTable->scripts() !!}
@endpush
