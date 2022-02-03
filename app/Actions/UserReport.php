<?php
namespace App\Actions;

use Illuminate\Http\Request;
use App\Interfaces\DownloadableReport;

class UserReport implements DownloadableReport
{

    public function getName(): string
    {
        return "User Report";
    }

    public function getHeaders(): array
    {
        return ["User Report Header"];
    }

    public function getData(): array
    {
        return ["User Report Data"];

    }
}