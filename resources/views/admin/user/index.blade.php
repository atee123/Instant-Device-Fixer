<x-admin>
    <div class="main-container container-fluid">
        <div class="side-app">
    
            <!-- PAGE-HEADER -->
            <div class="page-header">
                <h1 class="page-title">Users</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
    
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header justify-content-between">
                            <h3 class="card-title">Users List</h3>
                            <a href="{{route('admin.users.create')}}" class="btn btn-primary">Add New User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered border text-nowrap mb-0" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>                                                
                                                <td>{{$user->is_active}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>{{$user->updated_at}}</td>
                                                <td>
                                                    <a href="{{url('/admin/users/'.$user->email.'/edit')}}" class="btn btn-sm btn-primary">
                                                        <span class="fa fa-edit"> </span>
                                                    </a>
                                                    {{-- <a href="#" class="btn btn-sm btn-danger">
                                                        <span class="fa fa-trash"> </span>
                                                    </a> --}}
                                                </td>
                                            </tr>
                                            
                                        @endforeach                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if($users->count()>0)
                            <div class="card-footer">
                                <div class="d-flex justify-content-end">
                                    {!! $users->links() !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</x-admin>
<script src="{{URL::asset('assets/dashboard/plugins/edit-table/bst-edittable.js')}}" defer></script>
<script src="{{URL::asset('assets/dashboard/plugins/edit-table/edit-table.js')}}" defer></script>