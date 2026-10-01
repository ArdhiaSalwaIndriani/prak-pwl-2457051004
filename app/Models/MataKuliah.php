<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MataKuliah extends Model
{
    use HasUuids;

    protected $table = 'mata_kuliah';

    protected $guarded = [];

    public $incrementing = false;

    protected $keyType = 'string';
}