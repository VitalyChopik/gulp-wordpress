<?php
add_action('acf/init', 'register_acf_blocks');

function register_acf_blocks() {
    // массив блоков
    $blocks = [
        'hero' => 'Hero',
    ];

    foreach ($blocks as $name => $title) {
        acf_register_block([
            'name'              => $name,
            'title'             => __($title),
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
            'render_template' => "/template-parts/block/{$name}.php",
            'enqueue_style'     =>  get_stylesheet_directory_uri() .'/dist/style/'.$name.'.css',
            'enqueue_script'    => get_stylesheet_directory_uri() .'/dist/js/'.$name.'.js', 
        ]);
    }
}

add_action('acf/init', 'register_acf_blocks');