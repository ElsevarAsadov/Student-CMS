@extends('layouts.admin-layout')


@php
    use App\Models\Teacher;
    /** @var Teacher $teacher  */
    /** @var Teacher[] $teachers  */

@endphp


@section('content')
    <div class="container-xxl">
        <h1 class="display-1 my-4">Teachers</h1>
        <a class="btn btn-primary my-3" href="{{route('teacher.create')}}">Create</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col" class="col-1">ID</th>
                <th scope="col" class="col-1">NAME</th>
                <th scope="col" class="col-1">SURNAME</th>
                <th scope="col" class="col-1">COURSE ID</th>
                <th scope="col" class="col-1">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{$teacher?->id}}</td>
                    <td>{{$teacher?->name}}</td>
                    <td>{{$teacher?->surname}}</td>
                    <td>{{count($teacher?->courses) ? $teacher?->courses[0]->name : '-'}}</td>
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
