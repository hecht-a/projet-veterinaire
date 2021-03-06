<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller
{
    public function index(): bool|array|string
    {
        return $this->render("contact");
    }
}