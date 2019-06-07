<?php

namespace Solidariun\Model;

use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{
    protected $fillable =
    [
        'tiutlo',
        'descricao',
        'vlr_meta',
        'vlr_atingido',
        'dt_final',
        'img',
        'link_video',
        'flg_ativo',
        'categoria_id'
    ];
}
