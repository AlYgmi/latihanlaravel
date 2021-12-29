<?php

namespace App;


class Data
{
    static $data_count_prop = 
    [
    [
        "jumlah"=>"1.450",
        "nama"=>"jawa barat"
    ],
    [
        "jumlah"=>"1.000",
        "nama"=>"jawa tengah"
    ],
    [
        "jumlah"=>"1.896",
        "nama"=>"prabumulih"
    ],
    [
        "jumlah"=>"2.453",
        "nama"=>"medan"
    ]
    ];
    static $data_news = 
    [
        [        
            "tgl"=>"07",
            "bln"=>"agustus",
            "nama"=>"SMKN 13 Bandung",
            "author"=>"Al",
            "judul"=>"Tanaman Rusak",
            "isi"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quisquam voluptatem, laudantium ipsam fugit totam ipsum odio excepturi consequuntur laboriosam cum sapiente ducimus quae provident error facere blanditiis mollitia consequatur. Fuga nobis dolorum corrupti quis dolores possimus quos enim similique aliquam distinctio nisi aut, laudantium optio mollitia eligendi suscipit dolore inventore nulla minima delectus officia eveniet corporis sint? Accusamus totam aliquid quae ut, magnam corrupti repudiandae ratione repellat? Illum iusto numquam reiciendis unde esse architecto praesentium? Velit iusto sint nisi eveniet ipsam qui dolorem omnis deleniti veniam odit ducimus assumenda nemo non repellat expedita nobis mollitia, eius excepturi voluptas exercitationem!"
        ]
    ];
    public static function find(){
        return self::$data_count_prop;
    }
}
