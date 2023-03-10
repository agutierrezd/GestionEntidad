<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'funcionario_SJ' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ),
'contractor_master_SJ' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'dep_det_id' => array( 'totalsType' => '' ),
'id_dep_fk' => array( 'totalsType' => '' ),
'id_depto_superior_fk' => array( 'totalsType' => '' ),
'dep_det_nombre' => array( 'totalsType' => '' ),
'dep_det_descripcion' => array( 'totalsType' => '' ),
'dep_det_enlace' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'dep_det_nombre',
'dep_det_descripcion',
'dep_det_enlace' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'dep_det_descripcion',
'id_depto_superior_fk',
'id_dep_fk',
'dep_det_nombre',
'dep_det_enlace' ),
'filterFields' => array( 'id_dep_fk' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'dep_det_nombre' => array( 'simple_grid_field3' ),
'dep_det_descripcion' => array( 'simple_grid_field4' ),
'dep_det_enlace' => array( 'simple_grid_field5',
'simple_grid_field7' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'grid_checkbox',
'grid_edit',
'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1',
'details_preview',
'details_preview1',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field7',
'simple_grid_field5' ),
'top' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'logo1' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field5' => 'grid' ),
'itemLocations' => array( 'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field' => array( 'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5' ),
'logo' => array( 'logo1' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field' ),
'grid_field_label' => array( 'simple_grid_field7' ),
'print_details' => array( 'print_details' ),
'details_preview' => array( 'details_preview',
'details_preview1' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1' ),
'userinfo_link' => array( 'userinfo_link' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'dep_det_nombre_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array( 'dep_det_descripcion_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'dep_det_enlace_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array( 'dep_det_enlace_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 2,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel',
'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'columns-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 2 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label' ),
array( 'cell' => 'cell_field' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label1',
'colspan' => 2 ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label2' ),
array( 'cell' => 'cell_field2' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 2 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_view',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field3' ),
'align' => 'left',
'field' => 'dep_det_nombre',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array(  ) ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field4' ),
'align' => 'left',
'useFullWidth' => true,
'field' => 'dep_det_descripcion',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field7' ),
'align' => 'left',
'field' => 'dep_det_enlace',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'dep_det_enlace',
'columnName' => 'field' ) ),
'deferredItems' => array( 'grid_checkbox_head' ),
'buildType' => 2,
'columnCount' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'dep_det_descripcion',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'dep_det_enlace',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'dep_det_nombre',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'id_dep_fk',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'id_depto_superior_fk',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'popup' => true ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_details',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field3' => array( 'field' => 'dep_det_nombre',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true,
'bold' => true ),
'simple_grid_field4' => array( 'field' => 'dep_det_descripcion',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'dep_det_enlace',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'logo1' => array( 'type' => 'logo' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field' ) ),
'filter_panel_field' => array( 'field' => 'id_dep_fk',
'type' => 'filter_panel_field',
'label' => array( 'field' => 'id_dep_fk',
'table' => 'dependencia_det_DIR',
'type' => 3 ) ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'dep_det_enlace',
'clickSort' => true ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'funcionario_SJ' => true,
'contractor_master_SJ' => true ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'funcionario_SJ',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'funcionario_SJ',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'contractor_master_SJ',
'items' => array(  ),
'popup' => false,
'hideEmptyPreview' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'contractor_master_SJ',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>