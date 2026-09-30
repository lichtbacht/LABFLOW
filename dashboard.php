<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - SMK Bina Informatika</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<div class="dashboard-container">

    <!-- ================= SIDEBAR ================= -->
    <aside class="sidebar">

        <div class="sidebar-logo">
            <span>logo</span>
        </div>

        <nav class="sidebar-menu">

            <a href="#" class="menu-item active">
                <i data-lucide="layout-dashboard"></i>
                <span>Dashboard</span>
            </a>

            <a href="data_lab.php" class="menu-item">
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
                <!-- kosong -->
            </div>

            <div class="topbar-right">

                <button class="notification-btn">
                    <i data-lucide="bell"></i>
                </button>

                <div class="profile">

                    <span class="profile-name">
                        Ms. sapdal
                    </span>

                    <i data-lucide="circle-user-round"></i>

                </div>

            </div>

        </header>


        <!-- ================= CONTENT ================= -->
        <section class="content">


            <!-- ================= SCHOOL HEADER ================= -->
            <div class="school-header">

                <div class="school-info">

                    <div class="school-logo">
                        <img src="logo-sekolah.png" alt="Logo Sekolah">
                    </div>

                    <div class="school-text">

                        <h1>
                            Dashboard
                        </h1>

                        <p class="school-address">

                            COORDINATOR LAB
                        </p>

                        <p>
                            Management Lab & Stock Opname
                        </p>

                    </div>

                </div>


                <!-- ================= STAT CARDS ================= -->

                <div class="school-stat">

                    <!-- JUMLAH SISWA -->
                    <div class="stat-card student-card">

                        <div class="stat-badge">
                            <i data-lucide="boxes"></i>
                            <span>1133</span>
                        </div>

                        <div class="stat-number">
                            1216
                        </div>

                        <div class="stat-title">
                            Stock Opname Items
                        </div>

                    </div>


                    <!-- JUMLAH GURU -->
                    <div class="stat-card teacher-card">

                        <div class="stat-badge">
                            <i data-lucide="monitor"></i>
                            <span>51</span>
                        </div>

                        <div class="stat-number">
                            73
                        </div>

                        <div class="stat-title">
                            PC Aktif
                        </div>

                    </div>

                </div>

            </div>



            <!-- ================= DASHBOARD GRID ================= -->

            <div class="dashboard-grid">


                <!-- ================= CHART ================= -->

                <div class="chart-card">

                    <div class="card-header">

                        <h2>
                            Summary Data Per Month
                        </h2>

                        <select id="periodSelect">
                            <option value="6">Last 6 Month</option>
                            <option value="12">Last 12 Month</option>
                        </select>

                    </div>


                    <div class="chart-wrapper">
                        <canvas id="summaryChart"></canvas>
                    </div>


                    <div class="chart-legend">

                        <div class="legend-item">
                            <span class="legend-color blue"></span>
                            Lab Report
                        </div>

                        <div class="legend-item">
                            <span class="legend-color gray"></span>
                            Stock In
                        </div>

                    </div>

                </div>



                <!-- ================= RIGHT COLUMN ================= -->

                <div class="right-column">


                    <!-- ================= CALENDAR ================= -->

                    <div class="calendar-card">

                        <div class="calendar-header">

                            <button id="prevMonth">
                                <i data-lucide="chevron-left"></i>
                            </button>

                            <h2 id="calendarTitle">
                                January 2025
                            </h2>

                            <button id="nextMonth">
                                <i data-lucide="chevron-right"></i>
                            </button>

                        </div>


                        <div class="calendar-week">

                            <span>Mo</span>
                            <span>Tu</span>
                            <span>We</span>
                            <span>Th</span>
                            <span>Fr</span>
                            <span>Sa</span>
                            <span>Su</span>

                        </div>


                        <div class="calendar-days" id="calendarDays">
                            <!-- JS -->
                        </div>

                    </div>



                    <!-- ================= RECENT ACTIVITIES ================= -->

                    <div class="activity-card">

                        <h2>
                            Recent Activities
                        </h2>


                        <!-- Activity 1 -->

                        <div class="activity-item">

                            <div class="activity-icon red">
                                <i data-lucide="monitor"></i>
                            </div>

                            <div class="activity-content">

                                <strong>
                                    Lab RPL • PC 7
                                </strong>

                                <span>
                                    May 22, 2023 • VGA Missing
                                </span>

                            </div>

                        </div>


                        <!-- Activity 2 -->

                        <div class="activity-item">

                            <div class="activity-icon blue">
                                <i data-lucide="archive"></i>
                            </div>

                            <div class="activity-content">

                                <strong>
                                    Stock Opname Received
                                </strong>

                                <span>
                                    May 22, 2023 • 15 New CPU
                                    Received in inventory
                                </span>

                            </div>

                        </div>


                        <!-- Activity 3 -->

                        <div class="activity-item">

                            <div class="activity-icon yellow">
                                <i data-lucide="archive-restore"></i>
                            </div>

                            <div class="activity-content">

                                <strong>
                                    Lab TIK • Maintenance
                                </strong>

                                <span>
                                    May 22, 2023 • Lab TIK Under
                                    Maintenance
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>


<!-- JS -->
<script src="assets/js/dashboard.js"></script>

</body>
</html>