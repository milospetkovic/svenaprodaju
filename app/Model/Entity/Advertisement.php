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
    protected $fillable = ['title', 'description', 'fk_type', 'fk_category',
        'fk_group', 'fk_condition', 'sell_or_buy', 'price', 'fk_price_currency',
        'fk_price_type', 'accept_replacement', 'accepted_publish_condition',
        'fk_place', 'contact_name', 'contact_phone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Entity\User');
    }
}
