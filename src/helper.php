<?php

function success($result = null, string $msg = 'ok'): \think\response\Json
{
    $aData = [
        'code' => 0,
        'msg' => $msg,
        'result' => $result,
    ];
    return json($aData);
}

function error(int $code, string $msg, array $result = []): \think\response\Json
{
    if (!$code) {
        $code = \funnymudpee\thinkphp\result\Code::INTERNAL_SERVER_ERROR;
    }
    $c = intval(substr($code, 0, 3));
    $data = [
        'code' => $code,
        'msg' => $msg,
        'result' => $result,
    ];
    return json($data, $c);
}