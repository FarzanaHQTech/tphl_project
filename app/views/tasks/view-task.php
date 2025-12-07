        
  <?php
$page_title = "project view";  
$page= 'project view';
$show_breadcrumb = false;
?>

      
      <div class="row">
                    <div class="col-xxl-8 col-xl-8">
                        <div class="card__wrapper">
                            <div class="project__details-top d-flex flex-wrap align-items-center gap-10">
                                <img class="img-60 border-circle" src="assets/images/user/client6.png" alt="image">
                                <div class="project__details-title">
                                    <h4 class="mb-8">Laravel Education App Development</h4>
                                    <div class="project__details-meta d-flex flex-wrap align-items-center g-5">
                                        <span class="d-block">Bdevs Limited</span>
                                        <span class="d-block"><span class="fw-600">Create Date:</span> May 16, 2024</span>
                                        <span class="d-block"><span class="fw-600">Deadline:</span> Aug 15, 2025</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <div class="card__title-wrap mb-25">
                                <h5 class="card__heading-title">Summary</h5>
                            </div>
                            <p>This project involves the development of an education application using the Laravel framework.
                                The app aims to provide comprehensive features for students and educators, including course
                                management, student assessments, and real-time communication.</p>
                            <p>The application will leverage Laravel's robust MVC architecture to ensure a scalable and
                                maintainable codebase. Key features will include user authentication, course content management,
                                interactive forums, and analytics for tracking student progress.</p>

                            <p>The development process will follow agile methodologies to ensure regular updates and feature
                                enhancements based on user feedback. A dedicated team will work on front-end and back-end
                                development to deliver a seamless user experience.<span id="dots">...</span><span id="more"> The
                           project is scheduled to undergo multiple phases, including initial development, testing,
                           deployment, and post-launch support. Each phase will be documented and reviewed to maintain
                           high-quality standards.</span></p>
                            <button class="read__more-btn mb-15" onclick="myFunction()" id="myBtn">Read more</button>
                            <div class="list__dot mb-15">
                                <ul>
                                    <li>Course management system with content upload capabilities.</li>
                                    <li>Real-time communication tools for students and teachers.</li>
                                    <li>Secure user authentication and role-based access control.</li>
                                    <li>Interactive forums for peer-to-peer learning.</li>
                                    <li>Detailed analytics and reporting features.</li>
                                </ul>
                            </div>
                            <div class="row gy-3 mb-15">
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <p class="mb-5 fw-medium">Create Date:</p>
                                        <h5 class="fs-15 mb-0">May 16, 2024</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <p class="mb-5 fw-medium">Deadline:</p>
                                        <h5 class="fs-15 mb-0">Aug 15, 2025</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <p class="mb-5 fw-medium">Priority:</p>
                                        <span class="bd-badge bg-success fs-12">High</span>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div>
                                        <p class="mb-5 fw-medium">Status:</p>
                                        <span class="bd-badge bg-warning fs-12">Inprogress</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <div class="card__title-wrap mb-25">
                                <h5 class="card__heading-title">Documents</h5>
                            </div>
                            <div class="table__wrapper table-responsive">
                                <table class="table mb-20" id="projectDocument">
                                    <thead>
                                        <tr class="table__title">
                                            <th>File Name</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Upload Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td>
                                                <div class="project-table-file">
                                                    <span class="project-table-file-icon"><i
                                             class="fa-sharp fa-solid fa-file-zip"></i></span><a href="javascript:void(0)">laravel-education-app-development.zip</a>
                                                </div>
                                            </td>
                                            <td>zip File</td>
                                            <td>99.05 MB</td>
                                            <td>05 Jan 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a class="table__icon download" href="javascript:void(0)"><i
                                             class="fa-regular fa-eye"></i></a>
                                                    <a class="table__icon edit" href="javascript:void(0)"><i
                                             class="fa-sharp fa-light fa-pen"></i></a>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular  fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="project-table-file">
                                                    <span class="project-table-file-icon mp4"><i
                                             class="fa-sharp fa-solid fa-file-mp4"></i></span><a href="javascript:void(0)">laravel-app-tutorial.mp4</a>
                                                </div>
                                            </td>
                                            <td>mp4 File</td>
                                            <td>150.15 MB</td>
                                            <td>05 Jan 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a class="table__icon download" href="javascript:void(0)"><i
                                             class="fa-regular fa-eye"></i></a>
                                                    <a class="table__icon edit" href="javascript:void(0)"><i
                                             class="fa-sharp fa-light fa-pen"></i></a>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular  fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="project-table-file">
                                                    <span class="project-table-file-icon folder"><i
                                             class="fa-sharp fa-solid fa-folder"></i></span><a href="javascript:void(0)">laravel app screenshot collection</a>
                                                </div>
                                            </td>
                                            <td>Folder File</td>
                                            <td>101.15 MB</td>
                                            <td>05 Jan 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a class="table__icon download" href="javascript:void(0)"><i
                                             class="fa-regular fa-eye"></i></a>
                                                    <a class="table__icon edit" href="javascript:void(0)"><i
                                             class="fa-sharp fa-light fa-pen"></i></a>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular  fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="project-table-file">
                                                    <span class="project-table-file-icon doc"><i
                                             class="fa-solid fa-file"></i></span><a href="javascript:void(0)">app-documentation.docx</a>
                                                </div>
                                            </td>
                                            <td>doc File</td>
                                            <td>15.15 MB</td>
                                            <td>05 Jan 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a class="table__icon download" href="javascript:void(0)"><i
                                             class="fa-regular fa-eye"></i></a>
                                                    <a class="table__icon edit" href="javascript:void(0)"><i
                                             class="fa-sharp fa-light fa-pen"></i></a>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular  fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="project-table-file">
                                                    <span class="project-table-file-icon excel"><i
                                             class="fa-sharp fa-solid fa-file-excel"></i></span><a href="javascript:void(0)">app-working-sheet.xlsx</a>
                                                </div>
                                            </td>
                                            <td>excel File</td>
                                            <td>5.15 MB</td>
                                            <td>05 Jan 2024</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <a class="table__icon download" href="javascript:void(0)"><i
                                             class="fa-regular fa-eye"></i></a>
                                                    <a class="table__icon edit" href="javascript:void(0)"><i
                                             class="fa-sharp fa-light fa-pen"></i></a>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular  fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <div class="card__title-wrap mb-25">
                                <h5 class="card__heading-title">Team Discussions</h5>
                            </div>
                            <div class="card__body">
                                <div class="discussions__list">
                                    <div class="discussion__item">
                                        <h6>Kickoff Meeting</h6>
                                        <p>Discussed initial project scope and timelines, identified key milestones, and assigned
                                            initial tasks to team members. Ensured everyone was aligned on project goals and
                                            expectations. <a href="javascript:void(0)">View Notes</a></p>
                                    </div>
                                    <div class="discussion__item">
                                        <h6>Design Review</h6>
                                        <p>Reviewed design prototypes and made adjustments based on feedback. Emphasized user
                                            experience improvements and discussed visual design elements to enhance user
                                            engagement. <a href="javascript:void(0)">View Notes</a></p>
                                    </div>
                                    <div class="discussion__item">
                                        <h6>Development Sprint Planning</h6>
                                        <p>Outlined tasks for the upcoming sprint, prioritized features, and set realistic
                                            timelines for deliverables. Discussed potential roadblocks and strategies to mitigate
                                            risks. <a href="javascript:void(0)">View Notes</a></p>
                                    </div>
                                    <div class="discussion__item">
                                        <h6>QA Testing Feedback</h6>
                                        <p>Discussed bugs and issues found during beta testing, categorized them based on
                                            severity, and assigned them to appropriate team members for resolution. Planned for
                                            regression testing and validation of fixes. <a href="javascript:void(0)">View Notes</a>
                                        </p>
                                    </div>
                                    <div class="discussion__item">
                                        <h6>Launch Preparation</h6>
                                        <p>Finalized details for the project launch, including marketing strategies, user
                                            onboarding processes, and post-launch support plans. Ensured all team members were
                                            prepared for their roles during the launch phase. <a href="javascript:void(0)">View
                                                Notes</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4">
                        <div class="position-sticky">
                            <div class="card__wrapper">
                                <div class="card__title-wrap mb-25">
                                    <h5 class="card__heading-title">Assigned Team</h5>
                                </div>
                                <div class="card__body">
                                    <ul class="user__list">
                                        <li>
                                            <div class="d-flex align-items-center gap-10 mb-10">
                                                <img class="img-50 border-circle" src="assets/images/avatar/avatar16.png" alt="user image">
                                                <div class="profile-info">
                                                    <h6>Melanie S.</h6>
                                                    <p class="mb-0">Project Manager</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center gap-10 mb-10">
                                                <img class="img-50 border-circle" src="assets/images/avatar/avatar2.png" alt="user image">
                                                <div class="profile-info">
                                                    <h6>David R.</h6>
                                                    <p class="mb-0">Lead Developer</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center gap-10 mb-10">
                                                <img class="img-50 border-circle" src="assets/images/avatar/avatar15.png" alt="user image">
                                                <div class="profile-info">
                                                    <h6>Jessica T.</h6>
                                                    <p class="mb-0">UI/UX Designer</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center gap-10 mb-10">
                                                <img class="img-50 border-circle" src="assets/images/avatar/avatar14.png" alt="user image">
                                                <div class="profile-info">
                                                    <h6>Michael B.</h6>
                                                    <p class="mb-0">Backend Developer</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center gap-10 mb-10">
                                                <img class="img-50 border-circle" src="assets/images/avatar/avatar13.png" alt="user image">
                                                <div class="profile-info">
                                                    <h6>Samantha L.</h6>
                                                    <p class="mb-0">QA Specialist</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card__wrapper">
                                <div class="card__title-wrap mb-25">
                                    <h5 class="card__heading-title">Work Progress</h5>
                                </div>
                                <div class="card__body">
                                    <div class="work-progress">
                                        <div class="progress__item">
                                            <p>Project Planning</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Requirement Analysis</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-2" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Design & Prototyping</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-3" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Development</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-4" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Testing</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-5" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Deployment</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-6" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                            </div>
                                        </div>
                                        <div class="progress__item">
                                            <p>Post-launch Support</p>
                                            <div class="progress">
                                                <div class="progress-bar bg-7" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__wrapper">
                                <div class="card__title-wrap mb-25">
                                    <h5 class="card__heading-title">Project Milestones</h5>
                                </div>
                                <div class="card__body">
                                    <div class="milestone__list">
                                        <div class="milestone__item d-flex align-items-center">
                                            <span class="milestone__icon"><i class="fa-solid fa-flag-checkered"></i></span>
                                            <p>Initial Planning Complete</p>
                                            <span class="milestone__date">Jan 15, 2024</span>
                                        </div>
                                        <div class="milestone__item d-flex align-items-center">
                                            <span class="milestone__icon"><i class="fa-solid fa-code"></i></span>
                                            <p>Development Phase Started</p>
                                            <span class="milestone__date">Feb 01, 2024</span>
                                        </div>
                                        <div class="milestone__item d-flex align-items-center">
                                            <span class="milestone__icon"><i class="fa-solid fa-pencil-ruler"></i></span>
                                            <p>Design Prototypes Approved</p>
                                            <span class="milestone__date">Mar 10, 2024</span>
                                        </div>
                                        <div class="milestone__item d-flex align-items-center">
                                            <span class="milestone__icon"><i class="fa-solid fa-bug"></i></span>
                                            <p>Beta Testing Begins</p>
                                            <span class="milestone__date">May 20, 2024</span>
                                        </div>
                                        <div class="milestone__item d-flex align-items-center">
                                            <span class="milestone__icon"><i class="fa-solid fa-rocket"></i></span>
                                            <p>Project Launch</p>
                                            <span class="milestone__date">Aug 15, 2024</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>