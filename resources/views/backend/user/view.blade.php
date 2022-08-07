@extends('admin.admin_master')

@section('admin')
    <!-- Content Wrapper. Contains page content -->

    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        New Arrivals
                        <small class="subtitle">More than 400+ new members</small>
                    </h4>
                    <a
                        type="button"
                        href="{{route('user.create')}}"
                        class="btn btn-rounded btn-success mb-5 float-right">Add User</a>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Create</th>
                                <th>Updated</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td width="5%">{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->usertype}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td width="25%">
                                        <a href="{{route('user.edit',$user)}}" class="btn btn-info btn-sm">Editar</a>
                                        <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="6"> No existe ningun usuario </td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Create</th>
                                <th>Updated</th>
                                <th>Options</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Vendor JS -->
    <script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/js/pages/data-table.js')}}"></script>
@endsection
