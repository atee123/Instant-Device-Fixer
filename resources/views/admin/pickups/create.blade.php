<x-admin>

    <style>
        .input-group-text{
            background: #F2F3F4;
            color: #000;
        }
    </style>
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Add Pickup</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pickups</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Pickup</li>
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pickup Details</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.pickups.store')}}" class="form-horizontal">
                            @csrf

                            <div class="border mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Pickup No</span>
                                                <input
                                                    type="text"
                                                    name="type"
                                                    class="form-control"
                                                    disabled
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Entry Date & Time</span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    value="{{date('d-M-Y h:i A')}}"
                                                    disabled
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Pickup Type</span>
                                                <input
                                                    type="text"
                                                    name="pickup_type"
                                                    class="form-control @error('pickup_type') is-invalid @enderror"
                                                    value="{{ old('pickup_type') }}"
                                                    id="pickup_type"
                                                    placeholder="Pickup Type"
                                                    autocomplete="pickup_type"
                                                    rqd
                                                >
                                                @error('pickup_type')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Customer Name</span>
                                                <input
                                                    type="text"
                                                    name="customer_name"
                                                    class="form-control @error('customer_name') is-invalid @enderror"
                                                    value="{{ old('customer_name') }}"
                                                    id="customer_name"
                                                    placeholder="Customer Name"
                                                    autocomplete="customer_name"
                                                    rqd
                                                >
                                                @error('customer_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Mobile Number</span>
                                                <input
                                                    type="text"
                                                    name="mobile_number"
                                                    class="form-control @error('mobile_number') is-invalid @enderror"
                                                    value="{{ old('mobile_number') }}"
                                                    id="mobile_number"
                                                    placeholder="Mobile Number"
                                                    autocomplete="mobile_number"
                                                    rqd
                                                >
                                                @error('mobile_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Business Number</span>
                                                <input
                                                    type="text"
                                                    name="business_number"
                                                    class="form-control @error('business_number') is-invalid @enderror"
                                                    value="{{ old('business_number') }}"
                                                    id="business_number"
                                                    placeholder="Business Number"
                                                    autocomplete="business_number"
                                                    rqd
                                                >
                                                @error('business_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Home Number</span>
                                                <input
                                                    type="text"
                                                    name="home_number"
                                                    class="form-control @error('home_number') is-invalid @enderror"
                                                    value="{{ old('home_number') }}"
                                                    id="home_number"
                                                    placeholder="Home Number"
                                                    autocomplete="home_number"
                                                    rqd
                                                >
                                                @error('home_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Email</span>
                                                <input
                                                    type="email"
                                                    name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}"
                                                    id="email"
                                                    placeholder="Email"
                                                    autocomplete="email"
                                                    rqd
                                                >
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-2">Device Specifications</h3>
                            <div class="border mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Device Type</span>
                                                <input
                                                    type="text"
                                                    name="device_type"
                                                    class="form-control @error('device_type') is-invalid @enderror"
                                                    value="{{ old('device_type') }}"
                                                    id="device_type"
                                                    placeholder="Device Type"
                                                    autocomplete="device_type"
                                                    rqd
                                                >
                                                @error('home_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Device Model</span>
                                                <input
                                                    type="text"
                                                    name="device_model"
                                                    class="form-control @error('device_model') is-invalid @enderror"
                                                    value="{{ old('device_model') }}"
                                                    id="device_model"
                                                    placeholder="Device Model"
                                                    autocomplete="device_model"
                                                    rqd
                                                >
                                                @error('device_model')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Estimate Price</span>
                                                <input
                                                    type="text"
                                                    name="estimate_price"
                                                    class="form-control @error('estimate_price') is-invalid @enderror"
                                                    value="{{ old('estimate_price') }}"
                                                    id="estimate_price"
                                                    placeholder="Estimate Price"
                                                    autocomplete="estimate_price"
                                                    rqd
                                                >
                                                @error('estimate_price')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Fault Reported by Customer</span>
                                                <input
                                                    type="text"
                                                    name="device_fault"
                                                    class="form-control @error('device_fault') is-invalid @enderror"
                                                    value="{{ old('device_fault') }}"
                                                    id="device_fault"
                                                    placeholder="Device Fault"
                                                    autocomplete="device_fault"
                                                    rqd
                                                >
                                                @error('device_fault')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-2">Pickup Address</h3>
                            <div class="border mb-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Address</span>
                                                <input
                                                    type="text"
                                                    name="device_pickup_address"
                                                    class="form-control @error('device_pickup_address') is-invalid @enderror"
                                                    value="{{ old('device_pickup_address') }}"
                                                    id="device_pickup_address"
                                                    placeholder="Device Pickup Address"
                                                    autocomplete="device_pickup_address"
                                                    rqd
                                                >
                                                @error('device_pickup_address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Pickup Country State</span>
                                                <input
                                                    type="text"
                                                    name="pickup_country_state"
                                                    class="form-control @error('pickup_country_state') is-invalid @enderror"
                                                    value="{{ old('pickup_country_state') }}"
                                                    id="pickup_country_state"
                                                    placeholder="Pickup Country State"
                                                    autocomplete="pickup_country_state"
                                                    rqd
                                                >
                                                @error('pickup_country_state')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-2">Delivery Address</h3>
                            <div class="border mb-4">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Address</span>
                                                <input
                                                    type="text"
                                                    name="delivery_address"
                                                    class="form-control @error('delivery_address') is-invalid @enderror"
                                                    value="{{ old('delivery_address') }}"
                                                    id="delivery_address"
                                                    placeholder="Delivery Address"
                                                    autocomplete="delivery_address"
                                                    rqd
                                                >
                                                @error('delivery_address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">State</span>
                                                <input
                                                    type="text"
                                                    name="delivery_country_state"
                                                    class="form-control @error('delivery_country_state') is-invalid @enderror"
                                                    value="{{ old('delivery_country_state') }}"
                                                    id="delivery_country_state"
                                                    placeholder="Delivery Country State"
                                                    autocomplete="delivery_country_state"
                                                    rqd
                                                >
                                                @error('delivery_country_state')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h3 class="mb-2">Pickup and Delivery Schedule</h3>
                            <div class="border mb-4">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Pickup Date</span>
                                                <input
                                                    type="date"
                                                    name="pickup_date"
                                                    class="form-control @error('pickup_date') is-invalid @enderror"
                                                    value="{{ old('pickup_date') }}"
                                                    id="pickup_date"
                                                    placeholder="Pickup Date"
                                                    autocomplete="pickup_date"
                                                    rqd
                                                >
                                                @error('pickup_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Delivery Date</span>
                                                <input
                                                    type="date"
                                                    name="delivery_date"
                                                    class="form-control @error('delivery_date') is-invalid @enderror"
                                                    value="{{ old('delivery_date') }}"
                                                    id="delivery_date"
                                                    placeholder="Delivery Date"
                                                    autocomplete="delivery_date"
                                                    rqd
                                                >
                                                @error('delivery_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Messenger</span>
                                                <select name="messenger" class="form-control form-select  @error('messenger') is-invalid @enderror" data-bs-placeholder="Messenger" rqd>
                                                    <option selected>Select Messenger</option>
                                                    <option value="Ali">Ali</option>
                                                    <option value="Usman">Usman</option>
                                                </select>                                                
                                                @error('messenger')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-text">Comments</span>
                                                <textarea name="comments" placeholder="comments" class="form-control @error('comments') is-invalid @enderror" style="min-height: 120px">{{old('comments')}}</textarea>                                               
                                                @error('comments')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
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