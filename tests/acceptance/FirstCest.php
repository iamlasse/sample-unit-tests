<?php
use \Codeception\Step\Argument\PasswordArgument;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    { }

    // test
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Hello world!');
    }

    public function testLogin(AcceptanceTester $I)
    {
        $I->amOnPage('/wp-login.php');
        $I->fillField('#user_login', 'lasse');
        $I->fillField('#user_pass', new PasswordArgument('lmlxxlml'));
        $I->click('#wp-submit');
        $I->see('Dashboard');
    }
}
