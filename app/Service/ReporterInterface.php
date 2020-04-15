<?php
declare(strict_types=1);

namespace App\Service;

interface ReporterInterface
{
    public function report($data);
}