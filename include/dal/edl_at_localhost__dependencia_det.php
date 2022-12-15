<?php
$dalTabledependencia_det = array();
$dalTabledependencia_det["dep_det_id"] = array("type"=>3,"varname"=>"dep_det_id", "name" => "dep_det_id", "autoInc" => "1");
$dalTabledependencia_det["id_dep_fk"] = array("type"=>3,"varname"=>"id_dep_fk", "name" => "id_dep_fk", "autoInc" => "0");
$dalTabledependencia_det["id_depto_superior_fk"] = array("type"=>3,"varname"=>"id_depto_superior_fk", "name" => "id_depto_superior_fk", "autoInc" => "0");
$dalTabledependencia_det["dep_det_nombre"] = array("type"=>200,"varname"=>"dep_det_nombre", "name" => "dep_det_nombre", "autoInc" => "0");
$dalTabledependencia_det["dep_det_descripcion"] = array("type"=>201,"varname"=>"dep_det_descripcion", "name" => "dep_det_descripcion", "autoInc" => "0");
$dalTabledependencia_det["dep_det_enlace"] = array("type"=>200,"varname"=>"dep_det_enlace", "name" => "dep_det_enlace", "autoInc" => "0");
$dalTabledependencia_det["dep_det_id"]["key"]=true;

$dal_info["edl_at_localhost__dependencia_det"] = &$dalTabledependencia_det;
?>