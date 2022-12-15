<?php
$tdataq_graph_002 = array();
$tdataq_graph_002[".searchableFields"] = array();
$tdataq_graph_002[".ShortName"] = "q_graph_002";
$tdataq_graph_002[".OwnerID"] = "";
$tdataq_graph_002[".OriginalTable"] = "q_graph_002";


$tdataq_graph_002[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_graph_002[".originalPagesByType"] = $tdataq_graph_002[".pagesByType"];
$tdataq_graph_002[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_graph_002[".originalPages"] = $tdataq_graph_002[".pages"];
$tdataq_graph_002[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_graph_002[".originalDefaultPages"] = $tdataq_graph_002[".defaultPages"];

//	field labels
$fieldLabelsq_graph_002 = array();
$fieldToolTipsq_graph_002 = array();
$pageTitlesq_graph_002 = array();
$placeHoldersq_graph_002 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_graph_002["Spanish"] = array();
	$fieldToolTipsq_graph_002["Spanish"] = array();
	$placeHoldersq_graph_002["Spanish"] = array();
	$pageTitlesq_graph_002["Spanish"] = array();
	$fieldLabelsq_graph_002["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_graph_002["Spanish"]["UEJ"] = "";
	$placeHoldersq_graph_002["Spanish"]["UEJ"] = "";
	$fieldLabelsq_graph_002["Spanish"]["sector_name"] = "Sector Name";
	$fieldToolTipsq_graph_002["Spanish"]["sector_name"] = "";
	$placeHoldersq_graph_002["Spanish"]["sector_name"] = "";
	$fieldLabelsq_graph_002["Spanish"]["short_name"] = "Short Name";
	$fieldToolTipsq_graph_002["Spanish"]["short_name"] = "";
	$placeHoldersq_graph_002["Spanish"]["short_name"] = "";
	$fieldLabelsq_graph_002["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_graph_002["Spanish"]["TIPO"] = "";
	$placeHoldersq_graph_002["Spanish"]["TIPO"] = "";
	$fieldLabelsq_graph_002["Spanish"]["uej_name"] = "Uej Name";
	$fieldToolTipsq_graph_002["Spanish"]["uej_name"] = "";
	$placeHoldersq_graph_002["Spanish"]["uej_name"] = "";
	$fieldLabelsq_graph_002["Spanish"]["TOTVIGENTE"] = "TOTVIGENTE";
	$fieldToolTipsq_graph_002["Spanish"]["TOTVIGENTE"] = "";
	$placeHoldersq_graph_002["Spanish"]["TOTVIGENTE"] = "";
	$fieldLabelsq_graph_002["Spanish"]["TOTCOMPROMISO"] = "TOTCOMPROMISO";
	$fieldToolTipsq_graph_002["Spanish"]["TOTCOMPROMISO"] = "";
	$placeHoldersq_graph_002["Spanish"]["TOTCOMPROMISO"] = "";
	$fieldLabelsq_graph_002["Spanish"]["TOTPAGOS"] = "TOTPAGOS";
	$fieldToolTipsq_graph_002["Spanish"]["TOTPAGOS"] = "";
	$placeHoldersq_graph_002["Spanish"]["TOTPAGOS"] = "";
	if (count($fieldToolTipsq_graph_002["Spanish"]))
		$tdataq_graph_002[".isUseToolTips"] = true;
}


	$tdataq_graph_002[".NCSearch"] = true;



$tdataq_graph_002[".shortTableName"] = "q_graph_002";
$tdataq_graph_002[".nSecOptions"] = 0;

$tdataq_graph_002[".mainTableOwnerID"] = "";
$tdataq_graph_002[".entityType"] = 0;
$tdataq_graph_002[".connId"] = "sep2_at_localhost";


$tdataq_graph_002[".strOriginalTableName"] = "q_graph_002";

	



$tdataq_graph_002[".showAddInPopup"] = false;

$tdataq_graph_002[".showEditInPopup"] = false;

$tdataq_graph_002[".showViewInPopup"] = false;

$tdataq_graph_002[".listAjax"] = false;
//	temporary
//$tdataq_graph_002[".listAjax"] = false;

	$tdataq_graph_002[".audit"] = false;

	$tdataq_graph_002[".locking"] = false;


$pages = $tdataq_graph_002[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_graph_002[".edit"] = true;
	$tdataq_graph_002[".afterEditAction"] = 1;
	$tdataq_graph_002[".closePopupAfterEdit"] = 1;
	$tdataq_graph_002[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_graph_002[".add"] = true;
$tdataq_graph_002[".afterAddAction"] = 1;
$tdataq_graph_002[".closePopupAfterAdd"] = 1;
$tdataq_graph_002[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_graph_002[".list"] = true;
}



$tdataq_graph_002[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_graph_002[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_graph_002[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_graph_002[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_graph_002[".printFriendly"] = true;
}



$tdataq_graph_002[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_graph_002[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_graph_002[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_graph_002[".isUseAjaxSuggest"] = true;

$tdataq_graph_002[".rowHighlite"] = true;





$tdataq_graph_002[".ajaxCodeSnippetAdded"] = false;

$tdataq_graph_002[".buttonsAdded"] = false;

$tdataq_graph_002[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_graph_002[".isUseTimeForSearch"] = false;


$tdataq_graph_002[".badgeColor"] = "6b8e23";


$tdataq_graph_002[".allSearchFields"] = array();
$tdataq_graph_002[".filterFields"] = array();
$tdataq_graph_002[".requiredSearchFields"] = array();

$tdataq_graph_002[".googleLikeFields"] = array();
$tdataq_graph_002[".googleLikeFields"][] = "UEJ";
$tdataq_graph_002[".googleLikeFields"][] = "sector_name";
$tdataq_graph_002[".googleLikeFields"][] = "short_name";
$tdataq_graph_002[".googleLikeFields"][] = "TIPO";
$tdataq_graph_002[".googleLikeFields"][] = "uej_name";
$tdataq_graph_002[".googleLikeFields"][] = "TOTVIGENTE";
$tdataq_graph_002[".googleLikeFields"][] = "TOTCOMPROMISO";
$tdataq_graph_002[".googleLikeFields"][] = "TOTPAGOS";



$tdataq_graph_002[".tableType"] = "list";

$tdataq_graph_002[".printerPageOrientation"] = 0;
$tdataq_graph_002[".nPrinterPageScale"] = 100;

$tdataq_graph_002[".nPrinterSplitRecords"] = 40;

$tdataq_graph_002[".geocodingEnabled"] = false;










$tdataq_graph_002[".pageSize"] = 20;

$tdataq_graph_002[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_graph_002[".strOrderBy"] = $tstrOrderBy;

$tdataq_graph_002[".orderindexes"] = array();


$tdataq_graph_002[".sqlHead"] = "SELECT UEJ,  	sector_name,  	short_name,  	TIPO,  	uej_name,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTPAGOS";
$tdataq_graph_002[".sqlFrom"] = "FROM q_graph_002";
$tdataq_graph_002[".sqlWhereExpr"] = "";
$tdataq_graph_002[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_graph_002[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_graph_002[".arrGroupsPerPage"] = $arrGPP;

$tdataq_graph_002[".highlightSearchResults"] = true;

$tableKeysq_graph_002 = array();
$tdataq_graph_002[".Keys"] = $tableKeysq_graph_002;


$tdataq_graph_002[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
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


	$tdataq_graph_002["UEJ"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "UEJ";
//	sector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_name";
	$fdata["GoodName"] = "sector_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","sector_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sector_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataq_graph_002["sector_name"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "sector_name";
//	short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "short_name";
	$fdata["GoodName"] = "short_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","short_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "short_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "short_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataq_graph_002["short_name"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "short_name";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","TIPO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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


	$tdataq_graph_002["TIPO"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "TIPO";
//	uej_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "uej_name";
	$fdata["GoodName"] = "uej_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","uej_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uej_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uej_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataq_graph_002["uej_name"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "uej_name";
//	TOTVIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTVIGENTE";
	$fdata["GoodName"] = "TOTVIGENTE";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","TOTVIGENTE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTVIGENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTVIGENTE";

	
	
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


	$tdataq_graph_002["TOTVIGENTE"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "TOTVIGENTE";
//	TOTCOMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTCOMPROMISO";
	$fdata["GoodName"] = "TOTCOMPROMISO";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","TOTCOMPROMISO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTCOMPROMISO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTCOMPROMISO";

	
	
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


	$tdataq_graph_002["TOTCOMPROMISO"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "TOTCOMPROMISO";
//	TOTPAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TOTPAGOS";
	$fdata["GoodName"] = "TOTPAGOS";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002","TOTPAGOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTPAGOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOTPAGOS";

	
	
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


	$tdataq_graph_002["TOTPAGOS"] = $fdata;
		$tdataq_graph_002[".searchableFields"][] = "TOTPAGOS";


$tables_data["q_graph_002"]=&$tdataq_graph_002;
$field_labels["q_graph_002"] = &$fieldLabelsq_graph_002;
$fieldToolTips["q_graph_002"] = &$fieldToolTipsq_graph_002;
$placeHolders["q_graph_002"] = &$placeHoldersq_graph_002;
$page_titles["q_graph_002"] = &$pageTitlesq_graph_002;


changeTextControlsToDate( "q_graph_002" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_graph_002"] = array();
//	q_graph_002 Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_graph_002 Chart";
		$detailsParam["dOriginalTable"] = "q_graph_002";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "q_graph_002_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_graph_002_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["q_graph_002"][$dIndex] = $detailsParam;

	
		$detailsTablesData["q_graph_002"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["q_graph_002"][$dIndex]["masterKeys"][]="UEJ";

	$detailsTablesData["q_graph_002"][$dIndex]["masterKeys"][]="TIPO";

				$detailsTablesData["q_graph_002"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["q_graph_002"][$dIndex]["detailKeys"][]="UEJ";

		
	$detailsTablesData["q_graph_002"][$dIndex]["detailKeys"][]="TIPO";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_graph_002"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_graph_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_graph_001";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_graph_001";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["q_graph_002"][0] = $masterParams;
				$masterTablesData["q_graph_002"][0]["masterKeys"] = array();
	$masterTablesData["q_graph_002"][0]["masterKeys"][]="UEJ";
				$masterTablesData["q_graph_002"][0]["detailKeys"] = array();
	$masterTablesData["q_graph_002"][0]["detailKeys"][]="UEJ";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_graph_001";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_graph_001 Chart";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_graph_001_chart";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
			$masterParams["type"] = PAGE_CHART;
			$masterTablesData["q_graph_002"][1] = $masterParams;
				$masterTablesData["q_graph_002"][1]["masterKeys"] = array();
	$masterTablesData["q_graph_002"][1]["masterKeys"][]="UEJ";
				$masterTablesData["q_graph_002"][1]["detailKeys"] = array();
	$masterTablesData["q_graph_002"][1]["detailKeys"][]="UEJ";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_graph_002()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UEJ,  	sector_name,  	short_name,  	TIPO,  	uej_name,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTPAGOS";
$proto0["m_strFrom"] = "FROM q_graph_002";
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
	"m_strName" => "UEJ",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_graph_002";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto8["m_sql"] = "sector_name";
$proto8["m_srcTableName"] = "q_graph_002";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "short_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto10["m_sql"] = "short_name";
$proto10["m_srcTableName"] = "q_graph_002";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto12["m_sql"] = "TIPO";
$proto12["m_srcTableName"] = "q_graph_002";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "uej_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto14["m_sql"] = "uej_name";
$proto14["m_srcTableName"] = "q_graph_002";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTVIGENTE",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto16["m_sql"] = "TOTVIGENTE";
$proto16["m_srcTableName"] = "q_graph_002";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTCOMPROMISO",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto18["m_sql"] = "TOTCOMPROMISO";
$proto18["m_srcTableName"] = "q_graph_002";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTPAGOS",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002"
));

$proto20["m_sql"] = "TOTPAGOS";
$proto20["m_srcTableName"] = "q_graph_002";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_graph_002";
$proto23["m_srcTableName"] = "q_graph_002";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "UEJ";
$proto23["m_columns"][] = "sector_name";
$proto23["m_columns"][] = "short_name";
$proto23["m_columns"][] = "TIPO";
$proto23["m_columns"][] = "uej_name";
$proto23["m_columns"][] = "TOTVIGENTE";
$proto23["m_columns"][] = "TOTCOMPROMISO";
$proto23["m_columns"][] = "TOTPAGOS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_graph_002";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_graph_002";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_graph_002";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_graph_002 = createSqlQuery_q_graph_002();


	
								;

								

$tdataq_graph_002[".sqlquery"] = $queryData_q_graph_002;



$tdataq_graph_002[".hasEvents"] = false;

?>