<?php get_header();

if (!wp_is_mobile()) {
    get_template_part('partials/desktop/archive', get_post_format());
} else {
    get_template_part('partials/mobile/archive', get_post_format());
}

get_footer();