<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    // Hiển thị danh sách sinh viên
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Hiển thị form tạo sinh viên mới
    public function create()
    {
        return view('students.create');
    }

    // Xử lý lưu sinh viên mới
    public function store(Request $request)
    {
        $request->validate([
            'student_code' => 'required|unique:students,student_code',
            'name' => 'required',
            'class' => 'required',
            'faculty' => 'required',
            'email' => 'required|email|unique:students,email',
            'password' => 'required',
        ]);

        Student::create([
            'student_code' => $request->student_code,
            'name' => $request->name,
            'class' => $request->class,
            'faculty' => $request->faculty,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    // Hiển thị form chỉnh sửa thông tin sinh viên
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Xử lý cập nhật thông tin sinh viên
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'faculty' => 'required',
            'email' => 'required|email', // Không cần 'unique' ở đây
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    // Xử lý xóa sinh viên
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
