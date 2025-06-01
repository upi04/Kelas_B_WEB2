<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $blog = $this->getBiodata();
        $link = $this->getLink();
        return view('lap3.blog', compact('blog', 'link'));
    }

    private function getBiodata()
    {
        return [
            'Pikiran Lebih Jernih, Fokus Lebih Tajam' => 'Saat pagi hari, otak kita masih fresh. Belum banyak distraksi, belum ada notifikasi dari grup WhatsApp, dan dunia masih terasa tenang. Ini waktu yang ideal untuk berpikir strategis, menyusun rencana harian, atau bahkan sekadar merenung tentang hidup.',
            'Waktu Tambahan Tanpa Disadari' => 'Dengan bangun satu atau dua jam lebih awal dari biasanya, kamu secara otomatis menambah waktu produktifmu. Bayangkan, dalam seminggu kamu bisa mendapatkan 7–14 jam ekstra. Itu sama seperti satu hari penuh!',
            'Mood Lebih Baik' => 'Pagi hari yang tenang dan tidak tergesa-gesa membuat kita lebih rileks. Kamu bisa menikmati kopi sambil mendengarkan musik favorit, atau berjalan pagi sebentar. Aktivitas kecil ini bisa meningkatkan mood dan membuat harimu lebih menyenangkan.',
            'Rutinitas Lebih Teratur' => 'Orang yang terbiasa bangun pagi biasanya juga lebih disiplin dalam menjalani rutinitas. Kamu bisa menyusun jadwal, mematuhi jam makan, dan punya waktu untuk olahraga atau membaca buku—hal-hal yang sering terlewat kalau bangunnya kesiangan.',
        ];
    }
    private function getLink()
{
    return [
        'Home' => '<a href="/home">Home</a>',
        'Skill' => '<a href="/skill">Skill</a>',
        'Message' => '<a href="/message">Message</a>',
    ];
}
}
