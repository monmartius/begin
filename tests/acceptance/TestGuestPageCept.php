<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->see('Lorem ipsum');

$I->seeLink('Join', '/user/join');
$I->seeLink('Login', '/user/login');

$I->amOnPage('/user/join');
$I->see('Join us', 'h1');

$I->amOnPage('/user/login');
$I->see('Log in', 'h1');


