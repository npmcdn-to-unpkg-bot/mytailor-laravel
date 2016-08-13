<?php
class SignUpCest{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I) {

        $I->am('a guest');
        $I->wantTo('sign up for a MyTailor account');

        $I->amOnPage('/');
        $I->click('SIGNUP');
        $I->seeCurrentUrlEquals('/');

        $I->fillField('username', 'hotniggah');
        $I->fillField('email', 'johns@gmail.com');
        $I->fillField('password', 'demo');
        $I->click('SignUp');

        $I->seeCurrentUrlEquals('/register');
        $I->see('Hi, hotniggah');


    }
}