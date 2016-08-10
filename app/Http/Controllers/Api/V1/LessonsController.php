<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Model\Lesson;
use App\Transformer\LessonTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;


class LessonsController extends Controller
{


    protected $lessontf;
    //依赖注入
    public function __construct(LessonTransformer $trandformer)
    {
       $this->lessontf=$trandformer;
    }

    //GET
    public function index()
    {
        $lessons = Lesson::all();
        return Response::json([
            'status' => 'success',
            'code' => 200,
            'data' => $this->lessontf->transforms($lessons->toArray()),//将数据库的数据结构转化一下防止暴露
        ]);
    }

    //GET
    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return Response::json([
            'status' => 'success',
            'code' => 200,
            'data' => $this->lessontf->transform($lesson)
        ]);
    }
}
