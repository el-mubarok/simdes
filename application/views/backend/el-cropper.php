<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">List Blog Articles</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
    </div>
  </div>
  
  <div class="box-body">
    <!-- <div class="col-md-12" style="margin-bottom: 10px;">
      <img class="img-responsive" src="<?=base_url();?>assets/img/photo4.jpg" id="image">
    </div>
    <div class="col-md-6">
      <div class="preview"></div>
    </div> -->
    <div class="form-group">
      <button type="button" class="btn btn-primary" data-method="getCroppedCanvas">
        <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)">
          Get Cropped Canvas
        </span>
      </button>
      <a class="btn btn-default" data-toggle="modal" data-target="#croppers"><i class="fa fa-plus"></i> Tambah Kategori</a>
    </div>
  </div>
</div>

<div id="croppers" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <style type="text/css">
      .preview{
        overflow: hidden;
        width: 200px;
        height: 200px;
      }
      .cropper-crop-box{
        max-width: 940px;
        max-height: 567px;
      }
    </style>

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Kategori</h4>
      </div>
      <form method="post" action="<?=site_url('c_blog/addKategori');?>">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12" style="margin-bottom: 10px;">
              <img class="img-responsive" src="<?=base_url();?>assets/img/photo4.jpg" id="image">
            </div>
            <div class="col-md-6">
              <div class="preview"></div>
            </div>
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