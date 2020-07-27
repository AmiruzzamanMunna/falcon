<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CourseCategory;
use App\Course;
use App\CourseContent;
use App\CourseModule;
use DB;

class CourseController extends Controller
{
    public function courseDetails(Request $request,$id)
    {
        $category=CourseCategory::where('course_category_parent_id',0)->get();
        $subCategory=DB::select("

        SELECT 
            subCategory.course_category_id,
            tbl_course_category.course_category_name as parentCategory,
            subCategory.course_category_name,
            subCategory.course_category_parent_id
        FROM
            tbl_course_category
                LEFT JOIN
            tbl_course_category AS subCategory ON subCategory.course_category_parent_id = tbl_course_category.course_category_id
        WHERE
            subCategory.course_category_parent_id != 0
        ");

        $data=Course::where('course_id',$id)
                    ->leftjoin('tbl_difficulty_level','tbl_difficulty_level.difficulty_level_id','tbl_course.course_defficultylevel')
                        ->first();
        
        
        $lecture=CourseContent::where('course_content_course_id',$id)->count();
        $alllecture=CourseContent::where('course_content_course_id',$id)->get();

        $courseModule=CourseModule::where('course_module_course_id',$id)->get();
        return view('User.coursedetails')
                ->with('courseModule',$courseModule)
                ->with('data',$data)
                ->with('alllecture',$alllecture)
                ->with('lecture',$lecture)
                ->with('category',$category)
                ->with('subCategory',$subCategory);
    }
    public function courseDemo(Request $request,$id)
    {
        $category=CourseCategory::where('course_category_parent_id',0)->get();
        $subCategory=DB::select("

        SELECT 
            subCategory.course_category_id,
            tbl_course_category.course_category_name as parentCategory,
            subCategory.course_category_name,
            subCategory.course_category_parent_id
        FROM
            tbl_course_category
                LEFT JOIN
            tbl_course_category AS subCategory ON subCategory.course_category_parent_id = tbl_course_category.course_category_id
        WHERE
            subCategory.course_category_parent_id != 0
        ");

        $data=DB::select("

                    SELECT 
                    *, COUNT(lecture_files_files) AS files
                FROM
                    tbl_course_content
                        LEFT JOIN
                    tbl_lecture_files ON tbl_lecture_files.lecture_files_content_id = tbl_course_content.course_content_id
                WHERE
                    course_content_course_id = $id
                GROUP BY course_content_id
        ");

        // dd($data);
        
        
        $lecture=CourseContent::where('course_content_course_id',$id)->count();
        $alllecture=CourseContent::where('course_content_course_id',$id)->get();

        
        return view('User.coursedemo')
                ->with('data',$data)
                ->with('alllecture',$alllecture)
                ->with('lecture',$lecture)
                ->with('category',$category)
                ->with('subCategory',$subCategory);
    }
}
