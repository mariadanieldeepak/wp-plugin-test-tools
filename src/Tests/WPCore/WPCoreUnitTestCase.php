<?php

namespace BulkWP\Tests\WPCore;

/**
 * TestCase base class for writing Core unit tests for Bulk WP plugins.
 *
 * Adds lot of helper functions.
 */
abstract class WPCoreUnitTestCase extends \WP_UnitTestCase {

	/**
	 * Helper method to get posts by tag.
	 *
	 * @param string $tag Tag name.
	 *
	 * @return array Posts that belong to that tag.
	 */
	protected function get_posts_by_tag( $tag ) {
		$args = array(
			'tag__in'     => array( $tag ),
			'post_type'   => 'post',
			'nopaging'    => 'true',
			'post_status' => 'publish',
		);

		$wp_query = new \WP_Query();

		return $wp_query->query( $args );
	}

	/**
	 * Helper method to get posts by category.
	 *
	 * @param string $cat Category name.
	 *
	 * @return array Posts that belong to that category.
	 */
	protected function get_posts_by_category( $cat ) {
		$args = array(
			'category__in' => array( $cat ),
			'post_type'    => 'post',
			'nopaging'     => 'true',
			'post_status'  => 'publish',
		);

		$wp_query = new \WP_Query();

		return $wp_query->query( $args );
	}
}
