<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model {
    public function fetchAll() {
        $blogs = DB::select('select * from blogs');
        return $blogs;
    }
}
