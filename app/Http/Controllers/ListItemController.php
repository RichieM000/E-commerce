<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
class ListItemController extends Controller
{
    public function index(){
        return view('index', [
            'listitems' => ListItem::latest()->get()
        ]);
    }
}

// ->filter(request(['tag', 'search']))->paginate(6)