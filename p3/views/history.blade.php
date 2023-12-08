@extends('templates/master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

<section
    class="bg-slate-200 flex m-auto items-start mb-4 md:py-2 md:mt-2 place-items-center text-xs md:text-base max-w-screen-xl">
    <div class="flex-1 min-w-[60%] md:min-w-[80%] p-4">
        @if (count($games)==1)
        <h2 class="text-2xl" test="detail-history">Game {{ $games[0]['id'] }}</h2>
        <ul class="list-disc pb-2 pl-6">
            <li>
                <span>{{ date("F j, Y, g:i a", $games[0]['timestamp']) }}</span>
            </li>
            <li>
                <span class="text-blue-700">Winner:
                    {{ $games[0]['winner'] }}
                </span>
            </li>
            <li>
                <span>Rounds: {{ $games[0]['rounds'] }}</span>
            </li>
        </ul>
        @else
        @include('templates/meta')
        @endif
    </div>
    <div class="min-w-[40%] md:min-w-[20%] p-4">
        <form class="bg-[#ffdb6d]/90 p-4" method='POST' action='./play'>
            <fieldset>
                <div class="font-medium mb-4">
                    <label for="name">Your name:</label>
                    <input type="text" name="name" id="name" value={{ $app->sessionGet('name') }}>
                </div>
                <div>
                    <legend class="font-medium mb-2">How many rounds would you like to play?</legend>
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
                    </select>
                </div>
                <button class="hover:bg-gray-600 bg-gray-700 mt-4 text-slate-100 w-full" type='submit'>Submit</button>
            </fieldset>
        </form>
        @if($app->errorsExist())
        <ul class="text-[#d12d36]">
            @foreach($app->errors() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</section>

@if (count($games)>1)
<section class="grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
    <h2 class="mb-2 text-2xl text-blue-700" test="game-history">Game History</h2>
    <table class="table-fixed min-w-[99%] md:min-w-[100%] text-center">
        <thead>
            <tr class="bg-gray-900 text-zinc-50">
                <th class="w-1/6">Game #</th>
                <th class="w-1/6">Rounds</th>
                <th class="w-1/6">Player count</th>
                <th class="w-1/6">Computer count</th>
                <th class="w-1/6">Winner</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr class="odd:bg-slate-100 hover:bg-yellow-100">
                <td>
                    <a class="underline" href="?id={{$game['id']}}">{{ $game['id'] }}</a>
                </td>
                <td>
                    {{ $game['rounds'] }}
                </td>
                <td>
                    {{ $game['player_count'] }}
                </td>
                <td>
                    {{ $game['computer_count'] }}
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
<section class=" grid m-auto mb-8 place-items-center text-xs md:text-base max-w-screen-xl">
    <h2 class="mb-2 text-2xl text-blue-700">Winner: {{ $games[0]['winner'] }}
    </h2>
    <table class="table-fixed min-w-[99%] md:min-w-[100%] text-center">
        <thead>
            <tr class="bg-gray-900 text-zinc-50">
                <th class="w-1/6">Round</th>
                <th class="w-1/6">Player</th>
                <th class="w-1/6">Computer</th>
                <th class="w-1/6">Player count</th>
                <th class="w-1/6">Computer count</th>
                <th class="w-1/6">Outcome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rounds as $round)
            <tr class="odd:bg-slate-100 hover:bg-yellow-100">
                <td>
                    {{ $loop->iteration }}
                </td>
                <td class="{{$round['player_style']}}">
                    {{ $round['player_rank'] }}{{ $round['player_suit'] }}
                </td>
                <td class="{{$round['computer_style']}}">
                    {{ $round['computer_rank'] }}{{ $round['computer_suit'] }}
                </td>
                <td>
                    {{ $round['player_count'] }}
                </td>
                <td>
                    {{ $round['computer_count'] }}
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