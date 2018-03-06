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


<p><h5>ID Barang</h5></p>
    <input type="text" name="id_barang[]" class="form-control">

<p><h5>Kategori</h5></p>
<select class="form-control" name="id_kategori[]" >
    <?php foreach ($data_kategori as $k) : ?>
        <option value="<?php echo $k->id_kategori ?>"><?php echo $k->nama_kategori ?></option>
<?php endforeach; ?>
</select>
<p><h5>Nama Barang</h5></p>
    <input type="text" name="nama_barang[]" class="form-control">

<p><h5>Harga Barang</h5></p>
    <input type="text" name="harga_barang[]" class="form-control">

<p><h5>Jumlah Barang</h5></p>
    <input type="text" name="jumlah_barang[]" class="form-control">

<p><h5>Deskripsi Barang</h5></p>
    <input type="text" name="deskripsi_barang[]" class="form-control">

<p><h5>Gambar Barang</h5></p>
    <input type="file" class="id-input-file-2" name="foto[]">

            </div>
        </div>

    </div>

</div>
<script>
    $(function () {

        $('.id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
        });

        $('.close-btn').on("click", function () {
            $(this).parent().parent().parent().parent().hide();
        });

    });
</script>