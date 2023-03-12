@extends('layouts.app')

@section('content')
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
    <div class="align-items-center">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-header">
                        <h4>Home</h4>
                    </div>
                    <div class="text-center card-body">
                        <h2 class="mt-1">Welcome to the Student Management</h2>
                        <img src="https://img.freepik.com/free-vector/group-college-university-students-hanging-out_74855-5251.jpg?w=1060&t=st=1662837266~exp=1662837866~hmac=6e6a26abfeee6909bd00008d965233952fd3feefabd45860134592b562d9f399"
                            alt="cover" width="100%" height="525" style="object-fit: contain;" class="rounded">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
