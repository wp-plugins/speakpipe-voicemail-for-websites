<?php

if( !class_exists( 'zelenin_fields' ) ) {

class zelenin_fields {

	private $prefix = 'zf_';

	function __construct( $fields, $fields_type, $fields_id, $fields_name = 'Settings', $object_type, $dev = 0 ) {

		$prefix = $this->prefix;
		$defaults = array(

			array(
				'label' => 'Tab 1',
				'desc' => 'Desc',
				'id' => $prefix . 'tab1',
				'type' => 'tab',
				'content' => array(

					array(// не работает
						'label' => 'Heading',
						'id' => $prefix . 'heading',
						'type' => 'heading'
					),
					array(// не работает
						'label' => 'Paragraph',
						'desc' => 'Description',
						'id' => $prefix . 'paragraph',
						'type' => 'paragraph'
					),
					array(
						'label' => 'Text input',
						'desc' => 'Description',
						'id' => $prefix . 'text',
						'type' => 'text'
					),
					array(
						'label' => 'Password',
						'desc' => 'Description',
						'id' => $prefix . 'password',
						'type' => 'password'
					),
					array(// не работает
						'label' => 'Hidden field',
						'desc' => 'Description',
						'id' => $prefix . 'hidden',
						'type' => 'hidden'
					),
					array( // не работает
						'label' => 'File input',
						'desc' => 'Description',
						'id' => $prefix . 'file',
						'type' => 'file'
					),
					array(
						'label' => 'Textarea',
						'desc' => 'Description',
						'id' => $prefix . 'textarea',
						'type' => 'textarea',
						'settings' => array(
							'wpautop' => 'false',
							'media_buttons' => 'true',
							//'textarea_name' => $editor_id,
							'textarea_rows' => get_option( 'default_post_edit_rows', 10 ),
							'tabindex' => '',
							'editor_css' => '',
							'editor_class' => '',
							'teeny' => 'true',
							'dfw' => 'false',
							'tinymce' => true,//array(
								// 'theme_advanced_buttons1' => 'bold,italic,strikethrough,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,|,link,unlink,wp_more,|,spellchecker,fullscreen,wp_adv',
								// 'theme_advanced_buttons2' => 'formatselect,underline,justifyfull,forecolor,|,pastetext,pasteword,removeformat,|,media,charmap,|,outdent,indent,|,undo,redo,wp_help',
								// 'theme_advanced_buttons3' => '',
								// 'theme_advanced_buttons4' => '',
							//),
							'quicktags' => 'true'
						)
					),
					array(
						'label' => 'Textarea',
						'desc' => 'Description',
						'id' => $prefix . 'textarea_raw',
						'type' => 'textarea_raw'
					),
					array(
						'label' => 'Checkbox input',
						'desc' => 'Description',
						'id' => $prefix . 'checkbox',
						'type' => 'checkbox'
					),
					array(
						'label' => 'Select box',
						'desc' => 'Description',
						'id' => $prefix . 'select',
						'type' => 'select',
						'options' => array (
							'one' => array (
								'label' => 'Option 1',
								'value' => 'one'
							),
							'two' => array (
								'label' => 'Option 2',
								'value' => 'two'
							),
							'three' => array (
								'label' => 'Option 3',
								'value' => 'three'
							)
						)
					),
					array (
						'label' => 'Radio group',
						'desc' => 'Description',
						'id' => $prefix . 'radio',
						'type' => 'radio',
						'options' => array (
							'one' => array (
								'label' => 'Option 1',
								'value' => 'radio_one'
							),
							'two' => array (
								'label' => 'Option 2',
								'value' => 'radio_two'
							),
							'three' => array (
								'label' => 'Option 3',
								'value' => 'radio_three'
							)
						)
					),
					array (
						'label' => 'Checkbox group',
						'desc' => 'Description',
						'id' => $prefix . 'checkbox_group',
						'type' => 'checkbox_group',
						'options' => array (
							'one' => array (
								'label' => 'Option 1',
								'value' => 'checkbox_one'
							),
							'two' => array (
								'label' => 'Option 2',
								'value' => 'checkbox_two'
							),
							'three' => array (
								'label' => 'Option 3',
								'value' => 'checkbox_three'
							)
						)
					),
					array(
						'label' => 'Allowed users',
						'desc' => 'Check the users',
						'id' => $prefix . 'users',
						'type' => 'users_checkbox_group',
					),
					array(
						'label' => 'Terms',
						'desc' => 'Choose a term',
						'id' => $prefix . 'term_select',
						'type' => 'term_select',
						'taxonomy' => 'category'
					),
					array(
						'label' => 'Terms',
						'desc' => 'Choose a term',
						'id' => $prefix . 'term_radio',
						'type' => 'term_radio',
						'taxonomy' => 'category'
					),
					array(
						'label' => 'Posts list',
						'desc' => 'Description',
						'id' =>  $prefix . 'post_id',
						'type' => 'post_list',
						'post_type' => array( 'post', 'page' )
					),
					array(
						'label' => 'Date',
						'desc' => 'Description',
						'id' => $prefix . 'date',
						'type' => 'date',
						'locale' => 'en'
					),
					array(
						'label' => 'Date and time',
						'desc' => 'Description',
						'id' => $prefix . 'time',
						'type' => 'time',
						'locale' => 'en'
					),
					array(
						'label' => 'Slider',
						'desc' => 'Description',
						'id' => $prefix . 'slider',
						'type' => 'slider',
						'min' => '0',
						'max' => '100',
						'step' => '5'
					),
					array(
						'label'  => 'Image',
						'desc' => 'Description',
						'id' => $prefix . 'image',
						'type' => 'image'
					),
					array(
						'label' => 'Repeatable',
						'desc' => 'Description',
						'id' => $prefix . 'repeatable',
						'type' => 'repeatable'
					),
					array(
						'label'	=> 'Images',
						'desc' => 'Description',
						'id' => $prefix . 'images',
						'type' => 'repeatable_images'
					),
					array(
						'label'	=> 'Color',
						'desc' => 'Description',
						'id' => $prefix . 'colorpicker',
						'type' => 'color'
					)

				)

			),

			array(
				'label' => 'Tab 2',
				'desc' => 'Desc',
				'id' => $prefix . 'tab2',
				'type' => 'tab',
				'content' => array(
					array(
						'label' => 'Plugins',
						'desc' => 'Description',
						'id' => $prefix . 'plugins',
						'type' => 'plugins'
					),
				)
			)

		);

		$this->fields = isset( $fields ) ? $fields : $defaults;
		$this->fields_type = $fields_type;
		$this->fields_id = $this->slug = $fields_id;
		$this->fields_name = $fields_name;
		$this->object_type = $object_type;
		$this->dev = $dev;

		add_action( 'admin_init', array( $this, 'fields_init' ) );

		if ( $this->fields_type == 1 ) {

			add_action( 'add_meta_boxes', array( $this, 'init_meta_boxes' ) );
			add_action( 'save_post', array( $this, 'fields_update' ) );

			foreach ( $this->fields as $tab_fields ) {
				foreach ( $tab_fields['content'] as $field ) {
					if ( $field['type'] == 'term_select' || $field['type'] == 'term_radio' ) add_action( 'admin_menu', array( $this, 'taxonomy_remove_meta_box' ) );
				}
			}

		}

		if ( $this->fields_type == 2 ) add_action( 'admin_menu', array( $this, 'init_admin_menu' ) );

		if ( $this->fields_type == 3 ) {

			add_action( 'created_' . $this->object_type, array( $this, 'fields_update' ), 10, 1 );
			add_action( 'edited_' . $this->object_type, array( $this, 'fields_update' ), 10, 1 );
			add_action( $this->object_type . '_add_form_fields', array( $this, 'add_term_fields' ) );
			add_action( $this->object_type . '_edit_form_fields', array( $this, 'edit_term_fields' ) );
			add_action( 'init', array( $this, 'term_fields_define_table' ) );

		}

	}

	function fields_init() {
		foreach ( $this->fields as $tab_fields ) {
			add_settings_section( $tab_fields['id'], $tab_fields['label'], array( $this, 'fields_section_callback' ), $this->slug );
			foreach ( $tab_fields['content'] as $field ) {
				register_setting( $this->slug, $field['label'], array( $this, 'fields_sanitize_callback' ) );
				add_settings_field( $field['id'], $field['label'], array( $this, 'generate_fields_callback' ), $this->slug, $tab_fields['id'], array( 'setting' => $field ) );
			}
		}
		add_action( 'admin_print_scripts', array( $this, 'add_fields_scripts' ) );
		add_action( 'admin_print_footer_scripts', array( $this, 'add_footer_scripts' ) );
	}

	function init_meta_boxes() {
		add_meta_box( $this->fields_id, $this->fields_name, array( $this, 'generate_page'), $this->object_type, 'normal', 'high' );
	}

	function add_term_fields( $tag ) {
		$this->generate_page( 'add_term_fields' );
	}

	function edit_term_fields( $tag ) {
		$this->generate_page( 'edit_term_fields' );
	}

	function term_fields_define_table() {
		global $wpdb;
		$table_name = 'taxonomymeta';
		$wpdb->$table_name = $wpdb->prefix . $table_name;
	}

	function taxonomy_remove_meta_box() {

		foreach ( $this->fields as $tab_fields ) {
			foreach ( $tab_fields['content'] as $field ) {
				$taxonomy = ( $field['type'] == 'term_select' || $field['type'] == 'term_radio' ) ? $field['taxonomy'] : 'category';
				remove_meta_box( $field . 'div', $this->object_type, 'normal' );
			}
		}

	}

	function init_admin_menu() {
		$page = add_options_page( $this->fields_name, $this->fields_name, 'edit_themes', $this->slug, array( $this, 'generate_page' ), admin_url( 'images/generic.png' ), 999 );
		// add_action( 'admin_head-' . $page, array( $this, 'add_fields_scripts' ) );
		// add_action( 'admin_footer-' . $page, array( $this, 'add_footer_scripts' ) );
	}

	function fields_section_callback() {
		echo 'fields_section_callback';
	}

	function fields_sanitize_callback() {
		echo 'settings_sanitize_callback';
	}

	function generate_fields_callback( $args ) {

		$field = $args['setting'];

		if ( $this->fields_type == 1 ) {
			global $post;
			$object_id = $post->ID;
			$value = get_post_meta( $object_id, $field['id'], true );
		}

		if ( $this->fields_type == 2 ) {
			$value = get_option( $field['id'] );
		}

		if ( $this->fields_type == 3 ) {
			$object_id = isset( $_REQUEST['tag_ID'] ) ? (int) $_REQUEST['tag_ID'] : '0';
			$value = get_term_meta( $object_id, $field['id'], true );
		}

		switch( $field['type'] ) {

			case 'heading': // не работает
				//echo '<h3>' . $field['label'] . '</h3>';
				//echo '<div class="description">' . $field['desc'] . '</div>';
				//if ( $this->debug == 1 ) echo '<div class="debug">get_option( \'' . $field['id'] . '\' );</div>';
			break;

			case 'paragraph': // не работает
				//echo '<div class="option"><input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"></div>';
				// echo '<div class="description">' . $field['desc'] . '</div>';
				// if ( $this->debug == 1 ) echo '<div class="debug">get_option( \'' . $field['id'] . '\' );</div>';
			break;

			case 'text':
				echo '<div class="field"><input class="regular-text" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"></div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'password':
				echo '<div class="field"><input class="widefat" type="password" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"></div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'hidden': // не работает
				echo '<div class="field"><input type="hidden" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"></div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'file': // не работает
				//echo '<div class="option"><input type="password" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"></div>';

				//echo '<div class="description">' . $field['desc'] . '</div>';
				//if ( $this->debug == 1 ) echo '<div class="debug">get_option( \'' . $field['id'] . '\' );</div>';
			break;

			case 'textarea':
				echo '<div class="field">' . wp_editor( $value, $field['id'], $field['settings'] ) . '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
				echo '<style>.ed_button{width:auto!important}</style>';
			break;

			case 'textarea_raw':
				echo '<div class="field"><textarea class="textarea widefat" name="' . $field['id'] . '" id="' . $field['id'] . '">' . $value . '</textarea></div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'checkbox':
				echo '<div class="field"><input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ' . checked( $value, 'on', false ) . '></div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'if ( get_post_meta( $post->ID, \'' . $field['id'] . '\', true ) ) { } else { }';
					if ( $this->fields_type == 2 ) echo 'if ( get_option( \'' . $field['id'] . '\' ) ) { } else { }';
					if ( $this->fields_type == 3 ) echo 'if ( get_term_meta( $term_id, \'' . $field['id'] . '\', true ) ) { } else { }';
					echo '</div>';
				}
				echo '<style>#' . $field['id'] . '{width:auto!important}</style>';
			break;

			case 'select':
				echo '<div class="field">';
				echo '<select class="widefat" name="' . $field['id'] . '" id="' . $field['id'] . '"><option value="">Select</option>';
					foreach ( $field['options'] as $select_option ) {
						echo '<option ' . selected( $select_option['value'], $value, false ) . ' value="' . $select_option['value'] . '">' . $select_option['label'] . '</option>';
					}
				echo '</select>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'radio':
				echo '<div class="field">';
				foreach ( $field['options'] as $radio_option ) {
					echo '<div><input type="radio" name="' . $field['id'] . '" id="' . $radio_option['value'] . '" value="' . $radio_option['value'] . '" ' . checked( $radio_option['value'], $value, false ) . '><label for="' . $radio_option['value'] . '">' . $radio_option['label'] . '</label></div>';
				}
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
				echo '<style>.field input[type=radio]{width:auto!important;float:left;}</style>';
			break;

			case 'checkbox_group':
				if ( empty( $value ) ) $value = array();
				echo '<div class="field">';
				foreach ( $field['options'] as $check_option ) {
					echo '<div><input type="checkbox" value="' . $check_option['value'] . '" name="' . $field['id'] . '[]" id="' . $check_option['value'] . '"
					' . checked( $check_option['value'], in_array( $check_option['value'], $value ) ? $check_option['value'] : '', false ) . '><label for="' . $check_option['value'] . '">' . $check_option['label'] . '</label></div>';
				}
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'foreach ( get_post_meta( $post->ID, \'' . $field['id'] . '\', true ) as $field ) {}';
					if ( $this->fields_type == 2 ) echo 'foreach ( get_option( \'' . $field['id'] . '\' ) as $field ) {}';
					if ( $this->fields_type == 3 ) echo 'foreach ( get_term_meta( $term_id, \'' . $field['id'] . '\', true ) as $field ) {}';
					echo '</div>';
				}
				echo '<style>.field input[type=checkbox]{width:auto!important;float:left;}</style>';
			break;

			case 'users_checkbox_group':
				global $wp_roles;
				if ( empty( $value ) ) $value = array();
				echo '<div class="field">';
				foreach ( $wp_roles->get_names() as $role => $name ) {
					$users = get_users( 'role=' . $role );
					if ( !empty( $users ) ) {
						echo '<h4>' . $name . '</h4>';
						foreach ( $users as $user ) {
							echo '<div><input type="checkbox" value="' . $user->user_login . '" name="' . $field['id'] . '[]" id="' . $user->user_login . '" ' . checked( $user->user_login, in_array( $user->user_login, $value ) ? $user->user_login : '', false ) . '><label for="' . $user->user_login . '">' . $user->user_login . ' (' . $user->display_name . ')</label></div>';
						}
					}
				}
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'foreach ( get_post_meta( $post->ID, \'' . $field['id'] . '\', true ) as $field ) {}';
					if ( $this->fields_type == 2 ) echo 'foreach ( get_option( \'' . $field['id'] . '\' ) as $field ) {}';
					if ( $this->fields_type == 3 ) echo 'foreach ( get_term_meta( $term_id, \'' . $field['id'] . '\', true ) as $field ) {}';
					echo '</div>';
				}
			break;

			case 'term_select':
				$field['taxonomy'] = isset( $field['taxonomy'] ) ? $field['taxonomy'] : 'category';
				$get_terms = get_terms( $field['taxonomy'], 'hide_empty=0' );
				if ( $this->fields_type == 1 ) {
					$get_the_terms = get_the_terms( $object_id, $field['taxonomy'] );
					$value = $get_the_terms['0']->term_id;
				}

				echo '<div class="field">';
				echo '<select class="widefat" name="' . $field['id'] . '" id="' . $field['id'] . '"><option value="">Select</option>';
				foreach( $get_terms as $get_term ) {
					echo '<option value="' . $get_term->term_id . '" ' . selected( $get_term->term_id, $value, false ) . '>' . $field['taxonomy'] . ': ' . $get_term->name . '</option>';
				}
				echo '</select>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_the_terms( $post->ID, \'' . $field['taxonomy'] . '\' );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'term_radio':
				$field['taxonomy'] = isset( $field['taxonomy'] ) ? $field['taxonomy'] : 'category';
				$get_terms = get_terms( $field['taxonomy'], 'hide_empty=0' );
				if ( $this->fields_type == 1 ) {
					$get_the_terms = get_the_terms( $object_id, $field['taxonomy'] );
					$value = $get_the_terms['0']->term_id;
				}

				echo '<div class="field">';
				foreach ( $get_terms as $radio_option ) {
					echo '<div><input type="radio" name="' . $field['id'] . '" id="' . $radio_option->term_id . '" value="' . $radio_option->term_id . '" ' . checked( $radio_option->term_id, $value, false ) . '><label for="' . $radio_option->term_id . '">' . $field['taxonomy'] . ': ' . $radio_option->name . '</label></div>';
				}
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_the_terms( $post->ID, \'' . $field['taxonomy'] . '\' );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'post_list':
				$get_posts = get_posts(array (
					'post_type' => $field['post_type'],
					'posts_per_page' => -1
				));
				echo '<div class="field">';
				echo '<select class="widefat" name="' . $field['id'] . '" id="' . $field['id'] . '"><option value="">Select</option>';
				foreach( $get_posts as $get_post ) {
					echo '<option value="' . $get_post->ID . '" ' . selected( $get_post->ID, $value, false ) . '>' . $get_post->post_type . ': ' . $get_post->post_title . '</option>';
				}
				echo '</select>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				}
			break;

			case 'date':
				echo '<div class="field">';
				echo '<input type="text" class="' . $field['id'] . '-datepicker widefat" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '">';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				} ?>

				<script>
					(function($) {
						$(function() {

							$('.<?php echo $field['id']; ?>-datepicker').datepicker({
								dateFormat: 'dd.mm.yy',
								<?php if ( $field['locale'] == 'ru' ) { ?>
								dayNames: [ 'Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота' ],
								dayNamesMin: [ 'Во', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб' ],
								dayNamesShort: [ 'Вос', 'Пон', 'Вто', 'Сре', 'Чет', 'Пят', 'Суб' ],
								monthNames: [ 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ],
								monthNamesShort: [ 'Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек' ],
								<?php } ?>
								changeMonth: true,
								changeYear: true,
								showOtherMonths: true,
								selectOtherMonths: true,
								defaultDate: +7,
								firstDay: 1,
								numberOfMonths: 3,
								showButtonPanel: true
							});

						});
					})(jQuery);
				</script><?php
			break;

			case 'time':
				echo '<div class="field">';
				echo '<input type="text" class="' . $field['id'] . '-timepicker widefat" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '">';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				} ?>

				<script>
					(function($) {
						$(function() {
							$( '.<?php echo $field['id']; ?>-timepicker' ).datetimepicker();
						});
					})(jQuery);
				</script><?php
			break;

			case 'slider':
				$value = $value != '' ? $value : '0';
				echo '<div class="field">';
				echo '<div id="' . $field['id'] . '-slider"></div><input class="slider-input" type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '">';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				} ?>

				<style>
					.ui-slider .ui-slider-handle {
						z-index:1!important;
					}
				</style>
				<script>
					(function($) {
						$(function() {

							<?php if ($value == '') $value = $field['min']; ?>

							$( "#<?php echo $field['id']; ?>-slider" ).slider({
								value: <?php echo $value; ?>,
								min: <?php echo $field['min']; ?>,
								max: <?php echo $field['max']; ?>,
								step: <?php echo $field['step']; ?>,
								slide: function( event, ui ) {
									jQuery( "#<?php echo $field['id']; ?>" ).val( ui.value );
								}
							});

						});
					})(jQuery);
				</script><?php
			break;

			case 'image':
				$image = THEME_URL . '/inc/images/image.png';
				echo '<div class="field">';
				echo '<span class="custom_default_image" style="display:none">' . $image . '</span>';
				if ( $value ) {
					$image = wp_get_attachment_image_src( $value, 'thumbnail' );
					$image = $image[0];
				}
				echo '<input name="' . $field['id'] . '" type="hidden" class="custom_upload_image" value="' . $value . '"><img src="' . $image . '" class="custom_upload_image_button custom_preview_image"><input class="custom_upload_image_button button" type="button" value="Choose image"><a href="#" class="custom_clear_image_button">Remove image</a>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo '$image_id = get_post_meta( $post->ID, \'' . $field['id'] . '\', true ); $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];';
					if ( $this->fields_type == 2 ) echo '$image_id = get_option( \'' . $field['id'] . '\' ); $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];';
					if ( $this->fields_type == 3 ) echo '$image_id = get_term_meta( $term_id, \'' . $field['id'] . '\', true ); $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];';
					echo '</div>';
				}
				echo '<style>.field input[type=button]{width:auto!important;}</style>';
			break;

			case 'repeatable':
				echo '<div class="field">';
				echo '<a class="repeatable-add button" href="#">+</a><div id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
				$i = 0;
				if ( $value ) {
					foreach( $value as $row ) {
						echo '<div><span class="sort hndle">|||</span><input type="text" name="' . $field['id'] . '[' . $i . ']" class="repeatable widefat" value="' . $row . '"/><a class="repeatable-remove button" href="#">-</a></div>';
						$i++;
					}
				} else {
					echo '<div><span class="sort hndle">|||</span><input type="text" name="' . $field['id'] . '[' . $i . ']" class="repeatable widefat" value=""/><a class="repeatable-remove button" href="#">-</a></div>';
				}
				echo '</div>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'foreach ( get_post_meta( $post->ID, \'' . $field['id'] . '\', true ) as $field ) {}';
					if ( $this->fields_type == 2 ) echo 'foreach ( get_option( \'' . $field['id'] . '\' ) as $field ) {}';
					if ( $this->fields_type == 3 ) echo 'foreach ( get_term_meta( $term_id, \'' . $field['id'] . '\', true ) as $field ) {}';
					echo '</div>';
				}
			break;

			case 'repeatable_images':
				$image = THEME_URL . '/inc/images/image.png';
				echo '<div class="field">';
				echo '<span class="custom_default_image" style="display:none">' . $image . '</span>';
				echo '<a class="repeatable-add button" href="#">+</a><div id="' . $field['id'] . '-repeatable" class="custom_repeatable">';
				$i = 0;
				if ( $value ) {
					foreach( $value as $image_id ) {
						$image = wp_get_attachment_image_src( $image_id, 'thumbnail' );
						$image = $image[0];
						echo '<div><span class="sort hndle">|||</span><input name="' . $field['id'] . '[' . $i . ']" type="hidden" class="custom_upload_image repeatable" value="' . $image_id . '" /><img src="' . $image . '" class="custom_upload_image_button custom_preview_image"><input class="custom_upload_image_button button" type="button" value="Choose image"><a class="repeatable-remove button" href="#">-</a></div>';
						$i++;
					}
				} else {
					echo '<div><span class="sort hndle">|||</span><input name="' . $field['id'] . '[' . $i . ']" type="hidden" class="custom_upload_image repeatable" value=""><img class="custom_upload_image_button custom_preview_image" src="' . $image . '"><input class="custom_upload_image_button button" type="button" value="Choose image" /><a class="repeatable-remove button" href="#">-</a></div>';
				}
				echo '</div>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'foreach ( get_post_meta( $post->ID, \'' . $field['id'] . '\', true ) as $image_id ) { $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];}';
					if ( $this->fields_type == 2 ) echo 'foreach ( get_option( \'' . $field['id'] . '\' ) as $image_id ) { $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];}';
					if ( $this->fields_type == 3 ) echo 'foreach ( get_term_meta( $term_id, \'' . $field['id'] . '\', true ) as $image_id ) { $image_src = wp_get_attachment_image_src( $image_id, \'thumbnail\' ); $image_url = $image_src[0];}';
					echo '</div>';
				}
			break;

			case 'color':
				echo '<div class="field">';
				echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $value . '"><a href="#" class="pickcolor ' . $field['id'] . '" id="' . $field['id'] . '-example"></a><input type="button" class="pickcolor button ' . $field['id'] . '" value="Select a color"><div id="' . $field['id'] . 'Div" style="z-index:100;background:#eee;border:1px solid #ccc;position:absolute;display:none;"></div>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
				if ( $this->dev == 1 ) {
					echo '<div class="dev">';
					if ( $this->fields_type == 1 ) echo 'get_post_meta( $post->ID, \'' . $field['id'] . '\', true );';
					if ( $this->fields_type == 2 ) echo 'get_option( \'' . $field['id'] . '\' );';
					if ( $this->fields_type == 3 ) echo 'get_term_meta( $term_id, \'' . $field['id'] . '\', true );';
					echo '</div>';
				} ?>

				<script>
					(function($) {
						$(function() {

							var pickColor<?php echo $field['id']; ?> = function( a ) {
								farbtastic<?php echo $field['id']; ?>.setColor( a );
								$( '#<?php echo $field['id']; ?>' ).val( a );
								$( '#<?php echo $field['id']; ?>-example' ).css( 'background-color', a );
							};

							farbtastic<?php echo $field['id']; ?> = $.farbtastic( '#<?php echo $field['id']; ?>Div ', pickColor<?php echo $field['id']; ?> );
							pickColor<?php echo $field['id']; ?>( $( '#<?php echo $field['id']; ?>' ).val() );
							$( '.<?php echo $field['id']; ?>' ).click(function(event) {
								event.preventDefault();
								$( '#<?php echo $field['id']; ?>Div' ).show();

							});
							$(document).mousedown(function() {
								$( '#<?php echo $field['id']; ?>Div' ).hide();
							});

						});
					})(jQuery);
				</script><?php
			break;

			case 'plugins':
				$plugins = get_plugins();
				echo '<div class="option">';
				echo '<ol>';
				foreach( $plugins as $plugin ) {
					echo '<li>';
					echo '<a href="' . $plugin['PluginURI'] . '">' . $plugin['Name'] . '</a> ' . $plugin['Version'] . ' (author ' . '<a href="' . $plugin['AuthorURI'] . '">' . $plugin['Author'] . '</a>)';
					echo '</li>';
				}
				echo '</ol>';
				echo '</div>';
				echo '<div class="description">' . $field['desc'] . '</div>';
			break;

		}

		do_action( 'custom_zelenin_fields', $field );

	}

	function generate_page( $type = '' ) {

		if ( $this->fields_type == 2 ) {

			if ( isset( $_POST['speakpipe_id'] ) && empty( $_POST['speakpipe_id'] ) ) {

			} else {
				add_settings_error( 'updated', 'settings_updated', 'Settings saved.', 'updated' );
			}

			if ( isset( $_POST['submit'] ) ) $this->fields_update();

			echo '<div class="wrap">';
				screen_icon( 'options-general' );
				echo '<h2>' . $this->fields_name . '</h2>';
				if ( isset( $_POST['submit'] ) ) settings_errors( 'updated', true, false );
				echo '<form method="post" action="">';
					settings_fields( $this->slug );
					echo '<p><img src="' . plugins_url( 'images/logo.png', __FILE__ ) . '"></p>';
					echo '<p>SpeakPipe allows your customers, podcast listeners, blog readers and fans to send you voice messages (voicemail) right from a browser without any phone calls.</p>';
					// submit_button( 'Save changes', 'primary', 'submit', 'true' );

		}

				if ( $this->fields_type == 1 || $this->fields_type == 2 ) {

					echo '<div id="settings-tabs">';
						if ( count( $this->fields ) > 1 ) {

							echo '<ul>';
							foreach( $this->fields as $tab_fields ) {
								echo '<li><a href="#' . $tab_fields['id'] . '">' . $tab_fields['label'] . '</a></li>';
							} ?>
							<script>
								(function($) {
									$(function() {
										$( '#settings-tabs' ).tabs();
									});
								})(jQuery);
							</script>
							<?php echo '</ul>';

						}

						foreach( $this->fields as $tab_fields ) {
							echo '<div id="' . $tab_fields['id'] . '">';
								echo '<table class="form-table">';
									do_settings_fields( $this->slug, $tab_fields['id'] );
								echo '</table>';
							echo '</div>';
						}

					echo '</div>';

				}

		if ( $this->fields_type == 2 ) {
					echo '<p style="margin-left:10px;">You can configure the appearance of the widget in your SpeakPipe <a href="https://www.speakpipe.com/account/settings/widget" target="_blank">settings</a></p>';
					submit_button( 'Save changes', 'primary', 'submit', 'true' );
				echo '</form>';
				echo '<div class="updated fade"><p><strong>Don\'t have an account? No problem! <a href="http://www.speakpipe.com/" target="_blank">Register for a FREE SpeakPipe account right now!</a></strong></p></div>';
			echo '</div>';

		}

		if ( $this->fields_type == 3 ) {
			foreach( $this->fields as $tab_fields ) {
				$this->do_settings_fields( $this->slug, $tab_fields['id'], $type );
			}
		}

	}

	function do_settings_fields( $page, $section, $type ) {

		global $wp_settings_fields;
		if ( !isset($wp_settings_fields) || !isset($wp_settings_fields[$page]) || !isset($wp_settings_fields[$page][$section]) ) return;

		foreach ( (array) $wp_settings_fields[$page][$section] as $field ) {

			if ( $type == 'edit_term_fields' ) {

				echo '<tr class="form-field">';

				if ( !empty($field['args']['label_for']) ) {
					echo '<th scope="row" valign="top"><label for="' . $field['args']['label_for'] . '">' . $field['title'] . '</label></th>';
				} else {
					echo '<th scope="row" valign="top">' . $field['title'] . '</th>';
				}

				echo '<td>';
				call_user_func( $field['callback'], $field['args'] );
				echo '</td>';

				echo '</tr>';

			}

			if ( $type == 'add_term_fields' ) {

				echo '<div class="form-field">';

				if ( !empty($field['args']['label_for']) ) {
					echo '<label for="' . $field['args']['label_for'] . '">' . $field['title'] . '</label>';
				} else {
					echo $field['title'];
				}

				call_user_func( $field['callback'], $field['args'] );

				echo '</div>';

			}

		}

	}

	function fields_update( $object_id = 0 ) {

		if ( $this->fields_type == 1 ) {
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return $post_id;
		}

		if ( $this->fields_type == 3 ) {

			global $wpdb;
			$object_id = isset( $_REQUEST['tag_ID'] ) ? (int) $_REQUEST['tag_ID'] : $object_id;

			if ( ! $table = _get_meta_table( $this->object_type ) ) {

				$wpdb->query(
					"CREATE TABLE `" . $wpdb->taxonomymeta . "` (
						`meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
						`taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
						`meta_key` varchar(255) DEFAULT NULL,
						`meta_value` longtext,
						PRIMARY KEY (`meta_id`),
						KEY `taxonomy_id` (`taxonomy_id`),
						KEY `meta_key` (`meta_key`)
					);"

				);

			}

		}

		foreach ( $this->fields as $tab_fields ) {

			foreach ( $tab_fields['content'] as $field ) {

				$field_value = isset( $_POST[$field['id']] ) ? $_POST[$field['id']] : '';

				if ( is_array( $field_value ) ) {
					$field_value = array_filter( $field_value );
					$field_value = array_values( $field_value );
				}

				if ( $field['type'] == 'text' ) $field_value = esc_attr( stripslashes( $field_value ) );
				if ( $field['type'] == 'textarea' ) $field_value = stripslashes( $field_value );
				if ( $field['type'] == 'textarea_raw' ) $field_value = esc_textarea( stripslashes( $field_value ) );
				// ( $field['type'] == 'slider' && is_numeric( $field_value ) ) ? $field_value = floatval( $field_value ) : $field_value = get_option( $field['id'] );
				// if ( $field['type'] == 'repeatable' ) $field_value = esc_attr( stripslashes( $field_value ) );
				if ( $field['type'] == 'color' ) $field_value = esc_attr( $field_value );

				if ( $this->fields_type == 1 ) {
					!empty( $field_value ) ? update_post_meta( $object_id, $field['id'], $field_value ) : delete_post_meta( $object_id, $field['id'] );
					if ( $field['type'] == 'term_select' || $field['type'] == 'term_radio' ) wp_set_object_terms( $object_id, (int) $field_value, $field['taxonomy'] );
				}

				if ( $this->fields_type == 2 ) !empty( $field_value ) ? update_option( $field['id'], $field_value ) : delete_option( $field['id'] );

				if ( $this->fields_type == 3 ) !empty( $field_value ) ? update_term_meta( $object_id, $field['id'], $field_value ) : delete_term_meta( $object_id, $field['id'] );

			}

		}

	}

	function add_fields_scripts() {

		if ( count( $this->fields ) > 1 ) {
			wp_enqueue_script( 'jquery-ui-tabs' );

			// wp_register_style( 'jquery-ui', 'http://gravityonmars.github.com/Selene/css/ui-selene/jquery-ui-1.8.17.custom.css', array( 'colors' ), '1', 'all' );
			// wp_register_style( 'jquery-ui', 'http://zelenin.me/jui/jquery-ui-1.8.16.custom.css', array( 'colors' ), '1', 'all' );
			wp_register_style( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.20/themes/base/jquery-ui.css', array( 'colors' ), '1', 'all' );
			wp_enqueue_style( 'jquery-ui' );
		}

		foreach ( $this->fields as $tab_fields ) {

			foreach ( $tab_fields['content'] as $field ) {

				if ( $field['type'] == 'date' ) {

					wp_register_style( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.20/themes/base/jquery-ui.css', array( 'colors' ), '1', 'all' );
					wp_enqueue_style( 'jquery-ui' );

					wp_enqueue_script( 'jquery-ui-datepicker' );

				}

				if ( $field['type'] == 'time' ) {

					wp_register_style( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.20/themes/base/jquery-ui.css', array( 'colors' ), '1', 'all' );
					wp_enqueue_style( 'jquery-ui' );

					wp_register_script( 'timepicker', THEME_URL . '/js/timepicker/jquery-ui-timepicker-addon.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker' ), '1', false );
					wp_enqueue_script( 'timepicker' );

					wp_register_style( 'jquery-ui-timepicker-addon', THEME_URL . '/css/jquery-ui-timepicker-addon.css', array( 'colors' ), '1', 'all' );
					wp_enqueue_style( 'jquery-ui-timepicker-addon' );

				}

				if ( $field['type'] == 'slider' ) {

					wp_register_style( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.20/themes/base/jquery-ui.css', array( 'colors' ), '1', 'all' );
					wp_enqueue_style( 'jquery-ui' );

					wp_enqueue_script( 'jquery-ui-slider' );

				}

				if ( $field['type'] == 'color' ) {
					wp_enqueue_script( 'farbtastic' );
					wp_enqueue_style( 'farbtastic' );
				}

				if ( $field['type'] == 'repeatable' or $field['type'] == 'repeatable_images' ) {
					wp_enqueue_script( 'jquery-ui-sortable' );
				}

				if ( $field['type'] == 'image' or $field['type'] == 'repeatable_images' ) {
					wp_enqueue_style( 'thickbox' );
				}

			}

		}

	}

	function add_footer_scripts() {

		foreach ( $this->fields as $tab_fields ) {

			foreach ( $tab_fields['content'] as $field ) {

				if ( ( $field['type'] == 'image' || $field['type'] == 'repeatable_images' ) && !defined( 'FIELDS_MEDIA' ) ) {
					DEFINE( 'FIELDS_MEDIA', true ); ?>
					<script>
						(function($) {
							$(function() {

								$( '#media-items' ).bind( 'DOMNodeInserted', function() {
									$( 'input[value="Insert into Post"]' ).each(
										function() {
											$(this).attr( 'value', 'Use This Image' );
										}
									);
								});

								$( '.custom_upload_image_button' ).on( 'click', function(event) {

									event.preventDefault();
									var div = $(this).closest( 'div' );
									var form_field = div.find( '.custom_upload_image' );
									var preview = div.find( '.custom_preview_image' );

									tb_show( '', 'media-upload.php?post_id=0&type=image&TB_iframe=1' );
									window.send_to_editor = function( html ) {

										img_url = $( 'img', html ).attr( 'src' );
										classes = $( 'img', html ).attr( 'class' );
										id = classes.replace( /(.*?)wp-image-/, '' );
										form_field.val( id );
										preview.attr( 'src', img_url );
										tb_remove();

									}
								});

								$( '.custom_clear_image_button' ).on( 'click', function(event) {
									event.preventDefault();
									var div = $(this).closest( 'div' );
									var default_image = div.find( '.custom_default_image' ).text();
									div.find( '.custom_upload_image' ).val( '' );
									div.find( '.custom_preview_image' ).attr( 'src', default_image );
								});

							});
						})(jQuery);
					</script>
				<?php }

				if ( ( $field['type'] == 'repeatable' || $field['type'] == 'repeatable_images' ) && !defined( 'FIELDS_REPEATABLE' ) ) {
					DEFINE( 'FIELDS_REPEATABLE', true ); ?>
					<script>
						(function($) {
							$(function() {

								$( '.repeatable-add' ).on( 'click', function(event) {

									event.preventDefault();
									var option = $(this).closest( '.field' );
									var field_location = option.find( '.custom_repeatable div:last' );
									var field = field_location.clone( true );
									var default_image = option.find( '.custom_default_image' ).text();

									$( '.custom_preview_image', field ).attr( 'src', default_image );
									$( '.repeatable', field ).val( '' ).attr( 'name', function( index, name ) {
										return name.replace( /\[(\d+)\]/, function( fullMatch, n ) {
											var n = Number( n ) + 1;
											return '[' + n + ']';
										});
									});
									field.insertAfter( field_location, option );

								});

								$( '.repeatable-remove' ).on( 'click', function(event) {
									event.preventDefault();
									var div = $(this).closest( 'div' );
									div.remove();
								});

								$( '.custom_repeatable' ).sortable({
									opacity: 0.5,
									revert: true,
									cursor: 'move',
									handle: '.sort'
								});

							});
						})(jQuery);
					</script>
				<?php }

			}

		}

	}

}

}

if ( !function_exists( 'add_term_meta' ) ) {
	function add_term_meta( $term_id, $meta_key, $meta_value, $unique = false ) {
		return add_metadata( 'taxonomy', $term_id, $meta_key, $meta_value, $unique );
	}
}

if ( !function_exists( 'delete_term_meta' ) ) {
	function delete_term_meta( $term_id, $meta_key, $meta_value = '' ) {
		return delete_metadata( 'taxonomy', $term_id, $meta_key, $meta_value );
	}
}

if ( !function_exists( 'get_term_meta' ) ) {
	function get_term_meta( $term_id, $key, $single = false ) {
		return get_metadata( 'taxonomy', $term_id, $key, $single );
	}
}

if ( !function_exists( 'update_term_meta' ) ) {
	function update_term_meta( $term_id, $meta_key, $meta_value, $prev_value = '' ) {
		return update_metadata( 'taxonomy', $term_id, $meta_key, $meta_value, $prev_value );
	}
}