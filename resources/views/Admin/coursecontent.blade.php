@extends('Layouts.admin-home')
@section('title')
    Course Content
@endsection
@section('content')

<div class="container">
    
    <div class="card" style="margin-top: 10%">

        <div class="card-header">
            <div class="row">
                <div class="col-md-6">Course Content Add</div>
                <div class="col-md-1 ml-auto">
                    @if (Session::has('coursecontentadd'))
                        <i onclick="openModal()" class="fas fa-plus"></i>
                    @endif
                    
                </div>
            </div>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-responsive-md-sm-lg">
                <thead>
                    <thead>
                        <th>Sl No</th>
                        <th>Content Name</th>
                        <th>Course Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="showData">
                        
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Course Content Add</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label for="">Content Name</label>
                <input type="text" name="catname" id="contentname" class="form-control">   
                <p id="pcoursename" style="color: red">This field is required</p>             
            </div>
    
            <div class="form-group">
                <label for="">Course</label>
                <select class="form-control" id="courseid">
                    
                </select> 
                <p id="pcat" style="color: red">This field is required</p>                
            </div>
            
    
    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="insertCourseContent()">Save changes</button>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Course Content Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="">Content Name</label>
                    <input type="text" name="catname" id="ucontentname" class="form-control">   
                    <input type="hidden" name="catname" id="id" class="form-control">   
                                
                </div>
        
                <div class="form-group">
                    <label for="">Course</label>
                    <select class="form-control" id="ucourseid">
                        
                    </select> 
                                
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="editCourseContentUpdate()">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="filemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                
                <div class="col-8">
                    <h5 style="margin-top: 35px" class="modal-title" id="exampleModalLongTitle">Course Lecture</h5>
                </div>
            
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <table class="table table-bordered table-responsive-md-sm-lg">
                        <thead>
                            <thead>
                                <th>Sl No</th>
                                <th>Content Name</th>
                                <th>File</th>
                                <th>Action</th>
                            </thead>
                            <tbody id="filesshow">
                                
                            </tbody>
                        </thead>
                    </table>
                </div>

                <form action="{{route('admin.insertLectureFiles')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                    
                        <div class="col-4">
                            <input type="hidden" name="coursecontent" id="coursecontent">
                            <label for="">Pdf File</label>
                            
                            <input type="file" name="file[]"multiple>
                        </div>
                        <div class="col-4">
                            <label for="">Video File</label>                          
                            <input type="file" name="video[]" multiple>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Save changes</button>
                    </div>
                </form>
            
        
    
            </div>
            
        </div>
    </div>
</div>

  <script>

    $("#pcatname").hide();
    $("#pcoursename").hide();
    $("#pcat").hide();
    

    $('#uimage').change(function (event) {

        var output = $("#usrc1")[0];
        output.src = URL.createObjectURL(event.target.files[0]);
    });
    $('#image').change(function (event) {

        var output = $("#src1")[0];
        output.src = URL.createObjectURL(event.target.files[0]);
    });

    $(document).ready(function(){

        getCourseContentList();

    });

    function getCourseContentList(){


        $.ajax({

            type:"get",
            url:"{{route('admin.getCourseContentList')}}",
            success:function(data){

                

                var html='';
                for($i=0;$i<data.data.length;$i++){


                    html+='<tr>';
                    html+='<td>'+($i+1)+'</td>';
                    html+='<td>'+data.data[$i].course_content_title+'</td>';
                    html+='<td>'+data.data[$i].course_name+'</td>';
            
                    
                    if(data.courseedit==35 && data.coursedelete==36 && data.lecturefilelist==38){

                        html+='<td><i class="fa fa-eye" onclick="openFileModal('+data.data[$i].course_content_id+')"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-edit" onclick="editCourseContent('+data.data[$i].course_content_id+')"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash" onclick="deleteCourseContent('+data.data[$i].course_content_id+')"></i></td>';

                    }else if(data.courseedit==35 && data.coursedelete==36){

                        html+='<td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-edit" onclick="editCourseContent('+data.data[$i].course_content_id+')"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash" onclick="deleteCourseContent('+data.data[$i].course_content_id+')"></i></td>';

                    }else if(data.lecturefilelist==38 && data.courseedit==35 ){

                        html+='<td><i class="fa fa-eye" onclick="openFileModal('+data.data[$i].course_content_id+')"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" onclick="editCourseContent('+data.data[$i].course_content_id+')"></i></td>';

                    }else if(data.lecturefilelist==38 && data.coursedelete==36 ){

                        html+='<td><i class="fa fa-eye" onclick="openFileModal('+data.data[$i].course_content_id+')"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash" onclick="deleteCourseContent('+data.data[$i].course_content_id+')"></i></td>';

                    }
                    else if(data.courseedit==35){

                        html+='<td>< class="fas fa-edit" onclick="editCourseContent('+data.data[$i].course_content_id+')"></td>';

                    }else if(data.coursedelete==36){

                        html+='<td>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-trash" onclick="deleteCourseContent('+data.data[$i].course_content_id+')"></i></td>';

                    }else if(data.lecturefilelist==38){

                        html+='<td><i class="fa fa-eye" onclick="openFileModal('+data.data[$i].course_content_id+')"></i></td>';

                    }else{

                        html+='<td></td>'

                    }
                    
                    html+='</tr>';
                    
                }
                $("#showData").html(html);

            },
            error:function(error){
                console.log(error);
            }
        });


    }

    function openModal(){

        $("#exampleModalCenter").modal('show');
        $.ajax({

            type:"get",
            url:"{{route('admin.getCourseList')}}",
            success:function(data){

                console.log(data);

                var html='';
                html+='<option value="0">Select</option>';
                for($i=0;$i<data.data.length;$i++){

                    html+='<option value="'+data.data[$i].course_id+'">'+data.data[$i].course_name+'</option>';

                    
                }
                
               
                $("#courseid").html(html);

            },
            error:function(error){
                console.log(error);
            }
        });
    }
    function insertCourseContent(){

        
        var contentname=$("#contentname").val();
        var courseid=$("#courseid").val();
        
        

        if(contentname=='' && courseid=='0'){

            $("#pcoursename").hide();
            $("#pcat").hide();

        }
        else if(courseid=='0'){

            
            $("#pcat").hide();
        }
        else if(contentname==''){

            $("#pcoursename").hide();
            
        }else if(contentname!='' && courseid!='0'){

            $.ajax({

                type:"get",
                url:"{{route('admin.insertCourseContent')}}",
                data:{

                    contentname:contentname,
                    courseid:courseid,
                },
                success:function(data){

                    console.log(data);
                    $("#exampleModalCenter").modal('hide');
                
                    getCourseContentList(); 
                },
                error:function(error){

                    console.log(error);
                }
            });

        }else{

            $("#pcoursename").hide();
            $("#pcat").hide();
        }
    }
    function editCourseContent(id){

        console.log(id);

        $("#exampleModalCenter1").modal('show');
        var image = $('#uimage').val('');

        $.ajax({

            type:"get",
            url:"{{route('admin.editCourseContent')}}",
            data:{

                id:id
            },
            success:function(data){

                var contentname=$("#ucontentname").val(data.data.course_content_title);
                
            
                $("#id").val(id);
               
                var html='';
                html+='<option value="0">Select</option>';
                for($i=0;$i<data.courselist.length;$i++){

                    if(data.data.course_content_course_id==data.courselist[$i].course_id){
                        html+='<option value="'+data.courselist[$i].course_id+'" selected>'+data.courselist[$i].course_name+'</option>';
                    }else{

                        html+='<option value="'+data.courselist[$i].course_id+'">'+data.courselist[$i].course_name+'</option>';
                    }                 

        
                }
                
                $("#ucourseid").html(html);

            },
            error:function(error){
                console.log(error);
            }
        });

    }
    function editCourseContentUpdate(){

        var contentname=$("#ucontentname").val();
        var courseid=$("#ucourseid").val();
        var id=$("#id").val();
        

        $.ajax({

            type:"get",
            url:"{{route('admin.editCourseContentUpdate')}}",
            data:{
                contentname:contentname,
                courseid:courseid,
                id:id,
            },
            datatype:"json",
            success:function(data){

                console.log(data);

                $("#exampleModalCenter1").modal('hide');
                
                getCourseContentList();

            },
            error:function(error){

                console.log(error);
            }

        });

    }
    function deleteCourseContent(id){

        $.ajax({

            type:"get",
            url:"{{route('admin.deleteCourseContent')}}",
            data:{

                id:id
            },
            success:function(data){

                getCourseContentList();

            },
            error:function(error){
                console.log(error);
            }
        });
        
    }
    function openFileModal(id){

        $("#coursecontent").val(id);

        $("#filemodal").modal('show');

        $.ajax({

            type:"get",
            url:"{{route('admin.lectureWiseFiles')}}",
            data:{

                id:id
            },
            success:function(data){

                var html='';
                for($i=0;$i<data.data.length;$i++){

                    html+='<tr>';
                    html+='<td>'+($i+1)+'</td>';
                    html+='<td>'+data.data[$i].course_content_title+'</td>';
                    html+='<td><iframe src="'+data.data[$i].file+'" title="W3Schools Free Online Web Tutorials"></iframe></td>';
                    if(data.delete==41){

                        html+='<td><i class="fas fa-trash" onclick="fileDelete('+data.data[$i].lecture_files_id+')"></i></td>';
                    }else{
                        html+='<td></td>';
                    }
                    
                    
                    html+='</tr>';

                }
                

                $("#filesshow").html(html);

            },
            error:function(error){

                console.log(error);
            }
        });
    }
    
    function fileDelete(id){

        $.ajax({

            type:"get",
            url:"{{route('admin.fileDelete')}}",
            data:{

                id:id
            },
            success:function(data){

                openFileModal(data.id);
            },
            error:function(error){

                console.log(error);
            }
        });
    }
    
  </script>

    
@endsection