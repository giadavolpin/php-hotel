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


//echo $hotels[0]['name'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="parking">Hotel</label>
        <select name="parking" id="parking">
            <option value="">Scegli</option>
            <option value="1">Con parcheggio</option> <!-- DEVO METTERE = A 1 XK COSI POI ME LO PRENDE NEL ISSET -->
        </select>
        <!-- se il parcheggio è 1 allora vengono fuori gli hotel con il parcheggio -->
        <?php

        if (isset($_GET['parking']) && $_GET['parking'] === '1') { //se è settato in parking
            //usiamo un array temporeaneo per memorizzare gli hotel che corrispondono al criterio selezionato
            $tempHotel = [];

            foreach ($hotels as $parking) {
                foreach ($parking as $hotels) {
                    echo $parking;
                }
            }
        }

        /* 
        foreach ($animals as $animalClass){
        foreach($animalClass as $animals) {
        echo $animal;
        }
        } 
        */
        ?>
    </form>
    <div class="container">
        <div class="row">
            <?php
            foreach ($hotels as $item) { ?>

            <table class="table table-bordered">
                <tbody class="table-bordered" style="">
                    <tr class="table-bordered text-center">
                        <th class="table-bordered">
                            <?php echo $item['name'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="table-bordered">
                            <?php echo $item['description'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="table-bordered">
                            <?php echo $item['vote'] ?>
                        </th>
                    </tr>
                    <tr>
                        <th class="table-bordered">
                            <?php echo $item['distance_to_center'] ?>
                        </th>
                    </tr>
                </tbody>

                <?php }

                ?>
            </table>
        </div>

    </div>

</body>

</html>