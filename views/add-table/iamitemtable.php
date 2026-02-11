<?php
    DB::exec("TRUNCATE TABLE item");
    $item = file_get_contents('./data/cdata.json');
    $json = json_decode($item);

    foreach($json as $key => $value) {
        $num = 1;
        foreach ($value as $key2 => $value2) {
          $title = addslashes($value2->title);
        $des = addslashes($value2->des);
            $price = str_replace(',', '', $value2->price);
            $realPrice = number_format($price);
        $dis = str_replace(',', '', $value2->dis);
            DB::exec("insert into item (img, cate, title, price, dis, des, date)
            values ('itemsImg/$key/$num.PNG',
            '$key', '$title','$realPrice','$dis','$des',NOW())");
            $num++;
        }
    }