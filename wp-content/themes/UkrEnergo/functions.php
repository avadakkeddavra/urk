<?php
/**
* Регестрируем стили и скрипты
*/


add_filter( 'ot_theme_mode', '__return_true' );

add_filter('ot_show_new_layout', '__return_false');


require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

if ( ! function_exists( 'ukr_energo_setup' ) ) :
function ukr_energo_setup()
{
      /**
    * Активируем миниатюры в админке
    **/
    add_theme_support('post-thumbnails');

    add_theme_support( 'title-tag' );

    /**
    * Меню
    **/
    register_nav_menus( array(
    'primary' => esc_html__( 'Primary', 'clemo' ),
    'mobile'  => esc_html__( 'Mobile', 'clemo-template' ),
  ) );


    add_theme_support( 'customize-selective-refresh-widgets' );


    /**
    * Сайдбар
    **/
    $args = array(
      'name'          => 'Виджеты Сайдбара',
      'id'            => 'sidebar',
      'description'   => 'Перетащите виджет сюда',
      'class'         => '',
      'before_widget' => '<div class="vidget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    );
    register_sidebar( $args );

    require( trailingslashit( get_template_directory() ) . 'assets/theme-options.php' );
}
endif;
add_action( 'after_setup_theme', 'ukr_energo_setup' );



function add_style_and_scrips() {
  wp_register_script( 'bootstrap.min.js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'bootstrap.min.js' );
  wp_register_script( 'blueimp-gallery.min.js', get_template_directory_uri() . '/assets/js/blueimp-gallery.min.js' );
  wp_enqueue_script( 'blueimp-gallery.min.js' );
  wp_register_script( 'modal.js', get_template_directory_uri() . '/assets/js/modal.js');
  wp_enqueue_script( 'modal.js' );
  wp_enqueue_script( 'template-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js', array(), '20151215', true );
  wp_enqueue_script( 'template-scripts', get_template_directory_uri() . '/assets/js/js.js',array(), '20151215',true );
  wp_register_style( 'bootstrap.css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');  
  wp_enqueue_style( 'bootstrap.css' );
  wp_register_style( 'blueimp-gallery.min.css', get_template_directory_uri() . '/assets/css/blueimp-gallery.min.css');  
  wp_enqueue_style( 'blueimp-gallery.min.css' );
  wp_register_style( 'style.css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('style.css');
}
add_action( 'wp_enqueue_scripts', 'add_style_and_scrips' );

/**
*  "Хлебные крошки" для WordPress
**/
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '›'; // разделитель между "крошками"
  $sep_before = '<span class="sep">'; // тег перед разделителем
  $sep_after = '</span>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<span class="current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link_after = '</span>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '<span itemprop="name">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo $home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of dimox_breadcrumbs()

function urk_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'clemo' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'clemo' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'urk_widgets_init' );


function services_shotrcode( $atts, $content ) {

   $atts = shortcode_atts( array(
    'title' => 'ochko',
  ), $atts );

     include(locate_template('template-parts/home-page/resive-services.php'));
}

add_shortcode( 'resive_services', 'services_shotrcode' );

function posts_output_single( $atts, $content)
{
   include(locate_template('template-parts/shortcodes/post_output_single.php'));   
}

add_shortcode( 'posts_output_single', 'posts_output_single' );

function post_order_single($atts, $content)
{
  
  $atts = shortcode_atts( array(
    'title' => 'Сделать заказ очень просто',

  ), $atts );

     include(locate_template('template-parts/shortcodes/post_order_single.php'));   
}

add_shortcode( 'post_order_single', 'post_order_single' );

function manager_contacts($atts, $content)
{
    $atts = shortcode_atts( array(
    'title' => 'Прямые котакты менеджера для консультации',
    ), $atts );

     include(locate_template('template-parts/shortcodes/manager_contacts.php'));  
}

add_shortcode( 'manager_contacts', 'manager_contacts' );


function single_post_info($atts, $content)
{
  include(locate_template('template-parts/shortcodes/single_post_info.php'));  
}
add_shortcode( 'single_post_info', 'single_post_info' );

function tab_content($atts , $content)
{
  include(locate_template('template-parts/shortcodes/tab_content.php'));  
}
add_shortcode( 'tab_content', 'tab_content' );

function tab_post_info($atts, $content)
{

  $atts = shortcode_atts( array(
    'id' => '',
    'title' => 'Назвыние таба',
    'active' => false,
    ), $atts );

  include(locate_template('template-parts/shortcodes/tab_post_info.php'));  
}
add_shortcode( 'tab_post_info', 'tab_post_info' );

function tab_post_list($atts = null, $content)
{
  include(locate_template('template-parts/shortcodes/tab_post_list.php'));  
}
add_shortcode( 'tab_post_list', 'tab_post_list' );

function single_tab_post($atts)
{
  $atts = shortcode_atts( array(
    'id' => '',
    'title' => 'Назвыние таба',
    'active' => false,
    ), $atts );
  include(locate_template('template-parts/shortcodes/single_tab_post.php'));  
}
add_shortcode( 'single_tab_post', 'single_tab_post' );
?>