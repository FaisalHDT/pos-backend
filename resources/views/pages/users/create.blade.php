@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create User</h2>


                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name" type="name"
                                        class="form-control @error('name') is-invalid
                    @enderror"
                                        name="name" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid
                        @enderror"
                                            name="email">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="number"
                                                class="form-control @error('phone') is-invalid
                        @enderror"
                                                name="phone">
                                            @error('phone')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                        <div class="form-group">

                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password"
                                                class="form-control pwstrength @error('password') is-invalid
                        @enderror"
                                                data-indicator="pwindicator" name="password">
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Roles</label>
                                            <div class="selectgroup w100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="ADMIN"
                                                        class="selectgroup-input" checked="">
                                                    <span class="selectgroup-button">Admin</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="STAFF"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">Staff</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="roles" value="USER"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button">User</span>
                                                </label>
                                            </div>

                                        </div>


                                        <div class="footer text-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                        </form>
                    </div>

                </div>

            </div>
    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
