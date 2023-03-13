@extends('admin.layout.master')

@section('title', 'Edit Profiles')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center alignn-items-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Users Profile</h4>
                            <hr class="mb-3">

                            <center>
                                <div class="mt-4 mt-md-0 mb-4">
                                    <img class="img-thumbnail rounded-circle avatar-xl"
                                        src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" alt="200x200"
                                        data-holder-rendered="true" id="showImage">
                                </div>
                            </center>

                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" id="example-text-input" name="name"
                                            value="{{ old('email', $user->name) }}">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" id="example-search-input" name="username"
                                            value="{{ old('username', $user->username) }}">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" id="example-email-input" name="email"
                                            value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                                    <div class="col-sm-10">
                                        <input name="profile_image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="d-flex justify-content-end align-items-center gap-2">
                                    <a href="{{ route('profile') }}"
                                        class="btn btn-secondary waves-effect waves-light">Cancel
                                        Changes</a>
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                console.log(e.target.result)
                let reader = new FileReader()
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result)
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endpush
