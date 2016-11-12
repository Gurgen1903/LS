<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;
use App\home_category;

class AdminServices
{
    public function __construct(){

    }

    /**
     * img upload
     * table 'img_slider'
     */
    public function insertNewImgForSlider($data){
        return DB::table('img_slider')->insert($data);
    }
    /**
     * get all img for slider
     */
    public function getAllImgForSlider(){
        return DB::table('img_slider')->get();
    }
    /**
     * get img for slider by id
     */
    public function getImgById($id){
        return DB::table('img_slider')->first();
    }
    /**
     * delete by id img
     */
    public function deleteImg($id){
        return DB::table('img_slider')->where('id',$id)->delete();
    }

    public function insertNewCategory($data){
        home_category::create($data);
    }
    public function getAllMainCategory(){
        return DB::table('home_categories')->get();
    }

    public function deleteMainCategoryById($id){
        return DB::table('home_categories')->where('id',$id)->delete();
    }
    public function getCategoryAllDataById($id){
        return DB::table('home_categories')->where('id',$id)->first();
    }
    public function editMainCategoryData($data,$id){
        return DB::table('home_categories')->where('id',$id)->update($data);
    }






}