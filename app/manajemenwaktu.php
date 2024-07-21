<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOmeUSE - Sistem Informasi Ketertiban Rumah Tangga</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet">
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
    .table-dark {
      background-color: rgba(255, 255, 255, 0.9);
      color: black;
    }
    .card {
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
      <h5 class="card-header">Manajemen Waktu</h5>
      <div class="card-body">
        <h5 class="card-title">Kelola Waktu Anda</h5>
        <p class="card-text">Atur kegiatan harian, mingguan, dan bulanan dengan fitur manajemen waktu kami.</p>
        <a href="#" class="btn btn-primary">Selengkapnya</a>
      </div>
    </div>

    <h1 class="mt-4">Manajemen Waktu</h1>
    <p>Kelola waktu Anda dengan lebih efisien menggunakan fitur kami. Tambah, edit, dan hapus kegiatan dengan mudah. Sistem akan mengirimkan pengingat otomatis sebelum kegiatan dimulai.</p>
    
    <!-- Calendar View -->
    <div class="d-flex justify-content-between mb-3">
      <div>
        <button class="btn btn-outline-primary" id="view-daily">Harian</button>
        <button class="btn btn-outline-primary" id="view-weekly">Mingguan</button>
        <button class="btn btn-outline-primary" id="view-monthly">Bulanan</button>
      </div>
      <button class="btn unique-btn" data-bs-toggle="modal" data-bs-target="#addEventModal"><i class="bi bi-plus-circle"></i> Tambah Kegiatan</button>
    </div>

    <div id="calendar-view"></div>

    <!-- Event List Table -->
    <div class="table-responsive">
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal & Waktu</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'fetch_events.php'; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Event Modal -->
  <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addEventModalLabel">Tambah Kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-event-form" action="save_event.php" method="POST">
            <div class="mb-3">
              <label for="event-title" class="form-label">Judul Kegiatan</label>
              <input type="text" class="form-control" id="event-title" name="title" required>
            </div>
            <div class="mb-3">
              <label for="event-desc" class="form-label">Deskripsi Kegiatan</label>
              <textarea class="form-control" id="event-desc" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="event-date" class="form-label">Tanggal & Waktu</label>
              <input type="datetime-local" class="form-control" id="event-date" name="event_date" required>
            </div>
            <button type="submit" class="btn unique-btn">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Event Modal -->
  <div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editEventModalLabel">Edit Kegiatan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-event-form" action="edit_event.php" method="POST">
            <input type="hidden" id="edit-event-id" name="id">
            <div class="mb-3">
              <label for="edit-event-title" class="form-label">Judul Kegiatan</label>
              <input type="text" class="form-control" id="edit-event-title" name="title" required>
            </div>
            <div class="mb-3">
              <label for="edit-event-desc" class="form-label">Deskripsi Kegiatan</label>
              <textarea class="form-control" id="edit-event-desc" name="description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="edit-event-date" class="form-label">Tanggal & Waktu</label>
              <input type="datetime-local" class="form-control" id="edit-event-date" name="event_date" required>
            </div>
            <button type="submit" class="btn unique-btn">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="mt-auto text-center py-3">
    &copy; 2023 HOmeUSE. All rights reserved.
  </footer>
  <!-- End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarView = document.getElementById('calendar-view');

      document.getElementById('view-daily').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Harian.</div>';
      });

      document.getElementById('view-weekly').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Mingguan.</div>';
      });

      document.getElementById('view-monthly').addEventListener('click', function() {
        calendarView.innerHTML = '<div class="alert alert-info" role="alert">Tampilan Bulanan.</div>';
      });

      // Edit event button
      document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function() {
          var id = this.getAttribute('data-id');
          var title = this.getAttribute('data-title');
          var description = this.getAttribute('data-description');
          var event_date = this.getAttribute('data-event_date');

          document.getElementById('edit-event-id').value = id;
          document.getElementById('edit-event-title').value = title;
          document.getElementById('edit-event-desc').value = description;
          document.getElementById('edit-event-date').value = event_date;
        });
      });

      // Delete event button
      document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
          var id = this.getAttribute('data-id');
          if (confirm('Are you sure you want to delete this event?')) {
            fetch('delete_event.php', {
              method: 'POST',
              headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
              },
              body: 'id=' + id
            })
            .then(response => response.text())
            .then(data => {
              alert(data);
              location.reload();
            });
          }
        });
      });
    });
  </script>
</body>
</html>
