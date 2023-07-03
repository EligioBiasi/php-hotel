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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    <!-- Bootstrap 5.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- my style -->
    <link rel="stylesheet" href="./style.css">
</head>
    <body>
        <main>
            <h1 class="text-center mb-5">
                Hotels
            </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to center</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach($hotels as $singleHotel){?>
                        <tr>
                                <?php 
                                        $hotelName = $singleHotel['name'];
                                        $hotelDescription = $singleHotel['description'];
                                        $hotelParking = $singleHotel['parking'];
                                        $hotelVote = $singleHotel['vote'];
                                        $hotel_distance_to_center = $singleHotel['distance_to_center'];
                                    ?>
                                <td>
                                    <?php echo $hotelName?>
                                </td>
                                <td>
                                    <?php echo $hotelDescription?>
                                </td>
                                <td>
                                    <?php if($hotelParking ===true){
                                        echo 'yes';
                                    }else{
                                        echo 'no';
                                    }?>
                                </td>
                                <td>
                                    <?php echo $hotelVote?>
                                </td>
                                <td>
                                    <?php echo $hotel_distance_to_center?>
                                </td>
                            </tr>
                        <?php }?>
                </tbody>
            </table>
        </main>
    </body>
</html>