<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Make sure frontpage works');
$I->amOnPage('/');
$I->see('Project Flyer');
