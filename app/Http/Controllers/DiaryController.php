<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $diary = Diary::get()->latest();
        return view('diary.index', compact('diary'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }
}
