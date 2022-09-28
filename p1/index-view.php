<!doctype html>
<html lang='en'>
    <head>
        <title><?php echo $title ?></title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
	    <header class="md:grid md:grid-cols-3 md:justify-items-stretch p-2">
	        <div class="md:flex md:items-center md:justify-self-start">
		        <h1 class="text-2xl md:text-3xl">(Similar to the card game) War</h1>
	        </div>
            <div class="pl-2 md:pl-0 md:flex md:items-center md:justify-self-center">
                <p>DGMD E-2 | Project 1</p>
            </div>
            <div class="pl-2 md:pl-0 md:pr-2 md:flex md:items-center md:justify-self-end no-underline hover:underline">
	            <p class="text-s"><a href="mailto:richiecarey@gmail.com">Richie Carey</a></p>
	        </div>
	    </header>
        <section class="p-2">
            <h2 class="text-2xl">Results</h2>
	            <ul class="list-disc pl-6 pb-2">
                    <li class="text-blue-700">Game Winner: <?php echo $winner ?></li>
                    <li>Rounds: <?php echo $i ?></li>
	            </ul>
            <h2 class="text-2xl">Mechanics</h2>
                <ul class="list-disc pl-6 pb-2">
                    <li>Each player is dealt 26 cards from a shuffled deck</li>
                    <li>For each round, player re-shuffles hand to reduce stalemate risk and plays top card.</li>
                    <li>Ace is low, high card wins round and keeps both cards</li>
                    <li>In case of a tie both cards are discarded</li>
                    <li>Play continues until either a player runs out of cards or 500 rounds have been played</li>
                    <li>Player with most cards at end of game wins</li>
                </ul>
            <h2 class="text-2xl">Resources</h2>
            <ul class="list-disc pl-6 pb-2 italic">
            <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Playing_cards_in_Unicode" target="_blank" rel="noopener noreferrer">Playing cards in Unicode</a></li>
            <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Standard_52-card_deck" target="_blank" rel="noopener noreferrer">Standard 52-card deck</a></li>
            <li><a class="no-underline hover:underline" href="https://www.php.net/" target="_blank" rel="noopener noreferrer">PHP.net</a></li>
            <li><a class="no-underline hover:underline" href="https://www.wimpyprogrammer.com/the-statistics-of-war-the-card-game" target="_blank" rel="noopener noreferrer">The Statistics of War (the card game)</a></li>
            </ul>
        </section>
        <section class="grid mb-8 mt-8 p-4 place-items-center text-xs md:text-base">
            <h2 class="mb-2 text-2xl text-blue-700">Game Winner: <?php echo $winner ?></h2>
            <table class="table-fixed min-w-[99%] md:min-w-[75%] text-center">
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
                        <td>
                            <?php echo($outcome['round']) ?>
                        </td>
                        <td class="<?php echo($outcome['player one card style']) ?>">
                            <?php echo($outcome['player one card']) ?>
                        </td>
                        <td class="<?php echo($outcome['player two card style']) ?>">
                            <?php echo($outcome['player two card']) ?>
                        </td>
                        <td>
                            <?php echo($outcome['player one card count']) ?>
                        </td>
                        <td>
                            <?php echo($outcome['player two card count']) ?>
                        </td>
                        <td>
                            <?php echo($outcome['result']) ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        <footer class="pb-8 pt-8 text-center border-t-2">
            <p>DGMD E-2 | Project 1</p>
            <p>Richie Carey</p>
        </footer>
    </body>
</html>
