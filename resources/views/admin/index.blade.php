@extends('layouts.app')
@section('content')

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
            <th colspan="5">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $manager)
            @if($manager->hasRole('manager'))
            <tr>
                <td>{{ $manager->first_name }}</td>
                <td>{{ $manager->middle_name }}</td>
                <td>{{ $manager->last_name }}</td>
                <td>{{ $manager->email }}</td>
            <!--<td><a href="{{url('managers',$manager->id)}}" class="btn btn-primary">Read</a></td>!-->
                <td><a href="{{route('managers.edit',$manager->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['managers.destroy', $manager->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>
@endsection
