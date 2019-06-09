
<script src="<?php echo base_url('assets/js/jquery-2.2.0.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script  src="<?php echo base_url('assets/js/bootstrap-submenu.js');?>"></script>
<script  src="<?php echo base_url('assets/js/rangeslider.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.mb.YTPlayer.js');?>"></script>
<script  src="<?php echo base_url('assets/js/bootstrap-select.min.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.scrollUp.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
<script  src="<?php echo base_url('assets/js/leaflet.js');?>"></script>
<script  src="<?php echo base_url('assets/js/leaflet-providers.js');?>"></script>
<script  src="<?php echo base_url('assets/js/leaflet.markercluster.js');?>"></script>
<script  src="<?php echo base_url('assets/js/dropzone.js');?>"></script>
<script  src="<?php echo base_url('assets/js/slick.min.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.filterizr.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js');?>"></script>
<script  src="<?php echo base_url('assets/js/jquery.countdown.js');?>"></script>
<script  src="<?php echo base_url('assets/js/maps.js');?>"></script>
<script  src="<?php echo base_url('assets/js/app.js');?>"></script>


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>
<!-- Custom javascript -->
<script  src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>
</body>
<script type="text/javascript">
        $(document).ready(function(){
            $('#title').autocomplete({
                source: "<?php echo site_url('home/get_autocomplete');?>",
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                    $("#form_search").submit(); 
                }
            });

        });
    </script>
    <script type="text/javascript">
    function setMapToForm(latitude, longitude) {
        $('input[name="latitude"]').val(latitude);
        $('input[name="longitude"]').val(longitude);
    }
    </script>
</html>