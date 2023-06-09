<?php

namespace App\Models;

use App\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatus extends Model
{
    use HasFactory, UuidTrait;

    protected $guarded = ['id'];
}
