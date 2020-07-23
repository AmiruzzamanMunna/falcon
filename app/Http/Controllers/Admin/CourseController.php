<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\CourseCategory;
use App\CourseContent;
use App\LectureFiles;
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
    public function courseContentIndex(Request $request)
    {
        $coursecontentlist=$request->session()->get('coursecontentlist');

        if($coursecontentlist){

            return view('Admin.coursecontent');
        }
    }
    public function getCourseContentList(Request $request)
    {
        $data=CourseContent::leftjoin('tbl_course','tbl_course.course_id','tbl_course_content.course_content_course_id')
                            ->get();

        $courseedit=$request->session()->get('coursecontentedit');
        $coursedelete=$request->session()->get('coursecontentdelete');
        $lecturefilelist=$request->session()->get('lecturefilelist');
        
        return response()->json(array('status'=>'success','data'=>$data,'courseedit'=>$courseedit,'coursedelete'=>$coursedelete,'lecturefilelist'=>$lecturefilelist));
    }
    public function insertCourseContent(Request $request)
    {
        $data= new CourseContent();
        $data->course_content_title=$request->contentname;
        $data->course_content_course_id=$request->courseid;
        $data->save();
        return response()->json(array('status'=>'success'));
    }
    public function editCourseContent(Request $request)
    {
        $data=CourseContent::where('course_content_id',$request->id)->first();
        $courselist=Course::all();
        return response()->json(array('status'=>'success','data'=>$data,'courselist'=>$courselist));
    }
    public function editCourseContentUpdate(Request $request)
    {
        $data= CourseContent::where('course_content_id',$request->id)->first();
        $data->course_content_title=$request->contentname;
        $data->course_content_course_id=$request->courseid;
        $data->save();
        return response()->json(array('status'=>'success'));
    }
    public function deleteCourseContent(Request $request)
    {
        $data= CourseContent::where('course_content_id',$request->id)->delete();
    }
    public function lectureWiseFiles(Request $request)
    {
        $data=LectureFiles::where('lecture_files_content_id',$request->id)
                            ->leftjoin('tbl_course_content','tbl_course_content.course_content_id','tbl_lecture_files.lecture_files_content_id')
                            ->get();

        foreach($data as $item){

            $arrayData[]=[

                'lecture_files_id'=>$item->lecture_files_id,
                'course_content_title'=>$item->course_content_title,
                'file'=>asset('assets/images/Course/files/'.$item->lecture_files_files),

            ];
        }

        $delete=$request->session()->get('lecturefiledelete');

        return response()->json(array('status'=>'success','data'=>$arrayData,'delete'=>$delete));
    }
    public function insertLectureFiles(Request $request)
    {
        if ($request->hasFile('file')) {
            $i=0;
            foreach($request->file as $file){
                $i++;
                $attachment= new LectureFiles();
                $filename = time()+$i . 'pdf.'. $file->getClientOriginalExtension();
                $location = public_path('assets/images/Course/files');
                // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
                $file->move($location, $filename);
                $attachment->lecture_files_content_id = $request->coursecontent;
                $attachment->lecture_files_files = $filename;
                $attachment->save();
            }
        }
        if ($request->hasFile('video')) {
            $i=0;
            foreach($request->video as $file){
                $i++;
                $attachment= new LectureFiles();
                $filename = time()+$i . 'video.'. $file->getClientOriginalExtension();
                $location = public_path('assets/images/Course/files');
                // Image::make($image1->getRealPath())->resize(280, 280)->save(public_path('images/product'.$filename1));
                $file->move($location, $filename);
                $attachment->lecture_files_content_id = $request->coursecontent;
                $attachment->lecture_files_files = $filename;
                $attachment->save();
            }
        }

        return back();
    }
    public function fileDelete(Request $request)
    {
        $getData=LectureFiles::where('lecture_files_id',$request->id)->first();
        $id=$getData->lecture_files_content_id;
        $data=LectureFiles::where('lecture_files_id',$request->id)->delete();
        
        return response()->json(array('status'=>'success','id'=>$id));
    }
}
