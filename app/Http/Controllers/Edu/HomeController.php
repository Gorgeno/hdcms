<?php
/** .-------------------------------------------------------------------
 * |  Software: [hdcms framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace App\Http\Controllers\Edu;

use App\Http\Controllers\Controller;
use App\Models\EduLesson;
use App\Repositories\ActivityRepository;
use App\Repositories\EduLessonRepository;

/**
 * 模块前台
 * Class HomeController
 * @package App\Http\Controllers\Edu
 */
class HomeController extends Controller
{
    /**
     * 主页
     * @param ActivityRepository $activityRepository
     * @param EduLessonRepository $eduLessonRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ActivityRepository $activityRepository, EduLessonRepository $eduLessonRepository)
    {
//        $activities = \Cache::remember('activity', 1, function () use ($activityRepository) {
//            return $activityRepository->paginate(10);
//        });
//        $lessons = \Cache::remember('home_edu_lesson', 30, function () use ($eduLessonRepository) {
//            return $eduLessonRepository->paginate(12);
//        });
        return view('edu.dynamic.index', compact('activities', 'lessons'));
    }
}
