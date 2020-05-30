<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA IKAN</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
            $no=1;
            foreach($barang as $i) : ?>
            
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $i->nama_barang ?></td>
                <td><?php echo $i->keterangan ?></td>
                <td><?php echo $i->kategori ?></td>
                <td><?php echo $i->harga ?></td>
                <td><?php echo $i->stock ?></td>
                <td><div class ="btn btn-success btn-sm"><i class ="fas fa-search-plus"></i></div></td>
                <td><div class ="btn btn-primary btn-sm"><i class ="fas fa-edit"></i></div></td>
                <td><div class ="btn btn-danger btn-sm"><i class ="fas fa-trash"></i></div></td>
            </tr>

            <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Info Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/Data_barang/tambah_aksi';?>"method="post" enctype="multipart/form-data">

                <div class="form-grup">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control">
                </div>

                <div class="form-grup">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                </div>

                <div class="form-grup">
                    <label>Kategori</label>
                    <input type="text" name="kategori" class="form-control">
                </div>

                <div class="form-grup">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control">
                </div>

                <div class="form-grup">
                    <label>Stock</label>
                    <input type="number" name="stock" class="form-control">
                </div>

                <div class="form-grup">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control">
                </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>         
    </div>
  </div>
</div>