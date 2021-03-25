<?php

namespace App\Enteties;

use App\Models\Cathegory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CathegoryEntety
{
    protected $id;

    protected $name;

    public function getAllCathegory() {
        return Cathegory::all();
    }
}
