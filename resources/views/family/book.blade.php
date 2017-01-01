<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>余氏家谱</title>

    <!-- Styles -->
    {{--<link href="/family/css/family.css" rel="stylesheet">--}}
    <link href="/family/css/ele.css" rel="stylesheet">
    <style>
        .el-row {
            margin-bottom: 20px;
        }

        .el-col {
            border-radius: 4px;
        }

        .bg-purple-dark {
            background: #99a9bf;
        }

        .bg-purple {
            background: #d3dce6;
        }

        .bg-purple-light {
            background: #e5e9f2;
        }

        .grid-content {
            border-radius: 4px;
            min-height: 36px;
        }

        .row-bg {
            padding: 10px 0;
            background-color: #f9fafc;
        }
    </style>
</head>
<body>
<div id="family">
    <el-row>
        <el-col :span="24">
            <div class="grid-content bg-purple-dark"></div>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="12">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="12">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="8">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="8">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
        <el-col :span="8">
            <div class="grid-content bg-purple"></div>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="6">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="6">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
        <el-col :span="6">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="6">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
    </el-row>
    <el-row>
        <el-col :span="4">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple"></div>
        </el-col>
        <el-col :span="4">
            <div class="grid-content bg-purple-light"></div>
        </el-col>
    </el-row>
</div>
<!-- Scripts -->
<script src="/family/js/family.js"></script>
<script>
    let vm = new Vue({
        el:'#family'
    });
</script>
</body>
</html>
