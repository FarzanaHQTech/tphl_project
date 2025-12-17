        </div> <!-- page__body-wrapper end -->
        </div> <!-- page__full-wrapper end -->

        <!-- Back to top -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('.selectpicker').selectpicker();

            });

            function startCountdown() {
                document.querySelectorAll("[id^='timer-']").forEach(function(el) {

                    const deadline = el.getAttribute("data-deadline");
                    if (!deadline) {
                        el.innerHTML = "No Deadline";
                        return;
                    }

                    const targetTime = new Date(deadline).getTime();

                    const timer = setInterval(function() {
                        const now = new Date().getTime();
                        const distance = targetTime - now;

                        if (distance <= 0) {
                            el.innerHTML = "Expired";
                            el.classList.remove("bg-danger");
                            el.classList.add("bg-secondary");
                            clearInterval(timer);
                            return;
                        }

                        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                        el.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
                    }, 1000);
                });
            }
            startCountdown();
            document.addEventListener('DOMContentLoaded', function() {
                flatpickr("#dateofBirth", {
                    altInput: true,
                    altFormat: "F j, Y",
                    dateFormat: "Y-m-d",
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php if (!empty($_SESSION['flash_success'])): ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end', // right side (top)
                    icon: 'success',
                    title: <?= json_encode($_SESSION['flash_success']); ?>,
                    showConfirmButton: false,
                    timer: 10000,
                    timerProgressBar: true,
                    width: '320px' // width
                });
            </script>
        <?php unset($_SESSION['flash_success']);
        endif; ?>


        <?php if (!empty($_SESSION['flash_error'])): ?>
            <script>
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: <?= json_encode($_SESSION['flash_error']); ?>,
                    showConfirmButton: false,
                    timer: 4000,
                    width: '320px'
                });
            </script>
        <?php unset($_SESSION['flash_error']);
        endif; ?>

        <!-- JS -->
        <!-- Footer Scripts -->
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/calendar-activision.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/jquery-3.7.0.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/isotope.pkgd.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/magnific-popup.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/ajax-form.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/jquery.repeater.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/waypoints.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/dayjs.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/loader.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/jsvectormap.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/world-merc.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/swiper-bundle.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/popper.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/simplebar.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/simplebar-active.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/backtotop.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/smooth-scrollbar.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/cleave.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/datatables.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/jquery.dataTables.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/dataTables.buttons.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/jszip.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/pdfmake.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/vfs_fonts.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/buttons.html5.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/buttons.print.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/buttons.colVis.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/steps-form.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/dropify.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/dropzone.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/tinymce.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/custom.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/typeahead.bundle.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/bloodhound.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/select2.full.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/jquery.timepicker.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/flatpickr.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/tagify.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/jquery-ui.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/sweetalert2.all.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/apexcharts.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/fullcalendar.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/plugins/ion.rangeSlider.min.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/custom-tagify.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/height-equal.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/custom-chart.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/rangeslider-script.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/jquery.barrating.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/rating-script.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/main.js"></script>
        <script src="<?= $GLOBALS['base_url'] ?>/assets/js/vendor/sidebar.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>


        </body>

        </html>