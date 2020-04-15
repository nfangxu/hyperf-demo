<?php
declare(strict_types=1);

namespace App\Service;


class Reporter implements ReporterInterface
{
    public function report($data)
    {
        \error_log(json_encode($data, JSON_UNESCAPED_UNICODE));
    }
}
