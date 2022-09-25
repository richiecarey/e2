<!doctype html>
<html lang='en'>
<head>
    <title><?php echo $title ?></title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
    <section class="border-2 border-indigo-600 mb-8 mt-8 p-4">
    <table>
        <?php foreach($game as $round => $outcome) { ?>
        <tr>
            <td>
            <?php echo($outcome['player one']['rank'].$outcome['player one']['suit']) ?>
            </td>
            <td>
            <?php echo($outcome['player two']['rank'].$outcome['player two']['suit']) ?>
            </td>
            <td>
            <?php echo($outcome['winner']) ?>
            </td>
            <td>
            <?php echo($outcome['player one cards left']) ?>
            </td>
            <td>
            <?php echo($outcome['player two cards left']) ?>
            </td>
        </tr>
        <?php } ?>
        </table>
    </section>
</body>
</html>
