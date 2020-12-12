<?php
include 'models/Thriller.php';
$thriller = new Thriller('Thrillers');
$thrillerList = $thriller->getList();
$genreThriller = $thriller->getGenre();

$detective = new Thriller('Detective');
$detectiveList = $detective->getList();
$genreDetective = $detective->getGenre();
?>
<htm>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <body>
    <div class="container">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title"><?=$genreThriller;?></h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Country</th>
                        <th scope="col">Year</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?foreach ($thrillerList as $id=>$thriller) {?>
                    <tr>
                        <th scope="row"><?=$id+1?></th>
                        <td><?=$thriller['movie']?></td>
                        <td><?=$thriller['country']?></td>
                        <td><?=$thriller['year']?></td>
                    </tr>
                    <?}?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title"><?=$genreDetective;?></h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie</th>
                        <th scope="col">Country</th>
                        <th scope="col">Year</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?foreach ($detectiveList as $id=>$detective) {?>
                        <tr>
                            <th scope="row"><?=$id+1?></th>
                            <td><?=$detective['movie']?></td>
                            <td><?=$detective['country']?></td>
                            <td><?=$detective['year']?></td>
                        </tr>
                    <?}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</htm>

