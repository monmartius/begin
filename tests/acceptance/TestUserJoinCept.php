<?php 
use Step\Acceptance\TestUserJoin;

$I = new TestUserJoin($scenario);
$I->wantTo('test user join login logout');

$dog = $I->imagineDogUser();
$fox = $I->imagineFoxUser();

print_r($dog);