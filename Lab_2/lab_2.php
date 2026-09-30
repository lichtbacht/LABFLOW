<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - LabFlow</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/Lab_2.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <span>logo</span>
            </div>
            <nav class="sidebar-menu">
                <a href="../dashboard.php" class="menu-item">
                    <i data-lucide="layout-dashboard"></i>
                    <span>Dashboard</span>
                </a>
                <a href="../data_lab.php" class="menu-item active">
                    <i data-lucide="monitor"></i>
                    <span>Data Lab</span>
                </a>
                <a href="../stock_opname.php" class="menu-item">
                    <i data-lucide="archive"></i>
                    <span>Stock Opname</span>
                </a>
            </nav>
            <div class="sidebar-bottom">
                <a href="../login.php" class="logout-btn">
                    <i data-lucide="log-out"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="topbar">
                <div class="topbar-left">
                    <button class="back-btn" onclick="history.back()">
                        <i data-lucide="arrow-left"></i>
                    </button>
                    <h1>Lab RPL</h1>
                    <div class="status-badge active">
                        <span class="dot"></span>
                        Active
                    </div>
                </div>
                <div class="topbar-right">
                    <button class="notification-btn">
                        <i data-lucide="bell"></i>
                    </button>
                    <div class="profile">
                        <span class="profile-name">Ms. sapdal</span>
                        <i data-lucide="circle-user-round"></i>
                    </div>
                </div>
            </header>

            <section class="content">
                <div class="lab-layout-container">
                    <div class="lab-floor">
                        <div class="top-row">
                            <button class="btn-maintenance">Maintenance All</button>
                            <div class="whiteboard">INTERACTIVE WHITEBOARD</div>
                            <div class="network-gear">Switch & Access Point</div>
                        </div>

                        <div class="projector-area">
                            <div class="projector-beams"></div>
                            <div class="projector-label">Projector</div>
                        </div>

                        <div class="pc-grid-layout">
                            <!-- Left Column (5 PCs) -->
                            <div class="pc-column side-column">
                                <?php for($i=1; $i<=5; $i++): ?>
                                <div class="pc-station" onclick="location.href='HardwareComponents/PC_<?= $i ?>.php'">
                                    <div class="pc-tag blue">PC <?= $i ?></div>
                                    <i data-lucide="monitor" class="pc-icon"></i>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <!-- Center Block (20 PCs - 4x5) -->
                            <div class="pc-center-block">
                                <?php 
                                $pc_count = 6;
                                for($row=0; $row<5; $row++): 
                                ?>
                                <div class="pc-row">
                                    <?php for($col=0; $col<4; $col++): 
                                        $tag_class = "blue";
                                        $label = "PC " . $pc_count;
                                        if($pc_count == 7) $tag_class = "pink";
                                    ?>
                                    <div class="pc-station" onclick="location.href='HardwareComponents/PC_<?= $pc_count ?>.php'">
                                        <div class="pc-tag <?= $tag_class ?>"><?= $label ?></div>
                                        <i data-lucide="monitor" class="pc-icon"></i>
                                    </div>
                                    <?php $pc_count++; endfor; ?>
                                </div>
                                <?php endfor; ?>
                            </div>

                            <!-- Right Column (5 PCs) -->
                            <div class="pc-column side-column">
                                <?php for($i=26; $i<=30; $i++): 
                                     $tag_class = ($i == 29) ? "pink" : "blue";
                                ?>
                                <div class="pc-station" onclick="location.href='HardwareComponents/PC_<?= $i ?>.php'">
                                    <i data-lucide="monitor" class="pc-icon"></i>
                                    <div class="pc-tag <?= $tag_class ?>">PC <?= $i ?></div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="../assets/js/Lab_2.js"></script>
    <script>lucide.createIcons();</script>
</body>
</html>
