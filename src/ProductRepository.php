<?php 
namespace Wahyu\Test;

use Product;

interface ProductRepository
{
    function save(Product $product): Product;
    function delete(Product $product): void;
    function findById(string $id): ?Product;
    function findAll(): array;
}
