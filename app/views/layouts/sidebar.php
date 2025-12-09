       <!-- app-sidebar-start -->

       <div class="app-sidebar" id="sidebar">
           <div class="main-sidebar-header">
               <a href="?home" class="header-logo">
                   <img class="main-logo" src="<?= $GLOBALS['base_url'] ?>/assets/images/logo/tphl_logo.png" alt="logo">
                   <img class="dark-logo" src="<?= $GLOBALS['base_url'] ?>/assets/images/logo/logo_white.png" alt="logo">
               </a>
           </div>




           <div class="main-sidebar" id="sidebar-scroll">
               <nav class="main-menu-container nav nav-pills flex-column sub-open">
                   <div class="sidebar-left" id="sidebar-left"></div>
                   <ul class="main-menu">
                       <!-- Home -->
                       <li class="slide <?= isActive('home', $current_route) ?>">
                           <a href="<?= $base_url ?>/home" class="sidebar__menu-item <?= isActive('home', $current_route) ?>">
                               <div class="side-menu__icon"><i class="icon-house"></i></div>
                               <span class="sidebar__menu-label">Home</span>
                           </a>
                       </li>

                       <li class="slide d-none <?= isActive('product-request', $current_route) ?>">
                           <a href="<?= $base_url ?>/product-request" class="sidebar__menu-item <?= isActive('product-request', $current_route) ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Product Request</span>
                           </a>
                       </li>

                       <!-- User Submenu -->
                       <li class="slide has-sub <?= isMenuOpen(['create-user', 'user-lists'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-user', 'user-lists'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-user"></i></div>
                               <span class="sidebar__menu-label">User</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-user', 'user-lists'], $current_route) ? 'display:block;' : 'display:none;' ?>">
                               <li class="slide <?= isActive('create-user', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-user', $current_route) ?>" href="<?= $base_url ?>/create-user">Add User</a>
                               </li>
                               <li class="slide <?= isActive('user-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('user-lists', $current_route) ?>" href="<?= $base_url ?>/user-lists">User List</a>
                               </li>
                           </ul>
                       </li>
                       <!-- <li class="slide < isActive('permissions',$current_route ) ?>">
                           <a href="<$base_url  ?>/permissions" class="sidebar__menu-item <isActive('permissions', $current_route) ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Permissions</span>
                           </a>
                       </li> -->

                       <li class="slide has-sub <?= isActive(['create-permission', 'permissions'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-permission', 'permissions'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Role & Permissions</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-permission', 'permissions'], $current_route) ? 'display:block;' : 'display:none;' ?>">
                               <li class="slide <?= isActive('create-permission', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-permission', $current_route) ?>" href="<?= $base_url ?>/create-permission">Add permission</a>
                               </li>
                               <li class="slide <?= isActive('permissions', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('permissions', $current_route) ?>" href="<?= $base_url ?>/permissions">permission List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub <?= isActive(['create-task', 'task-lists'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-task', 'task-lists'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fas fa-clipboard-list"></i>
                               </div>
                               <span class="sidebar__menu-label">Task Manage</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-task', 'task-lists'], $current_route) ? 'display:block;' : 'display:none;' ?>">
                               <li class="slide <?= isActive('create-task', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-task', $current_route) ?>" href="<?= $base_url ?>/create-task">Add Task</a>
                               </li>
                               <li class="slide <?= isActive('task-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('task-lists', $current_route) ?>" href="<?= $base_url ?>/task-lists">Task List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub d-none<?= isActive(['create-customer', 'customer-lists'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-customer', 'customer-lists'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Customer</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-customer', 'customer-lists'], $current_route) ? 'display:block;' : 'display:none;' ?>">
                               <li class="slide <?= isActive('create-customer', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-customer', $current_route) ?>" href="<?= $base_url ?>/create-customer">Add Customer</a>
                               </li>
                               <li class="slide <?= isActive('customer-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('customer-lists', $current_route) ?>" href="<?= $base_url ?>/customer-lists">Customer List</a>
                               </li>
                           </ul>
                       </li>

                       <li class="d-none slide has-sub <?= isActive(['create-product', 'product-lists'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['create-product', 'product-lists'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-box"></i></div>
                               <span class="sidebar__menu-label">Product</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['create-product', 'product-lists'], $current_route) ? 'display:block;' : 'display:none;' ?>">
                               <li class="slide <?= isActive('create-product', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-product', $current_route) ?>" href="<?= $base_url ?>/create-product">Add Product</a>
                               </li>
                               <li class="slide <?= isActive('product-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('product-lists', $current_route) ?>" href="<?= $base_url ?>/product-lists">Product List</a>
                               </li>
                           </ul>
                       </li>

                       <li class="slide has-sub <?= isActive(['employee-lists', 'departments', 'designations', 'leaves', 'salary-lists','create-attendance','attendance-lists','holiday-lists'], $current_route) ?>">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= isMenuOpen(['employee-lists', 'departments', 'designations', 'leaves', 'salary-lists'], $current_route) ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users-gear"></i></div>
                               <span class="sidebar__menu-label">HR</span>
                           </a>
                           <ul class="sidebar-menu child1" style="<?= isMenuOpen(['employee-lists', 'departments', 'designations', 'leaves', 'salary-lists','weekend-lists'], $current_route) ? 'display:block;' : '' ?>">
                               <li class="slide <?= isActive('employee-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('employee-lists', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/employee-lists">Employee List</a>
                               </li>
                               <li class="slide <?= isActive('departments', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('departments', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/departments">Department List</a>
                               </li>
                               <li class="slide <?= isActive('designations', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('designations', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/designations">Designation List</a>
                               </li>
                               <li class="slide <?= isActive('leaves', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('leaves', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/leaves">Leave List</a>
                               </li>
                               <li class="slide <?= isActive('salary-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('salary-lists', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/salary-list">Salary Lists</a>
                               </li>
                               <li class="slide <?= isActive('create-attendance', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('create-attendance', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/create-attendance">Add Attendance </a>
                               </li>
                               <li class="slide <?= isActive('attendance-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('attendance-lists', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/a<?= $GLOBALS['base_url'] ?>/ttendance-lists">Attendance Lists</a>
                               </li>
                               <li class="slide <?= isActive('holiday-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('holiday-lists', $current_route) ?>" href="<?= $GLOBALS['base_url'] ?>/holiday-lists">Attendance Lists</a>
                               </li>
                               <li class="slide <?= isActive('weekend-lists', $current_route) ?>">
                                   <a class="sidebar__menu-item <?= isActive('weekend-lists', $current_route) ?>" href="w<?= $GLOBALS['base_url'] ?>/eekend-lists">Attendance Lists</a>
                               </li>
                           </ul>
                       </li>



                       </li>

                   </ul>
                   <div class="sidebar-right" id="sidebar-right"></div>
               </nav>

           </div>
       </div>
       <div class="app__offcanvas-overlay"></div>
       <!-- app-sidebar-end -->