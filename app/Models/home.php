<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    use HasFactory;

    protected $table = 'homes';

    protected $fillable = [
        'smartIco',
        'smartImg',
        'routes',
        'judulSmart',
        'subJudulSmart',
        'smartDesc',
    ];
}
