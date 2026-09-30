<?php
// C:\xampp\htdocs\LABFLOW\Lab_1\HardwareComponents\PC_1.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hardware Components PC 2 (Lab Bc)</title>
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/pc.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-logo"><span>logo</span></div>
            <nav class="sidebar-menu">
                <a href="../../dashboard.php" class="menu-item"><i data-lucide="layout-dashboard"></i><span>Dashboard</span></a>
                <a href="../../data_lab.php" class="menu-item active"><i data-lucide="monitor"></i><span>Data Lab</span></a>
            </nav>
        </aside>
        <main class="main-content">
            <header class="topbar">
                <div class="topbar-left">
                    <button class="back-btn" onclick="location.href='../lab_bc.php'"><i data-lucide="arrow-left"></i></button>
                    <h1>Hardware Components PC 2 (Lab Bc)</h1>
                </div>
            </header>
            <section class="content">
                <div class="card">
                    <div class="card-header-main" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div class="status-summary">
                            <strong>PC Status:</strong> <span class="dot-issue">●</span> <span class="text-issue">Issue</span>
                        </div>
                        <button id="btnCheck" class="btn-check"><i data-lucide="refresh-cw"></i> Check Details</button>
                    </div>
                    
                    <table class="hw-table">
                        <thead>
                            <tr>
                                <th>Component</th>
                                <th>Specifications</th>
                                <th>Status</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i data-lucide="cpu"></i> Processor (CPU)</td>
                                <td>Intel Core i5-12400F, 6 Cores / 12 Threads</td>
                                <td><span class="status-pill pill-online">ONLINE</span></td>
                                <td>Normal</td>
                            </tr>
                            <tr>
                                <td><i data-lucide="layers"></i> Memory (RAM)</td>
                                <td>16GB DDR4 3200MHz</td>
                                <td><span class="status-pill pill-online">ONLINE</span></td>
                                <td>Normal</td>
                            </tr>
                            <tr>
                                <td><i data-lucide="monitor"></i> Graphics (GPU)</td>
                                <td>NVIDIA RTX 4090 / Integrated</td>
                                <td><span class="status-pill pill-issue">ISSUE</span></td>
                                <td>VGA Missing</td>
                            </tr>
                            <tr>
                                <td><i data-lucide="hard-drive"></i> Storage</td>
                                <td>512GB NVMe SSD</td>
                                <td><span class="status-pill pill-online">ONLINE</span></td>
                                <td>Normal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>

    <!-- Modal Edit -->
    <div id="hwModal" class="modal-overlay">
        <div class="modal">
            <div class="modal-header">
                <h3>Edit Component</h3>
                <button id="closeModal" class="btn-close">✖</button>
            </div>
            <form id="editForm">
                <label>Component:</label>
                <select id="compSelect">
                    <option value="cpu-1">Processor (CPU)</option>
                    <option value="ram-1">Memory (RAM)</option>
                    <option value="gpu-1">Graphics (GPU)</option>
                    <option value="storage-1">Storage</option>
                </select>

                <label style="margin-top:8px; display:block;">Status:</label>
                <select id="statusSelect">
                    <option value="online">ONLINE</option>
                    <option value="issue">ISSUE</option>
                </select>

                <label style="margin-top:8px; display:block;">Specifications:</label>
                <input type="text" id="specInput" />

                <label style="margin-top:8px; display:block;">Report:</label>
                <textarea id="descInput" rows="3"></textarea>

                <button type="submit" class="btn-save" style="margin-top:12px; width:100%;">Save Changes</button>
            </form>
        </div>
    </div>

    <script src="../../assets/js/pc.js"></script>
    <script>lucide.createIcons();</script>
</body>
</html>