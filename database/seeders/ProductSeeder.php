<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'PostgreSQL Mug',
                'metadata' => ['color' => 'white', 'material' => 'ceramic'],
                'tags' => ['coffee', 'mug', 'pgsql']
            ],
            [
                'name' => 'Laravel Hoodie',
                'metadata' => ['color' => 'black', 'size' => 'XL'],
                'tags' => ['laravel', 'clothing', 'hoodie']
            ],
            [
                'name' => 'Docker Sticker Pack',
                'metadata' => ['quantity' => 10, 'theme' => 'devops'],
                'tags' => ['stickers', 'docker', 'tools']
            ],
            [
                'name' => 'VSCode Keyboard Cover',
                'metadata' => ['color' => 'transparent', 'fits' => 'Macbook'],
                'tags' => ['vscode', 'keyboard', 'cover']
            ],
            [
                'name' => 'AI Poster',
                'metadata' => ['size' => 'A3', 'theme' => 'Artificial Intelligence'],
                'tags' => ['ai', 'poster', 'wall']
            ],
              [
                'name' => 'AI Tester',
                'metadata' => ['size' => 'A3', 'theme' => 'Artificial Intelligence'],
                'tags' => ['ai', 'poster', 'wall']
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
