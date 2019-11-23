<?php

class VisualCest {
	public function see_changes_post( AcceptanceTester $I ) {
		$post_id = $I->havePostInDatabase( [
			'post_title'   => 'Test post ' . md5( date( 'Y-m-d H:i:s' ) ),
			'post_content' => str_repeat( 'test ', mt_rand( 1, 500 ) ),
		] );

		$I->amOnPage( '/?p=' . $post_id );

		$I->dontSeeVisualChanges( 'post', '.entry-title' );
	}
}
