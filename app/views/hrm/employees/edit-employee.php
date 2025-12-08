 <?php
    $page_title = "Create Employee";
    $page = 'Add Employee';
    $show_breadcrumb = true;

    ?>


 <div class="row">
     <div class="col-xxl-12 col-xl-12 col-lg-12">

         <div class="card__title-wrap mb-20">
             <h5 class="card__heading-title">Edit Employee</h5>
         </div>

         <form action="<?= $GLOBALS['base_url'] ?>/update-employee/<?= $employee['id'] ?>" method="POST" enctype="multipart/form-data">

             <div class="row g-20 gy-20 align-items-center justify-content-center">
                 <!-- Full Name -->
                 <div class="col-lg-6">
                     <label for="full_name">Full Name <span>*</span></label>
                     <input class="form-control" name="full_name" id="full_name" type="text"
                         value="<?= htmlspecialchars($employee['full_name']) ?>">
                 </div>

                 <!-- Father Name -->
                 <div class="col-lg-6">
                     <label for="father_name">Father Name</label>
                     <input class="form-control" name="father_name" id="father_name" type="text"
                         value="<?= htmlspecialchars($employee['father_name']) ?>">
                 </div>

                 <!-- Phone -->
                 <div class="col-lg-6">
                     <label for="phone">Contact Number <span>*</span></label>
                     <input class="form-control" name="phone" id="phone" type="text" minlength="11" maxlength="11"
                         value="<?= htmlspecialchars($employee['phone']) ?>">
                 </div>

                 <!-- Emergency Contact -->
                 <div class="col-lg-6">
                     <label for="emergency_contact">Emergency Number <span>*</span></label>
                     <input class="form-control" name="emergency_contact" id="emergency_contact" type="text" minlength="11" maxlength="11"
                         value="<?= htmlspecialchars($employee['emergency_contact']) ?>">
                 </div>

                 <!-- Email -->
                 <div class="col-lg-6">
                     <label for="email">Email <span>*</span></label>
                     <input class="form-control" name="email" id="email" type="email"
                         value="<?= htmlspecialchars($employee['email']) ?>">
                 </div>

                 <!-- Username -->
                 <div class="col-lg-6">
                     <label for="username">User Name <span>*</span></label>
                     <input class="form-control" name="username" id="username" type="text"
                         value="<?= htmlspecialchars($employee['username']) ?>">
                 </div>

                 <!-- Qualification -->
                 <div class="col-lg-6">
                     <label for="qualification">Qualification <span>*</span></label>
                     <input class="form-control" name="qualification" id="qualification" type="text"
                         value="<?= htmlspecialchars($employee['qualification']) ?>">
                 </div>

                 <!-- Employee ID -->
                 <div class="col-lg-6">
                     <label for="employeeId">Employee ID <span>*</span></label>
                     <input class="form-control" name="employee_id" id="employeeId" type="text"
                         value="<?= htmlspecialchars($employee['employee_id']) ?>">
                 </div>

                 <!-- Department -->
                 <div class="col-lg-6">
                     <label>Department <span>*</span></label>
                     <select class="form-control" name="department_id">
                         <option value="">Select Department</option>
                         <?php foreach ($departments as $department): ?>
                             <option value="<?= $department['id'] ?>"
                                 <?= $employee['department_id'] == $department['id'] ? 'selected' : '' ?>>
                                 <?= $department['name'] ?>
                             </option>
                         <?php endforeach ?>
                     </select>
                 </div>

                 <!-- Designation -->
                 <div class="col-lg-6">
                     <label>Designation <span>*</span></label>
                     <select class="form-control" name="designation_id">
                         <option value="">Select Designation</option>
                         <?php foreach ($designations as $designation): ?>
                             <option value="<?= $designation['id'] ?>"
                                 <?= $employee['designation_id'] == $designation['id'] ? 'selected' : '' ?>>
                                 <?= $designation['designation_name'] ?>
                             </option>
                         <?php endforeach ?>
                     </select>
                 </div>

                 <!-- Joining Date -->
                 <div class="col-lg-6">
                     <label>Joining Date <span>*</span></label>
                     <input class="form-control" name="joining_date" id="joiningDate" type="text" readonly
                         value="<?= htmlspecialchars($employee['joining_date']) ?>">
                 </div>

                 <!-- Account Holder Name -->
                 <div class="col-lg-6">
                     <label for="account_holder_name">Account Holder Name <span>*</span></label>
                     <input class="form-control" name="account_holder_name" id="account_holder_name" type="text"
                         value="<?= htmlspecialchars($employee['account_holder_name']) ?>">
                 </div>

                 <!-- Account Number -->
                 <div class="col-lg-6">
                     <label for="account_number">Account Number <span>*</span></label>
                     <input class="form-control" name="account_number" id="account_number" type="text"
                         value="<?= htmlspecialchars($employee['account_number']) ?>">
                 </div>

                 <!-- Bank Name -->
                 <div class="col-lg-6">
                     <label for="bank_name">Bank Name <span>*</span></label>
                     <input class="form-control" name="bank_name" id="bank_name" type="text"
                         value="<?= htmlspecialchars($employee['bank_name']) ?>">
                 </div>

                 <!-- Branch Name -->
                 <div class="col-lg-6">
                     <label for="branch_name">Branch Name <span>*</span></label>
                     <input class="form-control" name="branch_name" id="branch_name" type="text"
                         value="<?= htmlspecialchars($employee['branch_name']) ?>">
                 </div>
                  <!-- Photo -->
                 <div class="col-lg-6">
                     <label for="photo">Employee Photo (100px*100px)</label>
                     <input class="form-control" type="file" name="photo" id="photo">
                     <?php if (!empty($employee['photo'])): ?>
                         <img src="<?= $GLOBALS['base_url'] ?>/uploads/employees/<?= $employee['photo'] ?>" width="100" class="mt-2">
                     <?php endif; ?>
                 </div>


                 <!-- Address -->
                 <div class="col-lg-12">
                     <label for="address">Address <span>*</span></label>
                     <textarea class="form-control" name="address" id="address"><?= htmlspecialchars($employee['address']) ?></textarea>
                 </div>

                 <!-- Social Media -->
                 <div class="col-lg-6">
                     <label for="social_media1">Social Media Link 1</label>
                     <input class="form-control" name="social_media1" id="social_media1" type="text"
                         value="<?= htmlspecialchars($employee['social_media1']) ?>">
                 </div>
                 <div class="col-lg-6">
                     <label for="social_media2">Social Media Link 2</label>
                     <input class="form-control" name="social_media2" id="social_media2" type="text"
                         value="<?= htmlspecialchars($employee['social_media2']) ?>">
                 </div>

                
                 <!-- Experience -->
                 <div class="col-lg-12">
                     <label>Experience <span>*</span></label>
                     <textarea id="tinymce_simple_textarea" name="experience"><?= htmlspecialchars($employee['experience']) ?></textarea>
                 </div>

                 <!-- Submit -->
                 <div class="col-12 text-center mt-3">
                     <button class="btn btn-primary">Update Employee</button>
                 </div>
             </div>
         </form>

     </div>
 </div>