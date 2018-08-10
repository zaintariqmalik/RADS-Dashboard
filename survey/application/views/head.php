
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!-- Include the above in your HEAD tag -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">



<script src="<?php echo base_url(); ?>js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="<?php echo base_url(); ?>js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="<?php echo base_url(); ?>css/custom.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>js/custom.js"></script>
<script src="<?php echo base_url(); ?>js/screenfull.js"></script>



    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css" />

<script>
    $(function () {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function () {
            screenfull.toggle($('#container')[0]);
        });



    });
</script>

<!----->

<!--pie-chart--->
<script src="<?php echo base_url(); ?>js/pie-chart.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#demo-pie-1').pieChart({
            barColor: '#3bb2d0',
            trackColor: '#eee',
            lineCap: 'round',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-2').pieChart({
            barColor: '#fbb03b',
            trackColor: '#eee',
            lineCap: 'butt',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-3').pieChart({
            barColor: '#ed6498',
            trackColor: '#eee',
            lineCap: 'square',
            lineWidth: 8,
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });


    });

</script>
<!--skycons-icons-->
<script src="<?php echo base_url(); ?>js/skycons.js"></script>
<!--//skycons-icons-->