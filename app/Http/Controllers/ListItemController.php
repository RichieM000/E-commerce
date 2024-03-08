<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListItem;
class ListItemController extends Controller
{
    // show all listings
    public function index(){
        return view('index', [
            'listitems' => ListItem::latest()->filter(request(['tag', 'search']))->paginate(4)
            
        ]);
    }
    // show single listings
    public function show(ListItem $listitem){
        return view ('show', [
            'listitems' => $listitem
        ]);
    }
}

// ->filter(request(['tag', 'search']))->paginate(6)