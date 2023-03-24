@extends('admin.layout.master')

@section('title', 'Edit Profiles')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center alignn-items-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Change Password</h4>
                            <hr class="mb-3">

                            <form action="{{ route('change-password.update') }}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="example-text-input" name="old_password" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="example-search-input" name="new_password" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="row mb-3">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Confirm New Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" id="example-email-input" name="confirm_password" required>
                                    </div>
                                </div>
                                <!-- end row -->
                                <div class="d-flex justify-content-end align-items-center gap-2">
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
