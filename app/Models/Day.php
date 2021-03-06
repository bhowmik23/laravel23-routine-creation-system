<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Day extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store($datas)
    {
        $this->truncate();
        foreach ($datas as $data) {
            $this->create(["day" => $data]);
        }
        return true;
    }
}
