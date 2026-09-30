<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Access</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

    <!-- BACKGROUND -->
    <div class="background">
        <!-- Animated diagonal lines -->
        <div class="lines"></div>
        <!-- Glow -->
        <div class="glow glow-1"></div>
        <div class="glow glow-2"></div>
        <!-- Particles -->
        <div class="particles"></div>
    </div>

    <!-- LOGIN CARD -->
    <main class="login-wrapper">
        <section class="login-card">
            <div class="login-content">
                <h1>LOGIN</h1>
                <p class="subtitle">
                    Coordinator Laboratorium
                </p>

                <!-- USERNAME -->
                <div class="input-group">
                    <label for="username">Username</label>
                    <div class="input-box">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <path d="m3 7 9 6 9-6"></path>
                        </svg>
                        <input type="text" id="username" placeholder="username" autocomplete="username">
                    </div>
                </div>

                <!-- PASSWORD -->
                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-box">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <rect x="5" y="10" width="14" height="11" rx="2"></rect>
                            <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>
                        </svg>
                        <input type="password" id="password" placeholder="••••••••••" autocomplete="current-password">
                        <!-- Eye -->
                        <button type="button" class="password-toggle" id="togglePassword" aria-label="Show password">
                            <svg id="eyeIcon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M2.5 12s3.5-6 9.5-6 9.5 6 9.5 6-3.5 6-9.5 6-9.5-6-9.5-6Z"></path>
                                <circle cx="12" cy="12" r="2.5"></circle>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- REMEMBER -->
                <label class="remember">
                    <input type="checkbox" id="remember">
                    <span class="custom-checkbox"></span>
                    <span>Simpan sesi</span>
                </label>

                <!-- LOGIN -->
                <button class="login-button" id="loginButton">
                    <span>Login</span>
                    <span class="arrow">→</span>
                </button>
            </div>

            <!-- FOOTER -->
            <footer class="card-footer">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path d="M12 3 5 6v5c0 4.5 3 8 7 10 4-2 7-5.5 7-10V6l-7-3Z"></path>
                    <path d="m9.5 12 1.7 1.7 3.5-3.5"></path>
                </svg>
                <span>SMK Bina Informatika Coordinator Lab</span>
            </footer>
        </section>
    </main>

    <script src="assets/js/login.js"></script>
</body>
</html>