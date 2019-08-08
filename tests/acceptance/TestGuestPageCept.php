<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->see('Lorem ipsum');

$I->seeLink('Join', '/site/join');
$I->seeLink('Login', '/site/login');

$I->amOnPage('/site/join');
$I->see('Join us', 'h1');

$I->amOnPage('/site/login');
$I->see('Log in', 'h1');


