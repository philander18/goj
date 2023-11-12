<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Panitia extends BaseController
{
    public function index(): string
    {
        $tgl_now = strtotime(date('Y-m-d'));
        $tgl_acara = strtotime(date('2024-02-03'));
        $selisih = $tgl_acara - $tgl_now;
        $selisih = $selisih / 60 / 60 / 24;
        $data = [
            'judul' => 'GOJ Encounter',
            'day_to_go' => $selisih,
        ];
        return view('index', $data);
    }
}
