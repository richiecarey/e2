<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class GameCest
{
    /**
     * Test that we can load the game home page and see the expected content
     */
    public function pageLoads(AcceptanceTester $I)
    {
        $I->amGoingTo('begin testing.');

        $I->amGoingTo('test the Project 3 homepage.');

        $I->amOnPage('/');

        $I->seeInTitle('DGMD E-3 :: Project 3 :: Richie Carey');

        $I->see('Mechanics', 'h2');

        $I->see('Resources', 'h2');

        $I->amGoingTo('test the form validation.');

        $I->click('Play');

        $I->see('The value for name can not be blank');

        $I->amGoingTo('test the game play.');

        $I->fillField('name', 'TEST');

        $I->click('Play');

        $I->see('Results', 'h2');

        $I->see('Winner', 'h2');

        $I->amGoingTo('test the game history page.');

        $I->click(['link' => 'Game History']);

        $I->see('Game History', 'h2');

        $I->amGoingTo('test the game detail page.');

        $I->click(['link' => '1']);

        $I->see('detail history', 'h2');

        $I->amGoingTo('test the 404 page.');

        $I->amOnPage('a-page-that-does-not-exist');

        $I->see('404 - Page Not Found', 'h2');

        $I->amGoingTo('end testing.');
    }
}
