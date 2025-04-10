<?php

declare(strict_types=1);

class BlogData
{
    public ?DateTimeImmutable $publishedAt {
        get {
            return $this->publishedAt?->setTime(0, 0);
        }
    }

    public function __construct(
        public readonly string $title,
        public readonly string $status,
        ?DateTimeImmutable $publishedAt = null,
    ) {
        $this->publishedAt = $publishedAt;
    }
}