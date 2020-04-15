<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Service\ReporterInterface;
use Grpc\HiReply;
use Grpc\HiUser;

class HiController
{
    public function sayHello(HiUser $user, ReporterInterface $reporter)
    {
        $reporter->report(['msg' => 'di in grpc']);

        $message = new HiReply();
        $message->setMessage('Hello World');
        $message->setUser($user);
        return $message;
    }
}
