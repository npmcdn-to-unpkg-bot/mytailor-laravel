<?php


class LoginCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I) {

        $I->am('an admin');
        $I->wantTo('to login to mytailor');

        $I->amOnPage('/auth/login');
        $I->see('Welcome');

        $I->fillField('email', 'jobizzness@gmail.com');
        $I->fillField('password', 'biness');
        $I->click('LogIn');

        $I->seeCurrentUrlEquals('/admin/dashboard');
        $I->see('Dashboard');


    }
}
