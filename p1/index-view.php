<!doctype html>
<html lang='en'>
    <head>
        <title><?php echo $title ?></title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="mb-4 mt-2 p-4">
            <h1 class="text-3xl">(Similar to the card game) War</h1>
            <h2 class="text-2xl mt-4">Mechanics</h2>
                <ul class="list-disc pl-6">
                    <li>Each player is dealt 26 cards from a shuffled deck</li>
                    <li>For each round, player re-shuffles hand and plays top card.</li>
                    <li>Ace is low, high card wins round and keeps both cards</li>
                    <li>If both cards are of same value, it's a tie and both cards are discarded</li>
                    <li>Play continues until either a player runs out of cards or 500 rounds have been played</li>
                    <li>Player with most cards at end of game wins</li>
                </ul>
            <h2 class="text-2xl mt-4">Results</h2>
            <ul class="list-disc pl-6">
                <li>Game Winner: <?php echo $winner ?></li>
                <li>Rounds: <?php echo $i ?></li>
            </ul>
        </section>
        <section class="grid h-screen mb-8 mt-8 p-4 place-items-center">
            <table class="table-fixed min-w-[75%] text-center">
                <caption class="mb-2 text-2xl text-[#a51c30]">Game Winner: <?php echo $winner ?></caption>
                <thead>
                    <tr class="bg-gray-900 text-zinc-50">
                        <th>Round</th>
                        <th>Player 1</th>
                        <th>Player 2</th>
                        <th>Player 1 cards</th>
                        <th>Player 2 cards</th>
                        <th>Outcome</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($game as $round => $outcome) { ?>
                    <tr class="odd:bg-slate-200 hover:bg-yellow-100">
                        <td><?php echo($outcome['round']) ?></td>
                        <td><?php echo($outcome['player one']['rank'].$outcome['player one']['suit']) ?></td>
                        <td><?php echo($outcome['player two']['rank'].$outcome['player two']['suit']) ?></td>
                        <td><?php echo($outcome['player one cards']) ?></td>
                        <td><?php echo($outcome['player two cards']) ?></td>
                        <td><?php echo($outcome['result']) ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </body>
</html>
