<?php
$dalTablegestionentidad_ugmembers = array();
$dalTablegestionentidad_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablegestionentidad_ugmembers["UserName"]["key"]=true;
$dalTablegestionentidad_ugmembers["GroupID"]["key"]=true;
$dalTablegestionentidad_ugmembers["Provider"]["key"]=true;

$dal_info["dblogs_at_127_0_0_1__gestionentidad_ugmembers"] = &$dalTablegestionentidad_ugmembers;
?>