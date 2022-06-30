<?php

declare(strict_types=1);

namespace Model;

class Book
{
    private int $id;

    private string $title;

    private string $isbn;

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @throws \Exception
     */
    public function setIsbn(string $isbn): void
    {
        if (strlen($isbn) == 10) {
            $this->isbn = $isbn;
        } else {
            throw new \Exception('Invalid ISBN submitted');
        }
    }
}
