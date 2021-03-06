@extends('layouts.front')

@section('title', 'Editar Banner')

@section('content')
<section class="p-t-lg p-y-md">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        {!! Form::model($banner, ['method' => 'PUT', 'route' => ['banner.update',  $banner] ]) !!}
                            @include('admin.banner.partials._form')
                            <!-- Submit Form Button -->
                            {!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection