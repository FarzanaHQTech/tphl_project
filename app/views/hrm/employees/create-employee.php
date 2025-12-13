 <?php
    $page_title = "Create Employee";
    $page = 'Add Employee';
    $show_breadcrumb = true;

    ?>


 <div class="row">
     <div class="col-xxl-12 col-xl-12 col-lg-12">

         <div class="card__title-wrap mb-20">
             <h5 class="card__heading-title">Add New Employee</h5>
         </div>

         <form action="<?= $GLOBALS['base_url'] ?>/store-employee" method="POST" enctype="multipart/form-data">
             <div class="card__wrapper mb-20">
                 <div class="row g-20 gy-20 align-items-center justify-content-center">
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="full_name">Full Name <span>*</span></label>
                             </div>
                             <div classqA="form__input">
                                 <input class="form-control" name="full_name" id="full_name" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="father_name">Father Name</label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="father_name" id="father_name" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="phone">Contact Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="phone" id="phone" type="text" minlength="11" maxlength="11">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="emergency_contact">Emergency Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="emergency_contact" id="emergency_contact" type="text" minlength="11" maxlength="11">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="email">Email <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="email" id="email" type="email">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="userName">User Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="userName" id="userName" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="qualification">Qualification<span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="qualification" id="qualification" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="employeeId">Employee ID <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="employeeId" id="employeeId" type="text">
                             </div>
                         </div>
                     </div>



                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label>Employee Department <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <select class="form-control" name="designation_id">
                                     <?php foreach ($designations as $designation): ?>
                                         <option value="<?= $designation['id'] ?>">
                                             <?= $designation['designation_name'] ?>
                                         </option>
                                     <?php endforeach ?>
                                 </select>

                             </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label>Employee Designation <span>*</span></label>
                             </div>

                             <div class="form__input">
                                 <select class="form-control" name="department_id">
                                     <?php foreach ($departments as $department): ?>
                                         <option value="<?= $department['id'] ?>"><?= $department['name'] ?></option>
                                     <?php endforeach ?>
                                 </select>

                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label class="form-check-label">Joining Date <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input name="joining_date" class="form-control" id="joiningDate" type="text" readonly="readonly">
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label class="form-check-label">Date Of Birth <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input name="dob" class="form-control" id="dateofBirth" type="text" readonly="readonly">
                             </div>
                         </div>
                     </div>


                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="account_holder_name">Account Holder Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="account_holder_name" id="account_holder_name" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="account_number">Account Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="account_number" id="account_number" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="bank_name">Bank Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="bank_name" id="bank_name" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="branchname">Branch Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="branchname" id="branchname" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 text-center">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="address">Address <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <textarea class="form-control" name="address" id="address"></textarea>
                             </div>
                         </div>
                     </div>


                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="social_media1">Social Media Link 1 <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="social_media1" id="social_media1" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="social_media2">Social Media Link 2 <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="social_media2" id="social_media2" type="text">
                             </div>
                         </div>
                     </div>


                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="photo">Employee Photo (300px*300px)</label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" id="photo" type="file" name="photo">
                             </div>
                         </div>
                     </div>

                     <div class="col-lg-6">
                         <div class="form__input-box">
                             <div class="form__input-box">
                                 <label>
                                     <input type="checkbox" id="make_user" name="make_user" value="1">
                                     Create User Account?
                                 </label>

                                 <div id="password_box" style="display:none;">
                                     <label>Password</label>
                                     <input type="password" name="password" class="form-control">
                                 </div>
                             </div>
                         </div>
                     </div>




                     <div class="col-md-12">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label>Experience <span>*</span></label>
                             </div>
                             <div class="from__input-box">
                                 <textarea id="tinymce_simple_textarea" name="experience"></textarea>
                             </div>
                         </div>
                     </div>


                 </div>
             </div>
             <div class="submit__btn text-center">
                 <button class="btn btn-primary">Submit</button>
             </div>
         </form>
     </div>
 </div>


 <script>
     document.getElementById("make_user").addEventListener("change", function() {
         if (this.checked) {
             document.getElementById("password_box").style.display = "block";
         } else {
             document.getElementById("password_box").style.display = "none";
         }
     });
 </script>