<?php

class PostCest {
	public function create_a_post_and_see_it_on_homepage( AcceptanceTester $I ) {
		$post_title = 'Test post title';
		$post_id    = $I->havePostInDatabase( [
			'post_title' => $post_title,
		] );

		$I->amOnPage( '/' );
		$I->amOnPage( '/?p=' . $post_id );

		$I->see( $post_title );
	}
}
