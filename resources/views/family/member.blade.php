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
                    <table class="table table-hover no-more-tables">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>family</th>
                            <th>name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->family }}</td>
                                <td>{{ $member->first_name }}</td>
                                <td>{{ $member->generation }}</td>
                                <td>{{ $member->birth_year }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $members->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
