<!doctype html>
<html lang='en'>
    <head>
        <title><?php echo $title ?></title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <section class="mb-8 mt-8 p-4">
            <h1>Project 1</h1>
            <h2><?php echo "Count: " . $i; ?></h2>
            <h2>Mechanics</h2>
                <ul>
                    <li>...</li>
                </ul>
            <h2>Results</h2>
            <ul>
                <li>...</li>
            </ul>
            <h2>Resources</h2>
            <ul>
                <li>
                    <a href="https://en.wikipedia.org/wiki/Playing_cards_in_Unicode">Playing cards in Unicode</a>
                </li>
                <li>
                    <a href="https://en.wikipedia.org/wiki/Standard_52-card_deck">Standard 52-card deck</a>
                </li>
            </ul>
        </section>
        <section class="grid h-screen mb-8 mt-8 p-4 place-items-center">
            <table class="table-fixed min-w-[75%] text-center">
                <caption class="text-2xl text-[#a51c30]">Game Winner: <?php echo $winner ?></caption>
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
