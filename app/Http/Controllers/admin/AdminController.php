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

    /**
     * view add category table
     */
    public function viewCategoryAdd(AdminServices $adminServices){
        $data = $adminServices->getAllMainCategory();
        return view('admin.addCategory', compact(['data']));
    }
    public function saveNewCategory(AdminServices $adminServices,Request $request){
        $data = array(
            'category_name_en' => $request->input('category_name_en'),
            'category_name_ru' => $request->input('category_name_ru'),
            'category_name_am' => $request->input('category_name_am'),
            'main' => $request->input('subCategory'),
            'hide' => 1,
        );
        $adminServices->insertNewCategory($data);
        return redirect('/admin/category');
    }
    public function deleteMainCategory(AdminServices $adminServices,$id){
        $adminServices->deleteMainCategoryById($id);
        return redirect('/admin/category');
    }
    public function getCategoryDataById(Request $request,AdminServices $adminServices){
        $data = $adminServices->getCategoryAllDataById($request->input('id'));
        return json_encode($data);
    }
    public function editMainCategory(Request $request,AdminServices $adminServices,$id){
        if(!empty($request->input('hide'))){
            $checkbox = 1;
        }
        else{
            $checkbox = 0;
        }
        $data = array(
            'category_name_en' => $request->input('category_name_en'),
            'category_name_ru' => $request->input('category_name_ru'),
            'category_name_am' => $request->input('category_name_am'),
            'hide' => $checkbox,
        );
        $adminServices->editMainCategoryData($data,$id);
        return redirect('/admin/category');
    }



}