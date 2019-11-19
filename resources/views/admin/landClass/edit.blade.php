@extends('admin.master')
@section('content')
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Land Class Create</h3>
                    @if(count($errors)>0)
                        @foreach($errors as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif

                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="PUT" action="{{route('landClass.update',$landClass->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Land Class Name Bangla</label>
                            <input type="" class="form-control" name="name_bn"  placeholder="Enter Land Class Name Bangla" value="{{$landClass->name_bn}}">
                        </div>
                        <div class="form-group">
                            <label for="">Land Class Name English</label>
                            <input type="" class="form-control" name="name_en" placeholder="Enter Land Class Name English" value="{{$landClass->name_en}}">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    @endsection
