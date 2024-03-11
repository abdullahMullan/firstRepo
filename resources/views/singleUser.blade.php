<h1> Single User File</h1>
@foreach ($singleUser as $userData)
<h2>Name:{{ $userData->id }}</h2>
<h2>Name:{{ $userData->name }}</h2>
<h2>Name:{{ $userData->email }}</h2>
<h2>Name:{{ $userData->city }}</h2>
@endforeach
