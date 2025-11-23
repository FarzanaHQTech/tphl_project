<?php
$page_title = "Create Requisition ";
$page = 'Add Requisition ';
$show_breadcrumb = true;
$content = '
      <form action="#">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="row gy-10">
                                <div class="col-xl-12">
                                    <div class="card__wrapper">
                                        <div class="row gy-20">
                                            <div class="col-lg-6">
                                              <div class="from__input-box">
                                            <div class="form__input-title">
                                                <label for="project">Project <span>*</span></label>
                                            </div>
                                            <div class="form__input">
                                                <select class="form-control" name="role" id="role">
                                                    <option value="project1">Project-1</option>
                                                    <option value="project2">Project-2</option>
                                                    <option value="project3">Project-3</option>
                                                    <option value="project4">Project-4</option>
                                                </select>
                                            </div>
                                        </div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label>Requires Date <span>*</span></label>
                                                    </div>
                                                    <div class="form__input">
                                                        <input class="form-control" id="purchaseDate" type="text" placeholder="" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label> Description
                                                            <span>*</span></label>
                                                    </div>
                                                    <div class="from__input-box">
                                                        <textarea id="tinymce_simple_textarea"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="from__input-box">
                                                    <div class="form__input-title">
                                                        <label> Remark
                                                            <span>*</span></label>
                                                    </div>
                                                  <div class="fullwidth-textarea">
                                                        <textarea rows="3"></textarea>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

            <div class="card__wrapper">
    <h3>Items</h3>

    <div class="item-row">
        <div class="form-group">
            <label>Unit</label>
            <select>
                <option>Select Unit</option>
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" />
        </div>

        <div class="form-group small">
            <label>Quantity</label>
            <input type="number" value="0" />
        </div>

        <div class="form-group small">
            <label>Unit Price</label>
            <input type="number" value="0" step="0.01" />
        </div>

        <button class="btn remove" disabled>Remove</button>
    </div>

    <button class="btn add">Add Item</button>
</div>

 <div class="submit__btn text-center mb-20">
                            <button class="btn btn-primary">Add Requisition</button>
                        </div>
 </form>
    
    
';
include "../layouts/master.php";
?>

