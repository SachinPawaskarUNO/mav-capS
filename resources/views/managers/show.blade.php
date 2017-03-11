@extends('app')
@section('content')
    <h1>Manager </h1>

    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>First Name<span style="color:red">*</span></td>
                <td><?php echo ($manager['first_name']); ?></td>
            </tr>
            <tr>
                <td>Middle Name</td>
                <td><?php echo ($manager['middle_name']); ?></td>
            </tr>
            <tr>
                <td>Last Name<span style="color:red">*</span></td>
                <td><?php echo ($manager['last_name']); ?></td>
            </tr>
            <tr>
                <td>Email<span style="color:red">*</span></td>
                <td><?php echo ($manager['email']); ?></td>
            </tr>
            <tr>
                <td>Password<span style="color:red">*</span></td>
                <td><?php echo ($manager['password']); ?></td>
            </tr>
            <div id="mandatory text-right"> <span style="color:red">*</span>Indicates mandatory field.</div>

            </tbody>
        </table>
    </div>

@stop
