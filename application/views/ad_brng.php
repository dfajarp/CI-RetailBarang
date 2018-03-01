                            <div class="col-md-4" id="form"">
                                <div class="widget-box">
                                    <div class="widget-header">
                                        <h4 class="widget-title">Barang</h4>

                                        <div class="widget-toolbar">
                                            <a href="#" data-action="collapse">
                                                <i class="ace-icon fa fa-chevron-up"></i>
                                            </a>

                                            <a href="#" class="close-btn" data-action="close">
                                                <i class="ace-icon fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <div>
                                                <label for="form-field-8">ID Barang</label>

                                                <input class="form-control" id="form-field-8">
                                            </div>

                                         

                                            <div>
                                                <label for="form-field-9">Nama Barang</label>

                                                <input class="form-control limited" id="form-field-9" maxlength="50">
                                            </div>

                                            

                                            <div>
                                                <label for="form-field-11">Harga Barang</label>

                                                <input id="form-field-11" class="autosize-transition form-control">
                                            </div>

                                        

                                            <div>
                                                <label for="form-field-11">Jumlah Barang</label>

                                                <input id="form-field-11" class="autosize-transition form-control">
                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                           <input type="file" class="id-input-file-2" />
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
<script>
	$(function(){

		$('.id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });

		$('.close-btn').on("click", function(){
			$(this).parent().parent().parent().parent().hide();
		});

    });
 </script>