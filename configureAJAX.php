<?php
namespace Vanderbilt\EmailTriggerExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

require_once 'EmailTriggerExternalModule.php';

$module->setProjectSetting('datapipe_label', isset($_POST['datapipe_label']) ? $_POST['datapipe_label'] : "");
$module->setProjectSetting('datapipe_var', isset($_POST['datapipe_var']) ? $_POST['datapipe_var'] : "");
$module->setProjectSetting('emailFromForm_var', isset($_POST['emailFromForm_var']) ? $_POST['emailFromForm_var'] : "");
$module->setProjectSetting('datapipeEmail_var', isset($_POST['datapipeEmail_var']) ? $_POST['datapipeEmail_var'] : "");
$module->setProjectSetting('surveyLink_var', isset($_POST['surveyLink_var']) ? $_POST['surveyLink_var'] : "");
$module->setProjectSetting('formLink_var', isset($_POST['formLink_var']) ? $_POST['formLink_var'] : "");
$module->setProjectSetting('emailFailed_var', isset($_POST['emailFailed_var']) ? $_POST['emailFailed_var'] : "");
$module->setProjectSetting('emailSender_var', isset($_POST['emailSender_var']) ? $_POST['emailSender_var'] : "");


echo json_encode(array(
    'status' => 'success',
    'message' => ''
));

?>
