<?php 	
remove_filter('the_content', 'wptexturize'); 

  if (function_exists('register_sidebar'))
	register_sidebar(array('name' => 'Sidebar'));

register_nav_menus(array(
	'top' => 'Верхнее меню',            
	'bottom' => 'Нижнее меню'   
));

add_theme_support('menus');

add_theme_support( 'post-thumbnails' );

function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action('init', 'remove_else_link');

add_image_size('squareThumb', 292, 278, true);

function remove_else_link()
{

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
remove_action('wp_head','wp_generator');  // убирает версию wordpress
 
// убираем разные ссылки при отображении поста - следующая, предыдущая запись, оригинальный url и т.п.
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );
}

function repl_mon( $str ){
	$mon = array('01',  '02', '03', '04','05','06','07','08','09','10','11','12');
	$mon_str   = array('января', 'февраля', 'марта','апреля', 'мая', 'июня','июля','августа.','сентября','октября','ноября','декабря.');
	$rt = str_replace($mon, $mon_str, $str);
	return $rt;
}


/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
    global $wpdb;
    if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
        wp_die('Нечего дублировать!');
    }
 
    /*
     * получаем ID оригинального поста
     */
    $post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
    /*
     * а затем и все его данные
     */
    $post = get_post( $post_id );
 
    /*
     * если вы не хотите, чтобы текущий автор был автором нового поста
     * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
     * при замене этих строк автор будет копироваться из оригинального поста
     */
    $current_user = wp_get_current_user();
    $new_post_author = $current_user->ID;
 
    /*
     * если пост существует, создаем его дубликат
     */
    if (isset( $post ) && $post != null) {
 
        /*
         * массив данных нового поста
         */
        $args = array(
            'comment_status' => $post->comment_status,
            'ping_status'    => $post->ping_status,
            'post_author'    => $new_post_author,
            'post_content'   => $post->post_content,
            'post_excerpt'   => $post->post_excerpt,
            'post_name'      => $post->post_name,
            'post_parent'    => $post->post_parent,
            'post_password'  => $post->post_password,
            'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
            'post_title'     => $post->post_title,
            'post_type'      => $post->post_type,
            'to_ping'        => $post->to_ping,
            'menu_order'     => $post->menu_order
        );
 
        /*
         * создаем пост при помощи функции wp_insert_post()
         */
        $new_post_id = wp_insert_post( $args );
 
        /*
         * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
         */
        $taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
        foreach ($taxonomies as $taxonomy) {
            $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
            wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
        }
 
        /*
         * дублируем все произвольные поля
         */
        $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
        if (count($post_meta_infos)!=0) {
            $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
            foreach ($post_meta_infos as $meta_info) {
                $meta_key = $meta_info->meta_key;
                $meta_value = addslashes($meta_info->meta_value);
                $sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
            }
            $sql_query.= implode(" UNION ALL ", $sql_query_sel);
            $wpdb->query($sql_query);
        }
 
 
        /*
         * и наконец, перенаправляем пользователя на страницу редактирования нового поста
         */
        wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
        exit;
    } else {
        wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
    }
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
    }
    return $actions;
}
 
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2 );
add_filter( 'page_row_actions', 'true_duplicate_post_link', 10, 2);

function register_styles(){
	wp_register_style('my-bootstrap',get_template_directory_uri().'/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
	wp_enqueue_style('my-bootstrap');

	wp_register_style('fancy-box',get_template_directory_uri().'/libs/fancybox/jquery.fancybox.css');
	wp_enqueue_style('fancy-box');

	wp_register_style('carousel',get_template_directory_uri().'/libs/owl.carousel/assets/owl.carousel.css');
	wp_enqueue_style('my-bootstrap');

	wp_register_style('reset',get_template_directory_uri().'/css/reset.css');
	wp_enqueue_style('reset');

	wp_register_style('fonts',get_template_directory_uri().'/css/fonts.css');
	wp_enqueue_style('fonts');

	 wp_register_style('style',get_template_directory_uri().'style.css');
	 wp_enqueue_style('style');

	wp_register_style('block_h2',get_template_directory_uri().'/block/h2/h2.css');
	wp_enqueue_style('block_h2');

	wp_register_style('button',get_template_directory_uri().'/block/button/button.css');
	wp_enqueue_style('button');

	wp_register_style('inputtext',get_template_directory_uri().'/block/inputtext/style.css');
	wp_enqueue_style('inputtext');

	wp_register_style('q',get_template_directory_uri().'/block/q/q.css');
	wp_enqueue_style('q');

	wp_register_style('ol',get_template_directory_uri().'/block/ol/ol.css');
	wp_enqueue_style('ol');

	wp_register_style('form',get_template_directory_uri().'/block/form/form.css');
	wp_enqueue_style('form');

	wp_register_style('db',get_template_directory_uri().'/css/style-db.css');
	wp_enqueue_style('db');

	wp_register_style('dc',get_template_directory_uri().'/css/style-dc.css');
	wp_enqueue_style('dc');

	wp_register_style('de',get_template_directory_uri().'/css/style-de.css');
	wp_enqueue_style('de');

	wp_register_style('dd',get_template_directory_uri().'/css/style-dd.css');
	wp_enqueue_style('dd');

	wp_register_style('df',get_template_directory_uri().'/css/style-df.css');
	wp_enqueue_style('df');

	wp_register_style('dg',get_template_directory_uri().'/css/style-dg.css');
	wp_enqueue_style('dg');

	wp_register_style('dh',get_template_directory_uri().'/css/style-dh.css');
	wp_enqueue_style('dh');

	wp_register_style('dj',get_template_directory_uri().'/css/style-dj.css');
	wp_enqueue_style('dj');

	wp_register_style('di',get_template_directory_uri().'/css/style-di.css');
	wp_enqueue_style('di');

}
add_action('wp_enqueue_scripts', 'register_styles');
/*
function load_my_script(){
	//wp_register_script('jquery', get_template_directory_uri().
	//'/libs/jquery/jquery-1.11.1.min.js');
	//wp_enqueue_scripts('jquery');
	/*
	wp_deregister_script('carousel');
	wp_register_script('jquery', get_template_directory_uri().
	'libs/owl.carousel/owl.carousel.js');
	wp_enqueue_scripts('carousel');

	wp_deregister_script('fancybox');
	wp_register_script('jquery', get_template_directory_uri().
	'libs/fancybox/jquery.fancybox.pack.js');
	wp_enqueue_scripts('fancybox');

	wp_deregister_script('maskedinput');
	wp_register_script('jquery', get_template_directory_uri().
	'js/jquery.maskedinput.min.js');
	wp_enqueue_scripts('maskedinput');

	wp_deregister_script('common');
	wp_register_script('jquery', get_template_directory_uri().
	'js/common.js');
	wp_enqueue_scripts('fancybox');

	wp_deregister_script('outerstyles');
	wp_register_script('jquery', get_template_directory_uri().
	'js/outerstyles.js');
	wp_enqueue_scripts('outerstyles');
}
//add_action('wp_enqueue_scripts', 'load_my_script');
*/
// function wpb_adding_scripts() {
// 	wp_deregister_script('jquery');
// 	wp_register_script('jquery', get_template_directory_uri() . '/libs/jquery/jquery-1.11.1.min.js');
// 	wp_enqueue_script('jquery');

// 	wp_register_script('carousel', get_template_directory_uri() . '/libs/owl.carousel/owl.carousel.js', array ('jquery'), null, false);
// 	wp_enqueue_script('carousel');

// 	wp_register_script('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js', array ('jquery'), null, false);
// 	wp_enqueue_script('fancybox');

// 	wp_register_script('maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array ('jquery'), null, false);
// 	wp_enqueue_script('maskedinput');

// 	wp_register_script('outerstyles', get_template_directory_uri() . '/js/outerstyles.js', array ('jquery'), null, false);
// 	wp_enqueue_script('outerstyles');

// 	wp_register_script('common', get_template_directory_uri() . '/js/common.js', array ('jquery'), null, false);
// 	wp_enqueue_script('common');
// }
// add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


// function my_scripts_method(){
// 	wp_enqueue_script( 'common', get_template_directory_uri() . 'common.js');
//     wp_enqueue_script('common');
// }
// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function wws_adding_scripts() {
wp_register_script('jquery-c', get_template_directory_uri() . '/libs/jquery/jquery-1.11.1.min.js', array('jquery'));
wp_enqueue_script('jquery-c');

wp_register_script('common', get_template_directory_uri() . 'js/common.js', array('jquery'));
wp_enqueue_script('common');
}
add_action( 'wp_enqueue_scripts', 'wws_adding_scripts' );
