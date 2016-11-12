<div id="edit_mainCategory_modal" class="modal">
    <div class="modal-content">
        <h4 class="center">Edit Main Category</h4>
        <form class="row" action="{{url('/admin/edit-data-category')}}" method="POST">
            {{csrf_field()}}
            <div class="row">
            <div class="col s12">
                <div class="input-field col s10">
                    <input id="edit_category_name_en" name="category_name_en" type="text" >
                    <label for="edit_category_name_en">Category Name English</label>
                </div>
                <div class="input-field col s10">
                    <input id="edit_category_name_ru" name="category_name_ru" type="text" >
                    <label for="edit_category_name_ru">Category Name Russian</label>
                </div>
                <div class="input-field col s10">
                    <input id="edit_category_name_am" name="category_name_am" type="text" >
                    <label for="edit_category_name_am">Category Name Armenian</label>
                </div>
                <div class="col s10">
                    <p>
                        <input type="checkbox" name="hide" class="filled-in" id="checkboxHideShow" />
                        <label for="checkboxHideShow">Hide/Show</label>
                    </p>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <input style="padding: 8px" type="submit" value="Сохранить" class="waves-effect waves-light btn">
                </div>
            </div>
        </form>
    </div>

</div>