

<div class="container">
    <h2>Overzicht</h2>
    <p>Overzicht van alle spelers</p>            
        <table class="table table-hover">
            <thead>
            <tr>
            <th>Naam</th>
            <th>Aantal gespeelde wedstrijden</th>
            <th>Gewonnen wedstrijden</th>
            <th>Veloren wedstrijden</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <?php
            foreach ($allplayers as $playsers)
            {
               // echo "Naam: ".$playsers->naam."<br/>";
                $games = intval($playsers->wins) + intval($playsers->loses);
                echo "<tr><td>".$playsers->name."<td>".$games."<td>".$playsers->wins."<td>".$playsers->loses."</td></td></td></td></tr>";
            }
            ?>
            </tbody>
        </table>
</div>
