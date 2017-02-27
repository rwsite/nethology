<?php
function getuserdata()
{
    $data = file_get_contents(__DIR__ . '/data-user.json');
    $userdata = json_decode($data, true);
    return $userdata ;
}
