<?php

namespace domain\Services;

use App\Models\Students;
use Illuminate\Support\Facades\DB;


class StudentsService
{
    protected $students;

    public function __construct()
    {
        $this->students = new Students();
    }

    public function store($data)
    {
        $student_id = $data->student_id;
        $student_name = $data->student_name;
        $student_age = $data->student_age;
        $student_status = $data->student_status;

        if ($data->hasFile('img_name')) {
            $imageName = $data->img_name->getClientOriginalName();
            $path = $data->img_name->move(public_path('images'), $imageName);
        }

        $save = $this->students;

        $save->student_id = $student_id;
        $save->student_name = $student_name;
        $save->student_age = $student_age;
        $save->student_status = $student_status;
        $save->img_name = $imageName;
        $save->img_path = $path;

        $save->save();
    }

    public function view()
    {
        return $response['student'] = $this->students->all();
        return view('pages.students.view')->with($response);
    }

    public function edit()
    {
        return $response['student'] = $this->students->all();
        return view('pages.students.edit')->with($response);
    }

    public function delete($student_id)
    {
        $this->students->where('student_id', $student_id)->delete();
    }

    public function active($student_id)
    {
        $status = $this->students->where('student_id', $student_id);
        $current_status = DB::table('students')->where('student_id', $student_id)->value('student_status');

        if ($current_status == "Active") {
            $status->update(['student_status' => "Inactive"]);
        } elseif ($current_status == "Inactive") {
            $status->update(['student_status' => "Active"]);
        }
    }

    public function ViewUpdate($id)
    {
        return $this->students->where('student_id', $id)->first();
    }

    public function update($data)
    {
        $student_id = $data->student_id;
        $student_name = $data->student_name;
        $student_age = $data->student_age;
        $student_status = $data->student_status;
        $imageName = null;
        $path = null;

        if ($data->hasFile('img_name')) {
            $imageName = $data->img_name->getClientOriginalName();
            $path = $data->img_name->move(public_path('images'), $imageName);
        }

        $update = $this->students->where('student_id', $student_id);

        if ($imageName == null && $path == null) {
            $update->update([
                'student_name' => $student_name,
                'student_age' => $student_age,
                'student_status' => $student_status,
            ]);
        } elseif ($imageName != null && $path != null) {
            $update->update([
                'student_name' => $student_name,
                'student_age' => $student_age,
                'student_status' => $student_status,
                'img_name' => $imageName,
                'img_path' => $path,
            ]);
        }
    }
}
