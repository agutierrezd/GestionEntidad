<?php
$tdata008_reserva = array();
$tdata008_reserva[".searchableFields"] = array();
$tdata008_reserva[".ShortName"] = "008_reserva";
$tdata008_reserva[".OwnerID"] = "";
$tdata008_reserva[".OriginalTable"] = "008_reserva";


$tdata008_reserva[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata008_reserva[".originalPagesByType"] = $tdata008_reserva[".pagesByType"];
$tdata008_reserva[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata008_reserva[".originalPages"] = $tdata008_reserva[".pages"];
$tdata008_reserva[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata008_reserva[".originalDefaultPages"] = $tdata008_reserva[".defaultPages"];

//	field labels
$fieldLabels008_reserva = array();
$fieldToolTips008_reserva = array();
$pageTitles008_reserva = array();
$placeHolders008_reserva = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels008_reserva["Spanish"] = array();
	$fieldToolTips008_reserva["Spanish"] = array();
	$placeHolders008_reserva["Spanish"] = array();
	$pageTitles008_reserva["Spanish"] = array();
	$fieldLabels008_reserva["Spanish"]["Numero_Reserva_RP"] = "Numero Reserva RP";
	$fieldToolTips008_reserva["Spanish"]["Numero_Reserva_RP"] = "";
	$placeHolders008_reserva["Spanish"]["Numero_Reserva_RP"] = "";
	$fieldLabels008_reserva["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTips008_reserva["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHolders008_reserva["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabels008_reserva["Spanish"]["Necesidad"] = "Necesidad";
	$fieldToolTips008_reserva["Spanish"]["Necesidad"] = "";
	$placeHolders008_reserva["Spanish"]["Necesidad"] = "";
	$fieldLabels008_reserva["Spanish"]["Documento_Soporte"] = "Documento Soporte";
	$fieldToolTips008_reserva["Spanish"]["Documento_Soporte"] = "";
	$placeHolders008_reserva["Spanish"]["Documento_Soporte"] = "";
	$fieldLabels008_reserva["Spanish"]["Numero_Documento_Soporte"] = "Numero Documento Soporte";
	$fieldToolTips008_reserva["Spanish"]["Numero_Documento_Soporte"] = "";
	$placeHolders008_reserva["Spanish"]["Numero_Documento_Soporte"] = "";
	$fieldLabels008_reserva["Spanish"]["No_Contrato_y_Contratista"] = "No Contrato Y Contratista";
	$fieldToolTips008_reserva["Spanish"]["No_Contrato_y_Contratista"] = "";
	$placeHolders008_reserva["Spanish"]["No_Contrato_y_Contratista"] = "";
	$fieldLabels008_reserva["Spanish"]["Proyecto"] = "Proyecto";
	$fieldToolTips008_reserva["Spanish"]["Proyecto"] = "";
	$placeHolders008_reserva["Spanish"]["Proyecto"] = "";
	$fieldLabels008_reserva["Spanish"]["Rubro_Presupuestal"] = "Rubro Presupuestal";
	$fieldToolTips008_reserva["Spanish"]["Rubro_Presupuestal"] = "";
	$placeHolders008_reserva["Spanish"]["Rubro_Presupuestal"] = "";
	$fieldLabels008_reserva["Spanish"]["Valor_Reserva_Presupuestal"] = "Valor Reserva Presupuestal";
	$fieldToolTips008_reserva["Spanish"]["Valor_Reserva_Presupuestal"] = "";
	$placeHolders008_reserva["Spanish"]["Valor_Reserva_Presupuestal"] = "";
	$fieldLabels008_reserva["Spanish"]["Ejecucion_al_corte"] = "Ejecucion Al Corte";
	$fieldToolTips008_reserva["Spanish"]["Ejecucion_al_corte"] = "";
	$placeHolders008_reserva["Spanish"]["Ejecucion_al_corte"] = "";
	$fieldLabels008_reserva["Spanish"]["Liberaciones_RP"] = "Liberaciones RP";
	$fieldToolTips008_reserva["Spanish"]["Liberaciones_RP"] = "";
	$placeHolders008_reserva["Spanish"]["Liberaciones_RP"] = "";
	$fieldLabels008_reserva["Spanish"]["Fecha_liberacion_RP"] = "Fecha Liberacion RP";
	$fieldToolTips008_reserva["Spanish"]["Fecha_liberacion_RP"] = "";
	$placeHolders008_reserva["Spanish"]["Fecha_liberacion_RP"] = "";
	if (count($fieldToolTips008_reserva["Spanish"]))
		$tdata008_reserva[".isUseToolTips"] = true;
}


	$tdata008_reserva[".NCSearch"] = true;



$tdata008_reserva[".shortTableName"] = "008_reserva";
$tdata008_reserva[".nSecOptions"] = 0;

$tdata008_reserva[".mainTableOwnerID"] = "";
$tdata008_reserva[".entityType"] = 0;
$tdata008_reserva[".connId"] = "sep2_at_localhost";


$tdata008_reserva[".strOriginalTableName"] = "008_reserva";

	



$tdata008_reserva[".showAddInPopup"] = false;

$tdata008_reserva[".showEditInPopup"] = false;

$tdata008_reserva[".showViewInPopup"] = false;

$tdata008_reserva[".listAjax"] = false;
//	temporary
//$tdata008_reserva[".listAjax"] = false;

	$tdata008_reserva[".audit"] = false;

	$tdata008_reserva[".locking"] = false;


$pages = $tdata008_reserva[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata008_reserva[".edit"] = true;
	$tdata008_reserva[".afterEditAction"] = 1;
	$tdata008_reserva[".closePopupAfterEdit"] = 1;
	$tdata008_reserva[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata008_reserva[".add"] = true;
$tdata008_reserva[".afterAddAction"] = 1;
$tdata008_reserva[".closePopupAfterAdd"] = 1;
$tdata008_reserva[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata008_reserva[".list"] = true;
}



$tdata008_reserva[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata008_reserva[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata008_reserva[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata008_reserva[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata008_reserva[".printFriendly"] = true;
}



$tdata008_reserva[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata008_reserva[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata008_reserva[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata008_reserva[".isUseAjaxSuggest"] = true;

$tdata008_reserva[".rowHighlite"] = true;





$tdata008_reserva[".ajaxCodeSnippetAdded"] = false;

$tdata008_reserva[".buttonsAdded"] = false;

$tdata008_reserva[".addPageEvents"] = false;

// use timepicker for search panel
$tdata008_reserva[".isUseTimeForSearch"] = false;


$tdata008_reserva[".badgeColor"] = "DAA520";


$tdata008_reserva[".allSearchFields"] = array();
$tdata008_reserva[".filterFields"] = array();
$tdata008_reserva[".requiredSearchFields"] = array();

$tdata008_reserva[".googleLikeFields"] = array();
$tdata008_reserva[".googleLikeFields"][] = "Numero_Reserva_RP";
$tdata008_reserva[".googleLikeFields"][] = "Dependencia_Descripcion";
$tdata008_reserva[".googleLikeFields"][] = "Necesidad";
$tdata008_reserva[".googleLikeFields"][] = "Documento_Soporte";
$tdata008_reserva[".googleLikeFields"][] = "Numero_Documento_Soporte";
$tdata008_reserva[".googleLikeFields"][] = "No_Contrato_y_Contratista";
$tdata008_reserva[".googleLikeFields"][] = "Proyecto";
$tdata008_reserva[".googleLikeFields"][] = "Rubro_Presupuestal";
$tdata008_reserva[".googleLikeFields"][] = "Valor_Reserva_Presupuestal";
$tdata008_reserva[".googleLikeFields"][] = "Ejecucion_al_corte";
$tdata008_reserva[".googleLikeFields"][] = "Liberaciones_RP";
$tdata008_reserva[".googleLikeFields"][] = "Fecha_liberacion_RP";



$tdata008_reserva[".tableType"] = "list";

$tdata008_reserva[".printerPageOrientation"] = 0;
$tdata008_reserva[".nPrinterPageScale"] = 100;

$tdata008_reserva[".nPrinterSplitRecords"] = 40;

$tdata008_reserva[".geocodingEnabled"] = false;




$tdata008_reserva[".isDisplayLoading"] = true;






$tdata008_reserva[".pageSize"] = 20;

$tdata008_reserva[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata008_reserva[".strOrderBy"] = $tstrOrderBy;

$tdata008_reserva[".orderindexes"] = array();


$tdata008_reserva[".sqlHead"] = "SELECT Numero_Reserva_RP,  	Dependencia_Descripcion,  	Necesidad,  	Documento_Soporte,  	Numero_Documento_Soporte,  	No_Contrato_y_Contratista,  	Proyecto,  	Rubro_Presupuestal,  	Valor_Reserva_Presupuestal,  	Ejecucion_al_corte,  	Liberaciones_RP,  	Fecha_liberacion_RP";
$tdata008_reserva[".sqlFrom"] = "FROM `008_reserva`";
$tdata008_reserva[".sqlWhereExpr"] = "";
$tdata008_reserva[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata008_reserva[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata008_reserva[".arrGroupsPerPage"] = $arrGPP;

$tdata008_reserva[".highlightSearchResults"] = true;

$tableKeys008_reserva = array();
$tableKeys008_reserva[] = "Numero_Reserva_RP";
$tdata008_reserva[".Keys"] = $tableKeys008_reserva;


$tdata008_reserva[".hideMobileList"] = array();




//	Numero_Reserva_RP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Numero_Reserva_RP";
	$fdata["GoodName"] = "Numero_Reserva_RP";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Numero_Reserva_RP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero_Reserva_RP";

		$fdata["sourceSingle"] = "Numero_Reserva_RP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero_Reserva_RP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Numero_Reserva_RP"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Numero_Reserva_RP";
//	Dependencia_Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Dependencia_Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia_Descripcion";

		$fdata["sourceSingle"] = "Dependencia_Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia_Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Dependencia_Descripcion"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Dependencia_Descripcion";
//	Necesidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Necesidad";
	$fdata["GoodName"] = "Necesidad";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Necesidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Necesidad";

		$fdata["sourceSingle"] = "Necesidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Necesidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Necesidad"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Necesidad";
//	Documento_Soporte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Documento_Soporte";
	$fdata["GoodName"] = "Documento_Soporte";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Documento_Soporte");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento_Soporte";

		$fdata["sourceSingle"] = "Documento_Soporte";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento_Soporte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Documento_Soporte"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Documento_Soporte";
//	Numero_Documento_Soporte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Numero_Documento_Soporte";
	$fdata["GoodName"] = "Numero_Documento_Soporte";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Numero_Documento_Soporte");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero_Documento_Soporte";

		$fdata["sourceSingle"] = "Numero_Documento_Soporte";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numero_Documento_Soporte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Numero_Documento_Soporte"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Numero_Documento_Soporte";
//	No_Contrato_y_Contratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "No_Contrato_y_Contratista";
	$fdata["GoodName"] = "No_Contrato_y_Contratista";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","No_Contrato_y_Contratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "No_Contrato_y_Contratista";

		$fdata["sourceSingle"] = "No_Contrato_y_Contratista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "No_Contrato_y_Contratista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["No_Contrato_y_Contratista"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "No_Contrato_y_Contratista";
//	Proyecto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Proyecto";
	$fdata["GoodName"] = "Proyecto";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Proyecto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Proyecto";

		$fdata["sourceSingle"] = "Proyecto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Proyecto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Proyecto"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Proyecto";
//	Rubro_Presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rubro_Presupuestal";
	$fdata["GoodName"] = "Rubro_Presupuestal";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Rubro_Presupuestal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Rubro_Presupuestal";

		$fdata["sourceSingle"] = "Rubro_Presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rubro_Presupuestal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Rubro_Presupuestal"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Rubro_Presupuestal";
//	Valor_Reserva_Presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Valor_Reserva_Presupuestal";
	$fdata["GoodName"] = "Valor_Reserva_Presupuestal";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Valor_Reserva_Presupuestal");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor_Reserva_Presupuestal";

		$fdata["sourceSingle"] = "Valor_Reserva_Presupuestal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_Reserva_Presupuestal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Valor_Reserva_Presupuestal"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Valor_Reserva_Presupuestal";
//	Ejecucion_al_corte
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Ejecucion_al_corte";
	$fdata["GoodName"] = "Ejecucion_al_corte";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Ejecucion_al_corte");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Ejecucion_al_corte";

		$fdata["sourceSingle"] = "Ejecucion_al_corte";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejecucion_al_corte";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Ejecucion_al_corte"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Ejecucion_al_corte";
//	Liberaciones_RP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Liberaciones_RP";
	$fdata["GoodName"] = "Liberaciones_RP";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Liberaciones_RP");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Liberaciones_RP";

		$fdata["sourceSingle"] = "Liberaciones_RP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Liberaciones_RP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Liberaciones_RP"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Liberaciones_RP";
//	Fecha_liberacion_RP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Fecha_liberacion_RP";
	$fdata["GoodName"] = "Fecha_liberacion_RP";
	$fdata["ownerTable"] = "008_reserva";
	$fdata["Label"] = GetFieldLabel("008_reserva","Fecha_liberacion_RP");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha_liberacion_RP";

		$fdata["sourceSingle"] = "Fecha_liberacion_RP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha_liberacion_RP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdata008_reserva["Fecha_liberacion_RP"] = $fdata;
		$tdata008_reserva[".searchableFields"][] = "Fecha_liberacion_RP";


$tables_data["008_reserva"]=&$tdata008_reserva;
$field_labels["008_reserva"] = &$fieldLabels008_reserva;
$fieldToolTips["008_reserva"] = &$fieldToolTips008_reserva;
$placeHolders["008_reserva"] = &$placeHolders008_reserva;
$page_titles["008_reserva"] = &$pageTitles008_reserva;


changeTextControlsToDate( "008_reserva" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["008_reserva"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["008_reserva"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_008_reserva()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Numero_Reserva_RP,  	Dependencia_Descripcion,  	Necesidad,  	Documento_Soporte,  	Numero_Documento_Soporte,  	No_Contrato_y_Contratista,  	Proyecto,  	Rubro_Presupuestal,  	Valor_Reserva_Presupuestal,  	Ejecucion_al_corte,  	Liberaciones_RP,  	Fecha_liberacion_RP";
$proto0["m_strFrom"] = "FROM `008_reserva`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_Reserva_RP",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto6["m_sql"] = "Numero_Reserva_RP";
$proto6["m_srcTableName"] = "008_reserva";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia_Descripcion",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto8["m_sql"] = "Dependencia_Descripcion";
$proto8["m_srcTableName"] = "008_reserva";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Necesidad",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto10["m_sql"] = "Necesidad";
$proto10["m_srcTableName"] = "008_reserva";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento_Soporte",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto12["m_sql"] = "Documento_Soporte";
$proto12["m_srcTableName"] = "008_reserva";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_Documento_Soporte",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto14["m_sql"] = "Numero_Documento_Soporte";
$proto14["m_srcTableName"] = "008_reserva";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "No_Contrato_y_Contratista",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto16["m_sql"] = "No_Contrato_y_Contratista";
$proto16["m_srcTableName"] = "008_reserva";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Proyecto",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto18["m_sql"] = "Proyecto";
$proto18["m_srcTableName"] = "008_reserva";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro_Presupuestal",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto20["m_sql"] = "Rubro_Presupuestal";
$proto20["m_srcTableName"] = "008_reserva";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Reserva_Presupuestal",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto22["m_sql"] = "Valor_Reserva_Presupuestal";
$proto22["m_srcTableName"] = "008_reserva";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejecucion_al_corte",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto24["m_sql"] = "Ejecucion_al_corte";
$proto24["m_srcTableName"] = "008_reserva";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Liberaciones_RP",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto26["m_sql"] = "Liberaciones_RP";
$proto26["m_srcTableName"] = "008_reserva";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_liberacion_RP",
	"m_strTable" => "008_reserva",
	"m_srcTableName" => "008_reserva"
));

$proto28["m_sql"] = "Fecha_liberacion_RP";
$proto28["m_srcTableName"] = "008_reserva";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "008_reserva";
$proto31["m_srcTableName"] = "008_reserva";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Numero_Reserva_RP";
$proto31["m_columns"][] = "Dependencia_Descripcion";
$proto31["m_columns"][] = "Necesidad";
$proto31["m_columns"][] = "Documento_Soporte";
$proto31["m_columns"][] = "Numero_Documento_Soporte";
$proto31["m_columns"][] = "No_Contrato_y_Contratista";
$proto31["m_columns"][] = "Proyecto";
$proto31["m_columns"][] = "Rubro_Presupuestal";
$proto31["m_columns"][] = "Valor_Reserva_Presupuestal";
$proto31["m_columns"][] = "Ejecucion_al_corte";
$proto31["m_columns"][] = "Liberaciones_RP";
$proto31["m_columns"][] = "Fecha_liberacion_RP";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`008_reserva`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "008_reserva";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="008_reserva";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_008_reserva = createSqlQuery_008_reserva();


	
								;

												

$tdata008_reserva[".sqlquery"] = $queryData_008_reserva;



$tdata008_reserva[".hasEvents"] = false;

?>