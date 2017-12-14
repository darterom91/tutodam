<?php
class CategoryLenguages {
  public function __construct(){
    $this->add_hooks();
  }

  function add_hooks(){
    add_action("init", array(&$this, 'my_taxonomies') );
  }

  function my_taxonomies() {
    $labels = array(
      'name'              => 'Lenguage categories',
      'menu_name'         => 'Lenguage categories',
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    register_taxonomy( 'lg', array('lenguages'), $args );
  }
}

$categoryLenguages = new CategoryLenguages();