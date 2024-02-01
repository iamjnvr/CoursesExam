@extends('layouts.app')

@section('content')
    <h1>Course Exam List</h1>
    <a class="btn btn-primary" href="{{ route('courses.create') }}">Create a New Course</a>
    <table class="table table-bordered">
        <thead class="text-center">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Instructor</th>
                <th>Duration (hours)</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->instructor }}</td>
                    <td>{{ $course->duration_hours }}</td>
                    <td>
                        <a href="{{ route('courses.edit', ['id' => $course->id]) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('courses.destroy', ['id' => $course->id]) }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-secondary" href="{{ route('home') }}">Back to Dashboard</a>
    
@endsection