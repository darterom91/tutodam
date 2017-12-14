<?php
class Lenguages {
    public function __construct(){
        $this->add_hooks();
    }

    function add_hooks(){
        add_action("init", array(&$this, 'my_custom_post') );
    }
    function my_custom_post() {
        $labels = array(
            'name'        => __('Lenguages'),
            'menu_name'   => __('Lenguages'),
            'add_new'     => __('Add new'),
            'add_item'    => __('Add Lenguage'),
            'edit_item'   => 'Edit Lenguage'
       );
        $args = array(
            'labels'      => $labels,
            'description' => 'Lenguages',
            'public'      => true,
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-archive',
            'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt')
        );
        register_post_type( 'lenguages', $args );
    }
}

$lenguages = new Lenguages();