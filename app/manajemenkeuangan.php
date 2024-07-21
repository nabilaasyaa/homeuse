<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Sistem Informasi Ketertiban Rumah Tangga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      background: url('https://th.bing.com/th/id/R.4c83c11fcda67ffa487f88ae4b807c66?rik=3lZoiSsYVe7%2bVw&riu=http%3a%2f%2fwallpapercave.com%2fwp%2fxsBpjBU.jpg&ehk=pbgcO5YGyu3GUx1HVtWHQNyFR5fq9O%2bjU6GryFMM7VE%3d&risl=&pid=ImgRaw&r=0') no-repeat center center fixed;
      background-size: cover;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar .nav-link {
      color: #cfd8dc;
    }
    .navbar .nav-link:hover {
      color: #ffeb3b;
    }
    .navbar .navbar-brand .brand-text {
      font-size: 1.5rem;
      font-weight: bold;
      margin-left: 10px;
      color: #ffeb3b;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }
    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      background-color: #343a40;
      padding-top: 20px;
    }
    .sidebar .nav-link {
      color: #cfd8dc;
    }
    .sidebar .nav-link:hover {
      background-color: #495057;
      color: #ffeb3b;
    }
    .modal-body {
    color: black; /* Warna teks di dalam modal */
  }
  .modal-content {
    background-color: #f8f9fa; /* Latar belakang konten modal, Anda bisa menyesuaikan sesuai kebutuhan */
  }
    .content {
      margin-left: 250px;
      padding: 20px;
      color: white;
      background-color: rgba(0, 0, 0, 0.6);
    }
    .unique-btn {
      background-color: #ffeb3b;
      color: #007bff;
      border-radius: 25px;
      border: none;
    }
    .unique-btn:hover {
      background-color: #ffc107;
      color: #007bff;
    }
    .finance-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      background-color: #fff;
      color: black;
    }
    footer {
      background-color: rgba(255, 255, 255, 0.9);
      color: black;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <?php include "header.php"; ?>
  <!-- End Header -->

  <!-- Sidebar -->
  <?php include "sidebar.php"; ?>
  <!-- End Sidebar -->

  <!-- Content -->
  <div class="content">
    <div class="card">
      <h5 class="card-header">Manajemen Keuangan</h5>
      <div class="card-body">
        <h5 class="card-title">Senang Membantu Anda</h5>
        <p class="card-text">Kelola keuangan keluarga Anda dengan lebih efisien menggunakan fitur manajemen keuangan kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Manajemen Keuangan</h1>
    <p>Kelola keuangan keluarga Anda dengan lebih efisien menggunakan fitur manajemen keuangan kami. Catat pemasukan dan pengeluaran, serta pantau anggaran bulanan Anda.</p>

    <!-- Finance Table -->
    <table class="table table-light table-striped mt-4">
      <thead>
        <tr>
          <th>#</th>
          <th>Tipe</th>
          <th>Deskripsi</th>
          <th>Jumlah</th>
          <th>Kategori</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody id="finance-table-body">
        <!-- Data will be inserted here by JavaScript -->
      </tbody>
    </table>

    <!-- Add Finance Form -->
    <div class="mt-4">
      <h4>Tambah Pemasukan/Pengeluaran Baru</h4>
      <form id="add-finance-form">
        <div class="mb-3">
          <label for="finance-type" class="form-label">Tipe</label>
          <select class="form-select" id="finance-type" name="type" required>
            <option value="pemasukan">Pemasukan</option>
            <option value="pengeluaran">Pengeluaran</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="finance-description" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="finance-description" name="description" required>
        </div>
        <div class="mb-3">
          <label for="finance-amount" class="form-label">Jumlah</label>
          <input type="number" class="form-control" id="finance-amount" name="amount" step="0.01" required>
        </div>
        <div class="mb-3">
          <label for="finance-category" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="finance-category" name="category">
        </div>
        <button type="submit" class="btn unique-btn">Tambah Data</button>
      </form>
    </div>

    <!-- Edit Finance Modal -->
    <div class="modal fade" id="editFinanceModal" tabindex="-1" aria-labelledby="editFinanceModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editFinanceModalLabel">Edit Data Keuangan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="edit-finance-form">
              <input type="hidden" id="edit-finance-id" name="id">
              <div class="mb-3">
                <label for="edit-finance-type" class="form-label">Tipe</label>
                <select class="form-select" id="edit-finance-type" name="type" required>
                  <option value="pemasukan">Pemasukan</option>
                  <option value="pengeluaran">Pengeluaran</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="edit-finance-description" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="edit-finance-description" name="description" required>
              </div>
              <div class="mb-3">
                <label for="edit-finance-amount" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="edit-finance-amount" name="amount" step="0.01" required>
              </div>
              <div class="mb-3">
                <label for="edit-finance-category" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="edit-finance-category" name="category">
              </div>
              <button type="submit" class="btn unique-btn">Simpan Perubahan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Finance Modal -->

  </div>
  <!-- End Content -->

  <footer class="text-center py-3 mt-auto">
    <p>&copy; 2024 HOmeUSE. All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      function loadFinanceData() {
        $.get('fetch_finance.php', function(data) {
          $('#finance-table-body').html(data);
        });
      }

      loadFinanceData();

      $('#add-finance-form').on('submit', function(e) {
        e.preventDefault();
        $.post('save_finance.php', $(this).serialize(), function(response) {
          alert(response);
          $('#add-finance-form')[0].reset();
          loadFinanceData();
        });
      });

      $(document).on('click', '.btn-edit', function() {
        var id = $(this).data('id');
        var type = $(this).data('type');
        var description = $(this).data('description');
        var amount = $(this).data('amount');
        var category = $(this).data('category');

        $('#edit-finance-id').val(id);
        $('#edit-finance-type').val(type);
        $('#edit-finance-description').val(description);
        $('#edit-finance-amount').val(amount);
        $('#edit-finance-category').val(category);
        $('#editFinanceModal').modal('show');
      });

      $(document).on('click', '.btn-delete', function() {
        var id = $(this).data('id');
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
          $.post('delete_finance.php', { id: id }, function(response) {
            alert(response);
            loadFinanceData();
          });
        }
      });

      $('#edit-finance-form').on('submit', function(e) {
        e.preventDefault();
        $.post('edit_finance.php', $(this).serialize(), function(response) {
          alert(response);
          $('#editFinanceModal').modal('hide');
          loadFinanceData();
        });
      });
    });
  </script>
</body>
</html>
