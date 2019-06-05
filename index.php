<?php
    $data = call($_SESSION["query_data"]["domain"], "event.bind", array(
        "auth" => $_SESSION["query_data"]["access_token"],
        "EVENT" => "onCrmCompanyAdd",
        "HANDLER" => "http://getcomp.epizy.com/event.php",
    ));


    $handlerBackUrl  = 'http://getcomp.epizy.com/event/php';
    $result = restCommand('event.bind', Array(
        'EVENT' => 'onCrmCompanyAdd',
        'HANDLER' => $handlerBackUrl
    ), $_REQUEST["auth"]);


?>