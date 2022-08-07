@extends('admin.admin_master')
@section('admin')

    <div class="row">
        <div class="col-12">
            <div class="box">
                <form role="form" action="{{route('user.update',['user'=>$user->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                            Form New User
                            <small class="subtitle">More than 400+ new members</small>
                        </h4>
                        <a
                            type="button"
                            href="{{route('user.create')}}"
                            class="btn btn-rounded btn-outline mb-5 float-right">Volver</a>
                    </div>
                    <div class="box-body">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Name</label>
                            <input id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}">
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-rounded btn-danger">Cancel</button>
                        <button type="submit" class="btn btn-rounded btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

