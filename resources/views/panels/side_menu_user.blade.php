<li class="navigation-header">
    <span>Menu</span>
    <i data-feather="more-horizontal"></i>
  </li>
@if (auth()->user()->role=='pelamar')
<li class="nav-item">
    <a href="{{route('dashboard-user')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="home"></i>
        <span class="menu-title text-truncate">Beranda</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('data-pelamar')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="briefcase"></i>
        <span class="menu-title text-truncate">Lamaran</span>
    </a>
</li>
@elseif (auth()->user()->role=='karyawan')
<li class="nav-item">
    <a href="{{route('dashboard-user')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="home"></i>
        <span class="menu-title text-truncate">Beranda</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('profil-karyawan')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="user"></i>
        <span class="menu-title text-truncate">Profil</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('absensi-karyawan')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="check-circle"></i>
        <span class="menu-title text-truncate">Absensi</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('cuti-karyawan')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="camera"></i>
        <span class="menu-title text-truncate">Cuti</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('gaji-karyawan',['bulan'=>'01','tahun'=>'2022'])}}" class="d-flex align-items-center" target="_self">
        <i data-feather="credit-card"></i>
        <span class="menu-title text-truncate">Slip Gaji</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('mundur-karyawan')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="user-x"></i>
        <span class="menu-title text-truncate">Pengunduran</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('pelanggaran-karyawan')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="x-circle"></i>
        <span class="menu-title text-truncate">Pelanggaran</span>
    </a>
</li>
@elseif (auth()->user()->role=='adminp' || auth()->user()->role=='pimpinan')
<li class="nav-item">
    <a href="{{route('dashboard-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="home"></i>
        <span class="menu-title text-truncate">Beranda</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('pelamar-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="users"></i>
        <span class="menu-title text-truncate">Pelamar</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('karyawan-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="briefcase"></i>
        <span class="menu-title text-truncate">Karyawan</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('absensi-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="check-circle"></i>
        <span class="menu-title text-truncate">Absensi</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('gaji-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="credit-card"></i>
        <span class="menu-title text-truncate">Gaji</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('cuti-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="camera"></i>
        <span class="menu-title text-truncate">Cuti</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('mundur-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="user-x"></i>
        <span class="menu-title text-truncate">Pengunduran Diri</span>
    </a>
</li>
<li class="nav-item">
    <a href="{{route('pelanggaran-admin')}}" class="d-flex align-items-center" target="_self">
        <i data-feather="x-circle"></i>
        <span class="menu-title text-truncate">Pelanggaran</span>
    </a>
</li>
@endif