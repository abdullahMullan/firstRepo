<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('login.page') }}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="email">Enter email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder=" email">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-3">
                        <label for="password">Enter password</label>
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="enter password">
                        {{-- <span class="text-denger>
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span> --}}
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <button type="submit" mt-3>Login</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
