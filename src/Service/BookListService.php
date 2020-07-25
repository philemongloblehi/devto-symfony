<?php


namespace App\Service;


use App\Repository\BookRepository;

class BookListService
{
    /**
     * @var BookRepository
     */
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->bookRepository->findAll();
    }
}