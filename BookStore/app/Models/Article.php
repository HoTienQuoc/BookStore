<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Concerns\HasUlids;


use Ramsey\Uuid\Uuid;



class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
    use HasUuids;
    use HasUlids;

    /**
     * Generate a new UUID for the model.
     */
    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
    
    /**
     * Get the columns that should receive a unique identifier.
     *
     * @return array<int, string>
     */
    public function uniqueIds(): array
    {
        return ['id', 'discount_code'];
    }


}

$article = Article::create(['title' => 'Traveling to Europe']);
 
$article->id; // "8f8e8478-9035-4d23-b9a7-62f4d2612ce5"


$article = Article::create(['title' => 'Traveling to Asia']);
 
$article->id; // "01gd4d3tgrrfqeda94gdbtdk5c"