<!-- footer content -->
        <footer>
          <div class="pull-right">
            Caca_felizha - Template by <a href="https://colorlib.com">Cacaa.canciii:)</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
 <script src="<?= $base_url?>/assets/vendors/validator/multifield.js"></script>
 <script src="<?= $base_url?>/assets/vendors/validator/validator.js"></script>
    
    <!-- Javascript functions   -->
    <script>
        function hideshow(){
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");
            
            if(password.type === 'password'){
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            }
            else{
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>
    <!-- jQuery -->
    <script src="<?= $base_url?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?= $base_url?>/assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= $base_url?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= $base_url?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?= $base_url?>/assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?= $base_url?>/assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= $base_url?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?= $base_url?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?= $base_url?>/assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?= $base_url?>/assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?= $base_url?>/assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?= $base_url?>/assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?= $base_url?>/assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?= $base_url?>/assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?= $base_url?>/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?= $base_url?>/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?= $base_url?>/assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?= $base_url?>/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?= $base_url?>/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?= $base_url?>/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= $base_url?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- Datatables -->
    <script src="<?= $base_url?>/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?= $base_url?>/assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= $base_url?>/assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= $base_url?>/assets/build/js/custom.min.js"></script>
	<!-- FastClick -->
    <script src="<?= $base_url?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- Parsley -->
    <script src="<?= $base_url?>/assets/vendors/parsleyjs/dist/parsley.min.js"></script>
  </body>
</html>