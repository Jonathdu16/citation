<?php

    http_response_code(404);

    require ROOT.'/view/404.view.php';

// Autre alternative : header("HTTP/1.1")