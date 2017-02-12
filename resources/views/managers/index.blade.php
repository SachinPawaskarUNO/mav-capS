@extends('layouts.app')
@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <h1>Manager</h1>
    <a href="{{url('/managers/create')}}" class="btn btn-success">Create Manager</a>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr class="bg-info">
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="5">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($managers as $manager)
            <tr>
                <td>{{ $manager->first_name }}</td>
                <td>{{ $manager->middle_name }}</td>
                <td>{{ $manager->last_name }}</td>
                <td>{{ $manager->email }}</td>
                <td>{{ $manager->password }}</td>
                <!--<td><a href="{{url('managers',$manager->id)}}" class="btn btn-primary">Read</a></td>!-->
                <td><a href="{{route('managers.edit',$manager->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['managers.destroy', $manager->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
