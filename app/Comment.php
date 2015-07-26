<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable= array(
        'title',
        'user_id',
        'body',
        'published_at',


    ) ;

    /**
     *
     * An article belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){

        return $this->belongsTo('App\User');
    }

}
