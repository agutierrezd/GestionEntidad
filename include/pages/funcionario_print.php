<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'global_users' => array( 'displayPreview' => 1,
'previewPageId' => 'print' ) ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'cedula' => array( 'totalsType' => '' ),
'nombre' => array( 'totalsType' => '' ),
'apellidos' => array( 'totalsType' => '' ),
'lugarExpedicion' => array( 'totalsType' => '' ),
'fechaIngreso' => array( 'totalsType' => '' ),
'ubicacionFisica' => array( 'totalsType' => '' ),
'idCargo' => array( 'totalsType' => '' ),
'idDependencia' => array( 'totalsType' => '' ),
'sueldo' => array( 'totalsType' => '' ),
'idEvaluador' => array( 'totalsType' => '' ),
'idContrato' => array( 'totalsType' => '' ),
'idNombramiento' => array( 'totalsType' => '' ),
'estado_funcionario' => array( 'totalsType' => '' ),
'signpad' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id',
'idEvaluador',
'cedula',
'lugarExpedicion',
'fechaIngreso',
'nombre',
'ubicacionFisica',
'idCargo',
'idDependencia',
'idNombramiento',
'estado_funcionario',
'apellidos',
'sueldo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'simple_grid_field',
'simple_grid_field5' ),
'idEvaluador' => array( 'simple_grid_field1',
'simple_grid_field13' ),
'cedula' => array( 'simple_grid_field3',
'simple_grid_field15' ),
'lugarExpedicion' => array( 'simple_grid_field4',
'simple_grid_field16' ),
'fechaIngreso' => array( 'simple_grid_field6',
'simple_grid_field17' ),
'nombre' => array( 'simple_grid_field7',
'simple_grid_field18' ),
'ubicacionFisica' => array( 'simple_grid_field8',
'simple_grid_field19' ),
'idCargo' => array( 'simple_grid_field9',
'simple_grid_field20' ),
'idDependencia' => array( 'simple_grid_field10',
'simple_grid_field21' ),
'idNombramiento' => array( 'simple_grid_field12',
'simple_grid_field22' ),
'estado_funcionario' => array( 'simple_grid_field14',
'simple_grid_field23' ),
'apellidos' => array( 'simple_grid_field2',
'simple_grid_field24' ),
'sueldo' => array( 'simple_grid_field11',
'simple_grid_field25' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field5',
'simple_grid_field',
'simple_grid_field13',
'simple_grid_field1',
'simple_grid_field15',
'simple_grid_field3',
'simple_grid_field16',
'simple_grid_field4',
'simple_grid_field17',
'simple_grid_field6',
'simple_grid_field18',
'simple_grid_field7',
'simple_grid_field19',
'simple_grid_field8',
'simple_grid_field20',
'simple_grid_field9',
'simple_grid_field21',
'simple_grid_field10',
'simple_grid_field22',
'simple_grid_field12',
'simple_grid_field23',
'simple_grid_field14',
'simple_grid_field24',
'simple_grid_field2',
'simple_grid_field25',
'simple_grid_field11',
'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pages' => 'above-grid',
'simple_grid_field5' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field11' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field12',
'simple_grid_field14',
'simple_grid_field2',
'simple_grid_field11' ),
'grid_field_label' => array( 'simple_grid_field5',
'simple_grid_field13',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'idEvaluador_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'cedula_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'lugarExpedicion_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'fechaIngreso_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'nombre_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'ubicacionFisica_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'idCargo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'idDependencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'idNombramiento_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'estado_funcionario_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'apellidos_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'sueldo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'id_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'idEvaluador_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'cedula_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'lugarExpedicion_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'fechaIngreso_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'nombre_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'ubicacionFisica_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'idCargo_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'idDependencia_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'idNombramiento_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'estado_funcionario_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'apellidos_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'sueldo_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 13,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 13 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'idEvaluador',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'idEvaluador',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'cedula',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'cedula',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'lugarExpedicion',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'lugarExpedicion',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'fechaIngreso',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'fechaIngreso',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'nombre',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'nombre',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'ubicacionFisica',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'ubicacionFisica',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'idCargo',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'idCargo',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'idDependencia',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'idDependencia',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'idNombramiento',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'idNombramiento',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'estado_funcionario',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'estado_funcionario',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'apellidos',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'apellidos',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'sueldo',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'sueldo',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'field' => 'id',
'type' => 'grid_field' ),
'simple_grid_field5' => array( 'type' => 'grid_field_label',
'field' => 'id' ),
'simple_grid_field1' => array( 'field' => 'idEvaluador',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'idEvaluador' ),
'simple_grid_field3' => array( 'field' => 'cedula',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'cedula' ),
'simple_grid_field4' => array( 'field' => 'lugarExpedicion',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'lugarExpedicion' ),
'simple_grid_field6' => array( 'field' => 'fechaIngreso',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'fechaIngreso' ),
'simple_grid_field7' => array( 'field' => 'nombre',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'nombre' ),
'simple_grid_field8' => array( 'field' => 'ubicacionFisica',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'ubicacionFisica' ),
'simple_grid_field9' => array( 'field' => 'idCargo',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'idCargo' ),
'simple_grid_field10' => array( 'field' => 'idDependencia',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'idDependencia' ),
'simple_grid_field12' => array( 'field' => 'idNombramiento',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'idNombramiento' ),
'simple_grid_field14' => array( 'field' => 'estado_funcionario',
'type' => 'grid_field' ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'estado_funcionario' ),
'simple_grid_field2' => array( 'field' => 'apellidos',
'type' => 'grid_field' ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 'apellidos' ),
'simple_grid_field11' => array( 'field' => 'sueldo',
'type' => 'grid_field' ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'sueldo' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'global_users',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>