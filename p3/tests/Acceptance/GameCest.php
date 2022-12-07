<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class GameCest
{
    /**
     * Test that we can load the game home page and see the expected content
     */
    public function homePage(AcceptanceTester $I)
    {
        $I->amGoingTo('test the Project 3 homepage.');

        $I->amOnPage('/');

        $I->seeInTitle('DGMD E-3 :: Project 3 :: Richie Carey');

        $I->seeElement('[test="mechanics"]');

        $I->seeElement('[test="resources"]');
    }
    public function gamePlay(AcceptanceTester $I)
    {
        $I->amGoingTo('test the game play.');

        $I->amOnPage('/');

        $I->fillField('name', 'TEST');

        $I->click('[test="play"]');

        $I->seeElement('[test="results"]');

        $I->seeElement('[test="winner"]');
    }
    public function gameHistoryPage(AcceptanceTester $I)
    {
        $I->amGoingTo('test the game history page.');

        $I->amOnPage('/history');

        $I->seeElement('[test="game-history"]');
    }
    public function gameDetailPage(AcceptanceTester $I)
    {
        $I->amGoingTo('test the game detail page.');

        $I->amOnPage('/history');

        $I->click(['link' => '1']);

        $I->seeElement('[test="detail-history"]');
    }
    public function formValidation(AcceptanceTester $I)
    {
        $I->amGoingTo('test the form validation.');

        $I->amOnPage('/');

        $I->click('[test="play"]');

        $I->seeElement('[test="validation-failed"]');
    }
    public function pageNotFound(AcceptanceTester $I)
    {
        $I->amGoingTo('test the 404 page.');

        $I->amOnPage('a-page-that-does-not-exist');

        $I->seeElement('[test="404-page-not-found"]');
    }
}
