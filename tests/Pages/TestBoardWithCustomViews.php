<?php

namespace Dowhile\FilamentKanban\Tests\Pages;

use Filament\Forms\Components\TextInput;
use Dowhile\FilamentKanban\Pages\KanbanBoard;
use Dowhile\FilamentKanban\Tests\Enums\TaskStatus;
use Dowhile\FilamentKanban\Tests\Models\Task;

class TestBoardWithCustomViews extends KanbanBoard
{
    protected static string $model = Task::class;

    protected static string $statusEnum = TaskStatus::class;

    protected static string $recordView = 'kanban-record';

    protected function getEditModalFormSchema(null | int | string $recordId): array
    {
        return [
            TextInput::make('title'),
        ];
    }
}
