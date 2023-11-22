<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
?>

<!-- <ul>
    <?php 
      foreach($hotels as $hotel) {
        foreach($hotel as $key => $value) {
    ?>
    <li>
        <strong>
            <?php  echo $key;?>:
        </strong>
        <span>
        <?php  echo $value;?>
        </span>
    </li>
    <?php 
    }
}?>
</ul>
<hr>

<?php
var_dump($hotel['parking']);
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>

<div class="container-sm text-center my-5 py-5">
<table class="table table-dark table-striped">
  <thead>
    <tr>
    <?php 
        foreach($hotel as $key => $value) {
    ?>
      <th class="text-uppercase" scope="col"><?php echo $key; ?></th>
      <?php 
    }
    ?>
    </tr>
  </thead>
  <tbody>
  <?php foreach($hotels as $hotel) { ?>
    <tr>
      <td> <?php echo $hotel['name']; ?> </td>
      <td> <?php echo $hotel['description']; ?> </td>
      <td> <?php
       if($hotel['parking'] === true) {
        echo 'SI';
       } else {
        echo 'NO';
       } ?> </td>
      <td> <?php echo $hotel['vote']; ?> </td>
      <td> <?php echo $hotel['distance_to_center']; ?> </td>

    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
