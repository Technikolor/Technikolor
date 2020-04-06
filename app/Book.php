<?php declare(strict_types=1);

namespace App;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="book")
 */
class Book
{
    protected int $id;

    protected string $name;
}
