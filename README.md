# league-simulator

This is a simple league simulator which gives random results of a league with any teams and displays the result of matches in cosnole in a table form. The league can be a basketball league, soccer league etc. In this case we have develope an example of soccer league. Each of six teams plays with each team two games, as a home team and as an away team.

## The hierarchy of App

**League-simulator** application contains the `app` folder, the `vendor` folder and the `index.php` file. The app folder contains the `Abstractions` and `Entites` folder. The `Abstractions` folder contains the Abstract Classes of Entities which are `Team.php`, `Match.php` and `League.php`. And `Entities` folder contains the entities classes which are `SoccerTeam.php`, `SoccerMatch.php` and `SoccerLeague.php`. 
The Abstraction Class `Team.php` has just an attribute called `name` which represents the name of a Team. The Abstraction Class `Match.php` has the homeTeam name as a string, foreignTeam name as a string, homeScore as an integer with 0 default score and foreignScore as an integer with 0 default score, amd it contains one abstract function called play(). The Abstract Class `League.php` contains 5 abstract functions: `prepareTeams()`, `scheduleMatches()`, `startLeague()`, `prepareTableRows()`, `printTable()`  and 4 array: `teamNames` which contains Team names, `teams` which contains Teams, `matches` which contains the matches, `tableRow` wich contains the rows of table displayed in console.
The Entity `SoccerTeam.php` extends the Abstract Class `Team.php`, it contains a constructor with a parameter called name.
The Entity `SoccerMatch.php` extends the Abstract Class `Match.php`, it contains a constructor with two parameters homeTeam and foreignTeam, the getters and setters for homeTeam name, foreignTeam name, homeScore and foreignScore, and two functions called play() and getWinningScore(). The function play() assigned a random integer for two both teams home and away team, the function getWinningScore() returns the winning score.
The Entity `SoccerLeague.php` extends the Abstract Class `League.php`, it contains an array with Team names, and 6 functions: prepareTeams(), scheduleMatches(), startLeague(), preapreTableRows(), printTable() and a helper function called addMatch(). The prepareTeams() function fill the matches array with Teams. The scheduleMatches() contains the algorithm that create matches and add the matches to the matches array with the helper function called addMatch(). The startLeague() function, foreach matches in array matches calls the function play(). Funvtion prepareTableRows() creates a row to display in table, the row contains Home Team name, Home Team score, Away Team name and Away Team score. And the tablePrint() function prints the table in console with matches.

## Runing the application

The `index.php` file create a new object called `$league` of `SoccerLeague()` class and calls the functions of `SoccerLeague` class. First he call prepareTeams() to prepare the teams than scheduleMatches() to scedule the matches than startLeague() for playing mathces than prepareTableRows() to create a row for each match than calls printTable() to print the table in console.


## Displaying the table in console

First you need to open the terminal and go to your project directory than run the command `php index.php`. And the result is displayed in console in this form:

| Home Team     | Result | Foreign Team  |
| ------------- |:------:| -------------:|
| Liverpool     | 3 : 4  | Arsenal       |
| Arsenal       | 1 : 2  | Totenham      |
| Totenham      | 0 : 0  | West Ham      |



