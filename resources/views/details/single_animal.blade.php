<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Pet's detail</title>
    <style>
        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h2>Pet's detail</h2>
    <form action="{{route('animal.update', $animal->id)}}" method="POST">
      @csrf 
      @method('put') 
        <label>Name</label><br>
        <input name="name" type="text" value={{ $animal->name }}><br>

        <label>Species</label><br>
        <input name="species" type="text" value={{ $animal->species }}><br>
        <label>Breed</label><br>
        <input name="breed" type="text" value={{ $animal->breed }}><br>
        <label>Age</label><br>
        <input name="age" type="int" value={{ $animal->age }}><br>
        <label>Weight</label><br>
        <input name="weight" type="int" value={{ $animal->weight }}><br>
        
        <button type="submit" onclick="">Save</button>        
    </form><br>
    <img src="/images/pets/<?= $animal->image->path?>" alt = "<?= $animal->name ?>">

</body>

</html>
