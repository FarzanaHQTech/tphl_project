 <?php
    $page_title = "Create User";
    $page = 'Add User';
    $show_breadcrumb = true;

    ?>


 <div class="row">
     <div class="col-xxl-12 col-xl-12 col-lg-12">

         <div class="card__title-wrap mb-20">
             <h5 class="card__heading-title">Add New Employee</h5>
         </div>

         <form action="<?= $GLOBALS['base_url'] ?>/store-employee">
             <div class="card__wrapper mb-20">
                 <div class="row g-20 gy-20 align-items-center justify-content-center">
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="full_name">Full Name <span>*</span></label>
                             </div>
                             <div class="form__input">
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
                                 <input class="form-control" name="lastname" id="father_name" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="phone">Contact Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="phone" id="phone" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="emergency_contact">Emergency Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="emergency_contact" id="emergency_contact" type="text">
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
                                 <label for="employeeId2">Employee ID <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="employeeId2" id="employeeId2" type="text">
                             </div>
                         </div>
                     </div>



                     <div class="col-lg-12">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label>Employee Designation <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <select class="form-control">
                                     <option value="ITD">Information Technology Department</option>
                                     <option value="TD">Technology Department</option>
                                     <option value="SD">Security Department</option>
                                     <option value="NPD">Network Operations Department</option>
                                     <option value="SAD">Systems Administration Department</option>
                                     <option value="DMD">Database Management Department</option>
                                     <option value="SDD">Software Development Department</option>
                                     <option value="WDD">Web Development Department</option>
                                     <option value="PMO">Project Management Office</option>
                                     <option value="ITSP">IT Support Department</option>
                                     <option value="CD">Consulting Department</option>
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
                                 <input class="form-control" id="joiningDate" type="text" readonly="readonly">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="accountholadeername">Account Holder Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="accountholadeername" id="accountholadeername" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="accountnumber">Account Number <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="accountnumber" id="accountnumber" type="text">
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="bankname">Bank Name <span>*</span></label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" name="bankname" id="bankname" type="text">
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


                     <div class="col-lg-12">
                         <div class="from__input-box">
                             <div class="form__input-title">
                                 <label for="sellerphoto">Employee Photo (100px*100px)</label>
                             </div>
                             <div class="form__input">
                                 <input class="form-control" id="sellerphoto" type="file">
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