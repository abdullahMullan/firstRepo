<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-9">
                {{-- {{ Auth::user() }} --}}

                <h1> welcome to {{ Auth::user()->name }}</h1>
                <a href="{{ route('add.user') }}" class="btn btn-success btn-sm mb-3">Writer/Add User</a>
                <h3>All Users Data</h3>
                <table class="table table-striped table-hover table-danger table-borderd">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>City</th>
                        <th>view</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($userData as $data)
                        <tr>
                            <td> {{ $data->id }} </td>
                            <td> {{ $data->name }} </td>
                            <td> {{ $data->email }} </td>
                            <td> {{ $data->city }} </td>
                            <td> <a href="{{ route('view.user', $data->id) }}" class="btn btn-primary btn-sm">View</a>
                            </td>
                            <td> <a href="{{ route('update.user', $data->id) }}"
                                    class="btn btn-success btn-sm">Update</a> </td>
                            @role('admin_role|editor_role')
                                <td> <a href="{{ route('delete.user', $data->id) }}"
                                        class="btn btn-danger btn-sm">Delete</a> </td>
                            @endrole
                        </tr>
                    @endforeach
                </table>


            </div>
        </div>
    </div>

</body>

</html>
