<?php
//Custom Meta box in menu

if ( !class_exists('JMO_Custom_Nav')) {
    class JMO_Custom_Nav {
        public function add_nav_menu_meta_boxes() {
        	add_meta_box(
        		'coder_akash_nav_meta_port_archive',
        		__('Portfolio Archive'),
        		array( $this, 'nav_menu_link'),
        		'nav-menus',
        		'side',
        		'low'
        	);
        }
        
        public function nav_menu_link() {?>
        	<div id="posttype-wl-login" class="posttypediv">
        		<div id="tabs-panel-wishlist-login" class="tabs-panel tabs-panel-active">
        			<ul id ="wishlist-login-checklist" class="categorychecklist form-no-clear">
        				<li>
        					<label class="menu-item-title">
        						<input type="checkbox" class="menu-item-checkbox" name="menu-item[-1][menu-item-object-id]" value="-1"> Portfolio Archive
        					</label>
        					<input type="hidden" class="menu-item-type" name="menu-item[-1][menu-item-type]" value="custom">
        					<input type="hidden" class="menu-item-title" name="menu-item[-1][menu-item-title]" value="Portfolio">
        					<input type="hidden" class="menu-item-url" name="menu-item[-1][menu-item-url]" value="<?php echo home_url(); ; ?>/portfolio">
        					<input type="hidden" class="menu-item-classes" name="menu-item[-1][menu-item-classes]" value="wl-login-pop">
        				</li>
        			</ul>
        		</div>
        		<p class="button-controls">
        			<span class="add-to-menu">
        				<input type="submit" class="button-secondary submit-add-to-menu right" value="Add to Menu" name="add-post-type-menu-item" id="submit-posttype-wl-login">
        				<span class="spinner"></span>
        			</span>
        		</p>
        	</div>
        <?php }
    }
}

$custom_nav = new JMO_Custom_Nav;

add_action('admin_init', array($custom_nav, 'add_nav_menu_meta_boxes'));