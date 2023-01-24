<?php $activepage = basename($_SERVER['PHP_SELF'], ".php") ?>
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin/img/pu.png')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>Mahasiswa</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index" class="nav-item nav-link  <?= ($activepage == 'index') ? 'active' : '' ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/sisw" class="nav-item nav-link <?= ($activepage == 'sisw') ? 'active' : '' ?>"><i class="fa fa-table me-2"></i>Daftar Mahasiswa</a>
            <a href="/dosen" class="nav-item nav-link <?= ($activepage == 'dosen') ? 'active' : '' ?>"><i class="fa fa-table me-2"></i>Daftar Dosen</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/jadwal" class="dropdown-item <?= ($activepage == 'jadwal') ? 'active' : '' ?>">Jadwal</a>
                    <a href="/nilai" class="dropdown-item <?= ($activepage == 'nilai') ? 'active' : '' ?>">Nilai</a>
                    <!-- <a href="/daftar_dosen" class="dropdown-item <?= ($activepage == 'daftar_dosen') ? 'active' : '' ?>">Daftar Dosen</a> -->
                    <!-- <a href="/poto" class="dropdown-item <?= ($activepage == 'poto') ? 'active' : '' ?>">Tugas</a> -->
                </div>
            </div>
            <!-- <a href="/dos" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a -->
        </div>
    </nav>
</div>