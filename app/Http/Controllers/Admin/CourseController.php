<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\CourseCategory;
use DB;


class CourseController extends Controller
{
    public function courseListIndex(Request $request)
    {
        $courselist=$request->session()->get('courselist');

        if($courselist){

            return view('Admin.course');
        }
    }

    public function getCourseList(Request $request)
    {
        $data=Course::leftjoin('tbl_course_category','tbl_course_category.course_category_id','tbl_course.course_category_id')
                    ->get();
        $courseedit=$request->session()->get('courseedit');
        $coursedelete=$request->session()->get('coursedelete');
        return response()->json(array('status'=>'success','data'=>$data,'courseedit'=>$courseedit,'coursedelete'=>$coursedelete));
    }
    public function getCategoryList(Request $request)
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

        $level=DB::select("

                SELECT 
                *
            FROM
                tbl_difficulty_level
        ");

        
        return response()->json(array('status'=>'success','category'=>$category,'subCategory'=>$subCategory,'courseedit'=>$courseedit,'coursedelete'=>$coursedelete,'level'=>$level));
    }
    public function insertCourse(Request $request)
    {


        $data= new Course();
        $data->course_category_id=$request->subCat;
        $data->course_name=$request->coursename;
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $user_image = time().'course-image-1.'.$image->getClientOriginalExtension();
            $location = public_path('assets/images/Course');
            $image->move($location, $user_image);
            $data->course_image = $user_image;
        }
        $data->course_authorname=$request->authorname;
        $data->course_credithour=$request->credithour;
        $data->course_description=$request->coursedescription;
        $data->course_defficultylevel=$request->level;
        $data->course_requirement=$request->courserequire;
        $data->course_price=$request->courseprice;
        $data->save();

        return response()->json(array('status'=>'success'));
    }
    public function editCourse(Request $request)
    {
        $data=Course::where('course_id',$request->id)->first();
        $image=asset('assets/images/Course/'.$data->course_image);
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

        $level=DB::select("

                SELECT 
                *
            FROM
                tbl_difficulty_level
        ");

        return response()->json(array('status'=>'success','data'=>$data,'image'=>$image,'category'=>$category,'subCategory'=>$subCategory,'level'=>$level));
    }
    public function editCourseUpdate(Request $request)
    {
        $data=Course::where('course_id',$request->id)->first();
        $data->course_category_id=$request->subCat;
        $data->course_name=$request->coursename;
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $user_image = time().'course-image-1.'.$image->getClientOriginalExtension();
            $location = public_path('assets/images/Course');
            $image->move($location, $user_image);
            $data->course_image = $user_image;
        }
        $data->course_authorname=$request->authorname;
        $data->course_credithour=$request->credithour;
        $data->course_description=$request->coursedescription;
        $data->course_defficultylevel=$request->level;
        $data->course_requirement=$request->courserequire;
        $data->course_price=$request->courseprice;
        $data->save();

        return response()->json(array('status'=>'success'));
    }
    public function deleteCourse(Request $request)
    {
        $data=Course::where('course_id',$request->id)->delete();
    }
}
