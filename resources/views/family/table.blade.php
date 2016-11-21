@extends('layouts.app')

@section('page-css')
    <link href="/plugins/bootstrap-table/bootstrap-table.css" rel="stylesheet" type="text/css"/>
@endsection

@section('page-js')
    <script src="/plugins/bootstrap-table/bootstrap-table.js"></script>
    <script src="/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.js"></script>
@endsection

@section('content')
    <div class="page-title"><a onclick="history.go(-1);"><i class="icon-custom-left"></i></a>
        <h3>家族成员列表</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <table class="table table-hover no-more-tables" data-toggle="table" data-url="{{ route('member') }}">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
