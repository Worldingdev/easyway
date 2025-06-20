<footer class="footer text-center">
    <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Easyway</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        Designed by <a href="#">Worlding</a>
      </div>
</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.btn-edit').on('click', function() {
            
            
          
            $('#trackingNumber').val($(this).data('id'));
            $('#weight').val($(this).data('weight'));
            $('#fee_lb').val($(this).data('feelb'));
            $('#tax').val($(this).data('tax'));
            $('#senderName').val($(this).data('sn'));
            $('#receiverName').val($(this).data('rn'));
            $('#D_deposite').val($(this).data('dtdp'));
            $('#D_delivery').val($(this).data('dtda'));
            $('#nivo').val($(this).data('state'));
            // Ouvrir le modal (facultatif, car Bootstrap le fait avec data-bs-toggle)
            $('#edit').modal('show');
        });
    });

    $(document).ready(function() {
        $('.btn-delete').on('click', function() {
            $('#trackingNumberdel').val($(this).data('idcolis'));
            // Ouvrir le modal (facultatif, car Bootstrap le fait avec data-bs-toggle)
            $('#delete').modal('show');
        });
    });

    $(document).ready(function() {
        $('.btn-disabled').on('click', function() {
            $('#email').val($(this).data('email'));
            $('#state').val($(this).data('state'));
            // Ouvrir le modal (facultatif, car Bootstrap le fait avec data-bs-toggle)
            $('#disabled').modal('show');
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        const etat = document.getElementById('nivo');
        const dateGroup = document.getElementById('date_livraison_group');
        const dateInput = document.getElementById('D_delivery');

        function updateDateField() {
            if (etat.value === 'Livre') {
                dateGroup.style.display = 'block';
                dateInput.setAttribute('required', 'required');
            } else {
                dateGroup.style.display = 'none';
                dateInput.removeAttribute('required');
                dateInput.value = ''; // vider si désactivé
            }
        }

        etat.addEventListener('change', updateDateField);
        updateDateField(); // au cas où une valeur serait déjà sélectionnée
    });

    document.addEventListener('DOMContentLoaded', function () {
        const etat = document.getElementById('nivo1');
        const dateGroup = document.getElementById('date_livraison_group1');
        const dateInput = document.getElementById('D_delivery1');

        function updateDateField() {
            if (etat.value === 'Livre') {
                dateGroup.style.display = 'block';
                dateInput.setAttribute('required', 'required');
            } else {
                dateGroup.style.display = 'none';
                dateInput.removeAttribute('required');
                dateInput.value = ''; // vider si désactivé
            }
        }

        etat.addEventListener('change', updateDateField);
        updateDateField(); // au cas où une valeur serait déjà sélectionnée
    });


    </script>
  
    
    
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('admin/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{asset('admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>