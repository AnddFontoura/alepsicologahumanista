<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/robots.txt', function () {
    $baseUrl = rtrim(config('app.url'), '/');

    $content = implode("\n", [
        'User-agent: *',
        'Allow: /',
        'Disallow: /login',
        'Disallow: /register',
        'Disallow: /dashboard',
        'Disallow: /profile',
        '',
        'Sitemap: ' . $baseUrl . '/sitemap.xml',
        '',
    ]);

    return response($content, 200)->header('Content-Type', 'text/plain');
});

Route::get('/sitemap.xml', function () {
    $baseUrl = rtrim(config('app.url'), '/');

    $urls = [
        ['loc' => $baseUrl . '/', 'changefreq' => 'monthly', 'priority' => '1.0'],
    ];

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $url) {
        $xml .= '  <url>' . "\n";
        $xml .= '    <loc>' . htmlspecialchars($url['loc']) . '</loc>' . "\n";
        $xml .= '    <lastmod>' . now()->toDateString() . '</lastmod>' . "\n";
        $xml .= '    <changefreq>' . $url['changefreq'] . '</changefreq>' . "\n";
        $xml .= '    <priority>' . $url['priority'] . '</priority>' . "\n";
        $xml .= '  </url>' . "\n";
    }
    $xml .= '</urlset>' . "\n";

    return response($xml, 200)->header('Content-Type', 'application/xml');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
