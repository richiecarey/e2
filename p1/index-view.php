<!doctype html>
<html lang='en'>

<head>
    <title><?php echo $title ?></title>
    <meta charset='utf-8'>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-slate-50 text-lg">
    <header class="bg-[#a51c30] p-2 text-zinc-50">
        <div class="flex flex-row items-center justify-between m-auto max-w-screen-xl">
            <h1 class="md:text-2xl text-xl">(Similar to the card game) War</h1>
            <p class=" md:text-sm text-xs"><a class="underline hover:text-blue-100" href="mailto:richiecarey@gmail.com">Richie Carey</a></p>
        </div>
    </header>
    <section class="grid m-auto mb-4 md:py-2 md:mt-2 place-items-center text-xs md:text-base max-w-screen-xl">
        <div class="bg-slate-200 min-w-[100%] p-4">
            <h2 class="text-2xl">DGMD E-2</h2>
            <ul class="list-disc pb-2 pl-6">
                <li>Project 1</li>
            </ul>
            <h2 class="text-2xl">Results</h2>
            <ul class="list-disc pb-2 pl-6">
                <li><span class="text-blue-700">Game Winner: <?php echo $winner ?></span></li>
                <li>Rounds: <?php echo $round ?></li>
            </ul>
            <h2 class="text-2xl">Mechanics</h2>
            <ul class="list-disc pb-2 pl-6">
                <li>Each player is dealt 26 cards from a shuffled deck</li>
                <li>For each round, player re-shuffles hand (to reduce stalemate risk) and plays top card.</li>
                <li>Ace is low, high card wins round and keeps both cards</li>
                <li>In case of a tie, both cards are discarded</li>
                <li>Play continues until a player either runs out of cards or 500 rounds have been played</li>
                <li>Player with most cards at end of game wins</li>
            </ul>
            <h2 class="text-2xl">Resources</h2>
            <ul class="list-disc italic pb-2 pl-6">
                <li><a class="no-underline hover:underline" href="https://www.php.net/" target="_blank" rel="noopener noreferrer">PHP.net</a></li>
                <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Playing_cards_in_Unicode" target="_blank" rel="noopener noreferrer">Playing cards in Unicode - Wikipedia</a></li>
                <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Standard_52-card_deck" target="_blank" rel="noopener noreferrer">Standard 52-card deck - Wikipedia</a></li>
                <li><a class="no-underline hover:underline" href="https://www.wimpyprogrammer.com/the-statistics-of-war-the-card-game" target="_blank" rel="noopener noreferrer">The Statistics of War (the card game)</a></li>
            </ul>
        </div>
    </section>
    <section class="grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
        <h2 class="mb-2 text-2xl text-blue-700">Game Winner: <?php echo $winner ?></h2>
        <table class="table-fixed min-w-[99%] md:min-w-[100%] text-center">
            <thead>
                <tr class="bg-gray-900 text-zinc-50">
                    <th>Round</th>
                    <th>Player 1</th>
                    <th>Player 2</th>
                    <th>Player 1 #</th>
                    <th>Player 2 #</th>
                    <th>Outcome</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($game as $round => $outcome) { ?>
                    <tr class="odd:bg-slate-200 hover:bg-yellow-100">
                        <td>
                            <?php echo ($outcome['round']) ?>
                        </td>
                        <td class="<?php echo ($outcome['player one card style']) ?>">
                            <?php echo ($outcome['player one card']) ?>
                        </td>
                        <td class="<?php echo ($outcome['player two card style']) ?>">
                            <?php echo ($outcome['player two card']) ?>
                        </td>
                        <td>
                            <?php echo ($outcome['player one card count']) ?>
                        </td>
                        <td>
                            <?php echo ($outcome['player two card count']) ?>
                        </td>
                        <td>
                            <?php echo ($outcome['result']) ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
    <footer class="bg-slate-200 pb-8 pt-8 text-center">
        <p>Project 1 &#183; DGMD E-2</p>
        <p>Richie Carey</p>
    </footer>
</body>

</html>