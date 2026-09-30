<?php
// C:\xampp\htdocs\LABFLOW\stock_opname.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Stock Opname | LabFlow</title>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/stock_opname.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="dashboard-container">
        <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

<div class="dashboard-container">

    <!-- ================= SIDEBAR ================= -->

    <aside class="sidebar">

        <div class="sidebar-logo">
            <span>logo</span>
        </div>

        <nav class="sidebar-menu">

            <a href="dashboard.php" class="menu-item">
                <i data-lucide="layout-dashboard"></i>
                <span>Dashboard</span>
            </a>

            <a href="data_lab.php" class="menu-item">
                <i data-lucide="monitor"></i>
                <span>Data Lab</span>
            </a>

            <a href="stock_opname.php" class="menu-item active">
                <i data-lucide="archive"></i>
                <span>Stock Opname</span>
            </a>

        </nav>

        <div class="sidebar-bottom">

            <a href="login.php" class="logout-btn">
                <i data-lucide="log-out"></i>
                <span>Log Out</span>
            </a>

        </div>

    </aside>

    <!-- ================= MAIN ================= -->

    <main class="main-content">


        <!-- ================= TOPBAR ================= -->

        <header class="topbar">

            <div class="topbar-left">

                <!-- SEARCH -->

                <div class="search-box">

                    <i data-lucide="search"></i>

                    <input
                        type="text"
                        id="searchInput"
                        placeholder="Search..."
                    >

                </div>


                <!-- FILTER -->

                <div class="filter-box">

                    <i data-lucide="list-filter"></i>

                    <select id="statusFilter">

                        <option value="all">
                            Filter
                        </option>

                        <option value="active">
                            Active
                        </option>

                        <option value="maintenance">
                            Maintenance
                        </option>

                    </select>

                </div>

            </div>



            <!-- TOP RIGHT -->

            <div class="topbar-right">

                <button class="notification-btn">

                    <i data-lucide="bell"></i>

                </button>


                <div class="profile">

                    <span>
                        Ms. sapdal
                    </span>

                    <i data-lucide="circle-user-round"></i>

                </div>

            </div>

        </header>

            <section class="content">
                <h1>Stock Opname</h1>
                <p class="subtitle">Lorem Ipsum</p>

                <div class="stock-grid">
                    <!-- Left: Form -->
                    <div class="card form-card">
                        <div class="card-header">
                            <h2><i data-lucide="plus-circle" style="color: #3b82f6;"></i> Catat Barang Masuk Manual</h2>
                            <span class="badge">MANUAL STOCK IN</span>
                        </div>
                        <p class="desc">Input barang atau suku cadang baru yang diterima oleh laboratorium.</p>
                        
                        <form id="stockForm">
                            <label>NAMA BARANG</label>
                            <input type="text" value="Logitech G102 Lightsync Optical Mouse" />
                            
                            <label>KATEGORI / JENIS</label>
                            <input type="text" value="Periferal & Input Device" />
                            
                            <label>DESKRIPSI & SPESIFIKASI</label>
                            <textarea rows="3">Kondisi baru segel box, PO #PO-2023-109, Alokasi Lab Multimedia 1.</textarea>
                            
                            <label>JUMLAH STOK MASUK</label>
                            <div class="counter">
                                <button type="button" onclick="adjustStock(-1)">-</button>
                                <input type="number" id="stockCount" value="15" />
                                <button type="button" onclick="adjustStock(1)">+</button>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Tambah ke Inventaris</button>
                                <button type="button" class="btn-secondary"><i data-lucide="clock"></i> Audit Log</button>
                            </div>
                        </form>
                        <div class="form-footer">
                            Petugas pencatat otomatis terisi: Ms. Sapdal (Koordinator).
                        </div>
                    </div>

                    <!-- Right: Summary -->
                    <div class="card summary-card">
                        <h2>Summary Stock</h2>
                        <div class="metrics">
                            <div class="metric"><strong>67</strong> All Items</div>
                            <div class="metric active"><strong>67</strong> Item Received This Month</div>
                        </div>
                        <div class="recent-item">
                            <i data-lucide="package" style="color: #3b82f6;"></i>
                            <div>
                                <strong>Stock Opname Received</strong>
                                <p>May 22, 2023 • 15 New CPU Received in inventory.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="assets/js/stock_opname.js"></script>
    <script>lucide.createIcons();</script>
</body>
</html>
