<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequestLog extends Model
{
    use CrudTrait;
    protected $table = 'api_requests_log';
    protected $fillable = [
        'endpoint', 'method', 'request_data', 'ip_address',
    ];
}
