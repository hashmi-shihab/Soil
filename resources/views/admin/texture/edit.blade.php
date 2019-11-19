@extends('admin.master')
@section('content')
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cultivation Type Edit</h3>
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">

                                    <button type="button" class="close" data-dismiss="alert" aira-hidden="true">
                                        &times;
                                    </button>
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="POST" action="{{route('texture.update',$texture->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Texture Name Bangla</label>
                                <input type="" class="form-control" name="name_bn"  placeholder="Enter Cultivation Class Name Bangla" value="{{$texture->name_bn}}">
                            </div>
                            <div class="form-group">
                                <label for="">Texture Name English</label>
                                <input type="" class="form-control" name="name_en" placeholder="Enter Cultivation Class Name English" value="{{$texture->name_en}}">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
