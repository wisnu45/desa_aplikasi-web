<?php $iden = $iden->row_array()?>
<header>
  <!-- /navabr -->
  <nav class="navbar navbar-expand-xl navbar-dark fixed-top bg-success">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url() ?>">
        <img src="<?php echo base_url() . 'assetss/favicon/' . $iden['brand'] ?>" width="64" height="64" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li <?php echo (($this->uri->segment(1) == "beranda" || $this->uri->segment(1) == "") ? 'class="nav-item active"' : 'class="nav-item"') ?>>
            <a class="nav-link" href="<?php echo base_url() . 'beranda'; ?>">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown <?php if ($this->uri->segment(1) == "sambutan" || $this->uri->segment(1) == "strukturorganisasi" || $this->uri->segment(1) == "visimisi" || $this->uri->segment(1) == "profilpegawai" || $this->uri->segment(1) == "desa") {
	echo 'active'
	;
}
?>">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a <?php echo (($this->uri->segment(1) == "sambutan") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'sambutan'; ?>">Kata Sambutan</a>
          <a <?php echo (($this->uri->segment(1) == "visimisi") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'visimisi'; ?>">Visi Misi</a>
          <a <?php echo (($this->uri->segment(1) == "strukturorganisasi") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'strukturorganisasi'; ?>">Struktur Organisasi</a>

         
        </div>
      </li>
      <li class="nav-item dropdown  <?php if ($this->uri->segment(1) == "berita" || $this->uri->segment(1) == "agenda" || $this->uri->segment(1) == "pengumuman") {
	echo 'active';}?>">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Berita
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a <?php echo (($this->uri->segment(1) == "berita") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'berita'; ?>">Berita</a>
        <a <?php echo (($this->uri->segment(1) == "agenda") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'agenda'; ?>">Agenda</a>
        <a <?php echo (($this->uri->segment(1) == "pengumuman") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?> href="<?php echo base_url() . 'pengumuman'; ?>">Pengumuman</a>
      </div>
    </li>
   
  
    <li class="nav-item dropdown <?php if ($this->uri->segment(1) == "media" || $this->uri->segment(1) == "download") {
	echo 'active';}?>">
     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Galeri
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a <?php echo (($this->uri->segment(1) == "gallery") ? 'class="dropdown-item active"' : 'class="dropdown-item "') ?>" href="<?php echo base_url() . 'media/gallery'; ?>">Foto</a>
     
    </div>
  </li>
  
</ul>
<a href="<?= site_url("auth"); ?>" class="btn btn-success" style="box-shadow: 1px 1px 1px 1px #2f6b27">Log in</a>
</div>
</div>
</nav>
</header>