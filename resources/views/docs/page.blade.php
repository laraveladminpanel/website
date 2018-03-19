@extends('docs.master')

@section('page_title', __('admin.generic.view') . ' ' . 'page_title')

@section('page_header')
    <h1 class="page-title">
        <i class="icon"></i> display_name_singular &nbsp;
    </h1>
@stop

@section('content')
    <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <div class="panel-heading" style="border-bottom:0;">
                        <h3 class="panel-title">title</h3>
                    </div>

                    <div class="panel-body" style="padding-top:0;">
                      {!! $page->body !!}
                    </div><!-- panel-body -->
                </div>
            </div>
        </div>
    </div>
@stop

