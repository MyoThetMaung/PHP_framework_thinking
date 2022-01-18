<?php
    $post = [
        [
            'name' => "saimon",
            'age' => 24
        ],
        [
            'name' => "mgmg",
            'age' => 24
        ],
        [
            'name' => "saimon",
            'age' => 27
        ]
    ];
//array filter | include condition check
    $arr_filter = array_filter($post, function($filter){
        return $filter['age'] == 24;
    });
    echo "<pre>";
    print_r($arr_filter);

//array map | return new array map
    $arr_map = array_map(function($map){
        return $map['name'];
    },$post);
    echo "<pre>";
    print_r($arr_map);