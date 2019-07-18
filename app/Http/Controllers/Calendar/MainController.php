<?php
namespace App\Http\Controllers\Calendar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Card;
use App\Events;

class MainController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    $cards = Card::all();
    $events = Events::all();

    return view('calendar', ['categories' => $categories, 'cards' => $cards, 'events' => $events]);
  }
}
