<div id="add_kategori" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Kategori</h4>
      </div>
      <form method="post" action="<?=site_url('c_blog/addKategori');?>">
        <div class="modal-body">
          <div class="form-group">
            <label>Kategori Baru</label>
            <input type="text" class="form-control" name="kategori">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>

  </div>
</div>