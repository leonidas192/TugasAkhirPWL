<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
        </div>
       
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

    <div class="row text-center mt-4">

        <?php foreach ($barang as $i) : ?>
            <div class="card ml-3 mb-3" style="width: 20rem;">
            <img src="<?php echo base_url().'/assets/img/'.$i->gambar ?>"class="card-img-top" alt="..." height="175" width="10">
            <div class="card-body">
            <h4 class="card-title mb-1"><?php echo $i->nama_barang ?></h4>
            <h5><?php echo $i->kategori ?></h5>
            <p class="card-text"><?php echo $i->keterangan ?></p>
            <span class="badge badge-pill badge-success mb-3">Rp.<?php echo $i->harga ?></span><br>
            <a href="#" class="btn btn-primary">Tambah Ke Keranjang</a>
            <a href="#" class="btn btn-success">Detail</a>
        </div>
    </div>
        <?php endforeach ?>
    </div>
</div>