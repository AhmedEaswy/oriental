<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\BaseModel as Model;
class Contact extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'email', 'phone', 'phone_code', 'content', 'interest'];
}
