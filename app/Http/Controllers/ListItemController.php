<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
class ListItemController extends Controller
{
    public function index(){
        return view('index', [
            'listitems' => ListItem::latest()->paginate(4)
        ]);
    }

    public function show(ListItem $listitem){
        return view ('show', [
            'listitems' => $listitem
        ]);
    }
}

// ->filter(request(['tag', 'search']))->paginate(6)