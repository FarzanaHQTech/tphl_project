       <!-- app-sidebar-start -->

       <div class="app-sidebar" id="sidebar">
           <div class="main-sidebar-header">
               <a href="index.php?page=home" class="header-logo">
                   <img class="main-logo" src="assets/images/logo/tphl_logo.png" alt="logo">
                   <img class="dark-logo" src="assets/images/logo/logo_white.png" alt="logo">
               </a>
           </div>




           <div class="main-sidebar" id="sidebar-scroll">
               <nav class="main-menu-container nav nav-pills flex-column sub-open">
                   <div class="sidebar-left" id="sidebar-left"></div>
                   <ul class="main-menu">
                       <li class="slide <?= ($current_page === 'home') ? 'active' : '' ?>">
                           <a href="index.php?page=home"
                               class="sidebar__menu-item <?= ($current_page === 'home') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="icon-house"></i></div>
                               <span class="sidebar__menu-label">Home</span>
                           </a>
                       </li>

                      <li class="slide <?= ($current_page  == 'product-request') ? 'active' : '' ?>">
                        <a href="index.php?page=product-request" class="sidebar__menu-item <?= ($current_page  == 'product-request') ? 'active' : '' ?>">
                            <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                            <span class="sidebar__menu-label">Product Request</span>
                        </a>
                    </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= ($current_page  == 'create-user') ? 'active' : '' ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-user"></i></div>
                               <span class="sidebar__menu-label">User</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide <?= ($current_page  == 'create-user') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'create-user') ? 'active' : '' ?>" href="index.php?page=create-user">Add User</a>
                               </li>
                               <li class="slide <?= ($current_page  == 'user-lists') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'user-lists') ? 'active' : '' ?>" href="index.php?page=user-lists">User List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Customer</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide <?= ($current_page  == 'create-customer') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'home') ? 'active' : '' ?>" href="index.php?page=create-customer">Add Customer</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'home') ? 'active' : '' ?>" href="index.php?page=customer-lists">Customer List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide <?= ($current_page  == 'permissions') ? 'active' : '' ?>">
                           <a href="index.php?page=permissions" class="sidebar__menu-item <?= ($current_page  == 'permissions') ? 'active' : '' ?>">
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Permissions</span>
                           </a>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item <?= ($current_page  == 'create-vendor') ? 'active' : '' ?>">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-building"></i></div>
                               <span class="sidebar__menu-label">Vendor</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide <?= ($current_page  == 'create-vendor') ? 'active' : '' ?>">
                                   <a class="sidebar__menu-item <?= ($current_page  == 'create-vendor') ? 'active' : '' ?>" href="index.php?page=create-vendor">Add Vendor</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=vendor-lists">Vendor List</a>
                               </li>

                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-flag"></i></div>
                               <span class="sidebar__menu-label">Banner</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-banner">Add Banner</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=banner-lists">Banner List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-tags"></i></div>
                               <span class="sidebar__menu-label">Brand</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-brand-logo">Add Brand Logo</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=brand-lists">Brand List</a>
                               </li>

                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-newspaper"></i></div>
                               <span class="sidebar__menu-label">FAQ </span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-faq">Add FAQ </a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=faq-lists">Faq List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-pen-to-square"></i></div>
                               <span class="sidebar__menu-label">Blog </span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-blog">Add Blog </a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=blog-lists">Blog List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-location-dot"></i></div>
                               <span class="sidebar__menu-label">Location </span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-location">Add Location </a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=location-lists">Location List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-clipboard-list"></i></div>
                               <span class="sidebar__menu-label">Requisition </span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-requisition">Add Requisition </a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=requisition-lists">Requisition List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-weight-scale"></i></div>
                               <span class="sidebar__menu-label">Unit</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-unit">Add Unit </a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=unit-lists">Unit List</a>
                               </li>

                           </ul>
                       </li>
                       <li class="slide">
                           <a href="index.php?page=leads" class="sidebar__menu-item">
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Leads</span>
                           </a>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-box"></i></div>
                               <span class="sidebar__menu-label">Product</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-product">Add Product</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=product-lists">Product List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-cart-shopping"></i></div>
                               <span class="sidebar__menu-label">Purchase</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-purchase">Add Purchase</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=purchase-lists">Purchase List</a>
                               </li>

                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-camera"></i></div>
                               <span class="sidebar__menu-label">Camera</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-camera">Add Camera</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=camera-lists">Camera List</a>
                               </li>

                           </ul>
                       </li>


                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-diagram-project"></i></div>
                               <span class="sidebar__menu-label">Project</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-project">Add Project
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=project-lists">Project List </a>
                               </li>


                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-star"></i></div>
                               <span class="sidebar__menu-label">Popular Project</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-popular-project">Add Popular
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=popular-projects">Popular List </a>
                               </li>
                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-clipboard-check"></i></div>
                               <span class="sidebar__menu-label">Order</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-order">Add Order
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=order-lists">Order List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-star-half-stroke"></i></div>
                               <span class="sidebar__menu-label">Review</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-review">Add Review
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=review-lists">Review List</a>
                               </li>


                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-regular fa-bell"></i></div>
                               <span class="sidebar__menu-label">Notification</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-notification">Add
                                       Notification
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=notification-lists">Notification
                                       List</a>
                               </li>


                           </ul>
                       </li>
                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-money-bill"></i></div>
                               <span class="sidebar__menu-label">Payment</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=create-payment">Add Payment
                                   </a>
                               </li>
                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=payment-lists">Payment List</a>
                               </li>`
                           </ul>
                       </li>


                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users-gear"></i></div>
                               <span class="sidebar__menu-label">HR</span>
                           </a>
                           <ul class="sidebar-menu child1">
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=employee-lists"> Employee List</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=departments">Department List</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=designations">Designation List</a>
                               </li>

                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=leaves"> Leave List</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=salary-lists"> Salary List</a>
                               </li>

                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=create-attendence">Add Attendence</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=attendence-list"> Attendence List</a>
                               </li>
                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=holidays"> Holiday List</a>
                               </li>

                               <li class="slide">
                                   <a class="sidebar__menu-item" href="index.php?page=weekends"> Weekend List</a>
                               </li>
                           </ul>
                       </li>


                       <li class="slide">
                           <a href="index.php?page=employee-leaves" class="sidebar__menu-item">
                               <div class="side-menu__icon"><i class="fa-solid fa-calendar-check"></i></div>
                               <span class="sidebar__menu-label">Employee leaves</span>
                           </a>
                       </li>

                       <li class="slide">
                           <a href="index.php?page=inventories" class="sidebar__menu-item">
                               <div class="side-menu__icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                               <span class="sidebar__menu-label">Inventories</span>
                           </a>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-gavel"></i></div>
                               <span class="sidebar__menu-label">Auction</span>
                           </a>
                           <ul class="sidebar-menu child1">

                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=auctions">Auction List</a>
                               </li>
                           </ul>
                       </li>

                       <li class="slide has-sub">
                           <a href="javascript:void(0);" class="sidebar__menu-item">
                               <i class="fa-regular fa-angle-down side-menu__angle"></i>
                               <div class="side-menu__icon"><i class="fa-solid fa-users"></i></div>
                               <span class="sidebar__menu-label">Account</span>
                           </a>
                           <ul class="sidebar-menu child1">

                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=accounts-list">Account List</a>
                               </li>

                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=journal-lists">Journal List</a>
                               </li>

                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=ledger-lists">Ledger List</a>
                               </li>

                               <li class="slide"><a class="sidebar__menu-item" href="index.php?page=additional-salary">Additional Salary</a>
                               </li>
                           </ul>
                       </li>

                   </ul>
                   <div class="sidebar-right" id="sidebar-right"></div>
               </nav>

           </div>
       </div>
       <div class="app__offcanvas-overlay"></div>
       <!-- app-sidebar-end -->

