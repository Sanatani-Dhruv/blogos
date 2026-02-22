<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model {

    protected $fillable = [
        'message'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function fetchAll() {
        $blogs = DB::table('blogs')->latest()->get();
        // echo "<pre>";
        // print_r($blogs);
        // echo "</pre>";
        return $blogs;
    }
}
