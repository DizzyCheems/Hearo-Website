<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $table = 'songs';

    protected $fillable = [
        'artist_id','songname', 'genre', 'author', 'album', 'date_registered', 'image', 'audio',
        'file_path'
    ];

    protected $primarykey = 'id';

public function artist ()
{
    return $this->belongsTo(artist::class);
}

}
