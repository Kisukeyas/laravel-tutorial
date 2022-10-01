<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    public function tasks()
    {
        // 第一引数が関連するモデル名（名前空間も含む）、第二引数が関連するテーブルが持つ外部キーカラム名、第三引数はモデルに hasMany が定義されている側のテーブルが持つ、外部キーに紐づけられたカラムの名前です。ただ第二引数と第三引数は今回のようにある決まりに沿っている場合は省略できます。その決まりとは、第二引数が テーブル名単数形_id で第三引数が id であることです。

        // つまり、Laravel はフォルダテーブルとタスクテーブルを結びつけるためのカラムまで知っているのでフォルダさえわかればタスクも分かってしまうのです。
        return $this->hasMany('App\Task', 'folder_id', 'id');
    }
}
