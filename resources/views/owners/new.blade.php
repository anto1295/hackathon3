<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Owner's detail</title>
    <style>
        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Owner's detail</h2>
    <form action={{ route('owner.store') }} method="post">
        @csrf
        <label>Name</label><br>
        <input name="first_name" type="text" value=''><br>

        <label>Surname</label><br>
        <input name="surname" type="text" value=''><br>
        <hr>
        <label>Email</label><br>
        <input name="email" type="text" value=''><br>
        <label>Phone</label><br>
        <input name="phone" type="text" value=''><br>
        <label>Address</label><br>
        <input name="address" type="text" value=''><br>

        <div class="actions">
            <button type="submit">Update</button>
            <button onclick="location.href='http://www.laravel-hackathon3.test/'" type="button">Close</button>
        </div>
    </form>

</body>

</html>
