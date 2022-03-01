<?php

namespace App\Models;

class Bigfive
{
    private static $pernyataan =
    [
        [
            'openness' => 'Setelah saya menonton anime, saya terinspirasi membuat alur cerita yang berbeda/baru',
            'conscientiousness' => 'Ketika saya menemukan/melihat gambar anime dan tertarik, saya akan mencari judul atau sumbernya',
            'extraversion' => 'Saya bergabung dalam komunitas anime.',
            'agreeableness' => 'Saya akan berhenti nonton anime ketika disuruh oleh teman/keluarga saya',
            'neuroticism' => 'Saya merasa biasa saja saat menonton anime.',
        ],
        [
            'openness' => 'Saya marah apabila teman saya memberikan spoiler cerita',
            'conscientiousness' => 'Saya sering lupa waktu saat nonton anime.',
            'extraversion' => 'Saya excited (Bergairah / tertarik) pada pembahasan anime.',
            'agreeableness' => 'Saya tidak senang apabila teman saya menyukai karakter yang sama dengan saya,  dan saya akan mempengaruhi teman saya agar menyukai karakter yang berbeda.',
            'neuroticism' => 'Saya akan larut pada emosional dari anime yang saya tonton.',
        ],
        [
            'openness' => 'Saya senang ketika teman-teman saya mengejek, agar teman saya bisa tertawa',
            'conscientiousness' => 'Saya berambisi mengcosplaykan karakter favorit saya.',
            'extraversion' => 'Ketika saya dia ajak dalam komunitas anime, saya lebih senang menyendiri.',
            'agreeableness' => 'Saya memilih bikin cosplay saya sendiri',
            'neuroticism' =>'Saya merasa nyaman ketika selesai menonton anime',
        ],
        [
            'openness' => 'Saya suka menonton anime sendiri tanpa mendiskusikan ke teman saya',
            'conscientiousness' => 'Saya mencari kesenangan dengan menonton anime',
            'extraversion' => 'Saya menjadwalkan kapan saya akan menonton anime.',
            'agreeableness' => 'Saya tidak segan marah atau bahkan memukul orang ketika beradu argumen yang saya anggap salah.',
            'neuroticism' => 'Saya terkadang berhenti nonton anime ketika episodenya saya rasa banyak dan membosankan.',
        ],
    ];

    public static function all()
    {
        return self::$pernyataan;
    }
}
