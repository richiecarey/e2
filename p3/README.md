# Project 3

-   By: Richie Carey
-   URL: <http://e2p3.careyinternet.com/>

## Graduate requirement

-   [x] I have integrated testing into my application
-   [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources

-   _[PHP.net](https://www.php.net/)_

-   _[Playing cards in Unicode - Wikipedia](https://en.wikipedia.org/wiki/Playing_cards_in_Unicode)_

-   _[Standard 52-card deck - Wikipedia](https://en.wikipedia.org/wiki/Standard_52-card_deck)_

-   _[TailwindCSS](https://tailwindcss.com/)_

-   _[The Statistics of War (the card game)](https://www.wimpyprogrammer.com/the-statistics-of-war-the-card-game)_

## Codeception testing output

```
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (6) -----------------------------------------------------------
GameCest: Home page
Signature: Tests\Acceptance\GameCest:homePage
Test: tests/Acceptance/GameCest.php:homePage
Scenario --
 I am going to test the Project 3 homepage.
 I am on page "/"
 I see in title "DGMD E-3 :: Project 3 :: Richie Carey"
 I see element "[test="mechanics"]"
 I see element "[test="resources"]"
 PASSED 

GameCest: Game play
Signature: Tests\Acceptance\GameCest:gamePlay
Test: tests/Acceptance/GameCest.php:gamePlay
Scenario --
 I am going to test the game play.
 I am on page "/"
 I fill field "name","TEST"
 I click "[test="play"]"
 I see element "[test="results"]"
 I see element "[test="winner"]"
 PASSED 

GameCest: Game history page
Signature: Tests\Acceptance\GameCest:gameHistoryPage
Test: tests/Acceptance/GameCest.php:gameHistoryPage
Scenario --
 I am going to test the game history page.
 I am on page "/history"
 I see element "[test="game-history"]"
 PASSED 

GameCest: Game detail page
Signature: Tests\Acceptance\GameCest:gameDetailPage
Test: tests/Acceptance/GameCest.php:gameDetailPage
Scenario --
 I am going to test the game detail page.
 I am on page "/history"
 I click {"link":"1"}
 I see element "[test="detail-history"]"
 PASSED 

GameCest: Form validation
Signature: Tests\Acceptance\GameCest:formValidation
Test: tests/Acceptance/GameCest.php:formValidation
Scenario --
 I am going to test the form validation.
 I am on page "/"
 I am going to leave the required name field blank.
 I click "[test="play"]"
 I see element "[test="validation-failed"]"
 PASSED 

GameCest: Page not found
Signature: Tests\Acceptance\GameCest:pageNotFound
Test: tests/Acceptance/GameCest.php:pageNotFound
Scenario --
 I am going to test the 404 page.
 I am on page "a-page-that-does-not-exist"
 I see element "[test="404-page-not-found"]"
 PASSED 

--------------------------------------------------------------------------------------
Time: 00:00.483, Memory: 10.00 MB

OK (6 tests, 9 assertions)
```
