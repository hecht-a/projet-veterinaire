<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class ConsultationController extends Controller
{
    public function index(): bool|array|string
    {
        $this->setLayout("footer");
        return $this->render("consultation");
    }
}