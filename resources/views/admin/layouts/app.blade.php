<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="icon" href="{{ asset('img/fav-icon.png') }}">
    
    <!-- Existing CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Admin Styles -->
    <style>
        .admin-container {
            min-height: 100vh;
        }

        .sidebar {
            width: 280px;
            min-height: 100vh;
            background: linear-gradient(135deg, #4a154b 0%, #9d50bb 100%);
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar-title {
            padding: 1.5rem 1rem;
            color: #fff;
            font-size: 1.5rem;
            font-weight: 600;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar .nav-item {
            margin: 0.5rem 0;
        }

        .sidebar .nav-link {
            padding: 0.8rem 1rem;
            color: rgba(255,255,255,0.8) !important;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: #fff !important;
            transform: translateX(5px);
        }

        .sidebar .nav-link i {
            margin-right: 0.75rem;
            font-size: 1.1rem;
        }

        .main-content {
            margin-left: 280px;
            background-color: #f8f9fa;
            min-height: 100vh;
            padding: 2rem !important;
        }

        .top-header {
            background: #fff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
            border-radius: 0.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .content-card {
            background: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.08);
            padding: 1.5rem;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h4 class="sidebar-title">
                <i class="fas fa-shield-alt me-2"></i>
                Admin Panel
            </h4>
            <ul class="nav flex-column mt-3">
                <li class="nav-item">
                    <a href="{{ route('portfolio.index') }}" class="nav-link">
                        <i class="fas fa-briefcase"></i>
                        Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.accounts.index') }}" class="nav-link">
                        <i class="fas fa-users"></i>
                        Manage Accounts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.accounts.admin_order') }}" class="nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        Manage Orders
                    </a>
                </li>
                <!-- Add more menu items as needed -->
            </ul>
        </nav>

        <!-- Main Content Area -->
        <div class="main-content">
            <!-- Top Header -->
            <div class="top-header">
                <h2 class="mb-0">Dashboard</h2>
                <div class="user-profile">
                    <span>Admin User</span>
                    <img src="https://via.placeholder.com/40" alt="Admin Profile">
                </div>
            </div>

            <!-- Content Area -->
            <div class="content-card">
                <a href="{{ route('home') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-arrow-left"></i>
                    Back to Home
                </a>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scroll to top -->
    <a href="#" id="scroll" style="display: none;"><span></span></a>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        // Add any custom JavaScript here
        $(document).ready(function() {
            // Highlight active menu item
            const currentPath = window.location.pathname;
            $('.nav-link').each(function() {
                if ($(this).attr('href') === currentPath) {
                    $(this).addClass('active');
                }
            });
        });
    </script>
</body>
</html>