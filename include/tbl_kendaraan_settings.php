<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_kendaraan = array();
	$tdatatbl_kendaraan[".truncateText"] = true;
	$tdatatbl_kendaraan[".NumberOfChars"] = 80;
	$tdatatbl_kendaraan[".ShortName"] = "tbl_kendaraan";
	$tdatatbl_kendaraan[".OwnerID"] = "";
	$tdatatbl_kendaraan[".OriginalTable"] = "tbl_kendaraan";

//	field labels
$fieldLabelstbl_kendaraan = array();
$fieldToolTipstbl_kendaraan = array();
$pageTitlestbl_kendaraan = array();
$placeHolderstbl_kendaraan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_kendaraan["English"] = array();
	$fieldToolTipstbl_kendaraan["English"] = array();
	$placeHolderstbl_kendaraan["English"] = array();
	$pageTitlestbl_kendaraan["English"] = array();
	$fieldLabelstbl_kendaraan["English"]["ID"] = "ID";
	$fieldToolTipstbl_kendaraan["English"]["ID"] = "";
	$placeHolderstbl_kendaraan["English"]["ID"] = "";
	$fieldLabelstbl_kendaraan["English"]["NO_POLISI_KENDARAAN"] = "NO POLISI KENDARAAN";
	$fieldToolTipstbl_kendaraan["English"]["NO_POLISI_KENDARAAN"] = "";
	$placeHolderstbl_kendaraan["English"]["NO_POLISI_KENDARAAN"] = "";
	$fieldLabelstbl_kendaraan["English"]["MERK_KENDARAAN"] = "MERK KENDARAAN";
	$fieldToolTipstbl_kendaraan["English"]["MERK_KENDARAAN"] = "";
	$placeHolderstbl_kendaraan["English"]["MERK_KENDARAAN"] = "";
	$fieldLabelstbl_kendaraan["English"]["TIPE_MODEL_KENDARAAN"] = "TIPE MODEL KENDARAAN";
	$fieldToolTipstbl_kendaraan["English"]["TIPE_MODEL_KENDARAAN"] = "";
	$placeHolderstbl_kendaraan["English"]["TIPE_MODEL_KENDARAAN"] = "";
	$fieldLabelstbl_kendaraan["English"]["TAHUN_PRODUKSI"] = "TAHUN PRODUKSI";
	$fieldToolTipstbl_kendaraan["English"]["TAHUN_PRODUKSI"] = "";
	$placeHolderstbl_kendaraan["English"]["TAHUN_PRODUKSI"] = "";
	$fieldLabelstbl_kendaraan["English"]["WARNA_KENDARAAN"] = "WARNA KENDARAAN";
	$fieldToolTipstbl_kendaraan["English"]["WARNA_KENDARAAN"] = "";
	$placeHolderstbl_kendaraan["English"]["WARNA_KENDARAAN"] = "";
	$fieldLabelstbl_kendaraan["English"]["KONDISI_STATUS_KENDARAAN"] = "KONDISI STATUS KENDARAAN";
	$fieldToolTipstbl_kendaraan["English"]["KONDISI_STATUS_KENDARAAN"] = "";
	$placeHolderstbl_kendaraan["English"]["KONDISI_STATUS_KENDARAAN"] = "";
	$fieldLabelstbl_kendaraan["English"]["dibuat_tanggal"] = "Dibuat Tanggal";
	$fieldToolTipstbl_kendaraan["English"]["dibuat_tanggal"] = "";
	$placeHolderstbl_kendaraan["English"]["dibuat_tanggal"] = "";
	$fieldLabelstbl_kendaraan["English"]["dibuat_oleh"] = "Dibuat Oleh";
	$fieldToolTipstbl_kendaraan["English"]["dibuat_oleh"] = "";
	$placeHolderstbl_kendaraan["English"]["dibuat_oleh"] = "";
	$fieldLabelstbl_kendaraan["English"]["diedit_tanggal"] = "Diedit Tanggal";
	$fieldToolTipstbl_kendaraan["English"]["diedit_tanggal"] = "";
	$placeHolderstbl_kendaraan["English"]["diedit_tanggal"] = "";
	$fieldLabelstbl_kendaraan["English"]["diedit_oleh"] = "Diedit Oleh";
	$fieldToolTipstbl_kendaraan["English"]["diedit_oleh"] = "";
	$placeHolderstbl_kendaraan["English"]["diedit_oleh"] = "";
	if (count($fieldToolTipstbl_kendaraan["English"]))
		$tdatatbl_kendaraan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_kendaraan[""] = array();
	$fieldToolTipstbl_kendaraan[""] = array();
	$placeHolderstbl_kendaraan[""] = array();
	$pageTitlestbl_kendaraan[""] = array();
	$fieldLabelstbl_kendaraan[""]["dibuat_tanggal"] = "Dibuat Tanggal";
	$fieldToolTipstbl_kendaraan[""]["dibuat_tanggal"] = "";
	$placeHolderstbl_kendaraan[""]["dibuat_tanggal"] = "";
	$fieldLabelstbl_kendaraan[""]["dibuat_oleh"] = "Dibuat Oleh";
	$fieldToolTipstbl_kendaraan[""]["dibuat_oleh"] = "";
	$placeHolderstbl_kendaraan[""]["dibuat_oleh"] = "";
	$fieldLabelstbl_kendaraan[""]["diedit_tanggal"] = "Diedit Tanggal";
	$fieldToolTipstbl_kendaraan[""]["diedit_tanggal"] = "";
	$placeHolderstbl_kendaraan[""]["diedit_tanggal"] = "";
	$fieldLabelstbl_kendaraan[""]["diedit_oleh"] = "Diedit Oleh";
	$fieldToolTipstbl_kendaraan[""]["diedit_oleh"] = "";
	$placeHolderstbl_kendaraan[""]["diedit_oleh"] = "";
	if (count($fieldToolTipstbl_kendaraan[""]))
		$tdatatbl_kendaraan[".isUseToolTips"] = true;
}


	$tdatatbl_kendaraan[".NCSearch"] = true;



$tdatatbl_kendaraan[".shortTableName"] = "tbl_kendaraan";
$tdatatbl_kendaraan[".nSecOptions"] = 0;
$tdatatbl_kendaraan[".recsPerRowPrint"] = 1;
$tdatatbl_kendaraan[".mainTableOwnerID"] = "";
$tdatatbl_kendaraan[".moveNext"] = 1;
$tdatatbl_kendaraan[".entityType"] = 0;

$tdatatbl_kendaraan[".strOriginalTableName"] = "tbl_kendaraan";

	



$tdatatbl_kendaraan[".showAddInPopup"] = false;

$tdatatbl_kendaraan[".showEditInPopup"] = false;

$tdatatbl_kendaraan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_kendaraan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_kendaraan[".fieldsForRegister"] = array();

$tdatatbl_kendaraan[".listAjax"] = false;

	$tdatatbl_kendaraan[".audit"] = true;

	$tdatatbl_kendaraan[".locking"] = false;

$tdatatbl_kendaraan[".edit"] = true;
$tdatatbl_kendaraan[".afterEditAction"] = 1;
$tdatatbl_kendaraan[".closePopupAfterEdit"] = 1;
$tdatatbl_kendaraan[".afterEditActionDetTable"] = "";

$tdatatbl_kendaraan[".add"] = true;
$tdatatbl_kendaraan[".afterAddAction"] = 1;
$tdatatbl_kendaraan[".closePopupAfterAdd"] = 1;
$tdatatbl_kendaraan[".afterAddActionDetTable"] = "";

$tdatatbl_kendaraan[".list"] = true;



$tdatatbl_kendaraan[".reorderRecordsByHeader"] = true;



$tdatatbl_kendaraan[".view"] = true;

$tdatatbl_kendaraan[".import"] = true;

$tdatatbl_kendaraan[".exportTo"] = true;

$tdatatbl_kendaraan[".printFriendly"] = true;

$tdatatbl_kendaraan[".delete"] = true;

$tdatatbl_kendaraan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatbl_kendaraan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatbl_kendaraan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatbl_kendaraan[".searchSaving"] = false;
//

$tdatatbl_kendaraan[".showSearchPanel"] = true;
		$tdatatbl_kendaraan[".flexibleSearch"] = true;

$tdatatbl_kendaraan[".isUseAjaxSuggest"] = true;

$tdatatbl_kendaraan[".rowHighlite"] = true;





$tdatatbl_kendaraan[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_kendaraan[".buttonsAdded"] = false;

$tdatatbl_kendaraan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_kendaraan[".isUseTimeForSearch"] = false;



$tdatatbl_kendaraan[".badgeColor"] = "4169E1";


$tdatatbl_kendaraan[".allSearchFields"] = array();
$tdatatbl_kendaraan[".filterFields"] = array();
$tdatatbl_kendaraan[".requiredSearchFields"] = array();

$tdatatbl_kendaraan[".allSearchFields"][] = "NO_POLISI_KENDARAAN";
	$tdatatbl_kendaraan[".allSearchFields"][] = "MERK_KENDARAAN";
	$tdatatbl_kendaraan[".allSearchFields"][] = "TIPE_MODEL_KENDARAAN";
	$tdatatbl_kendaraan[".allSearchFields"][] = "TAHUN_PRODUKSI";
	$tdatatbl_kendaraan[".allSearchFields"][] = "WARNA_KENDARAAN";
	$tdatatbl_kendaraan[".allSearchFields"][] = "KONDISI_STATUS_KENDARAAN";
	

$tdatatbl_kendaraan[".googleLikeFields"] = array();
$tdatatbl_kendaraan[".googleLikeFields"][] = "ID";
$tdatatbl_kendaraan[".googleLikeFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".googleLikeFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".googleLikeFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".googleLikeFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".googleLikeFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".googleLikeFields"][] = "KONDISI_STATUS_KENDARAAN";
$tdatatbl_kendaraan[".googleLikeFields"][] = "dibuat_tanggal";
$tdatatbl_kendaraan[".googleLikeFields"][] = "dibuat_oleh";
$tdatatbl_kendaraan[".googleLikeFields"][] = "diedit_tanggal";
$tdatatbl_kendaraan[".googleLikeFields"][] = "diedit_oleh";


$tdatatbl_kendaraan[".advSearchFields"] = array();
$tdatatbl_kendaraan[".advSearchFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".advSearchFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".advSearchFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".advSearchFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".advSearchFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".advSearchFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".tableType"] = "list";

$tdatatbl_kendaraan[".printerPageOrientation"] = 0;
$tdatatbl_kendaraan[".nPrinterPageScale"] = 100;

$tdatatbl_kendaraan[".nPrinterSplitRecords"] = 40;

$tdatatbl_kendaraan[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_kendaraan[".geocodingEnabled"] = false;





$tdatatbl_kendaraan[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_kendaraan[".pageSize"] = 20;

$tdatatbl_kendaraan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_kendaraan[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_kendaraan[".orderindexes"] = array();

$tdatatbl_kendaraan[".sqlHead"] = "SELECT ID,  	NO_POLISI_KENDARAAN,  	MERK_KENDARAAN,  	TIPE_MODEL_KENDARAAN,  	TAHUN_PRODUKSI,  	WARNA_KENDARAAN,  	KONDISI_STATUS_KENDARAAN,  	dibuat_tanggal,  	dibuat_oleh,  	diedit_tanggal,  	diedit_oleh";
$tdatatbl_kendaraan[".sqlFrom"] = "FROM tbl_kendaraan";
$tdatatbl_kendaraan[".sqlWhereExpr"] = "";
$tdatatbl_kendaraan[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_kendaraan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_kendaraan[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_kendaraan[".highlightSearchResults"] = true;

$tableKeystbl_kendaraan = array();
$tableKeystbl_kendaraan[] = "ID";
$tdatatbl_kendaraan[".Keys"] = $tableKeystbl_kendaraan;

$tdatatbl_kendaraan[".listFields"] = array();
$tdatatbl_kendaraan[".listFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".listFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".listFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".listFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".listFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".listFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".hideMobileList"] = array();


$tdatatbl_kendaraan[".viewFields"] = array();
$tdatatbl_kendaraan[".viewFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".viewFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".viewFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".viewFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".viewFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".viewFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".addFields"] = array();
$tdatatbl_kendaraan[".addFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".addFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".addFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".addFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".addFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".addFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".masterListFields"] = array();
$tdatatbl_kendaraan[".masterListFields"][] = "ID";
$tdatatbl_kendaraan[".masterListFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".masterListFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".masterListFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".masterListFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".masterListFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".masterListFields"][] = "KONDISI_STATUS_KENDARAAN";
$tdatatbl_kendaraan[".masterListFields"][] = "dibuat_tanggal";
$tdatatbl_kendaraan[".masterListFields"][] = "dibuat_oleh";
$tdatatbl_kendaraan[".masterListFields"][] = "diedit_tanggal";
$tdatatbl_kendaraan[".masterListFields"][] = "diedit_oleh";

$tdatatbl_kendaraan[".inlineAddFields"] = array();

$tdatatbl_kendaraan[".editFields"] = array();
$tdatatbl_kendaraan[".editFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".editFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".editFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".editFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".editFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".editFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".inlineEditFields"] = array();

$tdatatbl_kendaraan[".updateSelectedFields"] = array();
$tdatatbl_kendaraan[".updateSelectedFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".updateSelectedFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".updateSelectedFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".updateSelectedFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".updateSelectedFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".updateSelectedFields"][] = "KONDISI_STATUS_KENDARAAN";


$tdatatbl_kendaraan[".exportFields"] = array();
$tdatatbl_kendaraan[".exportFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".exportFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".exportFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".exportFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".exportFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".exportFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".importFields"] = array();
$tdatatbl_kendaraan[".importFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".importFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".importFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".importFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".importFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".importFields"][] = "KONDISI_STATUS_KENDARAAN";

$tdatatbl_kendaraan[".printFields"] = array();
$tdatatbl_kendaraan[".printFields"][] = "NO_POLISI_KENDARAAN";
$tdatatbl_kendaraan[".printFields"][] = "MERK_KENDARAAN";
$tdatatbl_kendaraan[".printFields"][] = "TIPE_MODEL_KENDARAAN";
$tdatatbl_kendaraan[".printFields"][] = "TAHUN_PRODUKSI";
$tdatatbl_kendaraan[".printFields"][] = "WARNA_KENDARAAN";
$tdatatbl_kendaraan[".printFields"][] = "KONDISI_STATUS_KENDARAAN";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
			
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








	$tdatatbl_kendaraan["ID"] = $fdata;
//	NO_POLISI_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NO_POLISI_KENDARAAN";
	$fdata["GoodName"] = "NO_POLISI_KENDARAAN";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","NO_POLISI_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NO_POLISI_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NO_POLISI_KENDARAAN";

	
	
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




	$tdatatbl_kendaraan["NO_POLISI_KENDARAAN"] = $fdata;
//	MERK_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MERK_KENDARAAN";
	$fdata["GoodName"] = "MERK_KENDARAAN";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","MERK_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MERK_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MERK_KENDARAAN";

	
	
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




	$tdatatbl_kendaraan["MERK_KENDARAAN"] = $fdata;
//	TIPE_MODEL_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPE_MODEL_KENDARAAN";
	$fdata["GoodName"] = "TIPE_MODEL_KENDARAAN";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","TIPE_MODEL_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TIPE_MODEL_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPE_MODEL_KENDARAAN";

	
	
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




	$tdatatbl_kendaraan["TIPE_MODEL_KENDARAAN"] = $fdata;
//	TAHUN_PRODUKSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TAHUN_PRODUKSI";
	$fdata["GoodName"] = "TAHUN_PRODUKSI";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","TAHUN_PRODUKSI");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TAHUN_PRODUKSI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAHUN_PRODUKSI";

	
	
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




	$tdatatbl_kendaraan["TAHUN_PRODUKSI"] = $fdata;
//	WARNA_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WARNA_KENDARAAN";
	$fdata["GoodName"] = "WARNA_KENDARAAN";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","WARNA_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WARNA_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WARNA_KENDARAAN";

	
	
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




	$tdatatbl_kendaraan["WARNA_KENDARAAN"] = $fdata;
//	KONDISI_STATUS_KENDARAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "KONDISI_STATUS_KENDARAAN";
	$fdata["GoodName"] = "KONDISI_STATUS_KENDARAAN";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","KONDISI_STATUS_KENDARAAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "KONDISI_STATUS_KENDARAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KONDISI_STATUS_KENDARAAN";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "BAIK";
	$edata["LookupValues"][] = "RUSAK RINGAN";
	$edata["LookupValues"][] = "RUSAK BERAT";

	
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




	$tdatatbl_kendaraan["KONDISI_STATUS_KENDARAAN"] = $fdata;
//	dibuat_tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dibuat_tanggal";
	$fdata["GoodName"] = "dibuat_tanggal";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","dibuat_tanggal");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dibuat_tanggal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dibuat_tanggal";

	
	
			
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








	$tdatatbl_kendaraan["dibuat_tanggal"] = $fdata;
//	dibuat_oleh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dibuat_oleh";
	$fdata["GoodName"] = "dibuat_oleh";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","dibuat_oleh");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dibuat_oleh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dibuat_oleh";

	
	
			
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








	$tdatatbl_kendaraan["dibuat_oleh"] = $fdata;
//	diedit_tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "diedit_tanggal";
	$fdata["GoodName"] = "diedit_tanggal";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","diedit_tanggal");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "diedit_tanggal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diedit_tanggal";

	
	
			
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








	$tdatatbl_kendaraan["diedit_tanggal"] = $fdata;
//	diedit_oleh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "diedit_oleh";
	$fdata["GoodName"] = "diedit_oleh";
	$fdata["ownerTable"] = "tbl_kendaraan";
	$fdata["Label"] = GetFieldLabel("tbl_kendaraan","diedit_oleh");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "diedit_oleh";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diedit_oleh";

	
	
			
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








	$tdatatbl_kendaraan["diedit_oleh"] = $fdata;


$tables_data["tbl_kendaraan"]=&$tdatatbl_kendaraan;
$field_labels["tbl_kendaraan"] = &$fieldLabelstbl_kendaraan;
$fieldToolTips["tbl_kendaraan"] = &$fieldToolTipstbl_kendaraan;
$placeHolders["tbl_kendaraan"] = &$placeHolderstbl_kendaraan;
$page_titles["tbl_kendaraan"] = &$pageTitlestbl_kendaraan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_kendaraan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_kendaraan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_kendaraan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	NO_POLISI_KENDARAAN,  	MERK_KENDARAAN,  	TIPE_MODEL_KENDARAAN,  	TAHUN_PRODUKSI,  	WARNA_KENDARAAN,  	KONDISI_STATUS_KENDARAAN,  	dibuat_tanggal,  	dibuat_oleh,  	diedit_tanggal,  	diedit_oleh";
$proto0["m_strFrom"] = "FROM tbl_kendaraan";
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
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_kendaraan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NO_POLISI_KENDARAAN",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto8["m_sql"] = "NO_POLISI_KENDARAAN";
$proto8["m_srcTableName"] = "tbl_kendaraan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MERK_KENDARAAN",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto10["m_sql"] = "MERK_KENDARAAN";
$proto10["m_srcTableName"] = "tbl_kendaraan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPE_MODEL_KENDARAAN",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto12["m_sql"] = "TIPE_MODEL_KENDARAAN";
$proto12["m_srcTableName"] = "tbl_kendaraan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TAHUN_PRODUKSI",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto14["m_sql"] = "TAHUN_PRODUKSI";
$proto14["m_srcTableName"] = "tbl_kendaraan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WARNA_KENDARAAN",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto16["m_sql"] = "WARNA_KENDARAAN";
$proto16["m_srcTableName"] = "tbl_kendaraan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "KONDISI_STATUS_KENDARAAN",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto18["m_sql"] = "KONDISI_STATUS_KENDARAAN";
$proto18["m_srcTableName"] = "tbl_kendaraan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dibuat_tanggal",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto20["m_sql"] = "dibuat_tanggal";
$proto20["m_srcTableName"] = "tbl_kendaraan";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dibuat_oleh",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto22["m_sql"] = "dibuat_oleh";
$proto22["m_srcTableName"] = "tbl_kendaraan";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "diedit_tanggal",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto24["m_sql"] = "diedit_tanggal";
$proto24["m_srcTableName"] = "tbl_kendaraan";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "diedit_oleh",
	"m_strTable" => "tbl_kendaraan",
	"m_srcTableName" => "tbl_kendaraan"
));

$proto26["m_sql"] = "diedit_oleh";
$proto26["m_srcTableName"] = "tbl_kendaraan";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "tbl_kendaraan";
$proto29["m_srcTableName"] = "tbl_kendaraan";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "NO_POLISI_KENDARAAN";
$proto29["m_columns"][] = "MERK_KENDARAAN";
$proto29["m_columns"][] = "TIPE_MODEL_KENDARAAN";
$proto29["m_columns"][] = "TAHUN_PRODUKSI";
$proto29["m_columns"][] = "WARNA_KENDARAAN";
$proto29["m_columns"][] = "KONDISI_STATUS_KENDARAAN";
$proto29["m_columns"][] = "dibuat_tanggal";
$proto29["m_columns"][] = "dibuat_oleh";
$proto29["m_columns"][] = "diedit_tanggal";
$proto29["m_columns"][] = "diedit_oleh";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "tbl_kendaraan";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tbl_kendaraan";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_kendaraan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_kendaraan = createSqlQuery_tbl_kendaraan();


	
		;

											

$tdatatbl_kendaraan[".sqlquery"] = $queryData_tbl_kendaraan;

$tableEvents["tbl_kendaraan"] = new eventsBase;
$tdatatbl_kendaraan[".hasEvents"] = false;

?>