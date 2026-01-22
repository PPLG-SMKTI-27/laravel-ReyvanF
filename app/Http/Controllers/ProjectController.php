<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class ProjectController extends Controller {
    public function index() {
        $projek = [
            ['project' => 'Website Toko Kue', 'desc' => 'Aplikasi PHP MVC dengan login multi-role, manajemen produk, restock, dan database MySQL.'],
            ['project' => 'Website Art Market', 'desc' => 'Marketplace karya seni dengan sistem transaksi,landing page modern, dan UI eksklusif.']
        ];
        return view ('projects', compact('projek'));
    }

    public function index2() {
        $skill = ['PHP Native & MVC', 'Python', 'HTML & CSS', 'JavaScript', 'SQL'];
        return view ('portofolio', compact('skill'));
    }
}

