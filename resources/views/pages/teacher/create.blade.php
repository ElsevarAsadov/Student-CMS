@extends('layouts.admin-layout')


@section('content')
    <main class="vstack container-xxl gap-5">
        <h1 class="display-1 test">Add Teacher</h1>

        <form class="w-50" method="POST" action="{{route('teacher.post')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="teacherName">
                {{--<span  class="form-text text-danger">Error</span>--}}
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Surname</label>
                <input name="surname" type="text" class="form-control" id="surname" aria-describedby="teacherSurname">
                {{--<span  class="form-text text-danger">Error</span>--}}
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
@endsection
