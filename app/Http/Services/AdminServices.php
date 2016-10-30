<?php
namespace App\Http\Services;

use Illuminate\Support\Facades\DB;

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





}