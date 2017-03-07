@extends('layouts.app')
@section('content')

    <h1>Manager</h1>
    <a href="{{url('/managers/create')}}" class="btn btn-success" id="admin_create_manager">Create Manager</a>
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

                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Confirm?</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete?</p>
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open(['method' => 'DELETE', 'route'=>['managers.destroy', $manager->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        {!! Form::close() !!}
                </td>
            </tr>
            @endif
        @endforeach

        </tbody>

    </table>
@endsection
