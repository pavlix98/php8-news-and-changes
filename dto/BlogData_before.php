<?php

declare(strict_types=1);

class BlogData
{
    private string $title;

    private string $status;

    private ?DateTimeImmutable $publishedAt;

    public function __construct(
        string $title,
        string $status,
        ?DateTimeImmutable $publishedAt = null,
    ) {
        $this->title = $title;
        $this->status = $status;
        $this->publishedAt = $publishedAt;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getPublishedAt(): ?DateTimeImmutable
    {
        return $this->publishedAt;
    }
}