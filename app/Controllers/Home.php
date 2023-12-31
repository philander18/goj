<?php

namespace App\Controllers;

use PhpParser\Node\Stmt\Echo_;

class Home extends BaseController
{
    public function index(): string
    {
        // $email = \config\Services::email();
        // $email->setTo("herry@goj-encounter.com");
        // $email->setSubject("test email");
        // $email->setMessage("dicoba dulu");
        // if ($email->send()) {
        //     d("pesan terkirim");
        // } else {
        //     d($email->printDebugger());
        // }
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
