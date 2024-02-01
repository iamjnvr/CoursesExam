<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isInstructor')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'instructor' => 'required',
            'duration_hours' => 'required|integer|min:1',
        ]);

        Course::create($validatedData);

        return redirect('/courses');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'instructor' => 'required',
            'duration_hours' => 'required|integer|min:1',
        ]);

        $course = Course::findOrFail($id);
        $course->update($validatedData);

        return redirect('courses');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect('courses');
    }
}
