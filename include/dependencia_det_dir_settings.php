<?php
$tdatadependencia_det_dir = array();
$tdatadependencia_det_dir[".searchableFields"] = array();
$tdatadependencia_det_dir[".ShortName"] = "dependencia_det_dir";
$tdatadependencia_det_dir[".OwnerID"] = "id_depto_superior_fk";
$tdatadependencia_det_dir[".OriginalTable"] = "dependencia_det";


$tdatadependencia_det_dir[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_det_dir[".originalPagesByType"] = $tdatadependencia_det_dir[".pagesByType"];
$tdatadependencia_det_dir[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_det_dir[".originalPages"] = $tdatadependencia_det_dir[".pages"];
$tdatadependencia_det_dir[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_det_dir[".originalDefaultPages"] = $tdatadependencia_det_dir[".defaultPages"];

//	field labels
$fieldLabelsdependencia_det_dir = array();
$fieldToolTipsdependencia_det_dir = array();
$pageTitlesdependencia_det_dir = array();
$placeHoldersdependencia_det_dir = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_det_dir["Spanish"] = array();
	$fieldToolTipsdependencia_det_dir["Spanish"] = array();
	$placeHoldersdependencia_det_dir["Spanish"] = array();
	$pageTitlesdependencia_det_dir["Spanish"] = array();
	$fieldLabelsdependencia_det_dir["Spanish"]["dep_det_id"] = "Dep Det Id";
	$fieldToolTipsdependencia_det_dir["Spanish"]["dep_det_id"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["dep_det_id"] = "";
	$fieldLabelsdependencia_det_dir["Spanish"]["id_dep_fk"] = "Grupos Internos de Trabajo";
	$fieldToolTipsdependencia_det_dir["Spanish"]["id_dep_fk"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["id_dep_fk"] = "";
	$fieldLabelsdependencia_det_dir["Spanish"]["id_depto_superior_fk"] = "Dependencia superior";
	$fieldToolTipsdependencia_det_dir["Spanish"]["id_depto_superior_fk"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["id_depto_superior_fk"] = "";
	$fieldLabelsdependencia_det_dir["Spanish"]["dep_det_nombre"] = "Nombre de Producto | Proyecto";
	$fieldToolTipsdependencia_det_dir["Spanish"]["dep_det_nombre"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["dep_det_nombre"] = "";
	$fieldLabelsdependencia_det_dir["Spanish"]["dep_det_descripcion"] = "Descripción";
	$fieldToolTipsdependencia_det_dir["Spanish"]["dep_det_descripcion"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["dep_det_descripcion"] = "";
	$fieldLabelsdependencia_det_dir["Spanish"]["dep_det_enlace"] = "Enlace a Producto | Proyecto";
	$fieldToolTipsdependencia_det_dir["Spanish"]["dep_det_enlace"] = "";
	$placeHoldersdependencia_det_dir["Spanish"]["dep_det_enlace"] = "";
	if (count($fieldToolTipsdependencia_det_dir["Spanish"]))
		$tdatadependencia_det_dir[".isUseToolTips"] = true;
}


	$tdatadependencia_det_dir[".NCSearch"] = true;



$tdatadependencia_det_dir[".shortTableName"] = "dependencia_det_dir";
$tdatadependencia_det_dir[".nSecOptions"] = 2;

$tdatadependencia_det_dir[".mainTableOwnerID"] = "id_depto_superior_fk";
$tdatadependencia_det_dir[".entityType"] = 1;
$tdatadependencia_det_dir[".connId"] = "edl_at_localhost";


$tdatadependencia_det_dir[".strOriginalTableName"] = "dependencia_det";

	



$tdatadependencia_det_dir[".showAddInPopup"] = false;

$tdatadependencia_det_dir[".showEditInPopup"] = false;

$tdatadependencia_det_dir[".showViewInPopup"] = false;

$tdatadependencia_det_dir[".listAjax"] = false;
//	temporary
//$tdatadependencia_det_dir[".listAjax"] = false;

	$tdatadependencia_det_dir[".audit"] = false;

	$tdatadependencia_det_dir[".locking"] = false;


$pages = $tdatadependencia_det_dir[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_det_dir[".edit"] = true;
	$tdatadependencia_det_dir[".afterEditAction"] = 1;
	$tdatadependencia_det_dir[".closePopupAfterEdit"] = 1;
	$tdatadependencia_det_dir[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_det_dir[".add"] = true;
$tdatadependencia_det_dir[".afterAddAction"] = 1;
$tdatadependencia_det_dir[".closePopupAfterAdd"] = 1;
$tdatadependencia_det_dir[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_det_dir[".list"] = true;
}



$tdatadependencia_det_dir[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_det_dir[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_det_dir[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_det_dir[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_det_dir[".printFriendly"] = true;
}



$tdatadependencia_det_dir[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_det_dir[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_det_dir[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_det_dir[".isUseAjaxSuggest"] = true;

$tdatadependencia_det_dir[".rowHighlite"] = true;





$tdatadependencia_det_dir[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_det_dir[".buttonsAdded"] = false;

$tdatadependencia_det_dir[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_det_dir[".isUseTimeForSearch"] = false;


$tdatadependencia_det_dir[".badgeColor"] = "4169E1";


$tdatadependencia_det_dir[".allSearchFields"] = array();
$tdatadependencia_det_dir[".filterFields"] = array();
$tdatadependencia_det_dir[".requiredSearchFields"] = array();

$tdatadependencia_det_dir[".googleLikeFields"] = array();
$tdatadependencia_det_dir[".googleLikeFields"][] = "dep_det_id";
$tdatadependencia_det_dir[".googleLikeFields"][] = "id_dep_fk";
$tdatadependencia_det_dir[".googleLikeFields"][] = "id_depto_superior_fk";
$tdatadependencia_det_dir[".googleLikeFields"][] = "dep_det_nombre";
$tdatadependencia_det_dir[".googleLikeFields"][] = "dep_det_descripcion";
$tdatadependencia_det_dir[".googleLikeFields"][] = "dep_det_enlace";



$tdatadependencia_det_dir[".tableType"] = "list";

$tdatadependencia_det_dir[".printerPageOrientation"] = 0;
$tdatadependencia_det_dir[".nPrinterPageScale"] = 100;

$tdatadependencia_det_dir[".nPrinterSplitRecords"] = 40;

$tdatadependencia_det_dir[".geocodingEnabled"] = false;







$tdatadependencia_det_dir[".noRecordsFirstPage"] = true;



$tdatadependencia_det_dir[".pageSize"] = 20;

$tdatadependencia_det_dir[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_det_dir[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_det_dir[".orderindexes"] = array();


$tdatadependencia_det_dir[".sqlHead"] = "SELECT dep_det_id,  	id_dep_fk,  	id_depto_superior_fk,  	dep_det_nombre,  	dep_det_descripcion,  	dep_det_enlace";
$tdatadependencia_det_dir[".sqlFrom"] = "FROM dependencia_det";
$tdatadependencia_det_dir[".sqlWhereExpr"] = "";
$tdatadependencia_det_dir[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_det_dir[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_det_dir[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_det_dir[".highlightSearchResults"] = true;

$tableKeysdependencia_det_dir = array();
$tableKeysdependencia_det_dir[] = "dep_det_id";
$tdatadependencia_det_dir[".Keys"] = $tableKeysdependencia_det_dir;


$tdatadependencia_det_dir[".hideMobileList"] = array();




//	dep_det_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dep_det_id";
	$fdata["GoodName"] = "dep_det_id";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","dep_det_id");
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


	$tdatadependencia_det_dir["dep_det_id"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "dep_det_id";
//	id_dep_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_dep_fk";
	$fdata["GoodName"] = "id_dep_fk";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","id_dep_fk");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "dep_det_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadependencia_det_dir["id_dep_fk"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "id_dep_fk";
//	id_depto_superior_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_depto_superior_fk";
	$fdata["GoodName"] = "id_depto_superior_fk";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","id_depto_superior_fk");
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


	$tdatadependencia_det_dir["id_depto_superior_fk"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "id_depto_superior_fk";
//	dep_det_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dep_det_nombre";
	$fdata["GoodName"] = "dep_det_nombre";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","dep_det_nombre");
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


	$tdatadependencia_det_dir["dep_det_nombre"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "dep_det_nombre";
//	dep_det_descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dep_det_descripcion";
	$fdata["GoodName"] = "dep_det_descripcion";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","dep_det_descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "dep_det_descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatadependencia_det_dir["dep_det_descripcion"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "dep_det_descripcion";
//	dep_det_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dep_det_enlace";
	$fdata["GoodName"] = "dep_det_enlace";
	$fdata["ownerTable"] = "dependencia_det";
	$fdata["Label"] = GetFieldLabel("dependencia_det_DIR","dep_det_enlace");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dep_det_enlace";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dep_det_enlace";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
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
		$fdata["filterTotalFields"] = "dep_det_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadependencia_det_dir["dep_det_enlace"] = $fdata;
		$tdatadependencia_det_dir[".searchableFields"][] = "dep_det_enlace";


$tables_data["dependencia_det_DIR"]=&$tdatadependencia_det_dir;
$field_labels["dependencia_det_DIR"] = &$fieldLabelsdependencia_det_dir;
$fieldToolTips["dependencia_det_DIR"] = &$fieldToolTipsdependencia_det_dir;
$placeHolders["dependencia_det_DIR"] = &$placeHoldersdependencia_det_dir;
$page_titles["dependencia_det_DIR"] = &$pageTitlesdependencia_det_dir;


changeTextControlsToDate( "dependencia_det_DIR" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_det_DIR"] = array();
//	funcionario_SJ
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="funcionario_SJ";
		$detailsParam["dOriginalTable"] = "funcionario";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "funcionario_sj";
	$detailsParam["dCaptionTable"] = GetTableCaption("funcionario_SJ");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dependencia_det_DIR"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dependencia_det_DIR"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dependencia_det_DIR"][$dIndex]["masterKeys"][]="id_dep_fk";

				$detailsTablesData["dependencia_det_DIR"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dependencia_det_DIR"][$dIndex]["detailKeys"][]="idDependencia";
//	contractor_master_SJ
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contractor_master_SJ";
		$detailsParam["dOriginalTable"] = "contractor_master";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contractor_master_sj";
	$detailsParam["dCaptionTable"] = GetTableCaption("contractor_master_SJ");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dependencia_det_DIR"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dependencia_det_DIR"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dependencia_det_DIR"][$dIndex]["masterKeys"][]="id_dep_fk";

				$detailsTablesData["dependencia_det_DIR"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dependencia_det_DIR"][$dIndex]["detailKeys"][]="contractor_dependencia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_det_DIR"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_det_dir()
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
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto6["m_sql"] = "dep_det_id";
$proto6["m_srcTableName"] = "dependencia_det_DIR";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_dep_fk",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto8["m_sql"] = "id_dep_fk";
$proto8["m_srcTableName"] = "dependencia_det_DIR";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior_fk",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto10["m_sql"] = "id_depto_superior_fk";
$proto10["m_srcTableName"] = "dependencia_det_DIR";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_nombre",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto12["m_sql"] = "dep_det_nombre";
$proto12["m_srcTableName"] = "dependencia_det_DIR";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_descripcion",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto14["m_sql"] = "dep_det_descripcion";
$proto14["m_srcTableName"] = "dependencia_det_DIR";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dep_det_enlace",
	"m_strTable" => "dependencia_det",
	"m_srcTableName" => "dependencia_det_DIR"
));

$proto16["m_sql"] = "dep_det_enlace";
$proto16["m_srcTableName"] = "dependencia_det_DIR";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dependencia_det";
$proto19["m_srcTableName"] = "dependencia_det_DIR";
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
$proto18["m_srcTableName"] = "dependencia_det_DIR";
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
$proto0["m_srcTableName"]="dependencia_det_DIR";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_det_dir = createSqlQuery_dependencia_det_dir();


	
								;

						

$tdatadependencia_det_dir[".sqlquery"] = $queryData_dependencia_det_dir;



$tdatadependencia_det_dir[".hasEvents"] = false;

?>