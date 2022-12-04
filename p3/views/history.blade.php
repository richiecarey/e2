@extends('templates/master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

<section
    class="bg-slate-200 flex m-auto items-start mb-4 md:py-2 md:mt-2 place-items-center text-xs md:text-base max-w-screen-xl">
    <div class="flex-1 min-w-[60%] md:min-w-[80%] p-4">
        <h2 class="text-2xl">DGMD E-2</h2>
        <ul class="list-disc pb-2 pl-6">
            <li>Project 3</li>
        </ul>
        @if (count($games)==1)
        <h2 class="text-2xl">Results</h2>
        <ul class="list-disc pb-2 pl-6">
            <li>
                <span class="text-blue-700">Game Winner:
                    {{ $games[0]['winner'] }}
                </span>
            </li>
            <li>
                <span>Rounds: {{ $games[0]['rounds'] }}</span>
            </li>
            <li>
                <span>{{ date("F j, Y, g:i a", $games[0]['timestamp']) }}</span>
            </li>
        </ul>
        @else
        <h2 class="text-2xl">Mechanics</h2>
        <ul class="list-disc pb-2 pl-6">
            <li>Each player is dealt 26 cards from a shuffled deck</li>
            <li>For each round, player re-shuffles hand (to reduce stalemate risk) and plays top card.</li>
            <li>Ace is low, high card wins round and keeps both cards</li>
            <li>In case of a tie, both cards are discarded</li>
            <li>Play continues until maximum rounds selected or either player runs out of cards
            </li>
            <li>Player with most cards at end of game wins</li>
        </ul>
        <h2 class="text-2xl">Resources</h2>
        <ul class="list-disc italic pb-2 pl-6">
            <li><a class="no-underline hover:underline" href="https://www.php.net/" target="_blank"
                    rel="noopener noreferrer">PHP.net</a></li>
            <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Playing_cards_in_Unicode"
                    target="_blank" rel="noopener noreferrer">Playing cards in Unicode - Wikipedia</a></li>
            <li><a class="no-underline hover:underline" href="https://en.wikipedia.org/wiki/Standard_52-card_deck"
                    target="_blank" rel="noopener noreferrer">Standard 52-card deck - Wikipedia</a></li>
            <li><a class="no-underline hover:underline" href="https://tailwindcss.com/" target="_blank"
                    rel="noopener noreferrer">Tailwind CSS</a></li>
            <li><a class="no-underline hover:underline"
                    href="https://www.wimpyprogrammer.com/the-statistics-of-war-the-card-game" target="_blank"
                    rel="noopener noreferrer">The Statistics of War (the card
                    game)</a></li>
        </ul>
        @endif
    </div>
    <div class="min-w-[40%] md:min-w-[20%] p-4">
        <form class="bg-[#ffdb6d]/90 p-4" method='POST' action='./play'>
            <fieldset>
                <legend class="font-medium mb-4">How many rounds would you like to play?</legend>
                <label for="max-rounds">Max:</label>
                <select name="maxRounds" id="max-rounds">
                    <option value="5">5
                    </option>
                    <option value="10">10
                    </option>
                    <option value="25">25
                    </option>
                    <option value="50">50
                    </option>
                    <option value="100">100
                    </option>
                    <option value="500">500
                    </option>
                    <option value="">Reset
                    </option>
                </select>
                <button class="hover:bg-gray-600 bg-gray-700 mt-4 text-slate-100 w-full" type='submit'>Submit</button>
            </fieldset>
        </form>
    </div>
</section>

@if (count($games)>1)
<section class="grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
    <h2 class="mb-2 text-2xl text-blue-700">Game History</h2>
    <table class="table-fixed min-w-[99%] md:min-w-[100%] text-center">
        <thead>
            <tr class="bg-gray-900 text-zinc-50">
                <th>Game #</th>
                <th>Rounds</th>
                <th>Player 1 #</th>
                <th>Player 2 #</th>
                <th>Outcome</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr class="odd:bg-slate-200 hover:bg-yellow-100">
                <td>
                    <a href="?id={{$game['id']}}">{{ $game['id'] }}</a>
                </td>
                <td>
                    {{ $game['rounds'] }}
                </td>
                <td>
                    {{ $game['player_one_count'] }}
                </td>
                <td>
                    {{ $game['player_two_count'] }}
                </td>
                <td>
                    {{ $game['winner'] }}
                </td>
                <td>
                    {{ date("F j, Y, g:i a", $game['timestamp']) }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endif

@if (count($rounds)>0)
<section class="grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
    <h2 class="mb-2 text-2xl text-blue-700">Game Winner: {{ $games[0]['winner'] }}
    </h2>
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
            @foreach ($rounds as $round)
            <tr class="odd:bg-slate-200 hover:bg-yellow-100">
                <td>
                    {{ $loop->iteration }}
                </td>
                <td class="{{$round['player_one_style']}}">
                    {{ $round['player_one_rank'] }}{{ $round['player_one_suit'] }}
                </td>
                <td class="{{$round['player_two_style']}}">
                    {{ $round['player_two_rank'] }}{{ $round['player_two_suit'] }}
                </td>
                <td>
                    {{ $round['player_one_count'] }}
                </td>
                <td>
                    {{ $round['player_two_count'] }}
                </td>
                <td>
                    {{ $round['outcome'] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endif

@endsection