<?php declare(strict_types=1);

namespace App\Http\Resource;

use App\Entity\BookEntity;
use Doctrine\ORM\EntityManagerInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Message\ResponseInterface;
use Technikolor\Action\JsonAction;

class BookResource extends JsonAction
{
    private EntityManagerInterface $em;

    public function __construct(SerializerInterface $serializer, EntityManagerInterface $em)
    {
        parent::__construct($serializer);
        $this->em = $em;
    }

    public function list(): ResponseInterface
    {
        $repository = $this->em->getRepository(BookEntity::class);

        $books = $repository->findAll();

        return $this->json($books);
    }
}
