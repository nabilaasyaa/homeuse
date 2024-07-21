<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Kebersihan Rumah</title>
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
      <h5 class="card-header">Kebersihan Rumah</h5>
      <div class="card-body">
        <h5 class="card-title">Senang Membantu Anda</h5>
        <p class="card-text">Atur dan kelola jadwal kebersihan rumah Anda dengan lebih efisien menggunakan fitur kami.</p>
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCleaningModal">Tambah Jadwal</a>
      </div>
    </div>

    <h1 class="mt-4">Kebersihan Rumah</h1>
    <p>Buat dan kelola jadwal kebersihan rumah Anda. Sistem akan mengirimkan pengingat otomatis dan checklist dapat diakses oleh semua anggota keluarga.</p>

    <!-- Cleaning Schedule List -->
    <div id="cleaning-list">
      <!-- Data akan ditambahkan di sini -->
    </div>

    <!-- Add Cleaning Modal -->
    <div class="modal fade" id="addCleaningModal" tabindex="-1" aria-labelledby="addCleaningModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCleaningModalLabel">Tambah Jadwal Kebersihan Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="add-cleaning-form">
              <div class="mb-3">
                <label for="cleaning-task" class="form-label">Tugas</label>
                <input type="text" class="form-control" id="cleaning-task" name="tugas" required>
              </div>
              <div class="mb-3">
                <label for="cleaning-schedule" class="form-label">Jadwal</label>
                <input type="text" class="form-control" id="cleaning-schedule" name="jadwal" required>
              </div>
              <button type="submit" class="btn unique-btn">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Cleaning Modal -->

    <!-- Edit Cleaning Modal -->
    <div class="modal fade" id="editCleaningModal" tabindex="-1" aria-labelledby="editCleaningModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editCleaningModalLabel">Edit Jadwal Kebersihan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="edit-cleaning-form">
              <input type="hidden" id="edit-cleaning-id" name="id">
              <div class="mb-3">
                <label for="edit-cleaning-task" class="form-label">Tugas</label>
                <input type="text" class="form-control" id="edit-cleaning-task" name="tugas" required>
              </div>
              <div class="mb-3">
                <label for="edit-cleaning-schedule" class="form-label">Jadwal</label>
                <input type="text" class="form-control" id="edit-cleaning-schedule" name="jadwal" required>
              </div>
              <button type="submit" class="btn unique-btn">Perbarui</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Cleaning Modal -->

    <!-- Display Cleaning Schedule in a Table -->
    <div class="mt-4">
      <h4>Jadwal Kebersihan</h4>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tugas</th>
            <th scope="col">Jadwal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody id="cleaning-table-body">
          <!-- Data akan ditambahkan di sini melalui JavaScript -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Content -->

  <!-- Footer -->
  <footer class="text-center bg-light py-3 mt-auto">
    <p>&copy; 2024 HOmeUSE. All rights reserved.</p>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      const form = $('#add-cleaning-form');
      const editForm = $('#edit-cleaning-form');
      const cleaningTableBody = $('#cleaning-table-body');

      // Fetch cleaning schedule data
      function fetchCleaningSchedule() {
        $.ajax({
          url: 'baca_jadwal.php',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            cleaningTableBody.empty();
            data.forEach(function(item, index) {
              const row = `<tr>
                <th scope="row">${index + 1}</th>
                <td>${item.tugas}</td>
                <td>${item.jadwal}</td>
                <td>
                  <button class="btn btn-sm btn-warning" onclick="editCleaning(${item.id}, '${item.tugas}', '${item.jadwal}')"><i class="bi bi-pencil-square"></i> Edit</button>
                  <button class="btn btn-sm btn-danger" onclick="deleteCleaning(${item.id})"><i class="bi bi-trash"></i> Hapus</button>
                </td>
              </tr>`;
              cleaningTableBody.append(row);
            });
          }
        });
      }

      // Delete cleaning schedule
      window.deleteCleaning = function(id) {
        $.ajax({
          url: 'hapus_jadwal.php',
          type: 'POST',
          data: { id: id },
          success: function(response) {
            alert(response);
            fetchCleaningSchedule();
          }
        });
      }

      // Edit cleaning schedule
      window.editCleaning = function(id, tugas, jadwal) {
        $('#edit-cleaning-id').val(id);
        $('#edit-cleaning-task').val(tugas);
        $('#edit-cleaning-schedule').val(jadwal);
        $('#editCleaningModal').modal('show');
      }

      // Add cleaning schedule
      form.on('submit', function(event) {
        event.preventDefault();

        $.ajax({
          url: 'tambah_jadwal.php',
          type: 'POST',
          data: form.serialize(),
          success: function(response) {
            alert(response);
            $('#addCleaningModal').modal('hide');
            form[0].reset();
            fetchCleaningSchedule();
          }
        });
      });

      // Update cleaning schedule
      editForm.on('submit', function(event) {
        event.preventDefault();

        $.ajax({
          url: 'update_jadwal.php',
          type: 'POST',
          data: editForm.serialize(),
          success: function(response) {
            alert(response);
            $('#editCleaningModal').modal('hide');
            editForm[0].reset();
            fetchCleaningSchedule();
          }
        });
      });

      // Initial fetch
      fetchCleaningSchedule();
    });
  </script>
</body>
</html>
