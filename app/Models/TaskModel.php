<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table            = 'tasks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['title', 'status', 'task_date', 'created_at'];

    // Para sa Step 5: Kuha ng tasks para sa specific date (default: today)
    public function getTasksByDate(?string $date = null): array
    {
        $date = $date ?? date('Y-m-d');

        return $this->where('task_date', $date)
                    ->orderBy('created_at', 'ASC')
                    ->findAll();
    }

    // Para sa Step 6: Kuha ng lahat ng tasks ordered by date
    public function getAllTasksOrderedByDate(): array
    {
        return $this->orderBy('task_date', 'ASC')
                    ->orderBy('created_at', 'ASC')
                    ->findAll();
    }
}