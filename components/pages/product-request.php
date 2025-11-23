


<?php
$page_title = "Product Request";   // এই পেজের Title
$show_breadcrumb = false;

$content = '
 <div class="row">
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="card__title-wrap mb-20">
                                <h3 class="card__heading-title">Product-Request </h3>
                            </div>
                            <div class="card__table table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr class="table__title">
                                            <th><input type="checkbox" id="selectall"></th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                           
                                            <td class="table__cat">Development</td>
                                            <td class="table__email"><a href="mailto:name@manez.com">name@manez.com</a></td>
                                            <td class="table__location"><a class="bd-badge bg-success" href="#">United
                                                    Kingdom</a></td>
                                            <td class="table__date fs-13 fw-400">Oct 15 - Dec 20, 2024</td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                          
                                            <td class="table__cat">Representative</td>
                                            <td class="table__email"><a href="mailto:name@manez.com">name@manez.com</a></td>
                                            <td class="table__location"><a class="bd-badge bg-secondary" href="#">United
                                                    Kingdom</a></td>
                                            <td class="table__date fs-13 fw-400">Oct 15 - Dec 20, 2024</td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                          
                                            <td class="table__cat">Sales Director</td>
                                            <td class="table__email"><a href="mailto:name@manez.com">name@manez.com</a></td>
                                            <td class="table__location"><a class="bd-badge bg-theme" href="#">United
                                                    Kingdom</a></td>
                                            <td class="table__date fs-13 fw-400">Oct 15 - Dec 20, 2024</td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            
                                            <td class="table__cat">Account Manager</td>
                                            <td class="table__email"><a href="mailto:name@manez.com">name@manez.com</a></td>
                                            <td class="table__location"><a class="bd-badge bg-danger" href="#">United
                                                    Kingdom</a></td>
                                            <td class="table__date fs-13 fw-400">Oct 15 - Dec 20, 2024</td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            
                                            <td class="table__cat">Sales Analyst</td>
                                            <td class="table__email"><a href="mailto:name@manez.com">name@manez.com</a></td>
                                            <td class="table__location"><a class="bd-badge bg-info" href="#">United
                                                    Kingdom</a></td>
                                            <td class="table__date fs-13 fw-400">Oct 15 - Dec 20, 2024</td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-center gap-10">
                                                    <a href="#" class="table__icon download">
                                                        <i class="fa-regular fa-arrow-down-to-bracket"></i>
                                                    </a>
                                                    <a href="#" class="table__icon edit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
';
include "../layouts/master.php";
?>
