<?php
			$optionsArray = array( 'totals' => array( 'Numero_Reserva_RP' => array( 'totalsType' => '' ),
'Dependencia_Descripcion' => array( 'totalsType' => '' ),
'Necesidad' => array( 'totalsType' => '' ),
'Documento_Soporte' => array( 'totalsType' => '' ),
'Numero_Documento_Soporte' => array( 'totalsType' => '' ),
'No_Contrato_y_Contratista' => array( 'totalsType' => '' ),
'Proyecto' => array( 'totalsType' => '' ),
'Rubro_Presupuestal' => array( 'totalsType' => '' ),
'Valor_Reserva_Presupuestal' => array( 'totalsType' => '' ),
'Ejecucion_al_corte' => array( 'totalsType' => '' ),
'Liberaciones_RP' => array( 'totalsType' => '' ),
'Fecha_liberacion_RP' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Numero_Reserva_RP',
'Dependencia_Descripcion',
'Necesidad',
'Documento_Soporte',
'Numero_Documento_Soporte',
'No_Contrato_y_Contratista',
'Proyecto',
'Rubro_Presupuestal',
'Valor_Reserva_Presupuestal',
'Ejecucion_al_corte',
'Liberaciones_RP',
'Fecha_liberacion_RP' ),
'exportFields' => array( 'Numero_Reserva_RP',
'Dependencia_Descripcion',
'Necesidad',
'Documento_Soporte',
'Numero_Documento_Soporte',
'No_Contrato_y_Contratista',
'Proyecto',
'Rubro_Presupuestal',
'Valor_Reserva_Presupuestal',
'Ejecucion_al_corte',
'Liberaciones_RP',
'Fecha_liberacion_RP' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Numero_Reserva_RP' => array( 'export_field' ),
'Dependencia_Descripcion' => array( 'export_field1' ),
'Necesidad' => array( 'export_field2' ),
'Documento_Soporte' => array( 'export_field3' ),
'Numero_Documento_Soporte' => array( 'export_field4' ),
'No_Contrato_y_Contratista' => array( 'export_field5' ),
'Proyecto' => array( 'export_field6' ),
'Rubro_Presupuestal' => array( 'export_field7' ),
'Valor_Reserva_Presupuestal' => array( 'export_field8' ),
'Ejecucion_al_corte' => array( 'export_field9' ),
'Liberaciones_RP' => array( 'export_field10' ),
'Fecha_liberacion_RP' => array( 'export_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'Numero_Reserva_RP',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Dependencia_Descripcion',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Necesidad',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Documento_Soporte',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Numero_Documento_Soporte',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'No_Contrato_y_Contratista',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Proyecto',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'Rubro_Presupuestal',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'Valor_Reserva_Presupuestal',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'Ejecucion_al_corte',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'Liberaciones_RP',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'Fecha_liberacion_RP',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>