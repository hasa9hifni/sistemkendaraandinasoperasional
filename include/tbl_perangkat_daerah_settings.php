<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_perangkat_daerah = array();
	$tdatatbl_perangkat_daerah[".truncateText"] = true;
	$tdatatbl_perangkat_daerah[".NumberOfChars"] = 80;
	$tdatatbl_perangkat_daerah[".ShortName"] = "tbl_perangkat_daerah";
	$tdatatbl_perangkat_daerah[".OwnerID"] = "";
	$tdatatbl_perangkat_daerah[".OriginalTable"] = "tbl_perangkat_daerah";

//	field labels
$fieldLabelstbl_perangkat_daerah = array();
$fieldToolTipstbl_perangkat_daerah = array();
$pageTitlestbl_perangkat_daerah = array();
$placeHolderstbl_perangkat_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_perangkat_daerah["English"] = array();
	$fieldToolTipstbl_perangkat_daerah["English"] = array();
	$placeHolderstbl_perangkat_daerah["English"] = array();
	$pageTitlestbl_perangkat_daerah["English"] = array();
	$fieldLabelstbl_perangkat_daerah["English"]["ID"] = "ID";
	$fieldToolTipstbl_perangkat_daerah["English"]["ID"] = "";
	$placeHolderstbl_perangkat_daerah["English"]["ID"] = "";
	$fieldLabelstbl_perangkat_daerah["English"]["NAMA_INSTANSI"] = "NAMA INSTANSI";
	$fieldToolTipstbl_perangkat_daerah["English"]["NAMA_INSTANSI"] = "";
	$placeHolderstbl_perangkat_daerah["English"]["NAMA_INSTANSI"] = "";
	if (count($fieldToolTipstbl_perangkat_daerah["English"]))
		$tdatatbl_perangkat_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_perangkat_daerah[""] = array();
	$fieldToolTipstbl_perangkat_daerah[""] = array();
	$placeHolderstbl_perangkat_daerah[""] = array();
	$pageTitlestbl_perangkat_daerah[""] = array();
	if (count($fieldToolTipstbl_perangkat_daerah[""]))
		$tdatatbl_perangkat_daerah[".isUseToolTips"] = true;
}


	$tdatatbl_perangkat_daerah[".NCSearch"] = true;



$tdatatbl_perangkat_daerah[".shortTableName"] = "tbl_perangkat_daerah";
$tdatatbl_perangkat_daerah[".nSecOptions"] = 0;
$tdatatbl_perangkat_daerah[".recsPerRowPrint"] = 1;
$tdatatbl_perangkat_daerah[".mainTableOwnerID"] = "";
$tdatatbl_perangkat_daerah[".moveNext"] = 1;
$tdatatbl_perangkat_daerah[".entityType"] = 0;

$tdatatbl_perangkat_daerah[".strOriginalTableName"] = "tbl_perangkat_daerah";

	



$tdatatbl_perangkat_daerah[".showAddInPopup"] = false;

$tdatatbl_perangkat_daerah[".showEditInPopup"] = false;

$tdatatbl_perangkat_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_perangkat_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_perangkat_daerah[".fieldsForRegister"] = array();
	
$tdatatbl_perangkat_daerah[".listAjax"] = false;

	$tdatatbl_perangkat_daerah[".audit"] = true;

	$tdatatbl_perangkat_daerah[".locking"] = false;

$tdatatbl_perangkat_daerah[".edit"] = true;
$tdatatbl_perangkat_daerah[".afterEditAction"] = 1;
$tdatatbl_perangkat_daerah[".closePopupAfterEdit"] = 1;
$tdatatbl_perangkat_daerah[".afterEditActionDetTable"] = "";

$tdatatbl_perangkat_daerah[".add"] = true;
$tdatatbl_perangkat_daerah[".afterAddAction"] = 0;
$tdatatbl_perangkat_daerah[".closePopupAfterAdd"] = 1;
$tdatatbl_perangkat_daerah[".afterAddActionDetTable"] = "";

$tdatatbl_perangkat_daerah[".list"] = true;



$tdatatbl_perangkat_daerah[".reorderRecordsByHeader"] = true;



$tdatatbl_perangkat_daerah[".view"] = true;

$tdatatbl_perangkat_daerah[".import"] = true;

$tdatatbl_perangkat_daerah[".exportTo"] = true;

$tdatatbl_perangkat_daerah[".printFriendly"] = true;

$tdatatbl_perangkat_daerah[".delete"] = true;

$tdatatbl_perangkat_daerah[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatbl_perangkat_daerah[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatbl_perangkat_daerah[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatbl_perangkat_daerah[".searchSaving"] = false;
//

$tdatatbl_perangkat_daerah[".showSearchPanel"] = true;
		$tdatatbl_perangkat_daerah[".flexibleSearch"] = true;

$tdatatbl_perangkat_daerah[".isUseAjaxSuggest"] = true;

$tdatatbl_perangkat_daerah[".rowHighlite"] = true;





$tdatatbl_perangkat_daerah[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_perangkat_daerah[".buttonsAdded"] = false;

$tdatatbl_perangkat_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_perangkat_daerah[".isUseTimeForSearch"] = false;



$tdatatbl_perangkat_daerah[".badgeColor"] = "EDCA00";


$tdatatbl_perangkat_daerah[".allSearchFields"] = array();
$tdatatbl_perangkat_daerah[".filterFields"] = array();
$tdatatbl_perangkat_daerah[".requiredSearchFields"] = array();

$tdatatbl_perangkat_daerah[".allSearchFields"][] = "ID";
	$tdatatbl_perangkat_daerah[".allSearchFields"][] = "NAMA_INSTANSI";
	

$tdatatbl_perangkat_daerah[".googleLikeFields"] = array();
$tdatatbl_perangkat_daerah[".googleLikeFields"][] = "ID";
$tdatatbl_perangkat_daerah[".googleLikeFields"][] = "NAMA_INSTANSI";


$tdatatbl_perangkat_daerah[".advSearchFields"] = array();
$tdatatbl_perangkat_daerah[".advSearchFields"][] = "ID";
$tdatatbl_perangkat_daerah[".advSearchFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".tableType"] = "list";

$tdatatbl_perangkat_daerah[".printerPageOrientation"] = 0;
$tdatatbl_perangkat_daerah[".nPrinterPageScale"] = 100;

$tdatatbl_perangkat_daerah[".nPrinterSplitRecords"] = 40;

$tdatatbl_perangkat_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_perangkat_daerah[".geocodingEnabled"] = false;





$tdatatbl_perangkat_daerah[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_perangkat_daerah[".pageSize"] = 20;

$tdatatbl_perangkat_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_perangkat_daerah[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_perangkat_daerah[".orderindexes"] = array();

$tdatatbl_perangkat_daerah[".sqlHead"] = "SELECT ID,  	NAMA_INSTANSI";
$tdatatbl_perangkat_daerah[".sqlFrom"] = "FROM tbl_perangkat_daerah";
$tdatatbl_perangkat_daerah[".sqlWhereExpr"] = "";
$tdatatbl_perangkat_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_perangkat_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_perangkat_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_perangkat_daerah[".highlightSearchResults"] = true;

$tableKeystbl_perangkat_daerah = array();
$tableKeystbl_perangkat_daerah[] = "ID";
$tdatatbl_perangkat_daerah[".Keys"] = $tableKeystbl_perangkat_daerah;

$tdatatbl_perangkat_daerah[".listFields"] = array();
$tdatatbl_perangkat_daerah[".listFields"][] = "ID";
$tdatatbl_perangkat_daerah[".listFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".hideMobileList"] = array();


$tdatatbl_perangkat_daerah[".viewFields"] = array();
$tdatatbl_perangkat_daerah[".viewFields"][] = "ID";
$tdatatbl_perangkat_daerah[".viewFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".addFields"] = array();
$tdatatbl_perangkat_daerah[".addFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".masterListFields"] = array();
$tdatatbl_perangkat_daerah[".masterListFields"][] = "ID";
$tdatatbl_perangkat_daerah[".masterListFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".inlineAddFields"] = array();

$tdatatbl_perangkat_daerah[".editFields"] = array();
$tdatatbl_perangkat_daerah[".editFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".inlineEditFields"] = array();

$tdatatbl_perangkat_daerah[".updateSelectedFields"] = array();
$tdatatbl_perangkat_daerah[".updateSelectedFields"][] = "NAMA_INSTANSI";


$tdatatbl_perangkat_daerah[".exportFields"] = array();
$tdatatbl_perangkat_daerah[".exportFields"][] = "ID";
$tdatatbl_perangkat_daerah[".exportFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".importFields"] = array();
$tdatatbl_perangkat_daerah[".importFields"][] = "ID";
$tdatatbl_perangkat_daerah[".importFields"][] = "NAMA_INSTANSI";

$tdatatbl_perangkat_daerah[".printFields"] = array();
$tdatatbl_perangkat_daerah[".printFields"][] = "ID";
$tdatatbl_perangkat_daerah[".printFields"][] = "NAMA_INSTANSI";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_perangkat_daerah";
	$fdata["Label"] = GetFieldLabel("tbl_perangkat_daerah","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

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




	$tdatatbl_perangkat_daerah["ID"] = $fdata;
//	NAMA_INSTANSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NAMA_INSTANSI";
	$fdata["GoodName"] = "NAMA_INSTANSI";
	$fdata["ownerTable"] = "tbl_perangkat_daerah";
	$fdata["Label"] = GetFieldLabel("tbl_perangkat_daerah","NAMA_INSTANSI");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NAMA_INSTANSI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAMA_INSTANSI";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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




	$tdatatbl_perangkat_daerah["NAMA_INSTANSI"] = $fdata;


$tables_data["tbl_perangkat_daerah"]=&$tdatatbl_perangkat_daerah;
$field_labels["tbl_perangkat_daerah"] = &$fieldLabelstbl_perangkat_daerah;
$fieldToolTips["tbl_perangkat_daerah"] = &$fieldToolTipstbl_perangkat_daerah;
$placeHolders["tbl_perangkat_daerah"] = &$placeHolderstbl_perangkat_daerah;
$page_titles["tbl_perangkat_daerah"] = &$pageTitlestbl_perangkat_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_perangkat_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_perangkat_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_perangkat_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	NAMA_INSTANSI";
$proto0["m_strFrom"] = "FROM tbl_perangkat_daerah";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
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
	"m_strName" => "ID",
	"m_strTable" => "tbl_perangkat_daerah",
	"m_srcTableName" => "tbl_perangkat_daerah"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_perangkat_daerah";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NAMA_INSTANSI",
	"m_strTable" => "tbl_perangkat_daerah",
	"m_srcTableName" => "tbl_perangkat_daerah"
));

$proto8["m_sql"] = "NAMA_INSTANSI";
$proto8["m_srcTableName"] = "tbl_perangkat_daerah";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_perangkat_daerah";
$proto11["m_srcTableName"] = "tbl_perangkat_daerah";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "NAMA_INSTANSI";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_perangkat_daerah";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_perangkat_daerah";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_perangkat_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_perangkat_daerah = createSqlQuery_tbl_perangkat_daerah();


	
		;

		

$tdatatbl_perangkat_daerah[".sqlquery"] = $queryData_tbl_perangkat_daerah;

$tableEvents["tbl_perangkat_daerah"] = new eventsBase;
$tdatatbl_perangkat_daerah[".hasEvents"] = false;

?>