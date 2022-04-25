<?php

namespace {
    require_once "data/Confilct.php";
    require_once "data/Helper.php";


    $confilct1 = new \Data\One\Conflict();
    $confilct2 = new \Data\Two\Conflict();

    echo Helper\helpMe();
    echo Helper\APPLICATION;
}
