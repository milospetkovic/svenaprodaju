<?php

namespace App\Model\Entity;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Advertisement extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'advertisement';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'description', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Entity\User');
    }
}
