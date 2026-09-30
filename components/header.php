<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'GearShift Rentals'; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bs-body-bg: #090d14;
            --bs-body-color: #f1f5f9;
            --primary-accent: #ffb703;
            --primary-accent-hover: #fb8500;
            --secondary-accent: #00b4d8;
            --card-bg: #111622;
            --card-border: #232d3f;
            --nav-bg: rgba(9, 13, 20, 0.96);
            --text-high-contrast: #e2e8f0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bs-body-bg);
            color: var(--bs-body-color);
            overflow-x: hidden;
            position: relative;
        }

        h1, h2, h3, h4, h5, h6, .font-heading {
            font-family: 'Outfit', sans-serif;
            color: #ffffff !important;
            letter-spacing: -0.01em;
        }

        .text-accent { color: var(--primary-accent) !important; }
        .text-cyan { color: var(--secondary-accent) !important; }
        .text-readable { color: var(--text-high-contrast) !important; font-size: 0.95rem; line-height: 1.6; }
        .bg-accent { background-color: var(--primary-accent) !important; color: #000000 !important; }
        
        .btn-accent {
            background-color: var(--primary-accent);
            color: #000000;
            font-weight: 700;
            border: none;
            transition: all 0.25s ease-in-out;
        }
        .btn-accent:hover {
            background-color: var(--primary-accent-hover);
            color: #000000;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(255, 183, 3, 0.35);
        }
        .btn-outline-accent {
            border: 2px solid var(--primary-accent);
            color: var(--primary-accent);
            font-weight: 600;
            background: transparent;
            transition: all 0.25s ease-in-out;
        }
        .btn-outline-accent:hover {
            background-color: var(--primary-accent);
            color: #000000;
            transform: translateY(-2px);
        }

        .top-info-bar {
            background: #04060a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            font-size: 0.85rem;
            color: #cbd5e1;
        }
        .navbar-custom {
            background-color: var(--nav-bg);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--card-border);
        }
        .navbar-custom .nav-link {
            color: #e2e8f0;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.2s ease;
        }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: var(--primary-accent) !important;
            font-weight: 700;
        }

        .hero-section {
            min-height: 85vh;
            background: linear-gradient(135deg, rgba(9, 13, 20, 0.92) 0%, rgba(17, 22, 34, 0.96) 100%),
                        url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat;
            display: flex;
            align-items: center;
            padding-top: 80px;
            padding-bottom: 60px;
        }
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.15;
        }
        @media (max-width: 768px) {
            .hero-title { font-size: 2.25rem; }
        }

        .section-padding { padding: 90px 0; }
        .section-tag {
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 2px;
            font-weight: 800;
            color: var(--primary-accent);
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        .bg-darker { background-color: #06090e; }

        .custom-card {
            background-color: var(--card-bg);
            border: 1px solid var(--card-border);
            border-radius: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            overflow: hidden;
            height: 100%;
        }
        .custom-card:hover {
            transform: translateY(-6px);
            border-color: rgba(255, 183, 3, 0.5);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6);
        }
        
        .service-icon-wrapper {
            width: 65px;
            height: 65px;
            border-radius: 1rem;
            background: rgba(255, 183, 3, 0.15);
            color: var(--primary-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }
        .custom-card:hover .service-icon-wrapper {
            background: var(--primary-accent);
            color: #000000;
        }

        .vehicle-img-container {
            position: relative;
            height: 220px;
            overflow: hidden;
            border-bottom: 1px solid var(--card-border);
        }
        .vehicle-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .custom-card:hover .vehicle-img {
            transform: scale(1.08);
        }
        .badge-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(9, 13, 20, 0.90);
            backdrop-filter: blur(8px);
            color: #ffffff;
            padding: 0.4rem 0.85rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }
        .price-tag {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-accent);
        }

        .form-control, .form-select {
            background-color: #090d14;
            border: 1px solid #2d384e;
            color: #ffffff;
            border-radius: 0.75rem;
            padding: 0.75rem 1rem;
        }
        .form-control:focus, .form-select:focus {
            background-color: #0e1420;
            border-color: var(--primary-accent);
            color: #ffffff;
            box-shadow: 0 0 0 0.25rem rgba(255, 183, 3, 0.2);
        }
        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #cbd5e1;
        }

        .spec-badge {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: #f1f5f9;
            padding: 0.35rem 0.65rem;
            border-radius: 6px;
            font-size: 0.78rem;
            font-weight: 600;
        }
    </style>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarNav" data-bs-smooth-scroll="true" tabindex="0">