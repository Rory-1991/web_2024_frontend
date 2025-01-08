<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    [
        'id' => 1,
        'name' => '台北店',
        'mobile' => '0911-111-111',
        'address' => '台北市中正路1號'
    ],
    [
        'id' => 2,
        'name' => '台中店',
        'mobile' => '0922-222-222',
        'address' => '台中市中正路2號'
    ],
    [
        'id' => 3,
        'name' => '高雄店',
        'mobile' => '0933-333-333',
        'address' => '高雄市中正路3號'
    ]
];

// dd($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>mobile</th>
        <th>address</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $key => $value) : ?>
    
            <tr>
            <td><?=$value['id'];?></td>
            <td><?=$value['name'];?></td>
            <td><?=$value['mobile'];?></td>
            <td><?=$value['address'];?></td>
            </tr>

         <?php endforeach?>
    

    </tbody>
  </table>
</div>

</body>
</html>
