<div class="sidebar">
    <nav class="nav flex-column">
    <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='home');?>" href="home"><i class="bi bi-house-gear-fill"></i> Dashboard</a>
      <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='manajemenwaktu');?>" href="manajemenwaktu"><i class="bi bi-clock"></i> Manajemen Waktu</a>
      <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='manajemenkeuangan');?>" href="manajemenkeuangan"><i class="bi bi-wallet"></i> Manajemen Keuangan</a>
      <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='kebersihanrumah');?>" href="kebersihanrumah"><i class="bi bi-box2-heart"></i> Kebersihan</a>
      <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='komunikasikeluarga');?>" href="komunikasikeluarga"><i class="bi bi-chat-dots"></i> Komunikasi</a>
      <a class="nav-link<?php echo (isset($_GET['x']) && $_GET['x']=='pembagiantugas');?>" href="pembagiantugas"><i class="bi bi-check2-square"></i> Pembagian Tugas</a>
    </nav>
  </div>