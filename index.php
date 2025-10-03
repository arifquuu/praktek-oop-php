<?php

// 13. Namespaces & Autoloading: Menggunakan autoloader dari Composer.
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\BookController;
use App\Core\Container;
use App\Repositories\BookRepository;
use App\Models\Book;
use App\Models\BookCollection;

// 18. Dependency Injection: Setup container.
$container = new Container();
$container->bind(BookRepository::class, fn() => new BookRepository());
$container->bind(BookController::class, fn($c) => new BookController($c->get(BookRepository::class)));

// 20. Anonymous Class: Class sekali pakai tanpa nama.
$config_loader = new class {
    private array $config = ['app_name' => 'OOP Library'];
    public function get(string $key): ?string
    {
        return $this->config[$key] ?? null;
    }
};
echo "<h1>Welcome to {$config_loader->get('app_name')}</h1>";

// 14. Penerapan MVC (Routing Sederhana).
$action = $_GET['action'] ?? 'index';
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

$controller = $container->get(BookController::class);

// --- DEMO UNTUK KONSEP LAIN ---
echo "<hr>";
echo "<h3>--- Concept Demos ---</h3>";

// 15. Serialization Demo
$bookToSerialize = new Book("Serialized Book", "Author", 2025);
$bookToSerialize->setId(99);
$serialized = serialize($bookToSerialize);
echo $serialized . "<br>";
$unserializedBook = unserialize($serialized);
echo "Unserialized Title: " . $unserializedBook->title . "<br>";

// 16. Object Iteration Demo
$book1 = new Book("Iterator Book 1", "Auth1", 2023);
$book2 = new Book("Iterator Book 2", "Auth2", 2024);
$collection = new BookCollection([$book1, $book2]);
echo "Iterating through BookCollection:<br>";
foreach ($collection as $book) {
    echo "- " . $book . "<br>";
}

// 19. Cloning Demo
$originalBook = $container->get(BookRepository::class)->findById(1);
if ($originalBook) {
    $clonedBook = clone $originalBook;
    echo "Original: {$originalBook->title}, Cloned: {$clonedBook->title}<br>";
}
echo "<hr>";

// --- ROUTING UTAMA ---
switch ($action) {
    case 'show':
        if ($id) {
            $controller->show($id);
        }
        break;
    case 'create':
        $controller->create();
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        }
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
