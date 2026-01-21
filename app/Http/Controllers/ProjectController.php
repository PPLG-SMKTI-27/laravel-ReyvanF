<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class ProjectController extends Controller {
    public function index() {
        $projek = ['Website Toko Kue', 'website Art Market'];
        return view ('projects', compact('projek'));
    }

    public function index2() {
        $skill = ['PHP Native & MVC', 'Python', 'HTML & CSS', 'JavaScript', 'SQL'];
        return view ('portofolio', compact('skill'));
    }
}

