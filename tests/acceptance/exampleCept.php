<?php
$I = new AcceptanceTester( $scenario );
$I->wantTo( 'visit the homepage' );

$I->amOnPage( '/' );

$I->seeElement( 'body.home' );
