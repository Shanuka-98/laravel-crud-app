@extends('layouts.app')

@section('ViewContent')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Student Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($student as $key => $students)
                                    <div class="text-center col-md-4">
                                        <img src="{{ asset('images/' . $students->img_name) }}" class="img-thumbnail"
                                            style="width: 200px; height: 200px; object-fit: cover;" alt="Student Image" />
                                    </div>
                                    <div class="col-md-8 mb-4">
                                        <table class="table table-bordered mt-3 align-middle" width="100%">
                                            <tr>
                                                <th>Student ID</th>
                                                <td>{{ $students->student_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Student Name</th>
                                                <td>{{ $students->student_name }}</td>
                                            </tr>
                                            <tr>
                                                <th>Student Age</th>
                                                <td>{{ $students->student_age }}</td>
                                            </tr>
                                            <tr>
                                                <th>Student Status</th>
                                                <td>{{ $students->student_status }}</td>
                                            </tr>

                                        </table>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
