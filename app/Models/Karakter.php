<?php

namespace App\Models;

class Bigfive
{
    private static $pernyataan =
    [
        [
            'o' => 'Setelah saya menonton anime, saya terinspirasi membuat alur cerita yang berbeda/baru',
            'c' => 'Ketika saya menemukan/melihat gambar anime dan tertarik, saya akan mencari judul atau sumbernya',
            'e' => 'Saya bergabung dalam komunitas anime.',
            'a' => 'Saya akan berhenti nonton anime ketika disuruh oleh teman/keluarga saya',
            'n' => 'Saya merasa biasa saja saat menonton anime.',
        ],
        [
            'o' => 'Saya marah apabila teman saya memberikan spoiler cerita',
            'c' => 'Saya sering lupa waktu saat nonton anime.',
            'e' => 'Saya excited (Bergairah / tertarik) pada pembahasan anime.',
            'a' => 'Saya tidak senang apabila teman saya menyukai karakter yang sama dengan saya,  dan saya akan mempengaruhi teman saya agar menyukai karakter yang berbeda.',
            'n' => 'Saya akan larut pada emosional dari anime yang saya tonton.',
        ],
        [
            'o' => 'Saya senang ketika teman-teman saya mengejek, agar teman saya bisa tertawa',
            'c' => 'Saya berambisi mengcosplaykan karakter favorit saya.',
            'e' => 'Ketika saya dia ajak dalam komunitas anime, saya lebih senang menyendiri.',
            'a' => 'Saya memilih bikin cosplay saya sendiri',
            'n' =>'Saya merasa nyaman ketika selesai menonton anime',
        ],
        [
            'o' => 'Saya suka menonton anime sendiri tanpa mendiskusikan ke teman saya',
            'c' => 'Saya mencari kesenangan dengan menonton anime',
            'e' => 'Saya menjadwalkan kapan saya akan menonton anime.',
            'a' => 'Saya tidak segan marah atau bahkan memukul orang ketika beradu argumen yang saya anggap salah.',
            'n' => 'Saya terkadang berhenti nonton anime ketika episodenya saya rasa banyak dan membosankan.',
        ],
    ];

    public static function all()
    {
        return self::$pernyataan;
    }
}
