<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasistem_kendaraan_dinas_operasional_users = array();
	$tdatasistem_kendaraan_dinas_operasional_users[".truncateText"] = true;
	$tdatasistem_kendaraan_dinas_operasional_users[".NumberOfChars"] = 80;
	$tdatasistem_kendaraan_dinas_operasional_users[".ShortName"] = "sistem_kendaraan_dinas_operasional_users";
	$tdatasistem_kendaraan_dinas_operasional_users[".OwnerID"] = "";
	$tdatasistem_kendaraan_dinas_operasional_users[".OriginalTable"] = "sistem kendaraan dinas operasional_users";

//	field labels
$fieldLabelssistem_kendaraan_dinas_operasional_users = array();
$fieldToolTipssistem_kendaraan_dinas_operasional_users = array();
$pageTitlessistem_kendaraan_dinas_operasional_users = array();
$placeHolderssistem_kendaraan_dinas_operasional_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"] = array();
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"] = array();
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"] = array();
	$pageTitlessistem_kendaraan_dinas_operasional_users["English"] = array();
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["ID"] = "ID";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["ID"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["ID"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["username"] = "Username";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["username"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["username"] = "masukkan NIP";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["password"] = "Password";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["password"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["password"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["email"] = "Email";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["email"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["email"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["fullname"] = "Fullname";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["fullname"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["fullname"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["groupid"] = "Groupid";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["groupid"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["groupid"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users["English"]["active"] = "Active";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]["active"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users["English"]["active"] = "";
	if (count($fieldToolTipssistem_kendaraan_dinas_operasional_users["English"]))
		$tdatasistem_kendaraan_dinas_operasional_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""] = array();
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""] = array();
	$placeHolderssistem_kendaraan_dinas_operasional_users[""] = array();
	$pageTitlessistem_kendaraan_dinas_operasional_users[""] = array();
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["ID"] = "ID";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["ID"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["ID"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["username"] = "Username";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["username"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["username"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["password"] = "Password";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["password"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["password"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["email"] = "Email";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["email"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["email"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["fullname"] = "Fullname";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["fullname"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["fullname"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["groupid"] = "Groupid";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["groupid"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["groupid"] = "";
	$fieldLabelssistem_kendaraan_dinas_operasional_users[""]["active"] = "Active";
	$fieldToolTipssistem_kendaraan_dinas_operasional_users[""]["active"] = "";
	$placeHolderssistem_kendaraan_dinas_operasional_users[""]["active"] = "";
	if (count($fieldToolTipssistem_kendaraan_dinas_operasional_users[""]))
		$tdatasistem_kendaraan_dinas_operasional_users[".isUseToolTips"] = true;
}


	$tdatasistem_kendaraan_dinas_operasional_users[".NCSearch"] = true;



$tdatasistem_kendaraan_dinas_operasional_users[".shortTableName"] = "sistem_kendaraan_dinas_operasional_users";
$tdatasistem_kendaraan_dinas_operasional_users[".nSecOptions"] = 0;
$tdatasistem_kendaraan_dinas_operasional_users[".recsPerRowPrint"] = 1;
$tdatasistem_kendaraan_dinas_operasional_users[".mainTableOwnerID"] = "";
$tdatasistem_kendaraan_dinas_operasional_users[".moveNext"] = 1;
$tdatasistem_kendaraan_dinas_operasional_users[".entityType"] = 0;

$tdatasistem_kendaraan_dinas_operasional_users[".strOriginalTableName"] = "sistem kendaraan dinas operasional_users";

	



$tdatasistem_kendaraan_dinas_operasional_users[".showAddInPopup"] = false;

$tdatasistem_kendaraan_dinas_operasional_users[".showEditInPopup"] = false;

$tdatasistem_kendaraan_dinas_operasional_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasistem_kendaraan_dinas_operasional_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasistem_kendaraan_dinas_operasional_users[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatasistem_kendaraan_dinas_operasional_users[".fieldsForRegister"] = array();
$tdatasistem_kendaraan_dinas_operasional_users[".fieldsForRegister"][] = "username";
			$tdatasistem_kendaraan_dinas_operasional_users[".fieldsForRegister"][] = "password";
			$tdatasistem_kendaraan_dinas_operasional_users[".fieldsForRegister"][] = "fullname";
/*
$tdatasistem_kendaraan_dinas_operasional_users[".PasswordField"] = "password";
$tdatasistem_kendaraan_dinas_operasional_users[".UserNameField"] = "username";
*/
//End register settings

$tdatasistem_kendaraan_dinas_operasional_users[".listAjax"] = false;

	$tdatasistem_kendaraan_dinas_operasional_users[".audit"] = true;

	$tdatasistem_kendaraan_dinas_operasional_users[".locking"] = false;






$tdatasistem_kendaraan_dinas_operasional_users[".reorderRecordsByHeader"] = true;








$tdatasistem_kendaraan_dinas_operasional_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasistem_kendaraan_dinas_operasional_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasistem_kendaraan_dinas_operasional_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasistem_kendaraan_dinas_operasional_users[".searchSaving"] = false;
//

$tdatasistem_kendaraan_dinas_operasional_users[".showSearchPanel"] = true;
		$tdatasistem_kendaraan_dinas_operasional_users[".flexibleSearch"] = true;

$tdatasistem_kendaraan_dinas_operasional_users[".isUseAjaxSuggest"] = true;

$tdatasistem_kendaraan_dinas_operasional_users[".rowHighlite"] = true;





$tdatasistem_kendaraan_dinas_operasional_users[".ajaxCodeSnippetAdded"] = false;

$tdatasistem_kendaraan_dinas_operasional_users[".buttonsAdded"] = false;

$tdatasistem_kendaraan_dinas_operasional_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasistem_kendaraan_dinas_operasional_users[".isUseTimeForSearch"] = false;





$tdatasistem_kendaraan_dinas_operasional_users[".allSearchFields"] = array();
$tdatasistem_kendaraan_dinas_operasional_users[".filterFields"] = array();
$tdatasistem_kendaraan_dinas_operasional_users[".requiredSearchFields"] = array();



$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"] = array();
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "ID";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "username";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "password";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "email";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "fullname";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "groupid";
$tdatasistem_kendaraan_dinas_operasional_users[".googleLikeFields"][] = "active";



$tdatasistem_kendaraan_dinas_operasional_users[".tableType"] = "list";

$tdatasistem_kendaraan_dinas_operasional_users[".printerPageOrientation"] = 0;
$tdatasistem_kendaraan_dinas_operasional_users[".nPrinterPageScale"] = 100;

$tdatasistem_kendaraan_dinas_operasional_users[".nPrinterSplitRecords"] = 40;

$tdatasistem_kendaraan_dinas_operasional_users[".nPrinterPDFSplitRecords"] = 40;



$tdatasistem_kendaraan_dinas_operasional_users[".geocodingEnabled"] = false;





$tdatasistem_kendaraan_dinas_operasional_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasistem_kendaraan_dinas_operasional_users[".pageSize"] = 20;

$tdatasistem_kendaraan_dinas_operasional_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasistem_kendaraan_dinas_operasional_users[".strOrderBy"] = $tstrOrderBy;

$tdatasistem_kendaraan_dinas_operasional_users[".orderindexes"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatasistem_kendaraan_dinas_operasional_users[".sqlFrom"] = "FROM `sistem kendaraan dinas operasional_users`";
$tdatasistem_kendaraan_dinas_operasional_users[".sqlWhereExpr"] = "";
$tdatasistem_kendaraan_dinas_operasional_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasistem_kendaraan_dinas_operasional_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasistem_kendaraan_dinas_operasional_users[".arrGroupsPerPage"] = $arrGPP;

$tdatasistem_kendaraan_dinas_operasional_users[".highlightSearchResults"] = true;

$tableKeyssistem_kendaraan_dinas_operasional_users = array();
$tableKeyssistem_kendaraan_dinas_operasional_users[] = "ID";
$tdatasistem_kendaraan_dinas_operasional_users[".Keys"] = $tableKeyssistem_kendaraan_dinas_operasional_users;

$tdatasistem_kendaraan_dinas_operasional_users[".listFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".hideMobileList"] = array();


$tdatasistem_kendaraan_dinas_operasional_users[".viewFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".addFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"] = array();
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "ID";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "username";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "password";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "email";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "fullname";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "groupid";
$tdatasistem_kendaraan_dinas_operasional_users[".masterListFields"][] = "active";

$tdatasistem_kendaraan_dinas_operasional_users[".inlineAddFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".editFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".inlineEditFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".updateSelectedFields"] = array();


$tdatasistem_kendaraan_dinas_operasional_users[".exportFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".importFields"] = array();

$tdatasistem_kendaraan_dinas_operasional_users[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","ID");
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








	$tdatasistem_kendaraan_dinas_operasional_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
			
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasistem_kendaraan_dinas_operasional_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasistem_kendaraan_dinas_operasional_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
			
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








	$tdatasistem_kendaraan_dinas_operasional_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
			
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
						if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatasistem_kendaraan_dinas_operasional_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
			
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








	$tdatasistem_kendaraan_dinas_operasional_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "sistem kendaraan dinas operasional_users";
	$fdata["Label"] = GetFieldLabel("sistem_kendaraan_dinas_operasional_users","active");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
			
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








	$tdatasistem_kendaraan_dinas_operasional_users["active"] = $fdata;


$tables_data["sistem kendaraan dinas operasional_users"]=&$tdatasistem_kendaraan_dinas_operasional_users;
$field_labels["sistem_kendaraan_dinas_operasional_users"] = &$fieldLabelssistem_kendaraan_dinas_operasional_users;
$fieldToolTips["sistem_kendaraan_dinas_operasional_users"] = &$fieldToolTipssistem_kendaraan_dinas_operasional_users;
$placeHolders["sistem_kendaraan_dinas_operasional_users"] = &$placeHolderssistem_kendaraan_dinas_operasional_users;
$page_titles["sistem_kendaraan_dinas_operasional_users"] = &$pageTitlessistem_kendaraan_dinas_operasional_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sistem kendaraan dinas operasional_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sistem kendaraan dinas operasional_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sistem_kendaraan_dinas_operasional_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM `sistem kendaraan dinas operasional_users`";
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
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "sistem kendaraan dinas operasional_users",
	"m_srcTableName" => "sistem kendaraan dinas operasional_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "sistem kendaraan dinas operasional_users";
$proto21["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "groupid";
$proto21["m_columns"][] = "active";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`sistem kendaraan dinas operasional_users`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "sistem kendaraan dinas operasional_users";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sistem kendaraan dinas operasional_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sistem_kendaraan_dinas_operasional_users = createSqlQuery_sistem_kendaraan_dinas_operasional_users();


	
		;

							

$tdatasistem_kendaraan_dinas_operasional_users[".sqlquery"] = $queryData_sistem_kendaraan_dinas_operasional_users;

$tableEvents["sistem kendaraan dinas operasional_users"] = new eventsBase;
$tdatasistem_kendaraan_dinas_operasional_users[".hasEvents"] = false;

?>