# league-simulator

This is a simple league simulator which gives random results of a league with any teams and displays the result of matches in cosnole in a table form. The league can be a basketball league, soccer league etc. In this case we have develope an example of soccer league. Each of six teams plays with each team two games, as a home team and as an away team.

## The hierarchy of App

**League-simulator** application contains the `app` folder, the `vendor` folder and the `index.php` file. The app folder contains the `Abstractions` and `Entites` folder. The `Abstractions` folder contains the Abstract Classes of Entities which are `Team.php`, `Match.php` and `League.php`. And `Entities` folder contains the entities classes which are `SoccerTeam.php`, `SoccerMatch.php` and `SoccerLeague.php`. 
The Abstraction Class `Team.php` has just an attribute called `name` which represents the name of a Team. The Abstraction Class `Match.php` has the homeTeam name as a string, foreignTeam name as a string, homeScore as an integer with 0 default score and foreignScore as an integer with 0 default score, amd it contains one abstract function called play(). The Abstract Class `League.php` 


