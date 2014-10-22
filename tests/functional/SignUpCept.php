<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a margaron account');

$I->amOnPage('/login');

$I->fillField('login', 'margo');
$I->fillField('password', 'gfhjkm16');
$I->click('.btn');
$I->seeCurrentUrlEquals('');
$I->see('margo');

$I->assertTrue(Auth::check());