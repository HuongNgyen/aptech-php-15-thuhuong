<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.css">
</head>
<body>
<div class="container">
<?php
echo "<h1><a href=\"./\">BACK</a></h1>";
echo "<h1 class= 'text-center' >Bảng kết quả</h1>";
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];

?>
<table class="table">

<thead class= "bg-success">
<tr>
<th>#</th>
<th>Type</th>
<th>Price</th>
<th>Ram</th>
<th>Made in</th>
</tr>
</thead>

<tbody>
<?php
for ($i = 0; $i < 2 ; $i++){
    echo "<tr>
    <th scope='row'> $i </th>
    <td> ".$data[$i]['type']."</td>
    <td> ".$data[$i]['property']['price']."</td>
    <td> ".$data[$i]['property']['ram']."</td>
    <td> ".$data[$i]['property']['made']['in']."</td>
  </tr>";
}
?>
</tbody>
</table>
</div>
</body>
</html>
