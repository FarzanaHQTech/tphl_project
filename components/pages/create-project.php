
<?php
$page_title = "Create product ";
$page = 'Add Product ';
$show_breadcrumb = true;
$content = '
      
    
<form action="#">
    <div class="row">
        <div class="col-xxl-12">
            <div class="row gy-10">
                <div class="col-xl-12">
                    <div class="card__wrapper">
                                                
                    <div class="row gy-20">
                        <div class="clo-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="location">Location <span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <select class="form-control" name="role" id="role">
                                        <option value="location1">location-1</option>
                                        <option value="location2">location-2</option>
                                        <option value="location3">location-3</option>
                                        <option value="location4">location-4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clo-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="camera">Cameras <span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <select class="form-control" name="role" id="role">
                                        <option value="camera1">camera-1</option>
                                        <option value="camera2">camera-2</option>
                                        <option value="camera3">camera-3</option>
                                        <option value="camera4">camera-4</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="clo-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="project">project Type <span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <select class="form-control" name="role" id="role">
                                        <option value="project1">project Type</option>
                                        <option value="project1">project-1</option>
                                        <option value="project2">project-2</option>
                                        <option value="project3">project-3</option>
                                        <option value="project4">project-4</option>
                                    </select>
                                </div>
                            </div>
                        </div>





                            <div class="col-xl-6 col-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="roadWidth">Road Width<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="roadWidth" id="roadWidth" type="text">
                                    </div>
                                </div>
                            </div>

                        <div class="col-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Launching Date<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <input class="form-control" id="purchaseDate" type="date" placeholder="Launching Date" >
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Hand Over Date<span>*</span></label>
                                </div>
                                <div class="form__input">
                                      <input class="form-control" id="handOverDate" type="date" placeholder="Launching Date" >
                                </div>
                            </div>
                        </div>

  

                    <div class="col-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="totalShare">Total Share<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <input class="form-control" name="totalShare" id="totalShare" type="text">
                                </div>
                            </div>
                    </div>

                    
                        <div class="col-6 col-xl-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="name">Purchase URL<span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <input class="form-control" name="purchaseUrl" id="purchaseUrl" type="text">
                                </div>
                            </div>
                        </div>


                          <div class="clo-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="priority">priority <span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <select class="form-control" name="role" id="role">
                                        <option value="priority1">priority-1</option>
                                        <option value="priority2">priority-2</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                          <div class="clo-xl-6 col-6 col-lg-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label for="coordinator">Project Coordinator <span>*</span></label>
                                </div>
                                <div class="form__input">
                                    <select class="form-control" name="role" id="role">
                                        <option value="coordinator1">coordinator-1</option>
                                        <option value="coordinator2">coordinator-2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            
                            <div class="col-lg-12 col-12">
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

                


                         <div class="col-6 col-xl-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name">Name<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="name" id="serviceCharge" type="text">
                                    </div>
                                </div>
                          </div>




                          <div class="col-6 col-xl-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name">Land Area<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="landArea" id="landArea" type="text">
                                    </div>
                                </div>
                          </div>


                        

                         <div class="col-6 col-xl-6 col-lg-6">

                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name">Facing<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="Facing" id="Facing" type="text">
                                    </div>
                                </div>
                          </div>
                        
                          <div class="col-6 col-xl-6 col-lg-6">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name">Building<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="building" id="building" type="text">
                                
                                        </div>
                                </div>
                          </div>

                           <div class="col-12 col-xl-12 col-lg-12">
                                <div class="from__input-box">
                                    <div class="form__input-title">
                                        <label for="name">Address<span>*</span></label>
                                    </div>
                                    <div class="form__input">
                                        <input class="form-control" name="address" id="address" type="text">
                                    </div>
                                </div>
                          </div>


                        <div class="col-xxl-6 clo-lg-6 col-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Project Thumb Image<span>*</span></label>
                                </div>
                            </div>
                            <div class="dropzone dz-clickable" id="myNewDropzone">
                                <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                        dropzone. Selected files are
                                        not actually uploaded.)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-6 col-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Unit Image<span>*</span></label>
                                </div>
                            </div>
                            <div class="dropzone dz-clickable" id="myNewDropzone">
                                <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                        dropzone. Selected files are
                                        not actually uploaded.)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-lg-6 col-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Floor Image<span>*</span></label>
                                </div>
                            </div>
                            <div class="dropzone dz-clickable" id="myNewDropzone">
                                <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                        dropzone. Selected files are
                                        not actually uploaded.)</span>
                                </div>
                            </div>
                        </div>


                        <div class="col-xxl-6 col-lg-6 col-6">
                            <div class="from__input-box">
                                <div class="form__input-title">
                                    <label>Only PDF<span>*</span></label>
                                </div>
                            </div>
                            <div class="dropzone dz-clickable" id="myNewDropzone">
                                <div class="dz-default dz-message"><i class="fa-thin fa-cloud-arrow-up"></i>
                                    <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo
                                        dropzone. Selected files are
                                        not actually uploaded.)</span>
                                </div>
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
    <h3>Progress Timeline</h3>

    <div class="row d-flex ">
        <div class="col-md-4">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control"/>
        </div>

        <div class="col-md-2">
            <label class="form-label">Progress %</label>
            <input type="number" name="progress" class="form-control" value="0"/>
        </div>

            <div class="col-md-2">
                <label class="form-label">Status</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="status" value="0">
                    <label class="form-check-label" for="status">
                        Active
                    </label>
                </div>
            </div>


        <div class="col-md-2 align-items-center mt-1">
           <label class="form-label"></label>
            <button class="btn btn-danger w-100">Remove</button>
        </div>

    </div>

    <button class="btn btn-primary mt-3 add">Add Item</button>
</div>



    <div class="submit__btn text-center mb-20">
        <button class="btn btn-primary">Add Product</button>
    </div>
</form>  
';
include "../layouts/master.php";
?>



