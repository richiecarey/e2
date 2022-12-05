# Project 3

-   By: Richie Carey
-   URL: <http://e2p3.richiecarey.com/>

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
root@hes:/var/www/e2/p3# php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.5 https://helpukrainewin.org

Tests.Acceptance Tests (1) -----------------------------------------------------------------------
GameCest: Page loads
Signature: Tests\Acceptance\GameCest:pageLoads
Test: tests/Acceptance/GameCest.php:pageLoads
Scenario --
 I am going to begin testing.
 I am going to test the Project 3 homepage.
 I am on page "/"
 I see in title "DGMD E-3 :: Project 3 :: Richie Carey"
 I see "Mechanics","h2"
 I see "Resources","h2"
 I am going to test the form validation.
 I click "Play"
 I see "The value for name can not be blank"
 I am going to test the game play.
 I fill field "name","TEST"
 I click "Play"
 I see "Results","h2"
 I see "Winner","h2"
 I am going to test the game history page.
 I click {"link":"Game History"}
 I see "Game History","h2"
 I am going to test the game detail page.
 I click {"link":"1"}
 I see "detail history","h2"
 I am going to test the 404 page.
 I am on page "a-page-that-does-not-exist"
 I see "404 - Page Not Found","h2"
 I am going to end testing.
 PASSED

--------------------------------------------------------------------------------------------------
Time: 00:00.222, Memory: 10.00 MB

OK (1 test, 9 assertions)
```
