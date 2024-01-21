<?php
add_action('acf/init', 'my_register_blocks');

function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {
        // name block
        acf_register_block([
            'name'              => 'name',
            'title'             => __('Name'),
            'category'          => 'formatting',
            'supports' => [
                'align' => [
                    'full', 'wide'
                ],
                'jsx' => true,
                'mode' => true
            ],
            'align' => 'wide',
            'mode' => 'preview',
            'enqueue_style'     =>  get_stylesheet_directory_uri() .'/dist/style/style.css',
            'enqueue_script'    => get_stylesheet_directory_uri() .'/dist/js/script.js', 
        ]);
    }
}
function my_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/template-parts/block/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/block/block-{$name}.php" ) );
	}
}