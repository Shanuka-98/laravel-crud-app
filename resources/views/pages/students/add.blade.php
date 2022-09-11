@extends('layouts.app')

@section('AddContent')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
    @endif

    <section class="vh-100" style="background-color: rgba(238, 238, 238, 0);">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add Student</p>

                                    <form class="mx-1 mx-md-4" action="{{ route('add.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="text" id="floatingId" name="student_id" class="form-control"
                                                    placeholder="ST446547" required />
                                                <label class="form-label" for="floatingId" style="font-size: 17px;">Student
                                                    ID</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="text" id="floatingName" name="student_name"
                                                    class="form-control" placeholder="Shanuka Piyumantha" required />
                                                <label class="form-label" style="font-size: 17px;"
                                                    for="floatingName">Student Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-floating flex-fill mb-0">
                                                <input type="number" id="floatingAge" name="student_age"
                                                    class="form-control" placeholder="23" required />
                                                <label class="form-label" style="font-size: 17px;" for="floatingAge">Student
                                                    Age</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-floating flex-fill mb-0">
                                                <select class="form-select form-control-lg" id="student_status"
                                                    name="student_status" style="font-size: 17px;" />
                                                <option hidden value="" selected>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                </select>
                                                <label for="student_status" class="form-label">Status</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-5">
                                            <div class="floating-label flex-fill mb-0 card">
                                                <div class="d-flex flex-row align-items-center mb-1 card-body">
                                                    <label class="form-label mb-lg-0 px-3" for="formImg"
                                                        style="font-size: 17px;">Image</label>
                                                    <input class="form-control form-control-lg mb-0" name="img_name"
                                                        style="font-size: 17px; align-items:flex-end" id="formImg"
                                                        type="file">
                                                    @error('student_image')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-lg-5">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
