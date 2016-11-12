@extends('admin.main')
@section('content')
    <div class="row">
        <form action="{{url('/admin/add-category')}}" method="POST" class="col s6 forma_category">
            {{csrf_field()}}
                <h3 class="center">Главная Категория</h3>
            <div class="row">
                <div class="input-field col s10">
                    <input id="category_name_en" name="category_name_en" type="text" >
                    <label for="category_name_en">Category Name English</label>
                </div>
                <div class="input-field col s10">
                    <input id="category_name_ru" type="text" name="category_name_ru" class="validate">
                    <label for="category_name_ru">Category Name Russian</label>
                </div>
                <div class="input-field col s10">
                    <input id="category_name_am" name="category_name_am" type="text" class="validate">
                    <label for="category_name_am">Category Name Armenian</label>
                </div>
                <div class="input-field col s10">
                    <select  name="subCategory">
                        <option value="main" selected>Main</option>
                        @foreach($data as $val)
                            @if($val->main == 'main')
                                <option value="{{$val->category_name_en}}">{{$val->category_name_en}}</option>
                            @endif
                        @endforeach
                    </select>
                    <label>Materialize Select</label>
                </div>
                <div class="col s10">
                    <input type="submit" value="Сохранить" class="waves-effect waves-light btn">
                </div>
            </div>
        </form>
        <div class="col s6">
            <div class="row">
                <div class="col s12">
                    <h4>All Main Categories</h4>
                </div>
            </div>
            @foreach($data as $val)

                @if($val->main == 'main')
                    <div class="mainAllCategory row">
                        <div class="row">
                            <div class="mainCat  col s5">
                                <div class="pnerMainCat ">
                                    <span>{{$val->category_name_en}}</span>
                                    <span>{{($val->hide == 1)?'Show':'Hide'}}</span>
                                </div>
                                <div class="anerMainCat">
                                    <a href="!#" data-id="{{$val->id}}" class="edit_main_category_modal"><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="{{url('/admin/delete-main-category/').'/'.$val->id}}"
                                       attr-id="{{$val->id}}"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @foreach($data as $valSub)
                            @if($val->category_name_en == $valSub->main)
                                <div class="row">


                                    <div class="col s4 center subCatView">
                                        <span class="subCategro">{{$valSub->category_name_en}}</span>
                                    </div>
                                    <div class="subCatViewLinks">
                                        <a href="!#" data-id="{{$valSub->id}}" class="edit_main_category_modal"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="{{url('/admin/delete-main-category/').'/'.$valSub->id}}"
                                           attr-id="{{$valSub->id}}"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </div>
                                </div>

                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
@include('admin.modals.editMainCategory')