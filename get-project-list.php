<?php
namespace Vanderbilt\EmailTriggerExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;


$searchTerms = $_REQUEST['parameters'];
$project_id = $_REQUEST['project_id'];

$matchingProjects = '';
if(!empty($_REQUEST['variables'])){
    $variables = explode(',',$_REQUEST['variables']);
    $sqlvariables = "";
    $numItems = count($variables);
    $i = 0;
    foreach ($variables as $var){
        if ($i == $numItems - 1) {
            $sqlvariables .= "'".substr($var, 1, strlen($var)-2)."'";
        }else{
            $sqlvariables .= "'".substr($var, 1, strlen($var)-2)."',";
        }
        $i++;
    }

    $q = $this->query("SELECT DISTINCT(value) from `redcap_data` where project_id = ? AND field_name in (?) AND value LIKE '?%' ", [$project_id,$sqlvariables,$searchTerms]);
    while($row = $q->fetch_assoc()) {
        $matchingProjects .= "<option value='".$row['value']."'>";
    }
}

echo json_encode($matchingProjects);

