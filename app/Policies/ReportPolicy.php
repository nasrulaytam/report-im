<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Report;

class ReportPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {

    }

    public function delete(User $user, Report $report)
    {
        return $user->id === $report->user_id || $user->isAdmin() || $user->email === $report->email || $user->email === 'admincrm@pnmim.com';
    }

}
