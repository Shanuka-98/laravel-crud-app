@extends('layouts.app')

@section('EditContent')
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

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Update Student Details</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-11 mb-4">
                                    <table class="table mt-4 align-middle text-center table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Age</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($student as $key => $students)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td>{{ $students->student_id }}</td>
                                                    <td>{{ $students->student_name }}</td>
                                                    <td>{{ $students->student_age }}</td>
                                                    <td>
                                                        @if ($students->student_status == 'Active')
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td><img src="{{ asset('images/' . $students->img_name) }}"
                                                            class="img-thumbnail"
                                                            style="width: 100px; height: 100px; object-fit: cover;"
                                                            alt="Student Image" />
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('view.update', $students->student_id) }}"
                                                            class="btn btn-light"><i
                                                                class="fa-sharp fa-solid fa-user-pen m-0"></i></a>

                                                        <a href="{{ route('students.delete', $students->student_id) }}"
                                                            class="btn btn-light"><i class="fa-solid fa-trash-can m-1"></i></a>

                                                            @if ($students->student_status == 'Active')
                                                            <a href="{{ route('student.active', $students->student_id) }}" class="btn btn-light"></i>
                                                                <i class="fa-solid fa-circle-check m-1" style="color: green"></i></a>
                                                            @else
                                                            <a href="{{ route('student.active', $students->student_id) }}" class="btn btn-light"></i>
                                                                <i class="fa-solid fa-circle-check m-1""></i></a>
                                                            @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
