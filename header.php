<?php
require_once __DIR__ . '/../config/env.php';
$titulo_sitio = isset($titulo_pagina) ? $titulo_pagina : ($env['APP_NAME'] ?? 'Cooking W.M');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo_sitio); ?></title>
    <meta name="description" content="Aprende recetas de cocina fáciles, postres caseros y técnicas de pastelería saludable. Inscríbete en nuestros cursos de cocina online con certificado.">
    <style>
        :root {
            --primary-bg: #ffffff;
            --navbar-border: #000000;
            --card-bg: #ffffff;
            --text-main: #000000;
            --text-muted: #222222;
            --star-color: #b38f00;
            --body-bg: rgb(0, 0, 0);
            --grid-color-1: rgba(255, 255, 255, 0.25);
            --grid-color-2: rgba(255, 255, 255, 0.25);
        }

        body.dark-mode {
            --primary-bg: #1e1e1e;
            --card-bg: #2a2a2a;
            --text-main: #f0f0f0;
            --text-muted: #cccccc;
            --body-bg: #121212;
            --grid-color-1: rgba(255, 255, 255, 0.15);
            --grid-color-2: rgba(255, 255, 255, 0.15);
        }

        body.dark-mode .container,
        body.dark-mode .menu-category-row,
        body.dark-mode .recipe-item,
        body.dark-mode .review-card,
        body.dark-mode .blog-card,
        body.dark-mode .study-guide-card,
        body.dark-mode .course-form,
        body.dark-mode .cv-container,
        body.dark-mode .faq-item,
        body.dark-mode .faq-content,
        body.dark-mode .carousel-container,
        body.dark-mode .accordion-panel,
        body.dark-mode nav {
            background-color: var(--card-bg) !important;
            color: var(--text-main) !important;
        }

        body.dark-mode nav button {
            color: var(--text-main) !important;
        }

        body.dark-mode .intro-text p,
        body.dark-mode .blog-body p,
        body.dark-mode .user-info-text span,
        body.dark-mode .review-content p,
        body.dark-mode .study-guide-card p,
        body.dark-mode .study-guide-card ul,
        body.dark-mode .faq-content,
        body.dark-mode .cv-header-block p,
        body.dark-mode .cv-item p,
        body.dark-mode .cv-item ul {
            color: var(--text-muted) !important;
        }

        body.dark-mode .cv-header-block,
        body.dark-mode .comments-section,
        body.dark-mode .profile-header {
            background-color: #333333 !important;
            color: #ffffff !important;
        }

        body.dark-mode .cv-section-title {
            background-color: #3d2b2e !important;
            color: #ffffff !important;
        }

        body.dark-mode .accordion-button,
        body.dark-mode .faq-item summary {
            background-color: #333333 !important;
            color: #ffffff !important;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.5;
            color: var(--text-main);
            margin: 0;
            padding: 0;
            background-color: rgb(0, 0, 0);
            background-image: radial-gradient(var(--grid-color-1) 20%, transparent 20%), radial-gradient(var(--grid-color-2) 20%, transparent 20%);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
            transition: background-color 0.3s, color 0.3s;
        }

        .container {
            max-width: 950px;
            margin: 20px auto;
            background: #ffffff;
            border: 3px solid #000;
            box-shadow: 6px 6px 0px rgba(0,0,0,0.2);
        }

        button:focus, input:focus, select:focus, summary:focus, [tabindex="0"]:focus {
            outline: 3px solid #ff4d6d !important;
            outline-offset: 2px;
        }

        .hero-banner {
            position: relative;
            height: 200px;
            background-color: #8a5a44; 
            background-image: url('banner.png');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: flex-end;
            padding: 15px;
            border-bottom: 3px solid #000;
            justify-content: space-between;
        }

        .logo-text {
            font-size: 42px;
            font-weight: 900;
            color: white;
            text-shadow: -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000, 2px 2px 0 #000;
            font-family: 'Arial Black', Impact, sans-serif;
            margin: 0;
        }

        nav {
            display: flex;
            border-bottom: 3px solid #000000;
            background: #ffffff;
            flex-wrap: wrap;
        }

        nav button {
            flex: 1;
            background: none;
            border: none;
            padding: 15px 5px;
            font-size: 16px;
            font-weight: 900;
            color: #000000;
            cursor: pointer;
            font-family: 'Arial Black', sans-serif;
            border-right: 2px solid #000000;
            transition: background 0.2s;
            min-width: 90px;
        }

        nav button:last-child {
            border-right: none;
        }

        nav button:hover, nav button.active {
            background-color: #ffe5ec;
        }

        .main-content {
            padding: 25px;
            min-height: 450px;
        }

        .page-section {
            display: none;
        }

        .page-section.active {
            display: block;
        }

        .section-footer {
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            color: hsl(0, 0%, 13%);
        }

        hr {
            border: none;
            height: 3px;
            background-color: #000;
            margin-bottom: 15px;
        }

        .intro-container {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .intro-text {
            flex: 2;
        }

        .intro-text h2 {
            font-family: 'Arial Black', sans-serif;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 15px;
            border-left: 5px solid #d60029; 
            padding-left: 10px;
        }

        .intro-text p {
            font-size: 15px;
            color: var(--text-muted);
            text-align: justify;
            margin-bottom: 12px;
        }

        .ad-banner {
            flex: 1;
            border: 2px solid #000;
            background: #e0e0e0;
            background-image: url('publicidad.png'); 
            background-size: cover;
            background-position: center;
            min-height: 280px;
        }

        .menu-category-row {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
            cursor: pointer;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 12px;
            background: #fff;
            box-shadow: 4px 4px 0px #000;
            transition: transform 0.1s, box-shadow 0.1s;
        }

        .menu-category-row:hover, .menu-category-row:focus {
            transform: translate(-2px, -2px);
            box-shadow: 6px 6px 0px #000;
        }

        .menu-category-row .img-placeholder {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #000;
            background: #ccc;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
        }

        .menu-category-info h2 {
            font-family: 'Arial Black', sans-serif;
            font-size: 22px;
            margin: 0 0 8px 0;
        }

        .category-header {
            font-family: 'Arial Black', sans-serif;
            font-size: 28px;
            margin-bottom: 25px;
            border-bottom: 3px solid #000;
            padding-bottom: 8px;
        }

        .recipes-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .recipe-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
            background: #fff;
            padding: 12px;
            border: 2px solid #000;
            border-radius: 8px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            border: 2px solid #000;
            background: #ddd;
            background-size: cover;
            flex-shrink: 0;
        }

        .user-info-text strong {
            font-family: 'Arial Black', sans-serif;
            font-size: 16px;
            display: block;
        }

        .user-info-text span {
            font-size: 14px;
            color: #222;
        }

        .recipe-preview-img {
            width: 100%;
            height: 160px;
            background: #eee;
            border: 2px solid #000;
            border-radius: 6px;
            background-size: cover;
            background-position: center;
            cursor: pointer;
        }

        .review-card {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: flex-start;
            background: #fff;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 8px;
            box-shadow: 3px 3px 0px #000;
        }

        .review-content strong {
            font-family: 'Arial Black', sans-serif;
            font-size: 18px;
        }

        .stars {
            color: var(--star-color);
            font-size: 18px;
            margin-left: 5px;
        }

        .review-content p {
            margin: 8px 0 0 0;
            color: #222;
            font-size: 14px;
            text-align: justify;
        }

        .blog-card {
            background: #fff;
            border: 2px solid #000;
            border-radius: 12px;
            box-shadow: 4px 4px 0px #000;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .blog-banner {
            height: 180px;
            background-size: cover;
            background-position: center;
            border-bottom: 2px solid #000;
            background-color: #f7d1cd;
        }

        .blog-body {
            padding: 20px;
        }

        .blog-body h2 {
            font-family: 'Arial Black', sans-serif;
            font-size: 22px;
            margin: 0 0 8px 0;
            color: #000;
        }

        .blog-meta {
            font-size: 13px;
            color: #444;
            margin-bottom: 12px;
            font-style: italic;
        }

        .blog-body h3 {
            font-family: 'Arial Black', sans-serif;
            font-size: 18px;
            margin: 18px 0 8px 0;
            color: #d60029;
        }

        .blog-body h4 {
            font-family: 'Arial Black', sans-serif;
            font-size: 15px;
            margin: 12px 0 5px 0;
        }

        .blog-body p {
            color: var(--text-muted);
            font-size: 14px;
            text-align: justify;
            margin-bottom: 10px;
        }

        .comments-section {
            margin-top: 20px;
            background: #fdf2f4;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 8px;
        }

        .comments-section h3 {
            font-family: 'Arial Black', sans-serif;
            font-size: 16px;
            margin-top: 0;
            margin-bottom: 12px;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            color: #000;
        }

        .comment-item {
            margin-bottom: 12px;
            padding-bottom: 8px;
            border-bottom: 1px dashed #777;
        }

        .comment-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .comment-item h4 {
            font-family: 'Arial Black', sans-serif;
            font-size: 14px;
            margin: 0 0 3px 0;
            color: #111;
        }

        .comment-item p {
            font-size: 13px;
            margin: 0;
        }

        .study-guide-card {
            background: #fff;
            border: 2px solid #000;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 4px 4px 0px #000;
            margin-top: 25px;
        }

        .study-guide-card h2 {
            font-family: 'Arial Black', sans-serif;
            font-size: 24px;
            margin-top: 0;
            color: #000;
            border-bottom: 3px solid #d60029;
            padding-bottom: 8px;
        }

        .study-guide-card h3 {
            font-family: 'Arial Black', sans-serif;
            font-size: 18px;
            color: #5c0099;
            margin-top: 20px;
            margin-bottom: 10px;
            background: #f0f0f0;
            padding: 6px 12px;
            border-left: 4px solid #000;
        }

        .study-guide-card h4 {
            font-family: 'Arial Black', sans-serif;
            font-size: 15px;
            color: #111;
            margin-top: 12px;
            margin-bottom: 6px;
        }

        .study-guide-card p, .study-guide-card ul {
            font-size: 14px;
            color: #222;
            margin-bottom: 10px;
        }

        .study-guide-card ul {
            padding-left: 20px;
        }

        .course-form {
            background: #fff;
            border: 2px solid #000;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 4px 4px 0px #000;
            max-width: 500px;
            margin: 20px auto 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-family: 'Arial Black', sans-serif;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 2px solid #000;
            border-radius: 4px;
            font-size: 15px;
            box-sizing: border-box;
        }

        .btn-submit {
            background: #ffe5ec;
            border: 2px solid #000;
            padding: 10px 20px;
            font-family: 'Arial Black', sans-serif;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 3px 3px 0px #000;
            transition: transform 0.1s, box-shadow 0.1s;
            width: 100%;
        }

        .btn-submit:hover, .btn-submit:focus {
            transform: translate(-1px, -1px);
            box-shadow: 4px 4px 0px #000;
        }

        .cv-container {
            background: #fff;
            border: 3px solid #000;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 5px 5px 0px #000;
        }

        .cv-header-block {
            text-align: center;
            border-bottom: 3px solid #000;
            padding-bottom: 20px;
            margin-bottom: 25px;
            background: #ffe5ec;
            padding-top: 20px;
            border-radius: 8px;
        }

        .cv-header-block h1 {
            font-family: 'Arial Black', sans-serif;
            font-size: 30px;
            margin: 0 0 5px 0;
        }

        .cv-header-block p {
            font-size: 16px;
            color: #222;
            margin: 0;
        }

        .cv-section-title {
            font-family: 'Arial Black', sans-serif;
            font-size: 20px;
            color: #000;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-top: 25px;
            margin-bottom: 15px;
            background: #fdf2f4;
            padding: 8px;
            border-left: 5px solid #d60029;
        }

        .cv-item {
            margin-bottom: 20px;
        }

        .cv-item h3 {
            font-family: 'Arial Black', sans-serif;
            font-size: 16px;
            margin: 0 0 4px 0;
            color: #111;
        }

        .cv-item h4 {
            font-size: 14px;
            font-style: italic;
            color: #333;
            margin: 0 0 8px 0;
            font-weight: normal;
        }

        .cv-item p, .cv-item ul {
            font-size: 14px;
            color: #222;
            margin: 0;
        }

        .cv-item ul {
            padding-left: 20px;
            margin-top: 5px;
        }

        .cv-tag {
            display: inline-block;
            background: #e3d5ca;
            border: 1px solid #000;
            padding: 4px 10px;
            margin: 3px;
            font-weight: bold;
            font-size: 13px;
            border-radius: 4px;
        }

        pre {
            background: #111;
            color: #00ff66;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 6px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 13px;
            overflow-x: auto;
            white-space: pre-wrap;
        }

        .faq-item {
            background: #fff;
            border: 2px solid #000;
            border-radius: 8px;
            margin-bottom: 12px;
            box-shadow: 3px 3px 0px #000;
            overflow: hidden;
        }

        .faq-item summary {
            padding: 15px;
            font-family: 'Arial Black', sans-serif;
            font-size: 15px;
            cursor: pointer;
            outline: none;
            background: #fafafa;
        }

        .faq-content {
            padding: 15px;
            border-top: 2px solid #000;
            font-size: 14px;
            color: var(--text-muted);
            background: #fff;
            text-align: justify;
        }

        .back-arrow {
            font-size: 20px;
            background: #fff;
            border: 2px solid #000;
            cursor: pointer;
            font-weight: bold;
            margin-bottom: 20px;
            padding: 5px 15px;
            box-shadow: 2px 2px 0px #000;
        }

        .carousel-container {
            border: 2px solid #000;
            padding: 15px;
            border-radius: 8px;
            background: #fff;
            margin: 20px 0;
            text-align: center;
        }
        .carousel-img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border: 2px solid #000;
            border-radius: 6px;
            cursor: pointer;
        }
        .carousel-controls {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .carousel-controls button {
            background: #ffe5ec;
            border: 2px solid #000;
            padding: 8px 15px;
            font-family: 'Arial Black', sans-serif;
            cursor: pointer;
        }
        .accordion-button {
            width: 100%;
            text-align: left;
            background: #fafafa;
            border: 2px solid #000;
            padding: 15px;
            font-family: 'Arial Black', sans-serif;
            font-size: 15px;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 3px 3px 0px #000;
            margin-bottom: 5px;
        }
        .accordion-panel {
            display: none;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 8px;
            background: #fff;
            margin-bottom: 12px;
        }
        .accordion-panel.is-open {
            display: block;
        }

        .error-msg {
            color: #d60029;
            font-size: 12px;
            font-weight: bold;
            margin-top: 4px;
            display: none;
        }
        .input-error {
            border-color: #d60029 !important;
            background-color: #fff0f2;
        }

        .realtime-clock {
            background: #000;
            color: #00ff66;
            padding: 6px 12px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            border-radius: 4px;
            font-size: 14px;
            border: 1px solid #fff;
            align-self: flex-start;
            margin-top: 10px;
        }

        .theme-toggle-btn {
            background: #000;
            color: #fff;
            border: 2px solid #fff;
            padding: 8px 14px;
            font-family: 'Arial Black', sans-serif;
            font-size: 12px;
            cursor: pointer;
            border-radius: 6px;
            align-self: flex-start;
            margin-top: 10px;
        }

        .image-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            z-index: 9999;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .image-modal.is-active {
            display: flex;
        }
        .image-modal img {
            max-width: 90%;
            max-height: 80%;
            border: 4px solid #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }
        .image-modal .close-btn {
            margin-top: 15px;
            background: #ffe5ec;
            border: 2px solid #000;
            padding: 8px 20px;
            font-family: 'Arial Black', sans-serif;
            cursor: pointer;
        }

        .summary-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9998;
            justify-content: center;
            align-items: center;
        }
        .summary-modal.is-active {
            display: flex;
        }
        .summary-card {
            background: #fff;
            border: 3px solid #000;
            border-radius: 8px;
            padding: 25px;
            max-width: 450px;
            width: 90%;
            box-shadow: 6px 6px 0px #000;
        }
        .summary-card h3 {
            font-family: 'Arial Black', sans-serif;
            margin-top: 0;
            border-bottom: 2px solid #000;
            padding-bottom: 8px;
        }
        .summary-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        .summary-actions button {
            flex: 1;
            padding: 10px;
            font-family: 'Arial Black', sans-serif;
            border: 2px solid #000;
            cursor: pointer;
        }
        .btn-confirm {
            background: #a3f7bf;
        }
        .btn-cancel {
            background: #ffadad;
        }
    </style>
</head>
<body>

<div class="container">

    <header class="hero-banner" role="banner">
        <div>
            <p class="logo-text">Cooking W.M</p>
        </div>
        <div style="display: flex; flex-direction: column; align-items: flex-end; gap: 5px;">
            <button class="theme-toggle-btn" onclick="toggleDarkMode()">🌙 Modo Oscuro</button>
            <div id="clock" class="realtime-clock" aria-label="Fecha y hora actual">Cargando fecha...</div>
        </div>
    </header>

    <nav aria-label="Navegación principal">
        <button class="nav-btn active" onclick="openPage('inicio')">Inicio</button>
        <button class="nav-btn" onclick="openPage('quienes-somos')">Quiénes Somos</button>
        <button class="nav-btn" onclick="openPage('menu')">Menú</button>
        <button class="nav-btn" onclick="openPage('resena')">Reseñas</button>
        <button class="nav-btn" onclick="openPage('blogs')">Blog</button>
        <button class="nav-btn" onclick="openPage('cursos')">Cursos</button>
        <button class="nav-btn" onclick="openPage('cvs')">CVs</button>
        <button class="nav-btn" onclick="openPage('faq')">FAQ</button>
        <button class="nav-btn" onclick="openPage('cuenta')">Cuenta</button>
    </nav>

    <main class="main-content" aria-live="polite">