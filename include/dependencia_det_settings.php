<?php
$tdatadependencia_det = array();
$tdatadependencia_det[".searchableFields"] = array();
$tdatadependencia_det[".ShortName"] = "dependencia_det";
$tdatadependencia_det[".OwnerID"] = "";
$tdatadependencia_det[".OriginalTable"] = "dependencia_det";


$tdatadependencia_det[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_det[".originalPagesByType"] = $tdatadependencia_det[".pagesByType"];
$tdatadependencia_det[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_det[".originalPages"] = $tdatadependencia_det[".pages"];
$tdatadependencia_det[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_det[".originalDefaultPages"] = $tdatadependencia_det[".defaultPages"];

//	field labels
$fieldLabelsdependencia_det = array();
$fieldToolTipsdependencia_det = array();
$pageTitlesdependencia_det = array();
$placeHoldersdependencia_det = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_det["Spanish"] = array();
	$fieldToolTipsdependencia_det["Spanish"] = array();
	$placeHoldersdependencia_det["Spanish"] = array();
	$pageTitlesdependencia_det["Spanish"] = array();
	$fieldLabelsdependencia_det["Spanish"]["dep_det_id"] = "Dep Det Id";
	$fieldToolTipsdependencia_det["Spanish"]["dep_det_id"] = "";
	$placeHoldersdependencia_det["Spanish"]["dep_det_id"] = "";
	$fieldLabelsdependencia_det["Spanish"]["id_dep_fk"] = "Dependencia";
	$fieldToolTipsdependencia_det["Spanish"]["id_dep_fk"] = "";
	$placeHoldersdependencia_det["Spanish"]["id_dep_fk"] = "";
	$fieldLabelsdependencia_det["Spanish"]["id_depto_superior_fk"] = "Dependencia superior";
	$fieldToolTipsdependencia_det["Spanish"]["id_depto_superior_fk"] = "";
	$placeHoldersdependencia_det["Spanish"]["id_depto_superior_fk"] = "";
	$fieldLabelsdependencia_det["Spanish"]["dep_det_nombre"] = "Nombre de Producto | Proyecto";
	$fieldToolTipsdependencia_det["Spanish"]["dep_det_nombre"] = "";
	$placeHoldersdependencia_det["Spanish"]["dep_det_nombre"] = "";
	$fieldLabelsdependencia_det["Spanish"]["dep_det_descripcion"] = "Descripción";
	$fieldToolTipsdependencia_det["Spanish"]["dep_det_descripcion"] = "";
	$placeHoldersdependencia_det["Spanish"]["dep_det_descripcion"] = "";
	$fieldLabelsdependencia_det["Spanish"]["dep_det_enlace"] = "Enlace a Producto | Proyecto";
	$fieldToolTipsdependencia_det["Spanish"]["dep_det_enlace"] = "";
	$placeHoldersdependencia_det["Spanish"]["dep_det_enlace"] = "";
	if (count($fieldToolTipsdependencia_det["Spanish"]))
		$tdatadependencia_det[".isUseToolTips"] = true;
}


	$tdatadependencia_det[".NCSearch"] = true;



$tdatadependencia_det[".shortTableName"] = "dependencia_det";
$tdatadependencia_det[".nSecOptions"] = 0;

$tdatadependencia_det[".mainTableOwnerID"] = "";
$tdatadependencia_det[".entityType"] = 0;
$tdatadependencia_det[".connId"] = "edl_at_localhost";


$tdatadependencia_det[".strOriginalTableName"] = "dependencia_det";

	



$tdatadependencia_det[".showAddInPopup"] = false;

$tdatadependencia_det[".showEditInPopup"] = false;

$tdatadependencia_det[".showViewInPopup"] = false;

$tdatadependencia_det[".listAjax"] = false;
//	temporary
//$tdatadependencia_det[".listAjax"] = false;

	$tdatadependencia_det[".audit"] = false;

	$tdatadependencia_det[".locking"] = false;


$pages = $tdatadependencia_det[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_det[".edit"] = true;
	$tdatadependencia_det[".afterEditAction"] = 1;
	$tdatadependencia_det[".closePopupAfterEdit"] = 1;
	$tdatadependencia_det[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_det[".add"] = true;
$tdatadependencia_det[".afterAddAction"] = 1;
$tdatadependencia_det[".closePopupAfterAdd"] = 1;
$tdatadependencia_det[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_det[".list"] = true;
}



$tdatadependencia_det[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_det[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_det[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_det[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_det[".printFriendly"] = true;
}



$tdatadependencia_det[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_det[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_det[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_det[".isUseAjaxSuggest"] = true;

$tdatadependencia_det[".rowHighlite"] = true;





$tdatadependencia_det[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_det[".buttonsAdded"] = false;

$tdatadependencia_det[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_det[".isUseTimeForSearch"] = false;


$tdatadependencia_det[".badgeColor"] = "778899";


$tdatadependencia_det[".allSearchFields"] = array();
$tdatadependencia_det[".filterFields"] = array();
$tdatadependencia_det[".requiredSearchFields"] = array();

$tdatadependencia_det[".googleLikeFields"] = array();
$tdatadependencia_det[".googleLikeFields"][] = "dep_det_id";
$tdatadependencia_det[".googleLikeFields"][] = "id_dep_fk";
$tdatadependencia_det[".googleLikeFields"][] = "id_depto_superior_fk";
$tdatadependencia_det[".googleLikeFields"][] = "dep_det_nombre";
$tdatadependencia_det[".googleLikeFields"][] = "dep_det_descripcion";
$tdatadependencia_det[".googleLikeFields"][] = "dep_det_enlace";



$tdatadependencia_det[".tableType"] = "list";

$tdatadependencia_det[".printerPageOrientation"] = 0;
$tdatadependencia_det[".nPrinterPageScale"] = 100;

$tdatadependencia_det[".nPrinterSplitRecords"] = 40;

$tdatadependencia_det[".geocodingEnabled"] = false;










$tdatadependencia_det[".pageSize"] = 20;

$tdatadependencia_det[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_det[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_det[".orderindexes"] = array();


$tdatadependencia_det[".sqlHead"] = "SELECT dep_det_id,  	id_dep_fk,  	id_depto_superior_fk,  	dep_det_nombre,  	dep_det_descripcion,  	dep_det_enlace";
$tdatadependencia_det[".sqlFrom"] = "FROM dependencia_det";
$tdatadependencia_det[".sqlWhereExpr"] = "";
$tdatadependencia_det[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_det[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_det[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_det[".highlightSearchResults"] = true;

$tableKeysdependencia_det = array();
$tableKeysdependencia_det[] = "dep_det_id";
$tdatadependencia_det[".Keys"] = $tableKeysdependencia_det;


$tdatadependencia_det[".hideMobileList"] = array();




//	dep_det_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dep_det_id";
	$fdata["GoodName"] = "dep_det_id";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","dep_det_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "dep_det_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadependencia_det["dep_det_id"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "dep_det_id";
//	id_dep_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_dep_fk";
	$fdata["GoodName"] = "id_dep_fk";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","id_dep_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_dep_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_dep_fk";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"id_depto_superior_fk", 'lookupF'=>"id_depto_superior");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatadependencia_det["id_dep_fk"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "id_dep_fk";
//	id_depto_superior_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_depto_superior_fk";
	$fdata["GoodName"] = "id_depto_superior_fk";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","id_depto_superior_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_depto_superior_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_depto_superior_fk";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadependencia_det["id_depto_superior_fk"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "id_depto_superior_fk";
//	dep_det_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dep_det_nombre";
	$fdata["GoodName"] = "dep_det_nombre";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","dep_det_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_det_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_nombre";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadependencia_det["dep_det_nombre"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "dep_det_nombre";
//	dep_det_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dep_det_descripcion";
	$fdata["GoodName"] = "dep_det_descripcion";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","dep_det_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "dep_det_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadependencia_det["dep_det_descripcion"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "dep_det_descripcion";
//	dep_det_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dep_det_enlace";
	$fdata["GoodName"] = "dep_det_enlace";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det","dep_det_enlace");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_det_enlace";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_enlace";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "url";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatadependencia_det["dep_det_enlace"] = $fdata;
		$tdatadependencia_det[".searchableFields"][] = "dep_det_enlace";


$tables_data["dependencia_det"]=&$tdatadependencia_det;
$field_labels["dependencia_det"] = &$fieldLabelsdependencia_det;
$fieldToolTips["dependencia_det"] = &$fieldToolTipsdependencia_det;
$placeHolders["dependencia_det"] = &$placeHoldersdependencia_det;
$page_titles["dependencia_det"] = &$pageTitlesdependencia_det;


changeTextControlsToDate( "dependencia_det" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_det"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_det"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_det()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "dep_det_id,  	id_dep_fk,  	id_depto_superior_fk,  	dep_det_nombre,  	dep_det_descripcion,  	dep_det_enlace";
$proto0["m_strFrom"] = "FROM dependencia_det";
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
	"m_strName" => "dep_det_id",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto6["m_sql"] = "dep_det_id";
$proto6["m_srcTableName"] = "dependencia_det";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_dep_fk",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto8["m_sql"] = "id_dep_fk";
$proto8["m_srcTableName"] = "dependencia_det";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior_fk",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto10["m_sql"] = "id_depto_superior_fk";
$proto10["m_srcTableName"] = "dependencia_det";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_nombre",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto12["m_sql"] = "dep_det_nombre";
$proto12["m_srcTableName"] = "dependencia_det";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_descripcion",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto14["m_sql"] = "dep_det_descripcion";
$proto14["m_srcTableName"] = "dependencia_det";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_enlace",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det"
));

$proto16["m_sql"] = "dep_det_enlace";
$proto16["m_srcTableName"] = "dependencia_det";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dependencia_det";
$proto19["m_srcTableName"] = "dependencia_det";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "dep_det_id";
$proto19["m_columns"][] = "id_dep_fk";
$proto19["m_columns"][] = "id_depto_superior_fk";
$proto19["m_columns"][] = "dep_det_nombre";
$proto19["m_columns"][] = "dep_det_descripcion";
$proto19["m_columns"][] = "dep_det_enlace";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dependencia_det";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dependencia_det";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dependencia_det";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_det = createSqlQuery_dependencia_det();


	
								;

						

$tdatadependencia_det[".sqlquery"] = $queryData_dependencia_det;



$tdatadependencia_det[".hasEvents"] = false;

?>