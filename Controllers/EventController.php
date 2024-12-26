<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;use App\Models\News;

class EventController extends Controller
{

    public function index()
    {
        $currentMonth = now()->month;
    
        // Получаем события текущего и следующего месяца
        $events = Event::whereMonth('show_date', $currentMonth)
                       ->orWhereMonth('show_date', $currentMonth + 1)
                       ->take(3)
                       ->get();

        $news = News::latest()->take(3)->get();
    
        return view('index', compact('events', 'news'));
    }
    

    // Страница всех мероприятий
    public function all()
    {
        $events = Event::paginate(4); 
        return view('events.index', compact('events'));
    }

    // Страница одного мероприятия
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }
}
