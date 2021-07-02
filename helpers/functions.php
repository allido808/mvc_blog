<?php
function message(int $code, $msg)
{
    echo json_encode(['code' => $code, 'msg' => $msg]);
    exit();
}

function print_array(array $arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
?>