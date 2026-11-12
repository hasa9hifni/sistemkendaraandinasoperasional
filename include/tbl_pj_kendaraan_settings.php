<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_pj_kendaraan = array();
	$tdatatbl_pj_kendaraan[".truncateText"] = true;
	$tdatatbl_pj_kendaraan[".NumberOfChars"] = 80;
	$tdatatbl_pj_kendaraan[".ShortName"] = "tbl_pj_kendaraan";
	$tdatatbl_pj_kendaraan[".OwnerID"] = "";
	$tdatatbl_pj_kendaraan[".OriginalTable"] = "tbl_pj_kendaraan";

//	field labels
$fieldLabelstbl_pj_kendaraan = array();
$fieldToolTipstbl_pj_kendaraan = array();
$pageTitlestbl_pj_kendaraan = array();
$placeHolderstbl_pj_kendaraan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_pj_kendaraan["English"] = array();
	$fieldToolTipstbl_pj_kendaraan["English"] = array();
	$placeHolderstbl_pj_kendaraan["English"] = array();
	$pageTitlestbl_pj_kendaraan["English"] = array();
	$fieldLabelstbl_pj_kendaraan["English"]["ID"] = "ID";
	$fieldToolTipstbl_pj_kendaraan["English"]["ID"] = "";
	$placeHolderstbl_pj_kendaraan["English"]["ID"] = "";
	$fieldLabelstbl_pj_kendaraan["English"]["NIP_KARYAWAN"] = "NIP KARYAWAN";
	$fieldToolTipstbl_pj_kendaraan["English"]["NIP_KARYAWAN"] = "";
	$placeHolderstbl_pj_kendaraan["English"]["NIP_KARYAWAN"] = "";
	$fieldLabelstbl_pj_kendaraan["English"]["NOMOR_POLISI_KENDARAAN"] = "NOMOR POLISI KENDARAAN";
	$fieldToolTipstbl_pj_kendaraan["English"]["NOMOR_POLISI_KENDARAAN"] = "";
	$placeHolderstbl_pj_kendaraan["English"]["NOMOR_POLISI_KENDARAAN"] = "";
	$fieldLabelstbl_pj_kendaraan["English"]["TANGGAL_MULAI"] = "TANGGAL MULAI";
	$fieldToolTipstbl_pj_kendaraan["English"]["TANGGAL_MULAI"] = "";
	$placeHolderstbl_pj_kendaraan["English"]["TANGGAL_MULAI"] = "";
	$fieldLabelstbl_pj_kendaraan["English"]["TANGGAL_SELESAI"] = "TANGGAL SELESAI";
	$fieldToolTipstbl_pj_kendaraan["English"]["TANGGAL_SELESAI"] = "";
	$placeHolderstbl_pj_kendaraan["English"]["TANGGAL_SELESAI"] = "";
	if (count($fieldToolTipstbl_pj_kendaraan["English"]))
		$tdatatbl_pj_kendaraan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_pj_kendaraan[""] = array();
	$fieldToolTipstbl_pj_kendaraan[""] = array();
	$placeHolderstbl_pj_kendaraan[""] = array();
	$pageTitlestbl_pj_kendaraan[""] = array();
	$fieldLabelstbl_pj_kendaraan[""]["ID"] = "ID";
	$fieldToolTipstbl_pj_kendaraan[""]["ID"] = "";
	$placeHolderstbl_pj_kendaraan[""]["ID"] = "";
	$fieldLabelstbl_pj_kendaraan[""]["NIP_KARYAWAN"] = "NIP KARYAWAN";
	$fieldToolTipstbl_pj_kendaraan[""]["NIP_KARYAWAN"] = "";
	$placeHolderstbl_pj_kendaraan[""]["NIP_KARYAWAN"] = "";
	$fieldLabelstbl_pj_kendaraan[""]["NOMOR_POLISI_KENDARAAN"] = "NOMOR POLISI KENDARAAN";
	$fieldToolTipstbl_pj_kendaraan[""]["NOMOR_POLISI_KENDARAAN"] = "";
	$placeHolderstbl_pj_kendaraan[""]["NOMOR_POLISI_KENDARAAN"] = "";
	$fieldLabelstbl_pj_kendaraan[""]["TANGGAL_MULAI"] = "TANGGAL MULAI";
	$fieldToolTipstbl_pj_kendaraan[""]["TANGGAL_MULAI"] = "";
	$placeHolderstbl_pj_kendaraan[""]["TANGGAL_MULAI"] = "";
	$fieldLabelstbl_pj_kendaraan[""]["TANGGAL_SELESAI"] = "TANGGAL SELESAI";
	$fieldToolTipstbl_pj_kendaraan[""]["TANGGAL_SELESAI"] = "";
	$placeHolderstbl_pj_kendaraan[""]["TANGGAL_SELESAI"] = "";
	if (count($fieldToolTipstbl_pj_kendaraan[""]))
		$tdatatbl_pj_kendaraan[".isUseToolTips"] = true;
}


	$tdatatbl_pj_kendaraan[".NCSearch"] = true;



$tdatatbl_pj_kendaraan[".shortTableName"] = "tbl_pj_kendaraan";
$tdatatbl_pj_kendaraan[".nSecOptions"] = 0;
$tdatatbl_pj_kendaraan[".recsPerRowPrint"] = 1;
$tdatatbl_pj_kendaraan[".mainTableOwnerID"] = "";
$tdatatbl_pj_kendaraan[".moveNext"] = 1;
$tdatatbl_pj_kendaraan[".entityType"] = 0;

$tdatatbl_pj_kendaraan[".strOriginalTableName"] = "tbl_pj_kendaraan";

	



$tdatatbl_pj_kendaraan[".showAddInPopup"] = false;

$tdatatbl_pj_kendaraan[".showEditInPopup"] = false;

$tdatatbl_pj_kendaraan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_pj_kendaraan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_pj_kendaraan[".fieldsForRegister"] = array();
	
$tdatatbl_pj_kendaraan[".listAjax"] = false;

	$tdatatbl_pj_kendaraan[".audit"] = false;

	$tdatatbl_pj_kendaraan[".locking"] = false;

$tdatatbl_pj_kendaraan[".edit"] = true;
$tdatatbl_pj_kendaraan[".afterEditAction"] = 0;
$tdatatbl_pj_kendaraan[".closePopupAfterEdit"] = 1;
$tdatatbl_pj_kendaraan[".afterEditActionDetTable"] = "Detail tables not found!";

$tdatatbl_pj_kendaraan[".add"] = true;
$tdatatbl_pj_kendaraan[".afterAddAction"] = 0;
$tdatatbl_pj_kendaraan[".closePopupAfterAdd"] = 1;
$tdatatbl_pj_kendaraan[".afterAddActionDetTable"] = "";

$tdatatbl_pj_kendaraan[".list"] = true;



$tdatatbl_pj_kendaraan[".reorderRecordsByHeader"] = true;



$tdatatbl_pj_kendaraan[".view"] = true;

$tdatatbl_pj_kendaraan[".import"] = true;

$tdatatbl_pj_kendaraan[".exportTo"] = true;

$tdatatbl_pj_kendaraan[".printFriendly"] = true;

$tdatatbl_pj_kendaraan[".delete"] = true;

$tdatatbl_pj_kendaraan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatbl_pj_kendaraan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatbl_pj_kendaraan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatbl_pj_kendaraan[".searchSaving"] = false;
//

$tdatatbl_pj_kendaraan[".showSearchPanel"] = true;
		$tdatatbl_pj_kendaraan[".flexibleSearch"] = true;

$tdatatbl_pj_kendaraan[".isUseAjaxSuggest"] = true;

$tdatatbl_pj_kendaraan[".rowHighlite"] = true;





$tdatatbl_pj_kendaraan[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_pj_kendaraan[".buttonsAdded"] = false;

$tdatatbl_pj_kendaraan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_pj_kendaraan[".isUseTimeForSearch"] = false;





$tdatatbl_pj_kendaraan[".allSearchFields"] = array();
$tdatatbl_pj_kendaraan[".filterFields"] = array();
$tdatatbl_pj_kendaraan[".requiredSearchFields"] = array();

$tdatatbl_pj_kendaraan[".allSearchFields"][] = "ID";
	$tdatatbl_pj_kendaraan[".allSearchFields"][] = "NIP KARYAWAN";
	$tdatatbl_pj_kendaraan[".allSearchFields"][] = "NOMOR_POLISI_KENDARAAN";
	$tdatatbl_pj_kendaraan[".allSearchFields"][] = "TANGGAL_MULAI";
	$tdatatbl_pj_kendaraan[".allSearchFields"][] = "TANGGAL_SELESAI";
	

$tdatatbl_pj_kendaraan[".googleLikeFields"] = array();
$tdatatbl_pj_kendaraan[".googleLikeFields"][] = "ID";
$tdatatbl_pj_kendaraan[".googleLikeFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".googleLikeFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".googleLikeFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".googleLikeFields"][] = "TANGGAL_SELESAI";


$tdatatbl_pj_kendaraan[".advSearchFields"] = array();
$tdatatbl_pj_kendaraan[".advSearchFields"][] = "ID";
$tdatatbl_pj_kendaraan[".advSearchFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".advSearchFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".advSearchFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".advSearchFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".tableType"] = "list";

$tdatatbl_pj_kendaraan[".printerPageOrientation"] = 0;
$tdatatbl_pj_kendaraan[".nPrinterPageScale"] = 100;

$tdatatbl_pj_kendaraan[".nPrinterSplitRecords"] = 40;

$tdatatbl_pj_kendaraan[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_pj_kendaraan[".geocodingEnabled"] = false;





$tdatatbl_pj_kendaraan[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_pj_kendaraan[".pageSize"] = 20;

$tdatatbl_pj_kendaraan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_pj_kendaraan[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_pj_kendaraan[".orderindexes"] = array();

$tdatatbl_pj_kendaraan[".sqlHead"] = "SELECT ID,  	`NIP KARYAWAN`,  	NOMOR_POLISI_KENDARAAN,  	TANGGAL_MULAI,  	TANGGAL_SELESAI";
$tdatatbl_pj_kendaraan[".sqlFrom"] = "FROM tbl_pj_kendaraan";
$tdatatbl_pj_kendaraan[".sqlWhereExpr"] = "";
$tdatatbl_pj_kendaraan[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_pj_kendaraan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_pj_kendaraan[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_pj_kendaraan[".highlightSearchResults"] = true;

$tableKeystbl_pj_kendaraan = array();
$tableKeystbl_pj_kendaraan[] = "ID";
$tdatatbl_pj_kendaraan[".Keys"] = $tableKeystbl_pj_kendaraan;

$tdatatbl_pj_kendaraan[".listFields"] = array();
$tdatatbl_pj_kendaraan[".listFields"][] = "ID";
$tdatatbl_pj_kendaraan[".listFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".listFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".listFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".listFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".hideMobileList"] = array();


$tdatatbl_pj_kendaraan[".viewFields"] = array();
$tdatatbl_pj_kendaraan[".viewFields"][] = "ID";
$tdatatbl_pj_kendaraan[".viewFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".viewFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".viewFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".viewFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".addFields"] = array();
$tdatatbl_pj_kendaraan[".addFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".addFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".addFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".addFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".masterListFields"] = array();
$tdatatbl_pj_kendaraan[".masterListFields"][] = "ID";
$tdatatbl_pj_kendaraan[".masterListFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".masterListFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".masterListFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".masterListFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".inlineAddFields"] = array();

$tdatatbl_pj_kendaraan[".editFields"] = array();
$tdatatbl_pj_kendaraan[".editFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".editFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".editFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".editFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".inlineEditFields"] = array();

$tdatatbl_pj_kendaraan[".updateSelectedFields"] = array();
$tdatatbl_pj_kendaraan[".updateSelectedFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".updateSelectedFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".updateSelectedFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".updateSelectedFields"][] = "TANGGAL_SELESAI";


$tdatatbl_pj_kendaraan[".exportFields"] = array();
$tdatatbl_pj_kendaraan[".exportFields"][] = "ID";
$tdatatbl_pj_kendaraan[".exportFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".exportFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".exportFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".exportFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".importFields"] = array();
$tdatatbl_pj_kendaraan[".importFields"][] = "ID";
$tdatatbl_pj_kendaraan[".importFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".importFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".importFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".importFields"][] = "TANGGAL_SELESAI";

$tdatatbl_pj_kendaraan[".printFields"] = array();
$tdatatbl_pj_kendaraan[".printFields"][] = "ID";
$tdatatbl_pj_kendaraan[".printFields"][] = "NIP KARYAWAN";
$tdatatbl_pj_kendaraan[".printFields"][] = "NOMOR_POLISI_KENDARAAN";
$tdatatbl_pj_kendaraan[".printFields"][] = "TANGGAL_MULAI";
$tdatatbl_pj_kendaraan[".printFields"][] = "TANGGAL_SELESAI";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_pj_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_pj_kendaraan","ID");
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




	$tdatatbl_pj_kendaraan["ID"] = $fdata;
//	NIP KARYAWAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NIP KARYAWAN";
	$fdata["GoodName"] = "NIP_KARYAWAN";
	$fdata["ownerTable"] = "tbl_pj_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_pj_kendaraan","NIP_KARYAWAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NIP KARYAWAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NIP KARYAWAN`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_pns";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NIP";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(NIP,'- ',nama_pegawai,'- ',instansi)";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_pj_kendaraan["NIP KARYAWAN"] = $fdata;
//	NOMOR_POLISI_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMOR_POLISI_KENDARAAN";
	$fdata["GoodName"] = "NOMOR_POLISI_KENDARAAN";
	$fdata["ownerTable"] = "tbl_pj_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_pj_kendaraan","NOMOR_POLISI_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMOR_POLISI_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMOR_POLISI_KENDARAAN";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_kendaraan";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NO_POLISI_KENDARAAN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(NO_POLISI_KENDARAAN,'-',MERK_KENDARAAN,' -  ',TIPE_MODEL_KENDARAAN)";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_pj_kendaraan["NOMOR_POLISI_KENDARAAN"] = $fdata;
//	TANGGAL_MULAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TANGGAL_MULAI";
	$fdata["GoodName"] = "TANGGAL_MULAI";
	$fdata["ownerTable"] = "tbl_pj_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_pj_kendaraan","TANGGAL_MULAI");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TANGGAL_MULAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TANGGAL_MULAI";

	
	
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

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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




	$tdatatbl_pj_kendaraan["TANGGAL_MULAI"] = $fdata;
//	TANGGAL_SELESAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TANGGAL_SELESAI";
	$fdata["GoodName"] = "TANGGAL_SELESAI";
	$fdata["ownerTable"] = "tbl_pj_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_pj_kendaraan","TANGGAL_SELESAI");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TANGGAL_SELESAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TANGGAL_SELESAI";

	
	
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

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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




	$tdatatbl_pj_kendaraan["TANGGAL_SELESAI"] = $fdata;


$tables_data["tbl_pj_kendaraan"]=&$tdatatbl_pj_kendaraan;
$field_labels["tbl_pj_kendaraan"] = &$fieldLabelstbl_pj_kendaraan;
$fieldToolTips["tbl_pj_kendaraan"] = &$fieldToolTipstbl_pj_kendaraan;
$placeHolders["tbl_pj_kendaraan"] = &$placeHolderstbl_pj_kendaraan;
$page_titles["tbl_pj_kendaraan"] = &$pageTitlestbl_pj_kendaraan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_pj_kendaraan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_pj_kendaraan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_pj_kendaraan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`NIP KARYAWAN`,  	NOMOR_POLISI_KENDARAAN,  	TANGGAL_MULAI,  	TANGGAL_SELESAI";
$proto0["m_strFrom"] = "FROM tbl_pj_kendaraan";
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
	"m_strTable" => "tbl_pj_kendaraan",
	"m_srcTableName" => "tbl_pj_kendaraan"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_pj_kendaraan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NIP KARYAWAN",
	"m_strTable" => "tbl_pj_kendaraan",
	"m_srcTableName" => "tbl_pj_kendaraan"
));

$proto8["m_sql"] = "`NIP KARYAWAN`";
$proto8["m_srcTableName"] = "tbl_pj_kendaraan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMOR_POLISI_KENDARAAN",
	"m_strTable" => "tbl_pj_kendaraan",
	"m_srcTableName" => "tbl_pj_kendaraan"
));

$proto10["m_sql"] = "NOMOR_POLISI_KENDARAAN";
$proto10["m_srcTableName"] = "tbl_pj_kendaraan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TANGGAL_MULAI",
	"m_strTable" => "tbl_pj_kendaraan",
	"m_srcTableName" => "tbl_pj_kendaraan"
));

$proto12["m_sql"] = "TANGGAL_MULAI";
$proto12["m_srcTableName"] = "tbl_pj_kendaraan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TANGGAL_SELESAI",
	"m_strTable" => "tbl_pj_kendaraan",
	"m_srcTableName" => "tbl_pj_kendaraan"
));

$proto14["m_sql"] = "TANGGAL_SELESAI";
$proto14["m_srcTableName"] = "tbl_pj_kendaraan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tbl_pj_kendaraan";
$proto17["m_srcTableName"] = "tbl_pj_kendaraan";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "NIP KARYAWAN";
$proto17["m_columns"][] = "NOMOR_POLISI_KENDARAAN";
$proto17["m_columns"][] = "TANGGAL_MULAI";
$proto17["m_columns"][] = "TANGGAL_SELESAI";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tbl_pj_kendaraan";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tbl_pj_kendaraan";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_pj_kendaraan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_pj_kendaraan = createSqlQuery_tbl_pj_kendaraan();


	
		;

					

$tdatatbl_pj_kendaraan[".sqlquery"] = $queryData_tbl_pj_kendaraan;

$tableEvents["tbl_pj_kendaraan"] = new eventsBase;
$tdatatbl_pj_kendaraan[".hasEvents"] = false;

?>