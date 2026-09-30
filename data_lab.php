<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Lab - SMK Bina Informatika</title>

    <link rel="stylesheet" href="assets/css/data_lab.css">

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

            <a href="data_lab.php" class="menu-item active">
                <i data-lucide="monitor"></i>
                <span>Data Lab</span>
            </a>

            <a href="stock_opname.php" class="menu-item">
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



        <!-- ================= CONTENT ================= -->

        <section class="content">


            <!-- PAGE HEADER -->

            <div class="page-header">

                <div>

                    <h1>
                        Daftar Laboratorium
                    </h1>

                    <p>
                        Kelola Laboratorium 
                    </p>

                </div>


                <button class="history-btn">

                    <i data-lucide="history"></i>

                    <span>
                        History
                    </span>

                </button>

            </div>



            <!-- ================= LAB GRID ================= -->

            <div
                class="lab-grid"
                id="labGrid"
            >

            </div>



            <!-- EMPTY -->

            <div
                class="empty-state"
                id="emptyState"
            >

                <i data-lucide="search-x"></i>

                <h3>
                    Laboratorium tidak ditemukan
                </h3>

                <p>
                    Coba gunakan kata pencarian lain.
                </p>

            </div>

        </section>

    </main>

</div>



<script src="assets/js/data_lab.js?v=<?php echo time(); ?>"></script>

</body>
</html>