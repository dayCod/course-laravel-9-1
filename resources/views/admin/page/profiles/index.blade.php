@extends('admin.layout.master')

@section('title', 'Profiles')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center alignn-items-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Users Profile</h4>
                            <hr class="mb-3">

                            <center>
                                <div class="mt-4 mt-md-0 mb-4">
                                    <img class="img-thumbnail rounded-circle avatar-xl"
                                        src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" alt="200x200"
                                        data-holder-rendered="true">
                                </div>
                            </center>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" placeholder="{{ $user->name }}"
                                        id="example-text-input" readonly>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-search-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="search" placeholder="{{ $user->username }}"
                                        id="example-search-input" readonly>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" placeholder="{{ $user->email }}"
                                        id="example-email-input" readonly>
                                </div>
                            </div>
                            <!-- end row -->
                            <a href="" class="btn btn-info waves-effect waves-light float-end">Edit
                                Profiles</a>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
