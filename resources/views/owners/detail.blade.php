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
    <form action={{ route('owner.update', ['id' => $owner->id]) }} method="post">
        @csrf
        <label>Name</label><br>
        <input name="firstname" type="text" value={{ $owner->first_name }}><br>

        <label>Surname</label><br>
        <input name="surname" type="text" value={{ $owner->surname }}><br>
        <hr>
        <label>Email</label><br>
        <input name="email" type="text" value={{ $owner->email }}><br>
        <label>Phone</label><br>
        <input name="phone" type="text" value={{ $owner->phone }}><br>
        <label>Address</label><br>
        <input name="address" type="text" value={{ $owner->address }}><br>
        <label>List of animal</label><br>
        <ul>
            @foreach ($owner->animals as $animal)
                <li><a href="{{route('animal.detail', $animal->id)}}">{{ $animal->name }} </a> - {{ $animal->species }}</li>
            @endforeach
        </ul>
        <div class="actions">
            <button type="submit">Update</button>
            <button onclick="location.href='http://www.laravel-hackathon3.test/'" type="button">Close</button>
        </div>
    </form>

</body>

</html>
