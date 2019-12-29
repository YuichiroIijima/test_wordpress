<?php

function new_excerpt_more($post) {
  return '<a href="' . esc_url( get_permalink() ) . '">' . '...続きを読む' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>