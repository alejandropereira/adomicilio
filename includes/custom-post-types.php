<?php 

function remove_menus () {
global $menu;
	$restricted = array(__('Posts'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');


add_action( 'admin_head', 'cpt_icons' );
function cpt_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-ad_business .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/images/business-icon.png) no-repeat 1px -34px !important;
        }
        #menu-posts-ad_business:hover .wp-menu-image, #menu-posts-ad_business.wp-has-current-submenu .wp-menu-image {
            background-position:1px -1px!important;
        }
    </style>
<?php } 


class Ad_Custom_Post_Type{
	public function __construct(){
		$this->register_post_type();
		$this->taxonomies();
	}

	public function register_post_type(){

		$args = array(
			'labels' => array(
				'name' => 'Negocios',
				'singular_name' => 'Negocio',
				'all_items' => 'Todos los negocios',
				'add_new' => 'Añadir Nuevo',
				'add_new_item' => 'Añadir Nuevo Negocio',
				'edit_item' => 'Editar Negocio',
				'new_item' => 'Agregar Nuevo Negocio',
				'view_item' => 'Ver Negocio',
				'search_items' => 'Buscar Negocios',
				'not_found' => 'No se encontraron negocios.',
				'not_found_in_trash' => 'Ningún negocio encontrado en la papelera.'
			),
			'query_var' => 'negocios',
			'menu_position' => 5,
			'rewrite' => array(
				'slug' => 'negocios/',
			),
			'public' => true,
			'supports' => 'title'

		);


		register_post_type('ad_business', $args);
	}

	public function taxonomies(){
		$taxonomies = array();


		$taxonomies['cobertura'] = array(
			'hierarchical' => false,
			'query_var' => 'cobertura',
			'rewrite' => array(
				'slug' => 'negocios/cobertura'
			), 
			'labels' => array(
				'name' => 'Zonas de cobertura',
				'singular_name' => 'Zona',
				'menu_name' => 'Zonas',
				'edit_item' => 'Editar Zona',
				'update_item' => 'Actualizar Zona',
				'add_new_item' => 'Añadir Zona',
				'new_item_name' => 'Añadir Nueva Zona',
				'all_items' => 'Todas las Zonas',
				'search_items' => 'Buscar Zonas',
				'popular_items' => 'Zonas Populares',
				'separate_items_with_commas' => 'Separa las zonas con comas.',
				'add_or_remove_items' => 'Añadir o eliminar zonas',
				'choose_from_most_used' => 'Elige entre las zonas más utilizadas'
			)

		);

		$taxonomies['cat'] = array(
			'hierarchical' => true,
			'query_var' => 'categoria',
			'rewrite' => array(
				'slug' => 'categorias'
			), 
			'labels' => array(
				'name' => 'Categorías',
				'singular_name' => 'Categoría',
				'menu_name' => 'Categorías',
				'edit_item' => 'Editar Categorías',
				'update_item' => 'Actualizar Categorías',
				'add_new_item' => 'Añadir Categorías',
				'new_item_name' => 'Añadir Nueva Categorías',
				'all_items' => 'Todas las Categorías',
				'search_items' => 'Buscar Categorías',
				'popular_items' => 'Categorías Populares',
				'separate_items_with_commas' => 'Separa las categorías con comas.',
				'add_or_remove_items' => 'Añadir o eliminar categorías',
				'choose_from_most_used' => 'Elige entre las categorías más utilizadas'
			)

		);

		$this->register_all_taxonomies($taxonomies);
	}

	public function register_all_taxonomies($taxonomies){
		foreach ($taxonomies as $name => $args) {
			register_taxonomy($name, array('ad_business'), $args);
		}
	}
}

add_action('init', function(){
	new Ad_Custom_Post_Type();
});