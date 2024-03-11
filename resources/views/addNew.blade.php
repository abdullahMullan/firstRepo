<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adduser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                <form action="{{ route('add.new') }}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label class="form-lable">Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mt-3">
                        <label class="form-lable">Email</label>
                        <input type="email" class="form-control" name="useremail">
                    </div>
                    <div class="mt-3">
                        <label class="form-lable">City</label>
                        <input type="text" class="form-control" name="usercity">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
