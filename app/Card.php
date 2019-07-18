<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['title', 'icon', 'icon_url', 'img', 'img_url', 'categories'];

    public function category()
    {
      return $this->belongsToMany(
        Category::class,
        'categories',
        'name'
      );
    }

    public function card()
    {
      return $this->hasMany(Card::class);
    }

    public function add($fields)
    {
      $card = new static;
      $card->fill($fields);
      $card->save();

      return $card;
    }
    public function edit($fields)
    {
      $this->fill($fields);
      $this->save();
    }
    public function remove($fields)
    {
      $this->delete();
    }

    public function setCategory($ids)
    {
      if($ids == null){ return; }

      $this->categories()->sync($ids);
    }
}
