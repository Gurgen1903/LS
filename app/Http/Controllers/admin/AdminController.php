<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\AdminServices;

class AdminController extends Controller
{
    public function __construct()
    {

    }
    public function index(){
        return view('admin.homeAdmin');
    }
    public function viewUploadImg(AdminServices $adminServices){
        $data = $adminServices->getAllImgForSlider();
        return view('admin.uploadPhotoForSlider',compact('data'));
    }
    public function uploadImgForSlider(Request $request,AdminServices $adminServices){

        $this->validate($request, [
            'filefield' => 'required',
        ]);
        $fileType = $request->file('filefield')->getClientOriginalExtension();
        $filename = '__'.uniqid().'.'.$fileType;
        $filePath = base_path('public/imgs/uploads/sliderImg');
        $data = array(
            'img_name' => $filename,
            'img_type' => $fileType,
        );
        $adminServices->insertNewImgForSlider($data);
        $request->file('filefield')->move($filePath,$filename);
        return redirect('/admin/add-photo');
    }
    public function deleteImgForSlider($id,AdminServices $adminServices){
        $img = $adminServices->getImgById($id);
        unlink(base_path('public/imgs/uploads/sliderImg/'.$img->img_name));
        $adminServices->deleteImg($id);
        return redirect('/admin/add-photo');
    }



}