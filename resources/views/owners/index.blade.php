<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Owner Index</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        th {
            width: 100px
        }
    </style>
</head>

<body>
    <div>
        {{-- route to the search function --}}
        {{-- i.e /search/{name} --}}
        <form action="" method="get">
            <label>Owner's name</label>
            <input name="name" type="text">
            <button type="submit">Search</button>
        </form>
    </div>
    <h2>List of owner</h2>
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Surame</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->first_name }}</td>
                    <td>{{ $owner->surname }}</td>
                    <td>{{ $owner->email }}</td>
                    <td>{{ $owner->phone }}</td>
                    <td>{{ $owner->Address }}</td>
                    <td><a href={{ route('owner.detail', ['id' => $owner->id]) }}>EDIT</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <ul>
        @foreach ($owners as $owner)
            <li>
                {{ $owner->first_name }} - {{ $owner->surname }} - <a
                    href={{ route('owner.detail', ['id' => $owner->id]) }}>EDIT</a>
                @foreach ($owner->animals as $animal)
                    <p>Pet name: {{ $animal->name }} - Species: {{ $animal->species }} - Age: {{ $animal->age }} - <a
                            href="#">edit</a></p>
                @endforeach
                {{-- {{ $owner->animals }} --}}
    {{-- </li> --}}
    {{-- @endforeach --}}
    {{-- </ul> --}}
</body>

</html>
