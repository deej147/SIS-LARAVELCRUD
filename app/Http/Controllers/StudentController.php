<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::whereHas('user', function($query) {
                $query->where('is_admin', false);
            })
            ->with('user')
            ->latest()
            ->paginate(10);
            
        return view('admin.students.studentsIndex', compact('students'));
    }

    public function destroy(Student $student)
    {
        // Prevent deletion of admin users
        if ($student->user->is_admin) {
            return redirect()->route('students.index')
                ->with('error', 'Cannot delete admin users.');
        }

        // This will automatically delete the associated user due to cascade
        $student->user->delete();
        
        return redirect()->route('students.index')
            ->with('success', 'Student deleted successfully.');
    }
}
