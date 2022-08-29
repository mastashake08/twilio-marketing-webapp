<?php

namespace App\Models;

use App\Events\MessageCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public $fillable = ['message', 'contact_id'];

    protected $dispatchesEvents = [
        'created' => MessageCreated::class
    ];

    public function contact () {
      return $this->belongsTo(Contact::class);
    }
}
