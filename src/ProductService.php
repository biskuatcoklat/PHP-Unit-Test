<?php

namespace Wahyu\Test;

use Exception;
use Product;

use function PHPUnit\Framework\throwException;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {
    }
    public function Register(Product $product): Product
    {
        if ($this->repository->findById($product->getId()) != null) {
            throw new \Exception("sudah ada");
        }
        return $this->repository->save($product);
    }
    public function delete(string $id): void
    {
        $product = $this->repository->findById($id);
        if ($product == null) {
            throw new \Exception("data kosong");
        }
        $this->repository->delete($product);
    }
}
