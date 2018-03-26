@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a class="btn" style="padding: 0px 10px;margin-left:15px;" href="{{ route('admin.portfolio.create')}}">{{ __('label.add') }} <i class="fa fa-plus-circle fa-lg"></i></a>
                    <a class="btn pull-right" style="padding: 0px 10px;margin-left:15px;" onclick="window.location.reload()"><i class="fa fa-refresh fa-lg"></i></a>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">{{ __('label.title') }}</th>
                            <th scope="col">{{ __('label.description') }}</th>
                            <th scope="col">{{ __('label.type') }}</th>
                            <th scope="col">{{ __('label.img') }}</th>
                            <th scope="col">{{ __('label.operation') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <th scope="row">{{$portfolio->id}}</th>
                                <td><a href="{{$portfolio->url}}" target="_blank">{{$portfolio->title}}</a></td>
                                <td>{{$portfolio->description}}</td>
                                <td>{{$portfolio->name}}</td>
                                <td>{{Html::image($portfolio->img,$portfolio->title,['width'=>'100','height'=>'80'])}}</td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.portfolio.destroy', [$portfolio->id])}}"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
