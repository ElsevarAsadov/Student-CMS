@extends('layouts.admin-layout')


@php
    use App\Models\Student;
    /** @var Student $student  */
    /** @var Student[] $students  */

@endphp


@section('content')
    <div class="container-xxl">
        <h1 class="display-1 my-4">Students</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="col-1">ID</th>
                <th scope="col" class="col-1">NAME</th>
                <th scope="col" class="col-1">SURNAME</th>
                <th scope="col" class="col-1">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student?->id}}</td>
                    <td>{{$student?->name}}</td>
                    <td>{{$student?->surname}}</td>
                    <td>
                        <div class="hstack gap-3">
                            <button class="btn btn-warning text-light">UPDATE</button>
                            <button class="btn btn-danger">DELETE</button>
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
