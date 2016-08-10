<?php
/**
 * Created by PhpStorm.
 * User: VIROYAL_M4000
 * Date: 2016/8/10
 * Time: 16:24
 */
namespace App\Transformer;

class  LessonTransformer extends Transformer
{
    public function transform($data)
    {
        return [
            'title' => $data['title'],
            'content' => $data['body'],
            'is_free' => $data['free'],
        ];
    }
}