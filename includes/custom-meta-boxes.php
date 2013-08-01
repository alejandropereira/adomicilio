<?php 	


class Ad_Meta_Boxes{

	var $prefix = 'ad_';

	var $fields = array(
		array(
			"name" => "web",
			"title" => "Página Web",
			"description" => "Ingrese la página web del negocio",
			"type" => "text",
			"scope" => array("ad_business"),
			"capability" => "edit_posts"
		),

		array(
			"name" => "telefono",
			"title" => "Teléfono",
			"description" => "Ingrese el teléfono del negocio",
			"type" => "text",
			"scope" => array("ad_business"),
			"capability" => "edit_posts"
		),

		array(
			"name"			=> "apertura",
			"title"			=> "Horario de Apertura",
			"description"	=> "Seleccione el horario de apertura",
			"type"			=>	"hour",
			"scope" => array("ad_business"),
			"capability" => "edit_posts"
		),

		array(
			"name"			=> "cierre",
			"title"			=> "Horario de Cierre",
			"description"	=> "Seleccione el horario de cierre",
			"type"			=>	"hour",
			"scope" => array("ad_business"),
			"capability" => "edit_posts"
		)
	);


	public function __construct(){
		add_action("admin_menu", array(&$this, "createCustomFields"));
		add_action( 'save_post', array( &$this, 'saveCustomFields' ), 1, 2 );
	}

	public function createCustomFields(){
		add_meta_box('my-custom-fields', 'Datos del negocio', array(&$this, 'displayCustomFields'), 'ad_business', 'normal');
	}

	public function displayCustomFields(){
		global $post;
		?>
		<div class="form-wrap">
			<?php  
				wp_nonce_field('my-custom-fields', 'my-custom-fields_wpnonce', false);
				foreach ($this->fields as $field) {
			?>
					<div class="form-field">
						<?php  
						switch ($field['type']) {

							case "hour":
								echo '<label for="' . $this->prefix . $field[ 'name' ] .'"><b>' . $field[ 'title' ] . '</b></label>';
								echo '<select name="' . $this->prefix . $field[ 'name' ] .'[0]" id="' . $this->prefix . $field[ 'name' ] .'[0]">';
								for ($i=1; $i <= 12 ; $i++) { 
									$selected = '';
									$hour = get_post_meta($post->ID, $this->prefix.$field['name'], true);
									$hour = explode(" ", $hour);
									if ($hour[0] == $i) {
										$selected = 'selected="selected"';
									} 
									echo '<option '. $selected .' value="'.$i.':00">'.$i.'</option>';
								}
								echo '</select>';
								echo '<select name="' . $this->prefix . $field[ 'name' ] .'[1]" id="' . $this->prefix . $field[ 'name' ] .'[1]">';
								
								$values = array("AM", "PM");

								foreach ($values as $value) {
									$selected = '';
									$time = get_post_meta($post->ID, $this->prefix.$field['name'], true);
									$time = explode(" ", $time);
									if ($time[1] == $value) {
										$selected = 'selected="selected"';
									} 

									echo '<option '. $selected .' value="'.$value.'">'.$value.'</option>';
								}

								echo '</select>';
								break;
							default:
								echo '<label for="' . $this->prefix . $field[ 'name' ] .'"><b>' . $field[ 'title' ] . '</b></label>';
								echo '<input type="text" name="' . $this->prefix . $field[ 'name' ] . '" id="' . $this->prefix . $field[ 'name' ] . '" value="' . htmlspecialchars( get_post_meta( $post->ID, $this->prefix . $field[ 'name' ], true ) ) . '" />';
								break;
						}

						?>
					</div>
			<?php } ?>
		</div>
		
		<?php
	}

	public function saveCustomFields($id, $post){
		foreach ( $this->fields as $field ) {
			if ( isset( $_POST[ $this->prefix . $field['name'] ] ) && trim((is_array($_POST[$this->prefix.$field['name']]) ? implode(" ",$_POST[$this->prefix.$field['name']]) : $_POST[$this->prefix.$field['name']])) ) {

				update_post_meta( $id, $this->prefix . $field[ 'name' ], (is_array($_POST[$this->prefix.$field['name']]) ? implode(" ",$_POST[$this->prefix.$field['name']]) : $_POST[$this->prefix.$field['name']]) );
				
			}
		}
	}

}

add_action('init', function(){
	new Ad_Meta_Boxes();
});