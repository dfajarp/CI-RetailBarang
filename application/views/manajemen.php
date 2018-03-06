<?php $this->load->view('theme/header_manajemen'); ?>
<?php $this->load->view('theme/sidebar_manajemen'); ?>


            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="<?= base_url("welcome/home"); ?>">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->

                       
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Dashboard
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    Data &amp; Statistik
                                </small>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->






                    <!-- PAGE CONTENT BEGINS2 -->


                    <div class="row">
                        <div class="space-6"></div>

                        <div class="col-sm-7 infobox-container">
                            <div class="infobox infobox-blue">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-cube"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">32</span>
                                    <div class="infobox-content">Produk</div>
                                </div>
                            </div>

                            <div class="infobox infobox-green">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-cubes"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">11</span>
                                    <div class="infobox-content">Supplier</div>
                                </div>

                            </div>

                            <div class="infobox infobox-pink">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-shopping-cart"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">8</span>
                                    <div class="infobox-content">Order Baru</div>
                                </div>
                            </div>

                            <div class="infobox infobox-red">
                                <div class="infobox-icon">
                                    <i class="ace-icon fa fa-male"></i>
                                </div>

                                <div class="infobox-data">
                                    <span class="infobox-data-number">7</span>
                                    <div class="infobox-content">Member</div>
                                </div>
                            </div>

                                        <div class="space-6"></div>

                                        <div class="infobox infobox-green infobox-small infobox-dark">
                                            <div class="infobox-progress">
                                                <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
                                                    <span class="percent">61</span>%
                                                </div>
                                            </div>

                                            <div class="infobox-data">
                                                <div class="infobox-content">Diterima</div>
                                                <div class="infobox-content">700</div>
                                            </div>
                                        </div>

                                        <div class="infobox infobox-blue infobox-small infobox-dark">
                                            <div class="infobox-chart">
                                                <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
                                            </div>

                                            <div class="infobox-data">
                                                <div class="infobox-content">Stok</div>
                                                <div class="infobox-content">1,200</div>
                                            </div>
                                        </div>

                                        <div class="infobox infobox-grey infobox-small infobox-dark">
                                            <div class="infobox-icon">
                                                <i class="ace-icon fa fa-download"></i>
                                            </div>

                                            <div class="infobox-data">
                                                <div class="infobox-content"></div>
                                                <div class="infobox-content">1,205</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vspace-12-sm"></div>

                                    <div class="col-sm-5">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat widget-header-small">
                                                <h5 class="widget-title">
                                                    <i class="ace-icon fa fa-signal"></i>
                                                    Traffic Sources
                                                </h5>

                                                <div class="widget-toolbar no-border">
                                                    <div class="inline dropdown-hover">
                                                        <button class="btn btn-minier btn-primary">
                                                            This Week
                                                            <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                                                            <li class="active">
                                                                <a href="#" class="blue">
                                                                    <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                                                                    This Week
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                    Last Week
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                    This Month
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                                                                    Last Month
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <div id="piechart-placeholder"></div>

                                                    <div class="hr hr8 hr-double"></div>

                                                    <div class="clearfix">
                                                        <div class="grid3">
                                                            <span class="grey">
                                                                <i class="ace-icon fa fa-cube fa-2x blue"></i>
                                                                &nbsp; produk
                                                            </span>
                                                            <h4 class="bigger pull-right">1,255</h4>
                                                        </div>

                                                        <div class="grid3">
                                                            <span class="grey">
                                                                <i class="ace-icon fa fa-shopping-cart fa-2x purple"></i>
                                                                &nbsp; order baru
                                                            </span>
                                                            <h4 class="bigger pull-right">1941</h4>
                                                        </div>

                                                        <div class="grid3">
                                                            <span class="grey">
                                                                <i class="ace-icon fa fa-male fa-2x red"></i>
                                                                &nbsp; member
                                                            </span>
                                                            <h4 class="bigger pull-right">1,050</h4>
                                                        </div>
                                                    </div>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="hr hr32 hr-dotted"></div>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title lighter">
                                                    <i class="ace-icon fa fa-star orange"></i>
                                                    Penjualan Populer
                                                </h4>

                                                <div class="widget-toolbar">
                                                    <a href="#" data-action="collapse">
                                                        <i class="ace-icon fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main no-padding">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="thin-border-bottom">
                                                            <tr>
                                                                <th>
                                                                    <i class="ace-icon fa fa-caret-right blue"></i>name
                                                                </th>

                                                                <th>
                                                                    <i class="ace-icon fa fa-caret-right blue"></i>price
                                                                </th>

                                                                <th class="hidden-480">
                                                                    <i class="ace-icon fa fa-caret-right blue"></i>status
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>internet.com</td>

                                                                <td>
                                                                    <small>
                                                                        <s class="red">$29.99</s>
                                                                    </small>
                                                                    <b class="green">$19.99</b>
                                                                </td>

                                                                <td class="hidden-480">
                                                                    <span class="label label-info arrowed-right arrowed-in">on sale</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>online.com</td>

                                                                <td>
                                                                    <b class="blue">$16.45</b>
                                                                </td>

                                                                <td class="hidden-480">
                                                                    <span class="label label-success arrowed-in arrowed-in-right">approved</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>newnet.com</td>

                                                                <td>
                                                                    <b class="blue">$15.00</b>
                                                                </td>

                                                                <td class="hidden-480">
                                                                    <span class="label label-danger arrowed">pending</span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>web.com</td>

                                                                <td>
                                                                    <small>
                                                                        <s class="red">$24.99</s>
                                                                    </small>
                                                                    <b class="green">$19.95</b>
                                                                </td>

                                                                <td class="hidden-480">
                                                                    <span class="label arrowed">
                                                                        <s>out of stock</s>
                                                                    </span>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>domain.com</td>

                                                                <td>
                                                                    <b class="blue">$12.00</b>
                                                                </td>

                                                                <td class="hidden-480">
                                                                    <span class="label label-warning arrowed arrowed-right">SOLD</span>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div><!-- /.col -->

                                    <div class="col-sm-7">
                                        <div class="widget-box transparent">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title lighter">
                                                    <i class="ace-icon fa fa-signal"></i>
                                                    Sale Stats
                                                </h4>

                                                <div class="widget-toolbar">
                                                    <a href="#" data-action="collapse">
                                                        <i class="ace-icon fa fa-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main padding-4">
                                                    <div id="sales-charts"></div>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <div class="hr hr32 hr-dotted"></div>
                                                </div><!-- /.widget-main -->
                                            </div><!-- /.widget-body -->
                                        </div><!-- /.widget-box -->
                                    </div><!-- /.col -->
                                </div><!-- /.row -->

                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

        <!--[if !IE]> -->
        <script src="<?= base_url()?>/assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url()?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?= base_url()?>/assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.sparkline.index.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.flot.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.flot.pie.min.js"></script>
        <script src="<?= base_url()?>/assets/js/jquery.flot.resize.min.js"></script>

        <!-- ace scripts -->
        <script src="<?= base_url()?>/assets/js/ace-elements.min.js"></script>
        <script src="<?= base_url()?>/assets/js/ace.min.js"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {
                $('.easy-pie-chart.percentage').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
                    var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                    var size = parseInt($(this).data('size')) || 50;
                    $(this).easyPieChart({
                        barColor: barColor,
                        trackColor: trackColor,
                        scaleColor: false,
                        lineCap: 'butt',
                        lineWidth: parseInt(size/10),
                        animate: ace.vars['old_ie'] ? false : 1000,
                        size: size
                    });
                })
            
                $('.sparkline').each(function(){
                    var $box = $(this).closest('.infobox');
                    var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
                    $(this).sparkline('html',
                                     {
                                        tagValuesAttribute:'data-values',
                                        type: 'bar',
                                        barColor: barColor ,
                                        chartRangeMin:$(this).data('min') || 0
                                     });
                });
            
            
              //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
              //but sometimes it brings up errors with normal resize event handlers
              $.resize.throttleWindow = false;
            
              var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
              var data = [
                { label: "produk",  data: 50, color: "#2091CF"},
                { label: "order baru",  data: 24.5, color: "#AF4E96"},
                { label: "member",  data: 25.5, color: "#FF0010"},
              ]
              function drawPieChart(placeholder, data, position) {
                  $.plot(placeholder, data, {
                    series: {
                        pie: {
                            show: true,
                            tilt:0.8,
                            highlight: {
                                opacity: 0.25
                            },
                            stroke: {
                                color: '#fff',
                                width: 2
                            },
                            startAngle: 2
                        }
                    },
                    legend: {
                        show: true,
                        position: position || "ne", 
                        labelBoxBorderColor: null,
                        margin:[-30,15]
                    }
                    ,
                    grid: {
                        hoverable: true,
                        clickable: true
                    }
                 })
             }
             drawPieChart(placeholder, data);
            
             /**
             we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
             so that's not needed actually.
             */
             placeholder.data('chart', data);
             placeholder.data('draw', drawPieChart);
            
            
              //pie chart tooltip example
              var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
              var previousPoint = null;
            
              placeholder.on('plothover', function (event, pos, item) {
                if(item) {
                    if (previousPoint != item.seriesIndex) {
                        previousPoint = item.seriesIndex;
                        var tip = item.series['label'] + " : " + item.series['percent']+'%';
                        $tooltip.show().children(0).text(tip);
                    }
                    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                } else {
                    $tooltip.hide();
                    previousPoint = null;
                }
                
             });
            
                /////////////////////////////////////
                $(document).one('ajaxloadstart.page', function(e) {
                    $tooltip.remove();
                });
            
            
            
            
                var d1 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d1.push([i, Math.sin(i)]);
                }
            
                var d2 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                    d2.push([i, Math.cos(i)]);
                }
            
                var d3 = [];
                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                    d3.push([i, Math.tan(i)]);
                }
                
            
                var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
                $.plot("#sales-charts", [
                    { label: "Produk", data: d1 },
                    { label: "Order baru", data: d2 },
                    { label: "member", data: d3 }
                ], {
                    hoverable: true,
                    shadowSize: 0,
                    series: {
                        lines: { show: true },
                        points: { show: true }
                    },
                    xaxis: {
                        tickLength: 0
                    },
                    yaxis: {
                        ticks: 10,
                        min: -2,
                        max: 2,
                        tickDecimals: 3
                    },
                    grid: {
                        backgroundColor: { colors: [ "#fff", "#fff" ] },
                        borderWidth: 1,
                        borderColor:'#555'
                    }
                });
            
            
                $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('.tab-content')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
            
            
                $('.dialogs,.comments').ace_scroll({
                    size: 300
                });
                
                
                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                //so disable dragging when clicking on label
                var agent = navigator.userAgent.toLowerCase();
                if(ace.vars['touch'] && ace.vars['android']) {
                  $('#tasks').on('touchstart', function(e){
                    var li = $(e.target).closest('#tasks li');
                    if(li.length == 0)return;
                    var label = li.find('label.inline').get(0);
                    if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
                  });
                }
            
                $('#tasks').sortable({
                    opacity:0.8,
                    revert:true,
                    forceHelperSize:true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize:true,
                    tolerance:'pointer',
                    stop: function( event, ui ) {
                        //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                        $(ui.item).css('z-index', 'auto');
                    }
                    }
                );
                $('#tasks').disableSelection();
                $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
                    if(this.checked) $(this).closest('li').addClass('selected');
                    else $(this).closest('li').removeClass('selected');
                });
            
            
                //show the dropdowns on top or bottom depending on window height and menu position
                $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
                    var offset = $(this).offset();
            
                    var $w = $(window)
                    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
                        $(this).addClass('dropup');
                    else $(this).removeClass('dropup');
                });
            
            });
        </script>
    </body>
</html>
