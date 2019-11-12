<?php

class HomepageCest {
	public function create_a_post_and_see_it_on_homepage( AcceptanceTester $I ) {
		$post_title     = 'Test post title';
		$post_id = $I->havePostInDatabase( [
			'post_title'  => $post_title,
		] );

		$I->amOnPage( '/' );

		$I->see( $post_title );
	}

	public function homepage_screenshot(AcceptanceTester $I ) {
		$I->amOnPage('/');

		$I->dontSeeVisualChanges('on_homepage');
	}
}
