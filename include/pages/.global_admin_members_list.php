<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'menu',
'username_button' ),
'top' => array(  ),
'above-grid' => array( 'members_save',
'members_reset',
'members_choose_columns',
'members_displaying_filter' ),
'below-grid' => array(  ),
'grid' => array( 'members_username_label',
'members_displayname_label',
'members_email_label',
'members_groupname_label',
'members_search',
'members_all_users_checkbox',
'members_all_groups_checkbox',
'members_username',
'members_displayname',
'members_email',
'members_group_checkbox',
'members_source_label',
'members_source_filter',
'members_source' ) ),
'formXtTags' => array( 'top' => array(  ),
'below-grid' => array(  ) ),
'itemForms' => array( 'menu' => 'supertop',
'username_button' => 'supertop',
'members_save' => 'above-grid',
'members_reset' => 'above-grid',
'members_choose_columns' => 'above-grid',
'members_displaying_filter' => 'above-grid',
'members_username_label' => 'grid',
'members_displayname_label' => 'grid',
'members_email_label' => 'grid',
'members_groupname_label' => 'grid',
'members_search' => 'grid',
'members_all_users_checkbox' => 'grid',
'members_all_groups_checkbox' => 'grid',
'members_username' => 'grid',
'members_displayname' => 'grid',
'members_email' => 'grid',
'members_group_checkbox' => 'grid',
'members_source_label' => 'grid',
'members_source_filter' => 'grid',
'members_source' => 'grid' ),
'itemLocations' => array( 'members_username_label' => array( 'location' => 'grid',
'cellId' => 'hcell_username' ),
'members_displayname_label' => array( 'location' => 'grid',
'cellId' => 'hcell_displayname' ),
'members_email_label' => array( 'location' => 'grid',
'cellId' => 'hcell_email' ),
'members_groupname_label' => array( 'location' => 'grid',
'cellId' => 'hcell_groupname' ),
'members_search' => array( 'location' => 'grid',
'cellId' => 'hcell_search' ),
'members_all_users_checkbox' => array( 'location' => 'grid',
'cellId' => 'hcell_all_checkbox' ),
'members_all_groups_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_u' ),
'members_username' => array( 'location' => 'grid',
'cellId' => 'cell_u' ),
'members_displayname' => array( 'location' => 'grid',
'cellId' => 'cell_dn' ),
'members_email' => array( 'location' => 'grid',
'cellId' => 'cell_e' ),
'members_group_checkbox' => array( 'location' => 'grid',
'cellId' => 'c_gn' ),
'members_source_label' => array( 'location' => 'grid',
'cellId' => 'hcell_source' ),
'members_source_filter' => array( 'location' => 'grid',
'cellId' => 'hcell_source1' ),
'members_source' => array( 'location' => 'grid',
'cellId' => 'cell_source' ) ),
'itemVisiblity' => array( 'menu' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'members_save' => array( 'members_save' ),
'members_reset' => array( 'members_reset' ),
'members_choose_columns' => array( 'members_choose_columns' ),
'members_displaying_filter' => array( 'members_displaying_filter' ),
'members_username_label' => array( 'members_username_label' ),
'members_displayname_label' => array( 'members_displayname_label' ),
'members_email_label' => array( 'members_email_label' ),
'members_groupname_label' => array( 'members_groupname_label' ),
'members_search' => array( 'members_search' ),
'members_all_users_checkbox' => array( 'members_all_users_checkbox' ),
'members_username' => array( 'members_username' ),
'members_group_checkbox' => array( 'members_group_checkbox' ),
'members_all_groups_checkbox' => array( 'members_all_groups_checkbox' ),
'members_displayname' => array( 'members_displayname' ),
'members_email' => array( 'members_email' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'exit_adminarea_link' => array( 'exit_adminarea_link' ),
'logout_link' => array( 'logout_link' ),
'members_source_label' => array( 'members_source_label' ),
'members_source_filter' => array( 'members_source_filter' ),
'members_source' => array( 'members_source' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'hcell_username' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'members_username_label' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'hcell_displayname' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'displayname_column' ),
'items' => array( 'members_displayname_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_email' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'email_column' ),
'items' => array( 'members_email_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_groupname' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'members_groupname_label' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'hcell_source' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'members_source_label' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'hcell_username1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_displayname1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_email1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_groupname1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_search' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'members_search' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'hcell_all_checkbox' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'members_all_users_checkbox' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'hcell_source1' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'user_source' ),
'items' => array( 'members_source_filter' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_search1' => array( 'cols' => array( 1,
2,
3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'hcell_all_checkbox1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_u' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'members_all_groups_checkbox',
'members_username' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_dn' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array( 'displayname_column' ),
'items' => array( 'members_displayname' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_e' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array( 'email_column' ),
'items' => array( 'members_email' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c_gn' => array( 'cols' => array( 4 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'members_group_checkbox' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_source' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'user_source' ),
'items' => array( 'members_source' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_u1' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dn1' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_e1' => array( 'cols' => array( 3 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c_gn1' => array( 'cols' => array( 4 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 5,
'height' => 6 ) ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'admin_members_list',
'type' => 'admin_members_list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'admin-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'admin-header',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'admin-members-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'members_save',
'members_reset' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'members_choose_columns',
'members_displaying_filter' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'admin-header',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'admin-members-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'hcell_username',
'colspan' => 2 ),
array( 'cell' => 'hcell_displayname' ),
array( 'cell' => 'hcell_email' ),
array( 'cell' => 'hcell_groupname' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'hcell_source' ),
array( 'cell' => 'hcell_username1' ),
array( 'cell' => 'hcell_displayname1' ),
array( 'cell' => 'hcell_email1' ),
array( 'cell' => 'hcell_groupname1' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'hcell_search',
'colspan' => 4 ),
array( 'cell' => 'hcell_all_checkbox' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'hcell_source1' ),
array( 'cell' => 'hcell_search1',
'colspan' => 3 ),
array( 'cell' => 'hcell_all_checkbox1' ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_u',
'colspan' => 2 ),
array( 'cell' => 'cell_dn' ),
array( 'cell' => 'cell_e' ),
array( 'cell' => 'c_gn' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_source' ),
array( 'cell' => 'cell_u1' ),
array( 'cell' => 'cell_dn1' ),
array( 'cell' => 'cell_e1' ),
array( 'cell' => 'c_gn1' ) ),
'section' => 'body' ) ),
'cells' => array( 'hcell_username' => array( 'model' => 'hcell_username',
'items' => array( 'members_username_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_displayname' => array( 'model' => 'hcell_displayname',
'items' => array( 'members_displayname_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_email' => array( 'model' => 'hcell_email',
'items' => array( 'members_email_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_groupname' => array( 'model' => 'hcell_groupname',
'items' => array( 'members_groupname_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_search' => array( 'model' => 'hcell_search',
'items' => array( 'members_search' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_all_checkbox' => array( 'model' => 'hcell_all_checkbox',
'items' => array( 'members_all_users_checkbox' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_u' => array( 'model' => 'cell_u',
'items' => array( 'members_all_groups_checkbox',
'members_username' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_dn' => array( 'model' => 'cell_dn',
'items' => array( 'members_displayname' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_e' => array( 'model' => 'cell_e',
'items' => array( 'members_email' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c_gn' => array( 'model' => 'c_gn',
'items' => array( 'members_group_checkbox' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'hcell_source' => array( 'model' => 'hcell_source',
'items' => array( 'members_source_label' ) ),
'hcell_username1' => array( 'model' => 'hcell_username',
'items' => array(  ) ),
'hcell_displayname1' => array( 'model' => 'hcell_displayname',
'items' => array(  ) ),
'hcell_email1' => array( 'model' => 'hcell_email',
'items' => array(  ) ),
'hcell_groupname1' => array( 'model' => 'hcell_groupname',
'items' => array(  ) ),
'hcell_source1' => array( 'model' => 'hcell_source1',
'items' => array( 'members_source_filter' ) ),
'hcell_search1' => array( 'model' => 'hcell_search',
'items' => array(  ) ),
'hcell_all_checkbox1' => array( 'model' => 'hcell_all_checkbox',
'items' => array(  ) ),
'cell_source' => array( 'model' => 'cell_source',
'items' => array( 'members_source' ) ),
'cell_u1' => array( 'model' => 'cell_u',
'items' => array(  ) ),
'cell_dn1' => array( 'model' => 'cell_dn',
'items' => array(  ) ),
'cell_e1' => array( 'model' => 'cell_e',
'items' => array(  ) ),
'c_gn1' => array( 'model' => 'c_gn',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'members_save' => array( 'type' => 'members_save' ),
'members_reset' => array( 'type' => 'members_reset' ),
'members_choose_columns' => array( 'type' => 'members_choose_columns' ),
'members_displaying_filter' => array( 'type' => 'members_displaying_filter' ),
'members_username_label' => array( 'type' => 'members_username_label' ),
'members_displayname_label' => array( 'type' => 'members_displayname_label' ),
'members_email_label' => array( 'type' => 'members_email_label' ),
'members_groupname_label' => array( 'type' => 'members_groupname_label' ),
'members_search' => array( 'type' => 'members_search' ),
'members_all_users_checkbox' => array( 'type' => 'members_all_users_checkbox' ),
'members_username' => array( 'type' => 'members_username' ),
'members_group_checkbox' => array( 'type' => 'members_group_checkbox' ),
'members_all_groups_checkbox' => array( 'type' => 'members_all_groups_checkbox' ),
'members_displayname' => array( 'type' => 'members_displayname' ),
'members_email' => array( 'type' => 'members_email' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'exit_adminarea_link' ) ),
'exit_adminarea_link' => array( 'type' => 'exit_adminarea_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'members_source_label' => array( 'type' => 'members_source_label' ),
'members_source_filter' => array( 'type' => 'members_source_filter' ),
'members_source' => array( 'type' => 'members_source' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>