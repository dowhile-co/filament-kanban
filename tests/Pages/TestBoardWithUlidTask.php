<?php

namespace Dowhile\FilamentKanban\Tests\Pages;

use Dowhile\FilamentKanban\Pages\KanbanBoard;
use Dowhile\FilamentKanban\Tests\Enums\TaskStatus;
use Dowhile\FilamentKanban\Tests\Models\UlidTask;

class TestBoardWithUlidTask extends KanbanBoard
{
    protected static string $model = UlidTask::class;

    protected static string $statusEnum = TaskStatus::class;
}
