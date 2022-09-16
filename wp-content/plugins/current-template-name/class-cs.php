<?php
if ( ! function_exists( 'ctn_fs' ) ) {
    // Create a helper function for easy SDK access.
    function ctn_fs() {
        global $ctn_fs;

        if ( ! isset( $ctn_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $ctn_fs = fs_dynamic_init( array(
                'id'                  => '10961',
                'slug'                => 'current-template-name',
                'type'                => 'plugin',
                'public_key'          => 'pk_ff1549b40049559bb278f0a27c3d4',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => false,
                'menu'                => array(
                    'slug'           => 'current-template-name',
                    'account'        => false,
                    'contact'        => false,
                    'support'        => false,
                    'parent'         => array(
                        'slug' => 'options-general.php',
                    ),
                ),
            ) );
        }

        return $ctn_fs;
    }

    // Init Freemius.
    ctn_fs();
    // Signal that SDK was initiated.
    do_action( 'ctn_fs_loaded' );
}