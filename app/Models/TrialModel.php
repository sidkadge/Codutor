<?php

namespace App\Models;

use CodeIgniter\Model;

class TrialModel extends Model
{
    protected $table = 'tbl_free_trials'; 
    protected $primaryKey = 'id'; 
    protected $allowedFields = ['phone', 'age_group', 'trial_date', 'is_active', 'created_at', 'updated_at']; 
    protected $useTimestamps = true; 
    protected $dateFormat = 'datetime'; 
}
