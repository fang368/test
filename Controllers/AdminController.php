<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\News;

class AdminController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $news = News::all();

        return view('admin.index', compact('events', 'news'));
    }

     public function createEvent()
     {
         return view('admin.createEvent');
     }

     public function createNews()
     {
         return view('admin.createNews');
     }

     public function editNews($id)
{
    // Находим новость по id
    $news = News::findOrFail($id);

    // Отправляем новость в представление
    return view('admin.editNews', compact('news'));
}

 
     // Обработка добавления новости
     public function storeNews(Request $request)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string', 
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
     
         $news = new News();
         $news->title = $request->title;
         $news->description = $request->description;
     
         if ($request->hasFile('image')) {
             $imagePath = $request->file('image')->store('news', 'public');
             $news->image = $imagePath; 
         }
     
         $news->save();
     
         return redirect()->route('admin.index')->with('success', 'Новость добавлена!');
     }
     
     public function updateNews(Request $request, $id)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
     
         $news = News::findOrFail($id);
         $news->title = $request->title;
         $news->description = $request->description;
     
         if ($request->hasFile('image')) {
             if ($news->image) {
                 $oldImagePath = storage_path('app/public/' . $news->image);
                 if (file_exists($oldImagePath)) {
                     unlink($oldImagePath); 
                 }
             }
     
             $imagePath = $request->file('image')->store('news', 'public');
             $news->image = $imagePath;
         }
     
         $news->save();
     
         return redirect()->route('admin.index')->with('success', 'Новость обновлена!');
     }


    public function deleteNews($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('admin.index')->with('success', 'Новость удалена!');
    }

    public function deleteEvent($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return redirect()->route('admin.index')->with('success', 'Мероприятие удалено!');
    }

}