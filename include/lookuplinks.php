<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["tbl_perangkat_daerah"]["tbl_pns.instansi"]["edit"] = array("table" => "tbl_pns", "field" => "instansi", "page" => "edit");
	$lookupTableLinks["tbl_pns"]["tbl_pj_kendaraan.NIP KARYAWAN"]["edit"] = array("table" => "tbl_pj_kendaraan", "field" => "NIP KARYAWAN", "page" => "edit");
	$lookupTableLinks["tbl_kendaraan"]["tbl_pj_kendaraan.NOMOR_POLISI_KENDARAAN"]["edit"] = array("table" => "tbl_pj_kendaraan", "field" => "NOMOR_POLISI_KENDARAAN", "page" => "edit");
}

?>