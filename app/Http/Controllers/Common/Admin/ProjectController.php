<?php

namespace App\Http\Controllers\Common\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel as Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Traits\UploadOne;
use Illuminate\Http\Request;
use App\Models\{
    TrustRoofMaterialModel          as TRM, 
    StructuralMaterialModel         as SM,
    SlabFrameBoardModel             as SFB,
    WallingMaterialModel            as WM,
    ElectricalMaterialModel         as EM,
    CeilingMaterialModel            as CM,
    PlumbingMaterialModel           as PM,
    FloorTilesMaterialModel         as FTM,
    DoorJambMaterialModel           as DJM,
    SlidingWindowMaterialModel      as SWM,
    PlumbingSewerMaterialModel      as PSL,
    CabinetMaterialModel            as CAB,
    PaintingMaterialModel           as PAM,
    ProjectImageModel               as PIM,
    ProjectDetailsModel             as PDM
};
use Illuminate\Support\Facades\Redirect;

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
                                        ->get();

         return view('admin.pages.projects.index')->with('data' ,$data);

    }

    public function insertProj(Request $request){
        $data = [
            'proj_name'             => $request->proj_name,
            'proj_area'             => $request->proj_area,
            'proj_type'             => $request->proj_type,
            'status'                => 'inactive',
            'proj_description'      => $request->proj_desc
        ];

       $query = Project::updateOrCreate(['proj_name' => $request->proj_name],$data);
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
        $series = str_replace('-', ' ', $slug); 
        $queryProj = Project::where('proj_name',$series)->first();
        $images = PIM::where('proj_id', $queryProj->id)->get();
        if($queryProj){
            $data['page'] = 'edit';
            $data['info'] =$queryProj;
            $data['images'] = $images;
            $data['js']         =  $this->js_file();
            $data['css']        =  $this->css_file();


            return view('admin.pages.projects.index')->with('data' ,$data);
        }else{
            return Redirect::to('admin/projects');
        }
    }

    public function updateStatus(Request $request){
        $updated = Project::where('id',$request->projID)->update(['status' => $request->status]);
        if($updated){
            return responseSuccess('Status '.ucfirst($request->status));
        }else{
            return responseFail('Data not found!');
        }

    }

    public function imageDelete(Request $request){

        if(Storage::disk('public')->exists($request->filename)){
            if(Storage::disk('public')->delete($request->filename)) {
                $deleted = PIM::destroy($request->imgID);
                if($deleted){
                    return responseSuccess('Status Deleted');
                }else{
                    return responseFail('Data not found!');
                }
            }
        }
        die();

    }

    public function updateProj(Request $request){

        $trm    = new TRM;
        $sm     = new SM;
        $sfb    = new SFB;
        $wm     = new WM;
        $em     = new EM;
        $cm     = new CM;
        $pm     = new PM;
        $ftm    = new FTM;
        $djm    = new DJM;
        $swm    = new SWM;
        $psl    = new PSL;
        $cab    = new CAB;
        $pam    = new PAM;

        $resultTRM      = $trm->insertData($request);
        $resultSM       = $sm->insertData($request);
        $resultSFB      = $sfb->insertData($request);
        $resultWM       = $wm->insertData($request);
        $resultEM       = $em->insertData($request);
        $resultCM       = $cm->insertData($request);
        $resultPM       = $pm->insertData($request);
        $resultFTM      = $ftm->insertData($request);
        $resultDJM      = $djm->insertData($request);
        $resultSWM      = $swm->insertData($request);
        $resultPSL      = $psl->insertData($request);
        $resultCAB      = $cab->insertData($request);
        $resultPAM      = $pam->insertData($request);

        $dataID = [
            'proj_id'           => $request->projID,
            'sm_id'             => $resultSM->id,
            'wm_id'             => $resultWM->id,
            'trm_id'            => $resultTRM->id,
            'sfb_id'            => $resultSFB->id,
            'em_id'             => $resultEM->id,
            'cm_id'             => $resultCM->id,
            'pm_id'             => $resultPM->id,
            'ftm_id'            => $resultFTM->id,
            'djm_id'            => $resultDJM->id,
            'swm_id'            => $resultSWM->id,
            'psl_id'            => $resultPSL->id,
            'cab_id'            => $resultCAB->id,
            'pam_id'            => $resultPAM->id,
        ];

        $check = PDM::where('proj_id',$request->projID)->first();
        if($check){
            $updated = PDM::where('id',$request->projID)->update($dataID);
            if($updated){
                return responseSuccess('Materials Updated Successfully');
            }else{
                return responseFail('Data not found!');
            }
        }else{
            $create = PDM::create($dataID);
            if($create){
                return responseSuccess('Materials Create Successfully');
            }else{
                return responseFail('Data not found!');
            }
        }

        return $dataID;
    }

    public function imageupload(Request $request){

        // return $request->file('file')->getClientOriginalName();
        if ($request->has('file')) {
            $image = $request->file('file');
            $name = Str::slug($request->input('file')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $image_name =  $this->uploadOne($image, $folder, 'public', $name);
            // $image_path = Storage::disk('public')->put('uploads/images', $request->file('file'));
            // $request['image_path'] = $image_path;
            $data = [
                'proj_id' => $request->projID,
                'image_path' => $filePath
            ];
            PIM::updateOrCreate($data);


            return ['image' => $image_name];
        }
    }






    
    public function js_file(){
        $data = [
            'app.js',
            'plugins/dropzone/dropzone.min.js',
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
            'js/todolist.js',
            'js/data-table.js',
            'js/functional.js',
            'js/dropzone.js',
        ];

        return $data;
    }

    public function css_file(){
        $data = [
            'plugins/font-awesome/css/font-awesome.min.css',
            'plugins/ti-icons/css/themify-icons.css',
            'plugins/perfect-scrollbar/perfect-scrollbar.css',
            'plugins/datatables.net-bs4/css/dataTables.bootstrap4.css',
            'plugins/dropzone/dropzone.min.css',
            'plugins/jquery-toast-plugin/jquery.toast.min.css',
            'app.css',
        ];

        return $data;
    }
}
