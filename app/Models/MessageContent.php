<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageContent extends Model
{
    use HasFactory;
    protected $fillable = ['content'];
    
    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }
}