<?php

namespace App\Http\Controllers\Common\Contructor;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel as Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Traits\UploadOne;
use Illuminate\Http\Request;
use Image;
use App\Models\{
    MaterialModel                   as MM,
    ProjectImageModel               as PIM,
    ProjectDetailsModel             as PDM,
    ContructorModel,
    EmployeeModel
};
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    use UploadOne;
    //

    public function index(){
        $data['page'] = "main";

        $data['js']         =  $this->js_file();
        $data['css']        =  $this->css_file();
        $data['projects']   =  Project::select('projects.*','project_type.type as type')
                                        ->leftJoin('project_type', 'project_type.id', '=', 'projects.proj_type')
                                        ->where('post_by','=', Auth::user()->id)
                                        ->get();

         return view('contructor.pages.projects.index')->with('data' ,$data);

    }

    public function insertProj(Request $request){

        $data = [
            'post_by'               => Auth::user()->id,
            'proj_name'             => $request->proj_name,
            'proj_area'             => $request->proj_area,
            'proj_type'             => $request->proj_type,
            'bed_room'              => $request->bed_room,
            'bath_room'             => $request->bath_room,
            'stories'               => $request->story,
            'fence'                 => $request->fence,
            'roof'                  => $request->roof,
            'proj_slug'             => Str::slug($request->proj_name,"-"),
            'proj_est_price'        => '0',
            'status'                => 'inactive',
            'proj_description'      => $request->proj_desc
        ];

       $query = Project::updateOrCreate(['proj_name' => $request->proj_name,'post_by' => Auth::user()->id],$data);
       if($query){
        return responseSuccess('Project Added Successfully');
       }else{
        return responseFail('Data not found!');
       }

    }

    public function editProj(Request $request){
        $queryProj = Project::where('id',$request->projID)->first();
        $slugname = Str::slug($queryProj->proj_name,"-");
        return responseSuccess('Project Added Successfully',['slug' => $slugname]);
    }

    public function editSlug($slug){
        // $series = str_replace('-', ' ', $slug); 
        $queryProj = Project::where('proj_slug',$slug)->first();
        if($queryProj){
            $fetch_mat = MM::selectRaw('new_mat_desc')->where('proj_id',$queryProj->id)->first();

            $data['materials']  = json_decode($fetch_mat->new_mat_desc, TRUE);
            $images = PIM::where('proj_id', $queryProj->id)->get();
            $data['page'] = 'edit';
            $data['info'] =$queryProj;
            $data['mateials_exp'] = EmployeeModel::where('project_id',$queryProj->id)->get();
            $data['images'] = $images;
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();


            return view('contructor.pages.projects.index')->with('data' ,$data);
        }else{
            return Redirect::to('contructor/projects');
        }
    }
    
    public function getMaterials(Request $request){
       $materials =  MM::where('proj_id',$request->projID)->first();
       return responseSuccess(null,['materials' => isset($materials->materials_desc) ? $materials->materials_desc : '']);

    }

    public function updateStatus(Request $request){
       $check = Project::where('id',$request->projID)->where('thumbnail','!=',null)->where('proj_est_price','=','0')->first();

       if(isset($check) && $check->thumbnail == ""){
            $updated = Project::where('id',$request->projID)->update(['status' => 'inactive']);
                return responseFail('Please upload image Thumbnail to allow display of the project!');
       }else{
            $updated = Project::where('id',$request->projID)->update(['status' => $request->status]);
            if($updated){
                return responseSuccess('Status '.ucfirst($request->status));
            }else{
                return responseFail('Data not found!');
            }
       }

    }

    public function imageDelete(Request $request){

        if (File::exists(public_path('uploads/images/'.$request->filename))) {
            if(File::delete(public_path('uploads/images/'.$request->filename))) {
                PIM::destroy($request->imgID);
                return responseSuccess('Status Deleted');
            }else{
                return responseFail('Data not found!');
            }
        }

    }

    public function imageUpdate(Request $request){

        $check = PIM::where('id', $request->pic_id)->first();
        if($check){
            if ($request->has('myfile')) {
                $image = $request->file('myfile');
                    $name = Str::slug($request->input('image_name')).'_'.time();
                    $folder = public_path().'/uploads/images/';
                    $fileName = $name. '.' . $image->getClientOriginalExtension();
                    $image_name = $image->move($folder,$fileName);
                    $data = [
                        'image_path' => $fileName
                    ];
                $update = PIM::where('id', $request->pic_id)->update($data);
                    if($update){
                        if (File::exists(public_path('uploads/images/'.$check->image_path))) {
                            if(File::delete(public_path('uploads/images/'.$check->image_path))) {
                                return responseSuccess('Status Deleted');
                            }else{
                                return responseFail('Data not found!');
                            }
                        }
                    } 
            }
        }
    }

    public function updateProj(Request $request){

        $check = MM::where('proj_id',$request->projID)->first();
        if($check){
            $data = [
                'materials_desc' => $request->dataCode
            ];
            $updated = MM::where('proj_id',$request->projID)->update($data);
            if($updated){
                return responseSuccess('Materials Updated Successfully');
            }else{
                return responseFail('Data not found!');
            }
        }else{
            $data = [
                'proj_id' => $request->projID,
                'materials_desc' => $request->dataCode
            ];
            $create = MM::create($data);
            if($create){
                return responseSuccess('Materials Create Successfully');
            }else{
                return responseFail('Data not found!');
            }
        }
    }

    public function imageupload(Request $request){

        $cons = new ContructorModel;
        $check = $cons->getSelf();

        if(!empty($check->comp_watermark) || $check->comp_watermark != '' || $check->comp_watermark != null){
            // return $request->file('file')->getClientOriginalName();
            if ($request->has('file')) {
                $image = $request->file('file');
                $name = Str::slug($request->input('file')).'_'.time();
                $folder = public_path().'/uploads/images/';
                $fileName = $name. '.' . $image->getClientOriginalExtension();
                $image_name = $image->move($folder,$fileName);
                $waterMarkUrl = Image::make(public_path('uploads/watermarks/'.$check->comp_watermark))->resize(1000, 1000, function($constraint)
                {
                    $constraint->aspectRatio();
                });
                $image  = Image::make(public_path('uploads/images/'.$fileName))->resize(1000, 1000, function($constraint)
                {
                    $constraint->aspectRatio();
                });
        
                $image->insert($waterMarkUrl, 'center');
                $image->save(public_path('uploads/images/watermarked'.$fileName));

                File::delete(public_path('uploads/images/'.$fileName));

                $data = [
                    'proj_id' => $request->projID,
                    'image_path' => 'watermarked'.$fileName
                ];
                PIM::updateOrCreate($data);


                return responseSuccess('Image Uploaded!');
            }
        }else{
            return responseFail('Please upload watermark first!!');
        }
    }

    public function updateInfo(Request $request){

        if ($request->has('file')) {
            $image = $request->file('file');
            $name = Str::slug($request->input('file')).'thumbnail_'.time();
            $folder = public_path().'/thumbnail';
            $fileName = $name. '.' . $image->getClientOriginalExtension();
            $image_name = $image->move($folder,$fileName);
            $data = [
                'proj_name'             => $request->proj_name,
                'proj_area'             => $request->proj_area,
                'proj_type'             => $request->proj_type,
                'thumbnail'             => $fileName,
                'bed_room'              => $request->proj_bed_room,
                'bath_room'             => $request->proj_bath_room,
                'fence'                 => $request->fence,
                'roof'                  => $request->roof,
                'stories'                 => $request->proj_stories,
                'proj_slug'             => Str::slug($request->proj_name,"-"),
                'proj_est_price'        => $request->proj_est_price,
                'proj_description'      => $request->proj_desc
            ];
            Project::where('id',$request->proj_id)->where('proj_name',$request->proj_name)->update($data);


            return responseSuccess('Image Uploadedssss!');
        }else{
            $data = [
                    'proj_name'             => $request->proj_name,
                    'proj_area'             => $request->proj_area,
                    'proj_type'             => $request->proj_type,
                    'bed_room'              => $request->proj_bed_room,
                    'bath_room'             => $request->proj_bath_room,
                    'fence'                 => $request->fence,
                    'roof'                  => $request->roof,
                    'stories'                 => $request->proj_stories,
                    'proj_slug'             => Str::slug($request->proj_name,"-"),
                    'proj_est_price'        => $request->proj_est_price,
                    'proj_description'      => $request->proj_desc
            ];
            Project::where('id',$request->proj_id)->where('proj_name',$request->proj_name)->update($data);


            return responseSuccess('Image Uploaded!');
        }
    }


    public function send_materials(Request $request){
        $submit = MM::updateOrCreate(['proj_id' => $request->projID],['new_mat_desc' => $request->data]);
        return responseSuccess('Submit Successfully!');
    }

    public function new_materials(Request $request){
        $countMaterials = 0;
        $countMaterialsAttr = 0;
        $ArrMaterials = null;
        $ArrMaterialsAttr = [];
        $FetchAttr =[];
        $submit = MM::selectRaw('new_mat_desc')->where('proj_id', $request->projID)->first();
        $fetch = json_decode($submit->new_mat_desc, TRUE);

        if($fetch){
            $i = -1;
            foreach ($fetch as $key => $value) {
            
                $countMaterials = count($fetch);
                $countMaterialsAttr += count($fetch[$key]['attributes_materials']);
                $ArrMaterials[] = [
                    'id' => $fetch[$key]['id'],
                    'title' => $fetch[$key]['title']
                ];
                foreach($value['attributes_materials'] as $yawa){
                    $FetchAttr[] = $yawa;
                }
            }


            foreach($FetchAttr as $key => $val){
                array_push($ArrMaterialsAttr, ["id" => $val['id'], "material_id" => $val['material_id'],"material_kind" => $val['material_kind'],"material_by" => $val['material_by'], "price" => $val['price'],"quantity" => $val['quantity']]);
            }
        }

        return responseSuccess('Image Uploaded!',['input_count' => $countMaterials,'attr_count' => $countMaterialsAttr,'materials' => $ArrMaterials,'attrs' => $ArrMaterialsAttr]);
    }





    
    public function js_file(){
        $data = [
            'app.js',
            'plugins/dropzone/dropzone.min.js',
            'plugins/summernote/summernote-bs4.min.js',
            'plugins/perfect-scrollbar/perfect-scrollbar.min.js',
            'plugins/datatables.net/jquery.dataTables.min.js',
            'plugins/datatables.net-bs4/js/dataTables.bootstrap4.js',
            'plugins/jquery-toast-plugin/jquery.toast.min.js',
            'js/inputmask/jquery.inputmask.bundle.js',
            'plugins/sweetalert/sweetalert.min.js',
            'js/off-canvas.js',
            'js/hoverable-collapse.js',
            'js/misc.js',
            'js/settings.js',
            'js/inputmaskset.js',
            'js/todolist.js',
            'js/data-table.js',
            'js/functional.js',
            'js/summernote.js',
            'js/dropzone.js',
            'js/file-upload.js',
            'js/materials.js'
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'plugins/summernote/summernote-bs4.css',
            'plugins/font-awesome/css/font-awesome.min.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'plugins/dropzone/dropzone.min.css',
            'plugins/jquery-toast-plugin/jquery.toast.min.css',
            'app.css',
            'style.css'
        ];

        return $data;
    }
}
