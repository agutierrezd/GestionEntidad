<?php
$tdataq_graph_002_chart = array();
$tdataq_graph_002_chart[".searchableFields"] = array();
$tdataq_graph_002_chart[".ShortName"] = "q_graph_002_chart";
$tdataq_graph_002_chart[".OwnerID"] = "";
$tdataq_graph_002_chart[".OriginalTable"] = "q_graph_002";


$tdataq_graph_002_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataq_graph_002_chart[".originalPagesByType"] = $tdataq_graph_002_chart[".pagesByType"];
$tdataq_graph_002_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataq_graph_002_chart[".originalPages"] = $tdataq_graph_002_chart[".pages"];
$tdataq_graph_002_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataq_graph_002_chart[".originalDefaultPages"] = $tdataq_graph_002_chart[".defaultPages"];

//	field labels
$fieldLabelsq_graph_002_chart = array();
$fieldToolTipsq_graph_002_chart = array();
$pageTitlesq_graph_002_chart = array();
$placeHoldersq_graph_002_chart = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_graph_002_chart["Spanish"] = array();
	$fieldToolTipsq_graph_002_chart["Spanish"] = array();
	$placeHoldersq_graph_002_chart["Spanish"] = array();
	$pageTitlesq_graph_002_chart["Spanish"] = array();
	$fieldLabelsq_graph_002_chart["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_graph_002_chart["Spanish"]["UEJ"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["UEJ"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["sector_name"] = "Sector Name";
	$fieldToolTipsq_graph_002_chart["Spanish"]["sector_name"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["sector_name"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["short_name"] = "Short Name";
	$fieldToolTipsq_graph_002_chart["Spanish"]["short_name"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["short_name"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsq_graph_002_chart["Spanish"]["TIPO"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["TIPO"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["uej_name"] = "Uej Name";
	$fieldToolTipsq_graph_002_chart["Spanish"]["uej_name"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["uej_name"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["TOTVIGENTE"] = "VIGENTE";
	$fieldToolTipsq_graph_002_chart["Spanish"]["TOTVIGENTE"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["TOTVIGENTE"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["TOTCOMPROMISO"] = "COMPROMISO";
	$fieldToolTipsq_graph_002_chart["Spanish"]["TOTCOMPROMISO"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["TOTCOMPROMISO"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["TOTPAGOS"] = "PAGOS";
	$fieldToolTipsq_graph_002_chart["Spanish"]["TOTPAGOS"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["TOTPAGOS"] = "";
	$fieldLabelsq_graph_002_chart["Spanish"]["FECHA_ACTUALIZACION"] = "FECHA ACTUALIZACION";
	$fieldToolTipsq_graph_002_chart["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$placeHoldersq_graph_002_chart["Spanish"]["FECHA_ACTUALIZACION"] = "";
	if (count($fieldToolTipsq_graph_002_chart["Spanish"]))
		$tdataq_graph_002_chart[".isUseToolTips"] = true;
}


	$tdataq_graph_002_chart[".NCSearch"] = true;

	$tdataq_graph_002_chart[".ChartRefreshTime"] = 0;


$tdataq_graph_002_chart[".shortTableName"] = "q_graph_002_chart";
$tdataq_graph_002_chart[".nSecOptions"] = 0;

$tdataq_graph_002_chart[".mainTableOwnerID"] = "";
$tdataq_graph_002_chart[".entityType"] = 3;
$tdataq_graph_002_chart[".connId"] = "sep2_at_localhost";


$tdataq_graph_002_chart[".strOriginalTableName"] = "q_graph_002";

	



$tdataq_graph_002_chart[".showAddInPopup"] = false;

$tdataq_graph_002_chart[".showEditInPopup"] = false;

$tdataq_graph_002_chart[".showViewInPopup"] = false;

$tdataq_graph_002_chart[".listAjax"] = false;
//	temporary
//$tdataq_graph_002_chart[".listAjax"] = false;

	$tdataq_graph_002_chart[".audit"] = false;

	$tdataq_graph_002_chart[".locking"] = false;


$pages = $tdataq_graph_002_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_graph_002_chart[".edit"] = true;
	$tdataq_graph_002_chart[".afterEditAction"] = 1;
	$tdataq_graph_002_chart[".closePopupAfterEdit"] = 1;
	$tdataq_graph_002_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_graph_002_chart[".add"] = true;
$tdataq_graph_002_chart[".afterAddAction"] = 1;
$tdataq_graph_002_chart[".closePopupAfterAdd"] = 1;
$tdataq_graph_002_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_graph_002_chart[".list"] = true;
}



$tdataq_graph_002_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_graph_002_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_graph_002_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_graph_002_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_graph_002_chart[".printFriendly"] = true;
}



$tdataq_graph_002_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_graph_002_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_graph_002_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_graph_002_chart[".isUseAjaxSuggest"] = true;






$tdataq_graph_002_chart[".ajaxCodeSnippetAdded"] = false;

$tdataq_graph_002_chart[".buttonsAdded"] = false;

$tdataq_graph_002_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_graph_002_chart[".isUseTimeForSearch"] = false;


$tdataq_graph_002_chart[".badgeColor"] = "CD853F";


$tdataq_graph_002_chart[".allSearchFields"] = array();
$tdataq_graph_002_chart[".filterFields"] = array();
$tdataq_graph_002_chart[".requiredSearchFields"] = array();

$tdataq_graph_002_chart[".googleLikeFields"] = array();
$tdataq_graph_002_chart[".googleLikeFields"][] = "UEJ";
$tdataq_graph_002_chart[".googleLikeFields"][] = "sector_name";
$tdataq_graph_002_chart[".googleLikeFields"][] = "short_name";
$tdataq_graph_002_chart[".googleLikeFields"][] = "TIPO";
$tdataq_graph_002_chart[".googleLikeFields"][] = "uej_name";
$tdataq_graph_002_chart[".googleLikeFields"][] = "TOTVIGENTE";
$tdataq_graph_002_chart[".googleLikeFields"][] = "TOTCOMPROMISO";
$tdataq_graph_002_chart[".googleLikeFields"][] = "TOTPAGOS";
$tdataq_graph_002_chart[".googleLikeFields"][] = "FECHA_ACTUALIZACION";



$tdataq_graph_002_chart[".tableType"] = "chart";

$tdataq_graph_002_chart[".printerPageOrientation"] = 0;
$tdataq_graph_002_chart[".nPrinterPageScale"] = 100;

$tdataq_graph_002_chart[".nPrinterSplitRecords"] = 40;

$tdataq_graph_002_chart[".geocodingEnabled"] = false;



// chart settings
$tdataq_graph_002_chart[".chartType"] = "2DColumn";
// end of chart settings




$tdataq_graph_002_chart[".noRecordsFirstPage"] = true;




$tstrOrderBy = "";
$tdataq_graph_002_chart[".strOrderBy"] = $tstrOrderBy;

$tdataq_graph_002_chart[".orderindexes"] = array();


$tdataq_graph_002_chart[".sqlHead"] = "SELECT UEJ,  	sector_name,  	short_name,  	TIPO,  	uej_name,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTPAGOS,  	FECHA_ACTUALIZACION";
$tdataq_graph_002_chart[".sqlFrom"] = "FROM q_graph_002";
$tdataq_graph_002_chart[".sqlWhereExpr"] = "";
$tdataq_graph_002_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_graph_002_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_graph_002_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataq_graph_002_chart[".highlightSearchResults"] = true;

$tableKeysq_graph_002_chart = array();
$tdataq_graph_002_chart[".Keys"] = $tableKeysq_graph_002_chart;


$tdataq_graph_002_chart[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["sourceSingle"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["UEJ"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "UEJ";
//	sector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_name";
	$fdata["GoodName"] = "sector_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","sector_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sector_name";

		$fdata["sourceSingle"] = "sector_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["sector_name"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "sector_name";
//	short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "short_name";
	$fdata["GoodName"] = "short_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","short_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "short_name";

		$fdata["sourceSingle"] = "short_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "short_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["short_name"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "short_name";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","TIPO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["sourceSingle"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tiporubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "uej_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "uej_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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
		$fdata["filterTotalFields"] = "TOTVIGENTE";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_graph_002_chart["TIPO"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "TIPO";
//	uej_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "uej_name";
	$fdata["GoodName"] = "uej_name";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","uej_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uej_name";

		$fdata["sourceSingle"] = "uej_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uej_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["uej_name"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "uej_name";
//	TOTVIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TOTVIGENTE";
	$fdata["GoodName"] = "TOTVIGENTE";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","TOTVIGENTE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTVIGENTE";

		$fdata["sourceSingle"] = "TOTVIGENTE";

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["TOTVIGENTE"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "TOTVIGENTE";
//	TOTCOMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TOTCOMPROMISO";
	$fdata["GoodName"] = "TOTCOMPROMISO";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","TOTCOMPROMISO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTCOMPROMISO";

		$fdata["sourceSingle"] = "TOTCOMPROMISO";

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["TOTCOMPROMISO"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "TOTCOMPROMISO";
//	TOTPAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TOTPAGOS";
	$fdata["GoodName"] = "TOTPAGOS";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","TOTPAGOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TOTPAGOS";

		$fdata["sourceSingle"] = "TOTPAGOS";

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["TOTPAGOS"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "TOTPAGOS";
//	FECHA_ACTUALIZACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FECHA_ACTUALIZACION";
	$fdata["GoodName"] = "FECHA_ACTUALIZACION";
	$fdata["ownerTable"] = "q_graph_002";
	$fdata["Label"] = GetFieldLabel("q_graph_002_Chart","FECHA_ACTUALIZACION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_ACTUALIZACION";

		$fdata["sourceSingle"] = "FECHA_ACTUALIZACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_ACTUALIZACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataq_graph_002_chart["FECHA_ACTUALIZACION"] = $fdata;
		$tdataq_graph_002_chart[".searchableFields"][] = "FECHA_ACTUALIZACION";

$tdataq_graph_002_chart[".chartLabelField"] = "UEJ";
$tdataq_graph_002_chart[".chartSeries"] = array();
$tdataq_graph_002_chart[".chartSeries"][] = array(
	"field" => "TOTVIGENTE",
	"total" => ""
);
$tdataq_graph_002_chart[".chartSeries"][] = array(
	"field" => "TOTCOMPROMISO",
	"total" => ""
);
$tdataq_graph_002_chart[".chartSeries"][] = array(
	"field" => "TOTPAGOS",
	"total" => ""
);
	$tdataq_graph_002_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">q_graph_002 Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">TOTVIGENTE</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">TOTCOMPROMISO</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="2">
			<attr value="name">TOTPAGOS</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">UEJ</attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="head">'.xmlencode("Presupuesto por Tipo de Rubro").'</attr>
<attr value="foot">'.xmlencode("Unidad Ejecutora").'</attr>
<attr value="y_axis_label">'.xmlencode("Vigente").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataq_graph_002_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">UEJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","UEJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">sector_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","sector_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">short_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","short_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">TIPO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","TIPO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">uej_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","uej_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">TOTVIGENTE</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","TOTVIGENTE")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">TOTCOMPROMISO</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","TOTCOMPROMISO")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">TOTPAGOS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","TOTPAGOS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataq_graph_002_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">FECHA_ACTUALIZACION</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("q_graph_002_Chart","FECHA_ACTUALIZACION")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataq_graph_002_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">q_graph_002 Chart</attr>
<attr value="short_table_name">q_graph_002_chart</attr>
</attr>

</chart>';

$tables_data["q_graph_002 Chart"]=&$tdataq_graph_002_chart;
$field_labels["q_graph_002_Chart"] = &$fieldLabelsq_graph_002_chart;
$fieldToolTips["q_graph_002_Chart"] = &$fieldToolTipsq_graph_002_chart;
$placeHolders["q_graph_002_Chart"] = &$placeHoldersq_graph_002_chart;
$page_titles["q_graph_002_Chart"] = &$pageTitlesq_graph_002_chart;


changeTextControlsToDate( "q_graph_002 Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_graph_002 Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_graph_002 Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_graph_002_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UEJ,  	sector_name,  	short_name,  	TIPO,  	uej_name,  	TOTVIGENTE,  	TOTCOMPROMISO,  	TOTPAGOS,  	FECHA_ACTUALIZACION";
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
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_graph_002 Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto8["m_sql"] = "sector_name";
$proto8["m_srcTableName"] = "q_graph_002 Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "short_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto10["m_sql"] = "short_name";
$proto10["m_srcTableName"] = "q_graph_002 Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto12["m_sql"] = "TIPO";
$proto12["m_srcTableName"] = "q_graph_002 Chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "uej_name",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto14["m_sql"] = "uej_name";
$proto14["m_srcTableName"] = "q_graph_002 Chart";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTVIGENTE",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto16["m_sql"] = "TOTVIGENTE";
$proto16["m_srcTableName"] = "q_graph_002 Chart";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTCOMPROMISO",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto18["m_sql"] = "TOTCOMPROMISO";
$proto18["m_srcTableName"] = "q_graph_002 Chart";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TOTPAGOS",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto20["m_sql"] = "TOTPAGOS";
$proto20["m_srcTableName"] = "q_graph_002 Chart";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_ACTUALIZACION",
	"m_strTable" => "q_graph_002",
	"m_srcTableName" => "q_graph_002 Chart"
));

$proto22["m_sql"] = "FECHA_ACTUALIZACION";
$proto22["m_srcTableName"] = "q_graph_002 Chart";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "q_graph_002";
$proto25["m_srcTableName"] = "q_graph_002 Chart";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "UEJ";
$proto25["m_columns"][] = "sector_name";
$proto25["m_columns"][] = "short_name";
$proto25["m_columns"][] = "TIPO";
$proto25["m_columns"][] = "uej_name";
$proto25["m_columns"][] = "TOTVIGENTE";
$proto25["m_columns"][] = "TOTCOMPROMISO";
$proto25["m_columns"][] = "TOTPAGOS";
$proto25["m_columns"][] = "FECHA_ACTUALIZACION";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "q_graph_002";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "q_graph_002 Chart";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_graph_002 Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_graph_002_chart = createSqlQuery_q_graph_002_chart();


	
								;

									

$tdataq_graph_002_chart[".sqlquery"] = $queryData_q_graph_002_chart;



$tdataq_graph_002_chart[".hasEvents"] = false;

?>