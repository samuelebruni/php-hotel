<?php


//Stampare tutti i nostri hotel con tutti i dati disponibili.
//Iniziate in modo graduale. Prima stampate in pagina i dati, senza preoccuparvi dello stile. Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

//importo l'array dal sito preposto
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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hotel List</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distance to Center</th>
                </tr>
            </thead>
            <tbody>
                
            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <th scope="row">🛏 <?php echo $hotel['name']?></th>
                    <td><?php echo $hotel['description']?></td>
                    <td>
                        <?php echo $hotel['vote']?> ⭐
                    </td>
                    <td><?php echo $hotel['distance_to_center'].' '.'km' ?>🚶‍♂️</td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</body>
</html>