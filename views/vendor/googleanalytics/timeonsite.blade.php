@extends('layouts.front')
@section('content')
<section class="p-t-lg p-y-md">
<div class="container">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">{{ $description }}</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered">
            <tr>
                <th>Sessions</th>
                <th>Session Duration (sec)</th>
                <th>Average (sec/session)</th>
            </tr>
            @foreach($analytics as $key => $item)
            <tr>
                <td>{{ $item[0]  }}</td>
                <td>{{ $item[1]  }}</td>
                <td>{{ round($item[1]/$item[0])  }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
</section>
@endsection