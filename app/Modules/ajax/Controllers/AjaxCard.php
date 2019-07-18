<?php

namespace App\Modules\Ajax\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Card;

/**
 * Работа с карточками
 */
class AjaxCard extends Controller
{
  private $extendsMethods = [
    'sendAjaxCard'
  ];

  private $request = [];

  public function __construct($request = [])
  {
      $this->request = $request;
  }
  public function run()
  {

      if(isset($this->request['type']) && in_array($this->request['type'],$this->extendsMethods)){
          $type = $this->request['type'];
          return $this->$type();
      } else {
        return ['error' => 'Method not exist'];
      }
  }

  public function sendAjaxCard()
  {
    if (!isset($this->request['data'])) {
      return ['error' => 'EMPTY DATA'];
    }
    $data = $this->request['data'];

    if($data['type'] == 'add'){
      $send = Card::add($data);
    }
    else if($data['type'] == 'edit'){
      $send = Card::edit($data);
    }
    else if($data['type'] == 'remove'){
      $send = Card::remove($data);
    }

    if($send){
      return ['result' => 'success'];
    }
  }
}
