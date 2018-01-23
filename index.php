<?php

require 'vendor/autoload.php';

use App\League;


$league = new League();

$league->addTeam();

$league->scheduleMatches();

$league->startLeague();

$league->tableRow();




//$league->printTable();
//die();


?>

<html>

<head>
    <title>Table</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
<div class="row">
    <div class="content">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">
                        Premiere League
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <head>
                            <tr>
                                <th>Home Team</th>
                                <th>Home Score</th>
                                <th>Foreign Score</th>
                                <th>Foreign Team</th>
                            </tr>
                        </head>
                        <tbody>

                        <?php
                        foreach ($league->matches as $match) { ?>
                            <tr>
                                <td><?php echo($match->getHomeTeam()->name) ?></td>
                                <td><?php echo($match->getHomeScore()) ?></td>
                                <td><?php echo($match->getForeignScore()) ?></td>
                                <td><?php echo($match->getForeignTeam()->name) ?></td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body>


</html>







