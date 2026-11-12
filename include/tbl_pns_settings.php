<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_pns = array();
	$tdatatbl_pns[".truncateText"] = true;
	$tdatatbl_pns[".NumberOfChars"] = 80;
	$tdatatbl_pns[".ShortName"] = "tbl_pns";
	$tdatatbl_pns[".OwnerID"] = "";
	$tdatatbl_pns[".OriginalTable"] = "tbl_pns";

//	field labels
$fieldLabelstbl_pns = array();
$fieldToolTipstbl_pns = array();
$pageTitlestbl_pns = array();
$placeHolderstbl_pns = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstbl_pns["English"] = array();
	$fieldToolTipstbl_pns["English"] = array();
	$placeHolderstbl_pns["English"] = array();
	$pageTitlestbl_pns["English"] = array();
	$fieldLabelstbl_pns["English"]["ID"] = "ID";
	$fieldToolTipstbl_pns["English"]["ID"] = "";
	$placeHolderstbl_pns["English"]["ID"] = "";
	$fieldLabelstbl_pns["English"]["nama_pegawai"] = "Nama Pegawai";
	$fieldToolTipstbl_pns["English"]["nama_pegawai"] = "";
	$placeHolderstbl_pns["English"]["nama_pegawai"] = "";
	$fieldLabelstbl_pns["English"]["NIP"] = "NIP";
	$fieldToolTipstbl_pns["English"]["NIP"] = "";
	$placeHolderstbl_pns["English"]["NIP"] = "";
	$fieldLabelstbl_pns["English"]["JABATAN"] = "JABATAN";
	$fieldToolTipstbl_pns["English"]["JABATAN"] = "";
	$placeHolderstbl_pns["English"]["JABATAN"] = "";
	$fieldLabelstbl_pns["English"]["GOLONGAN"] = "GOLONGAN";
	$fieldToolTipstbl_pns["English"]["GOLONGAN"] = "";
	$placeHolderstbl_pns["English"]["GOLONGAN"] = "";
	$fieldLabelstbl_pns["English"]["instansi"] = "Instansi";
	$fieldToolTipstbl_pns["English"]["instansi"] = "";
	$placeHolderstbl_pns["English"]["instansi"] = "";
	$pageTitlestbl_pns["English"]["add"] = "TAMBAH DATA KARYAWAN";
	if (count($fieldToolTipstbl_pns["English"]))
		$tdatatbl_pns[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_pns[""] = array();
	$fieldToolTipstbl_pns[""] = array();
	$placeHolderstbl_pns[""] = array();
	$pageTitlestbl_pns[""] = array();
	$fieldLabelstbl_pns[""]["instansi"] = "Instansi";
	$fieldToolTipstbl_pns[""]["instansi"] = "";
	$placeHolderstbl_pns[""]["instansi"] = "";
	if (count($fieldToolTipstbl_pns[""]))
		$tdatatbl_pns[".isUseToolTips"] = true;
}


	$tdatatbl_pns[".NCSearch"] = true;



$tdatatbl_pns[".shortTableName"] = "tbl_pns";
$tdatatbl_pns[".nSecOptions"] = 0;
$tdatatbl_pns[".recsPerRowPrint"] = 1;
$tdatatbl_pns[".mainTableOwnerID"] = "";
$tdatatbl_pns[".moveNext"] = 1;
$tdatatbl_pns[".entityType"] = 0;

$tdatatbl_pns[".strOriginalTableName"] = "tbl_pns";

	



$tdatatbl_pns[".showAddInPopup"] = false;

$tdatatbl_pns[".showEditInPopup"] = false;

$tdatatbl_pns[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_pns[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_pns[".fieldsForRegister"] = array();
	
$tdatatbl_pns[".listAjax"] = false;

	$tdatatbl_pns[".audit"] = true;

	$tdatatbl_pns[".locking"] = false;

$tdatatbl_pns[".edit"] = true;
$tdatatbl_pns[".afterEditAction"] = 1;
$tdatatbl_pns[".closePopupAfterEdit"] = 1;
$tdatatbl_pns[".afterEditActionDetTable"] = "";

$tdatatbl_pns[".add"] = true;
$tdatatbl_pns[".afterAddAction"] = 0;
$tdatatbl_pns[".closePopupAfterAdd"] = 1;
$tdatatbl_pns[".afterAddActionDetTable"] = "";

$tdatatbl_pns[".list"] = true;



$tdatatbl_pns[".reorderRecordsByHeader"] = true;



$tdatatbl_pns[".view"] = true;

$tdatatbl_pns[".import"] = true;

$tdatatbl_pns[".exportTo"] = true;

$tdatatbl_pns[".printFriendly"] = true;

$tdatatbl_pns[".delete"] = true;

$tdatatbl_pns[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatbl_pns[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatbl_pns[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatbl_pns[".searchSaving"] = false;
//

$tdatatbl_pns[".showSearchPanel"] = true;
		$tdatatbl_pns[".flexibleSearch"] = true;

$tdatatbl_pns[".isUseAjaxSuggest"] = true;

$tdatatbl_pns[".rowHighlite"] = true;





$tdatatbl_pns[".ajaxCodeSnippetAdded"] = false;

$tdatatbl_pns[".buttonsAdded"] = false;

$tdatatbl_pns[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_pns[".isUseTimeForSearch"] = false;



$tdatatbl_pns[".badgeColor"] = "DAA520";


$tdatatbl_pns[".allSearchFields"] = array();
$tdatatbl_pns[".filterFields"] = array();
$tdatatbl_pns[".requiredSearchFields"] = array();

$tdatatbl_pns[".allSearchFields"][] = "ID";
	$tdatatbl_pns[".allSearchFields"][] = "nama_pegawai";
	$tdatatbl_pns[".allSearchFields"][] = "NIP";
	$tdatatbl_pns[".allSearchFields"][] = "JABATAN";
	$tdatatbl_pns[".allSearchFields"][] = "GOLONGAN";
	$tdatatbl_pns[".allSearchFields"][] = "instansi";
	

$tdatatbl_pns[".googleLikeFields"] = array();
$tdatatbl_pns[".googleLikeFields"][] = "ID";
$tdatatbl_pns[".googleLikeFields"][] = "nama_pegawai";
$tdatatbl_pns[".googleLikeFields"][] = "NIP";
$tdatatbl_pns[".googleLikeFields"][] = "JABATAN";
$tdatatbl_pns[".googleLikeFields"][] = "GOLONGAN";
$tdatatbl_pns[".googleLikeFields"][] = "instansi";


$tdatatbl_pns[".advSearchFields"] = array();
$tdatatbl_pns[".advSearchFields"][] = "ID";
$tdatatbl_pns[".advSearchFields"][] = "nama_pegawai";
$tdatatbl_pns[".advSearchFields"][] = "NIP";
$tdatatbl_pns[".advSearchFields"][] = "JABATAN";
$tdatatbl_pns[".advSearchFields"][] = "GOLONGAN";
$tdatatbl_pns[".advSearchFields"][] = "instansi";

$tdatatbl_pns[".tableType"] = "list";

$tdatatbl_pns[".printerPageOrientation"] = 0;
$tdatatbl_pns[".nPrinterPageScale"] = 100;

$tdatatbl_pns[".nPrinterSplitRecords"] = 40;

$tdatatbl_pns[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_pns[".geocodingEnabled"] = false;





$tdatatbl_pns[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_pns[".pageSize"] = 20;

$tdatatbl_pns[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_pns[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_pns[".orderindexes"] = array();

$tdatatbl_pns[".sqlHead"] = "SELECT ID,  	nama_pegawai,  	NIP,  	JABATAN,  	GOLONGAN,  	instansi";
$tdatatbl_pns[".sqlFrom"] = "FROM tbl_pns";
$tdatatbl_pns[".sqlWhereExpr"] = "";
$tdatatbl_pns[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_pns[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_pns[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_pns[".highlightSearchResults"] = true;

$tableKeystbl_pns = array();
$tableKeystbl_pns[] = "ID";
$tdatatbl_pns[".Keys"] = $tableKeystbl_pns;

$tdatatbl_pns[".listFields"] = array();
$tdatatbl_pns[".listFields"][] = "ID";
$tdatatbl_pns[".listFields"][] = "nama_pegawai";
$tdatatbl_pns[".listFields"][] = "NIP";
$tdatatbl_pns[".listFields"][] = "JABATAN";
$tdatatbl_pns[".listFields"][] = "GOLONGAN";
$tdatatbl_pns[".listFields"][] = "instansi";

$tdatatbl_pns[".hideMobileList"] = array();


$tdatatbl_pns[".viewFields"] = array();
$tdatatbl_pns[".viewFields"][] = "ID";
$tdatatbl_pns[".viewFields"][] = "nama_pegawai";
$tdatatbl_pns[".viewFields"][] = "NIP";
$tdatatbl_pns[".viewFields"][] = "JABATAN";
$tdatatbl_pns[".viewFields"][] = "GOLONGAN";
$tdatatbl_pns[".viewFields"][] = "instansi";

$tdatatbl_pns[".addFields"] = array();
$tdatatbl_pns[".addFields"][] = "nama_pegawai";
$tdatatbl_pns[".addFields"][] = "NIP";
$tdatatbl_pns[".addFields"][] = "JABATAN";
$tdatatbl_pns[".addFields"][] = "GOLONGAN";
$tdatatbl_pns[".addFields"][] = "instansi";

$tdatatbl_pns[".masterListFields"] = array();
$tdatatbl_pns[".masterListFields"][] = "ID";
$tdatatbl_pns[".masterListFields"][] = "nama_pegawai";
$tdatatbl_pns[".masterListFields"][] = "NIP";
$tdatatbl_pns[".masterListFields"][] = "JABATAN";
$tdatatbl_pns[".masterListFields"][] = "GOLONGAN";
$tdatatbl_pns[".masterListFields"][] = "instansi";

$tdatatbl_pns[".inlineAddFields"] = array();
$tdatatbl_pns[".inlineAddFields"][] = "nama_pegawai";
$tdatatbl_pns[".inlineAddFields"][] = "NIP";
$tdatatbl_pns[".inlineAddFields"][] = "JABATAN";
$tdatatbl_pns[".inlineAddFields"][] = "GOLONGAN";
$tdatatbl_pns[".inlineAddFields"][] = "instansi";

$tdatatbl_pns[".editFields"] = array();
$tdatatbl_pns[".editFields"][] = "nama_pegawai";
$tdatatbl_pns[".editFields"][] = "NIP";
$tdatatbl_pns[".editFields"][] = "JABATAN";
$tdatatbl_pns[".editFields"][] = "GOLONGAN";
$tdatatbl_pns[".editFields"][] = "instansi";

$tdatatbl_pns[".inlineEditFields"] = array();
$tdatatbl_pns[".inlineEditFields"][] = "nama_pegawai";
$tdatatbl_pns[".inlineEditFields"][] = "NIP";
$tdatatbl_pns[".inlineEditFields"][] = "JABATAN";
$tdatatbl_pns[".inlineEditFields"][] = "GOLONGAN";
$tdatatbl_pns[".inlineEditFields"][] = "instansi";

$tdatatbl_pns[".updateSelectedFields"] = array();
$tdatatbl_pns[".updateSelectedFields"][] = "nama_pegawai";
$tdatatbl_pns[".updateSelectedFields"][] = "NIP";
$tdatatbl_pns[".updateSelectedFields"][] = "JABATAN";
$tdatatbl_pns[".updateSelectedFields"][] = "GOLONGAN";
$tdatatbl_pns[".updateSelectedFields"][] = "instansi";


$tdatatbl_pns[".exportFields"] = array();
$tdatatbl_pns[".exportFields"][] = "ID";
$tdatatbl_pns[".exportFields"][] = "nama_pegawai";
$tdatatbl_pns[".exportFields"][] = "NIP";
$tdatatbl_pns[".exportFields"][] = "JABATAN";
$tdatatbl_pns[".exportFields"][] = "GOLONGAN";
$tdatatbl_pns[".exportFields"][] = "instansi";

$tdatatbl_pns[".importFields"] = array();
$tdatatbl_pns[".importFields"][] = "ID";
$tdatatbl_pns[".importFields"][] = "nama_pegawai";
$tdatatbl_pns[".importFields"][] = "NIP";
$tdatatbl_pns[".importFields"][] = "JABATAN";
$tdatatbl_pns[".importFields"][] = "GOLONGAN";
$tdatatbl_pns[".importFields"][] = "instansi";

$tdatatbl_pns[".printFields"] = array();
$tdatatbl_pns[".printFields"][] = "ID";
$tdatatbl_pns[".printFields"][] = "nama_pegawai";
$tdatatbl_pns[".printFields"][] = "NIP";
$tdatatbl_pns[".printFields"][] = "JABATAN";
$tdatatbl_pns[".printFields"][] = "GOLONGAN";
$tdatatbl_pns[".printFields"][] = "instansi";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","ID");
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




	$tdatatbl_pns["ID"] = $fdata;
//	nama_pegawai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama_pegawai";
	$fdata["GoodName"] = "nama_pegawai";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","nama_pegawai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nama_pegawai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_pegawai";

	
	
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




	$tdatatbl_pns["nama_pegawai"] = $fdata;
//	NIP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NIP";
	$fdata["GoodName"] = "NIP";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","NIP");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NIP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIP";

	
	
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




	$tdatatbl_pns["NIP"] = $fdata;
//	JABATAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "JABATAN";
	$fdata["GoodName"] = "JABATAN";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","JABATAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JABATAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JABATAN";

	
	
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




	$tdatatbl_pns["JABATAN"] = $fdata;
//	GOLONGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "GOLONGAN";
	$fdata["GoodName"] = "GOLONGAN";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","GOLONGAN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "GOLONGAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GOLONGAN";

	
	
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




	$tdatatbl_pns["GOLONGAN"] = $fdata;
//	instansi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "instansi";
	$fdata["GoodName"] = "instansi";
	$fdata["ownerTable"] = "tbl_pns";
	$fdata["Label"] = GetFieldLabel("tbl_pns","instansi");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "instansi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "instansi";

	
	
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
	$edata["LookupTable"] = "tbl_perangkat_daerah";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NAMA_INSTANSI";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NAMA_INSTANSI";

	
	$edata["LookupOrderBy"] = "NAMA_INSTANSI";

	
	
	
	

	
	
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




	$tdatatbl_pns["instansi"] = $fdata;


$tables_data["tbl_pns"]=&$tdatatbl_pns;
$field_labels["tbl_pns"] = &$fieldLabelstbl_pns;
$fieldToolTips["tbl_pns"] = &$fieldToolTipstbl_pns;
$placeHolders["tbl_pns"] = &$placeHolderstbl_pns;
$page_titles["tbl_pns"] = &$pageTitlestbl_pns;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_pns"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_pns"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_pns()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	nama_pegawai,  	NIP,  	JABATAN,  	GOLONGAN,  	instansi";
$proto0["m_strFrom"] = "FROM tbl_pns";
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
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tbl_pns";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_pegawai",
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto8["m_sql"] = "nama_pegawai";
$proto8["m_srcTableName"] = "tbl_pns";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NIP",
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto10["m_sql"] = "NIP";
$proto10["m_srcTableName"] = "tbl_pns";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "JABATAN",
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto12["m_sql"] = "JABATAN";
$proto12["m_srcTableName"] = "tbl_pns";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "GOLONGAN",
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto14["m_sql"] = "GOLONGAN";
$proto14["m_srcTableName"] = "tbl_pns";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "instansi",
	"m_strTable" => "tbl_pns",
	"m_srcTableName" => "tbl_pns"
));

$proto16["m_sql"] = "instansi";
$proto16["m_srcTableName"] = "tbl_pns";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "tbl_pns";
$proto19["m_srcTableName"] = "tbl_pns";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "nama_pegawai";
$proto19["m_columns"][] = "NIP";
$proto19["m_columns"][] = "JABATAN";
$proto19["m_columns"][] = "GOLONGAN";
$proto19["m_columns"][] = "instansi";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "tbl_pns";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "tbl_pns";
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
$proto0["m_srcTableName"]="tbl_pns";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_pns = createSqlQuery_tbl_pns();


	
		;

						

$tdatatbl_pns[".sqlquery"] = $queryData_tbl_pns;

$tableEvents["tbl_pns"] = new eventsBase;
$tdatatbl_pns[".hasEvents"] = false;

?>