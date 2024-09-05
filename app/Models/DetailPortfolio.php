<?php   

namespace App\Models;

use Illuminate\Support\Arr;

class DetailPortfolio {
    public static function all()  {
        return [
            [
                'id' => 1,
                'slug' => 'data-siswa',
                'title' => 'Data siswa',
                'link' => 'http://fkri.free.nf/dataSiswa/?i=1',
                'image' => 'data-siswa.png',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quae quod vel sed iure labore odio sunt hic harum, excepturi, officiis ipsum alias dignissimos? Maiores.'
            ],
            [
                'id' => 2,
                'slug' => 'kasir',
                'title' => 'Kasir',
                'link' => 'http://fkri.free.nf/kasir',
                'image' => 'kasir.png',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quae quod vel sed iure labore odio sunt hic harum, excepturi, officiis ipsum alias dignissimos? Maiores.'       
            ],
            [
                'id' => 3,
                'slug' => 'bahan-bakar',
                'title' => 'Bahan bakar',
                'link' => 'http://fkri.free.nf/bahanBakar',
                'image' => 'bahan-bakar.png',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quae quod vel sed iure labore odio sunt hic harum, excepturi, officiis ipsum alias dignissimos? Maiores.'       
            ],
            [
                'id' => 4,
                'slug' => 'rental-motor',
                'title' => 'Rental motor',
                'link' => 'http://fkri.free.nf/rentalMotor',
                'image' => 'rental-motor.png',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quae quod vel sed iure labore odio sunt hic harum, excepturi, officiis ipsum alias dignissimos? Maiores.'       
            ]
        ];
    }
}