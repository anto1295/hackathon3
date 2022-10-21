<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pets</title>
  <style>
    th, td {
      border:1px solid black;
    }
    img {
      max-width: 300px;
      height: 200px;
    }
  </style>
</head>
<body>
  <h1>Pets</h1>

  <table>

    <tr>
      <th>Image</th>
      <th>Pet ID</th>
      <th>Name of pet</th>
      <th>Species</th>
      <th>Breed</th>
      <th>Age</th>
      <th>Weight</th>
    </tr>
  
    <?php foreach ($animals as $animal) : ?>
    <tr>
      <td><img src="/images/pets/<?= $animal->image->path?>" alt = "<?= $animal->name ?>"></td>
      <td><?= $animal->id?></td>
      <td><?= $animal->name?></td>
      <td><?= $animal->species?></td>
      <td><?= $animal->breed?></td>
      <td><?= $animal->age?></td>
      <td><?= $animal->weight?>Kg</td>               
      
    </tr>
    <?php endforeach; ?>
  
  </table>
</body>
</html>