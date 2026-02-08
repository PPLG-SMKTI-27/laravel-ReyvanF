<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Skill;
use App\Http\Controllers\Controller;
class ProjectController extends Controller {
    public function index() {
        $data = Project::all();
        $projek = $data;
        return view ('projects', compact('projek'));
    }

    public function index2() {
        $data = Skill::all();
        $skill = $data;
        return view ('portofolio', compact('skill'));
    }
}

