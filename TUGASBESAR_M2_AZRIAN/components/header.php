<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Manajemen Instruktur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'linen': { 50: '#f8f3ec', 100: '#f2e7d9', 200: '#e5cfb3', 300: '#d8b78d', 400: '#cba067', 500: '#be8841', 600: '#986d34', 700: '#725127', 800: '#4c361a', 900: '#261b0d', 950: '#1b1309' },
                        'golden-chestnut': { 50: '#f8f2ec', 100: '#f1e5da', 200: '#e4cab4', 300: '#d6b08f', 400: '#c99669', 500: '#bb7c44', 600: '#966336', 700: '#704a29', 800: '#4b311b', 900: '#25190e', 950: '#1a1109' },
                        'espresso': { 50: '#f8efec', 100: '#f1dfda', 200: '#e3bfb5', 300: '#d69f8f', 400: '#c87e6a', 500: '#ba5e45', 600: '#954b37', 700: '#703929', 800: '#4a261c', 900: '#25130e', 950: '#1a0d0a' },
                        'toffee-brown': { 50: '#f8f1ed', 100: '#f0e3db', 200: '#e2c7b6', 300: '#d3ab92', 400: '#c58f6d', 500: '#b67349', 600: '#925c3a', 700: '#6d452c', 800: '#492e1d', 900: '#24170f', 950: '#1a100a' },
                        'desert-sand': { 50: '#f8f1ed', 100: '#f1e3da', 200: '#e3c7b5', 300: '#d5aa90', 400: '#c78e6b', 500: '#b97246', 600: '#945b38', 700: '#6f442a', 800: '#4a2e1c', 900: '#25170e', 950: '#1a100a' }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-linen-50 min-h-screen flex flex-col font-sans">
    
    <nav class="bg-espresso-900 text-linen-50 shadow-md z-10">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold flex items-center gap-2">
                OrangHebat
            </h1>
            <ul class="flex gap-6">
                <li><a href="index.php" class="hover:text-golden-chestnut-300">Beranda</a></li>
                <li><a href="instruktur.php" class="hover:text-golden-chestnut-300 transition">Instruktur</a></li>
            </ul>
        </div>
    </nav>