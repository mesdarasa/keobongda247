<?php
/**
 * Banca theme helper functions and resources
 */

class Banca_Helper {
    /**
	 * Hold an instance of Banca_Helper_Class class.
	 * @var Banca_Helper
	 */
	protected static $instance = null;

	/**
	 * Main Banca_Helper_Class instance.
	 * @return Banca_Helper - Main instance.
	 */
	public static function instance() {

		if (null == self::$instance) {
			self::$instance = new Banca_Helper();
		}

		return self::$instance;
	}

    /**
     * Website Logo
     */
    public function logo() {
        $opt = get_option( 'banca_opt' );
        ?>
        <a href="<?php echo esc_url( home_url( '/') ) ?>" class="navbar-brand sticky_logo">
            <?php
            if ( isset( $opt['main_logo']['url'] ) ) {
                $reverse_logo = function_exists( 'get_field' ) ? get_field( 'use_sticky_logo' ) : '';
                if ( $reverse_logo ) {
                    // Normal Logo
                    $main_logo = isset($opt['sticky_logo'] ['url']) ? $opt['sticky_logo'] ['url'] : '';
                    $retina_logo = isset($opt['retina_sticky_logo'] ['url']) ? $opt['retina_sticky_logo'] ['url'] : '';
                    // Sticky Logo
                    $sticky_logo = isset($opt['sticky_logo'] ['url']) ? $opt['sticky_logo'] ['url'] : '';
                    $retina_sticky_logo = isset($opt['retina_sticky_logo'] ['url']) ? $opt['retina_sticky_logo'] ['url'] : '';
                } else {
                    // Normal Logo
                    $main_logo = isset($opt['main_logo'] ['url']) ? $opt['main_logo'] ['url'] : '';
                    $retina_logo = isset($opt['retina_logo'] ['url']) ? $opt['retina_logo'] ['url'] : '';
                    // Sticky Logo
                    $sticky_logo = isset($opt['sticky_logo'] ['url']) ? $opt['sticky_logo'] ['url'] : '';
                    $retina_sticky_logo = isset($opt['retina_sticky_logo'] ['url']) ? $opt['retina_sticky_logo'] ['url'] : '';
                }
                $logo_srcset = !empty($retina_logo) ?  "srcset='$retina_logo 2x'" : '';
                $logo_srcset_sticky = !empty($retina_sticky_logo) ?  "srcset='$retina_sticky_logo 2x'" : '';
                ?>
                <img class="main" src="<?php echo esc_url($main_logo); ?>" <?php echo wp_kses_post($logo_srcset) ?> alt="<?php bloginfo( 'name' ); ?>">
                <img class="sticky" src="<?php echo esc_url($sticky_logo); ?>" <?php echo wp_kses_post($logo_srcset_sticky) ?> alt="<?php bloginfo( 'name' ); ?>">
                <?php
            } else {
                echo '<h3>' . get_bloginfo( 'name' ) . '</h3>';
            }
            ?>
        </a>
        <?php

    }

    // Banner Title
    public function banner_title() {
        $opt = get_option('banca_opt');
        if ( is_home() ) {
            $blog_title = !empty($opt['blog_title']) ? $opt['blog_title'] : esc_html__( 'Blog', 'banca' );
            echo esc_html($blog_title);
        } elseif ( is_page() || is_single() ) {
            the_title();
        } elseif( is_category() ) {
            single_cat_title();
        } elseif( is_archive() ) {
            the_archive_title();
        } elseif( is_search() ) {
            esc_html_e( 'Search result for: “', 'banca' ); echo get_search_query().'”';
        } else {
            the_title();
        }
    }

    /**
     * Social Links
     **/
    public function social_links() {
        $opt = get_option( 'banca_opt' );

        if ( !empty( $opt['facebook'] ) ) { ?>
            <a href="<?php echo esc_url($opt['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
            <?php
        }

        if ( !empty( $opt['twitter'] ) ) { ?>
            <a href="<?php echo esc_url($opt['twitter']); ?>"><i class="fab fa-twitter"></i></a>
            <?php
        }

        if ( !empty( $opt['pinterest'] ) ) { ?>
            <a href="<?php echo esc_url($opt['pinterest']); ?>"><i class="fab fa-pinterest-p"></i></a>
            <?php
        }

        if ( !empty( $opt['linkedin'] ) ) { ?>
            <a href="<?php echo esc_url($opt['linkedin']); ?>"><i class="fab fa-linkedin-in"></i></a>
            <?php
        }
    }

    /** Render Meta CSS value
    * @param $handle
    * @param $css_items
    */
     public function meta_css_render( $handle, $css_items ) {
         $dynamic_css = '';
         $opt = get_option( 'banca_opt' );

         if ( function_exists('get_field') ) {
             $keys = array_keys($css_items);
             for ( $i = 0; $i < count($css_items); $i++ ) {
                 $split_id = explode('__', $keys[$i]);
                 $meta_id = $split_id[0];
                 $append = !empty($split_id[1]) ? $split_id[1] : '';
                 $meta_value = get_field($meta_id);
                 if ( !empty($meta_value) ) {
                     $css_i = 1;
                     foreach ( $css_items[$keys[$i]] as $property => $selector ) {
                         $css_output = "$selector {";
                         $css_output .= "$property: $meta_value$append;";
                         $css_output .= "}";
                         $dynamic_css .= $css_output;
                         $css_i++;
                     }
                 }
             }
         }

        wp_add_inline_style( $handle, $dynamic_css );
     }

     /**
     * Pagination
     **/
    public function pagination() {
        the_posts_pagination(array(
            'screen_reader_text' => ' ',
            'prev_text'          => '<i class="arrow_carrot-left"></i>',
            'next_text'          => '<i class="arrow_carrot-right"></i>'
        ));
    }

    /**
    * Day link to archive page
    **/
    public function day_link() {
        $archive_year   = get_the_time( 'Y' );
        $archive_month  = get_the_time( 'm' );
        $archive_day    = get_the_time( 'd' );
        echo get_day_link( $archive_year, $archive_month, $archive_day);
    }

    /**
     * estimated reading time
     **/
    public function reading_time() {
        $content = get_post_field( 'post_content', get_the_ID() );
        $word_count = str_word_count( strip_tags( $content ) );
        $readingtime = ceil($word_count / 200);
        if ($readingtime == 1) {
            $timer = esc_html__( " minute read", 'banca' );
        } else {
            $timer = esc_html__( " minutes read", 'banca' );
        }
        $totalreadingtime = $readingtime . $timer;
        echo esc_html($totalreadingtime);
    }

    /**
     * Post's excerpt text
     * @param $settings_key
     * @param bool $echo
     * @return string
     **/
    public function excerpt($settings_key = '', $echo = true) {
        $opt = get_option( 'banca_opt' );
        $excerpt_limit = !empty( $opt[$settings_key] ) ? $opt[$settings_key] : 40;
        $post_excerpt = get_the_excerpt();
        $excerpt = (strlen(trim($post_excerpt)) != 0) ? wp_trim_words(get_the_excerpt(), $excerpt_limit, '') : wp_trim_words(get_the_content(), $excerpt_limit, '');
        if(  $echo == true ) {
            echo wp_kses_post(wpautop($excerpt));
        } else {
            return wp_kses_post(wpautop($excerpt));
        }
    }

    /**
     * Post author avatar
     **/
     public function post_author_avatar( $size = 50, $attr = '' ) {
         $post_author_id = get_post_field( 'post_author', get_the_ID() );
         echo get_avatar($post_author_id, $size, '', '', '');
     }

    /**
    * Get the first category name
    * @param string $term
    */
    public function first_taxonomy( $term = 'category' ) {
        $cats = get_the_terms(get_the_ID(), $term);
        $cat  = is_array($cats) ? $cats[0]->name : '';
        echo esc_html($cat);
    }

    /**
    * Get the first category link
    * @param string $term
    */
    public function first_taxonomy_link($term='category') {
        $cats = get_the_terms(get_the_ID(), $term);
        $cat  = is_array($cats) ? get_category_link($cats[0]->term_id) : '';
        echo esc_url($cat);
    }

    /**
     * Limit latter
    * @param $string
    * @param $limit_length
    * @param string $suffix
     */
    public function limit_latter($string, $limit_length, $suffix = '...' ) {
        if (strlen($string) > $limit_length) {
            echo strip_shortcodes(substr($string, 0, $limit_length) . $suffix);
        }
        else {
            echo strip_shortcodes(esc_html($string));
        }
    }

    /**
    * Image from Theme Settings
    * @param $settins_key
    * @param string $class
    * @param string $alt
    */
    public function image_from_settings( $settings_key = '', $class = '', $alt = '' ) {
        $opt = get_option('banca_opt' );
        $page_image = function_exists('get_field') ? get_field($settings_key) : '';
        $image = empty($page_image) ? $opt[$settings_key] : $page_image;
        if ( !empty($image['id']) ) {
            echo wp_get_attachment_image($image['id'], 'full', '', array('class' => $class));
        }
        elseif ( !empty($image['url']) && empty($image['id']) ) {
            $class = !empty($class) ? "class='$class'" : '';
            echo "<img src='{$image['url']}' $class alt='$alt'>";
        }
    }


    // Get comment count text
    public function comment_count( $post_id ) {
        $comments_number = get_comments_number($post_id);
        if ( $comments_number == 0) {
            $comment_text = esc_html__( 'No Comment', 'banca' );
        } elseif( $comments_number == 1) {
            $comment_text = esc_html__( '1 Comment', 'banca' );
        } elseif( $comments_number > 1) {
            $comment_text = $comments_number.esc_html__( ' Comments', 'banca' );
        }
        echo esc_html($comment_text);
    }

    // Get author role
    public function get_author_role() {
        global $authordata;
        $author_roles = $authordata->roles;
        $author_role = array_shift($author_roles);
        return esc_html($author_role);
    }


    // Banner Subtitle
    public function banner_subtitle() {
        $opt = get_option( 'banca_opt' );
        if (is_home() ) {
            $blog_subtitle = !empty($opt['blog_subtitle']) ? $opt['blog_subtitle'] : get_bloginfo( 'description' );
            echo esc_html($blog_subtitle);
        }
        elseif (is_page() || is_single() ) {
            if (has_excerpt() ) {
                while (have_posts() ) {
                    the_post();
                    echo nl2br(get_the_excerpt(get_the_ID() ));
                }
            }
        }
        elseif ( is_archive() ) {
            echo '';
        }
    }


    /**
     * Post title array
     */
    public function get_postTitleArray($postType = 'post' ) {
        $post_type_query  = new WP_Query(
            array (
                'post_type'      => $postType,
                'posts_per_page' => -1
            )
        );
        // we need the array of posts
        $posts_array      = $post_type_query->posts;
        // the key equals the ID, the value is the post_title
        if (  is_array($posts_array) ) {
            $post_title_array = wp_list_pluck($posts_array, 'post_title', 'ID' );
        } else {
            $post_title_array['default'] = esc_html__( 'Default', 'banca' );
        }

        return $post_title_array;
    }


    /**
    * Get a specific html tag from content
    * @return a specific HTML tag from the loaded content
    */
    public function get_html_tag( $tag = 'blockquote', $html = '' ) {
        $dom = new DOMDocument();

        //Handle errors internally
        libxml_use_internal_errors(true);

        $dom->loadHTML(mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8'));
        $divs = $dom->getElementsByTagName( $tag );

        //Clear errors
        libxml_clear_errors();

        $i = 0;
        foreach ( $divs as $div ) {
            if ( $i == 1 ) {
                break;
            }
            echo "<h4 class='c_head'>{$div->nodeValue}</h4>";
            ++$i;
        }
    }

    // Arrow icon left right position
    public function arrow_left_right() {
        $arrow_icon = is_rtl() ? 'arrow_left' : 'arrow_right';
        echo esc_attr($arrow_icon);
    }


    public function social_share() {
        ?>
        <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>"><i class="fab fa-pinterest"></i></a></li>
        <li><a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>"><i class="fab fa-twitter"></i></a></li>
        <?php
    }

    /**
     * Doc width
     * @return mixed|string
     */
    function page_width() {
        $opt = get_option('banca_opt' );
        $page_doc_width = function_exists('get_field') ? get_field('doc_width') : 'default';
        if ( $page_doc_width == 'default' || $page_doc_width == '' ) {
            $header_width = isset($opt['header_width']) ? $opt['header_width'] : 'boxed';
        } else {
            $header_width = $page_doc_width;
        }

        return $header_width;
    }


}


/**
 * Instance of Banca_Helper_Class class
 */
function Banca_Helper() {
    return Banca_Helper::instance();
}