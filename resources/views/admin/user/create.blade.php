<x-admin>
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Add New User</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add New User</li>
                </ol>
            </div>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 col-xxl-6 offset-lg-2 offset-xl-3 offset-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Details</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.users.store')}}">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}"
                                    id="name"
                                    placeholder="Name"
                                    autocomplete="Name"
                                    required
                                >
                                @error('name')
                                    <div class="alert text-danger p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="username">{{ __('User Name') }}</label>
                                <input
                                    type="text"
                                    name="username"
                                    value="{{ old('username') }}"
                                    class="form-control @error('username') is-invalid @enderror"
                                    id="username"
                                    placeholder="User Name"
                                    required
                                >
                                @error('username')
                                    <div class="alert text-danger p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="inputEmail"
                                    placeholder="Email Address"
                                    autocomplete="email"
                                    required
                                >
                                @error('email')
                                    <div class="alert text-danger p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password"
                                    placeholder="Password"
                                    required
                                >
                                @error('password')
                                    <div class="alert text-danger p-0">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_confirmation">{{ __('Password Confirmation') }}</label>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control @error('password') is-invalid @enderror" 
                                    id="password_confirmation"
                                    placeholder="Confirm Password"
                                    required
                                >
                            </div>
                            
                            <div class="form-footer mt-2">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-admin>