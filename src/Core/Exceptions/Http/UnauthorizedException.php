<?php
declare(strict_types=1);

namespace App\Core\Exceptions\Http;

class UnauthorizedException extends \Exception
{
    protected $message = "Tu n'es pas autorisé à accéder à cette page.";
    protected $code = 401;
}