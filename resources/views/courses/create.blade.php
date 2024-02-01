@extends('layouts.app')

@section('content')
    <h1>Create a New Course</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="instructor" class="form-label">Instructor:</label>
                    <input type="text" name="instructor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="duration_hours" class="form-label">Duration (hours):</label>
                    <input type="number" name="duration_hours" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Course</button>
            </form>
        </div>
    </div>

    <a href="{{ route('courses.index') }}" class="btn btn-secondary mt-3">Back to All Courses</a>
@endsection
