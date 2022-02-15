<?php
/**
 * @package SEO_SIMPLE_PACK_Extend_Filter
 * @version 0.1
 */
/*
Plugin Name: SEO SIMPLE PACK Extend Filter
Description: filter for SEO SIMPLE PACK
Version: 0.1
 */


class SSPExFilter {
  public function __construct() {
    add_action('ssp_output_title', [$this, 'filter_cat']);
  }

  public function filter_cat($title) {
    $cat_names = implode(', ',
      array_map(function($a){ return $a->name; }, get_categories()));
    return str_replace('%_page_cat_names_%', $cat_names, $title);
  }
}

$sspexfilter = new SSPExFilter();

