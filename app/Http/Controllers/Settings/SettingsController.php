<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Attachment;
use App\Models\District;
use App\Models\Grade;
use App\Models\Institution;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SettingsController extends Controller
{
    public function getInstitutionView(){
        $list = Institution::all();
        return view('settings.Add-Institution',['list'=>$list]);
    }

    public function addInstituion(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
     
        ]); 
        $data = new Institution();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->description = $request->description;
        $data->save();
        return $data? back()->with('message_success','Institution   saved Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

    public function getEditInstitutionView($id){
        $decodeId = Crypt::decrypt($id); // Decrypting Instituion  id
        $data = Institution::find($decodeId);
        $list = Institution::all();

        return view('settings.edit-institution',['id'=>$id,'data'=>$data,'list'=>$list]);
    }

    public function editInstitution(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
     
        ]);
        $decodeId = Crypt::decrypt($id);
     
        $data =  Institution::find($decodeId);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->description = $request->description;
        $data->save();
        return $data? back()->with('message_success','Institution updated  Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }
     public function getGradeView(){
        $list = Grade::all();
        return view('settings.Add-Grade',['list'=>$list]);
     }

     public function addGrade(Request $request){

        $request->validate([
            'name' => 'required',
            'status' => 'required',
     
        ]); 
        $data = new Grade();
        $data->name = $request->name;
        $data->status = $request->status;
        
        $data->save();
        return $data? back()->with('message_success','Grade saved Successfully'): back()->with('message_error','Something went wrong, please try again.');

     }

     public function getEditGradeView($id){
        $decodeId = Crypt::decrypt($id); // Decrypting Instituion  id
        $data = Grade::find($decodeId);
        $list = Grade::all();

        return view('settings.edit-grade',['id'=>$id,'data'=>$data,'list'=>$list]);
    }

    public function editGrade(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
     
        ]);
        $decodeId = Crypt::decrypt($id);
     
        $data =  Grade::find($decodeId);
        $data->name = $request->name;
        $data->status = $request->status;
        
        $data->save();
        return $data? back()->with('message_success','Grade updated  Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

    public function getRegionView(){
        $list = Region::all();
        return view('settings.Add-Region',['list'=>$list]);
    }
     
    public function addRegion(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            
     
        ]); 
        $data = new Region();
        $data->name = $request->name;
        $data->status = $request->status;
       
        
        $data->save();
        return $data? back()->with('message_success','Region saved Successfully'): back()->with('message_error','Something went wrong, please try again.');


    }

    public function getEditRegionView($id){
        $decodeId = Crypt::decrypt($id); // Decrypting Instituion  id
        $data = Region::find($decodeId);
        $list = Region::all();

        return view('settings.edit-region',['id'=>$id,'data'=>$data,'list'=>$list]);

    }

    public function editRegion(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
     
        ]);
        $decodeId = Crypt::decrypt($id);
     
        $data =  Region::find($decodeId);
        $data->name = $request->name;
        $data->status = $request->status;
        
        $data->save();
        return $data? back()->with('message_success','Region updated  Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

    public function getDistrictView(){
        $list = Region::all();
        $dist = District::all();
        return view('settings.addDistrict',['list'=>$list,'dist'=>$dist]);
    }

    public function AddDistrict(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'status' => 'required',
            'region' => 'required',
     
        ]);
        $data = new District();
        $data->name = $request->name;
        $data->region_id = $request->region;
        $data->status = $request->status;
        $data->save();
        return $data? back()->with('message_success','District saved Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

     public function getEditDistrictView($id){
        $decodeId = Crypt::decrypt($id); // Decrypting District  id
        $data = District::find($decodeId);
        $dist = District::all();
        $list = Region::all();

        return view('settings.edit-district',['id'=>$id,'data'=>$data,'dist'=>$dist,'list'=>$list]);
     }

     public function editDistrict(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'region' => 'required',
     
        ]);
        $decodeId = Crypt::decrypt($id);
     
        $data =  District::find($decodeId);
        $data->name = $request->name;
        $data->status = $request->status;
        $data->region_id = $request->region;
        
        $data->save();
        return $data? back()->with('message_success','District updated  Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

    public function getAttachmentView(){
        $list = Attachment::all();
        return view('settings.Attachment',['list'=>$list]);
    }

    public function addAttachment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            
     
        ]);
        $data = new Attachment();
        $data->name = $request->name;
       
        $data->status = $request->status;
        $data->save();
        return $data? back()->with('message_success','Attachment saved Successfully'): back()->with('message_error','Something went wrong, please try again.');
    }

     public function getEditAttachmentView($id){
        $decodeId = Crypt::decrypt($id); // Decrypting District  id
        $data = Attachment::find($decodeId);
      
        $list = Attachment::all();

        return view('settings.edit-attachment',['id'=>$id,'data'=>$data,'list'=>$list]);
     }

     public function editAttachment(Request $request, $id)
     {
         $request->validate([
            'name' => 'required',
            'status' => 'required',
            
     
        ]);
        $decodeId = Crypt::decrypt($id);
     
        $data =  Attachment::find($decodeId);
        $data->name = $request->name;
        $data->status = $request->status;
        
        
        $data->save();
        return $data? back()->with('message_success','Attachment updated  Successfully'): back()->with('message_error','Something went wrong, please try again.');
     }

}
