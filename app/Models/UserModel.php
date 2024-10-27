<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Table name
    protected $primaryKey = 'id'; // Primary key of the table

    // Fields that are allowed to be inserted/updated
    protected $allowedFields = ['name', 'age', 'place'];

    // Enable automatic timestamps if you have `created_at` and `updated_at` columns
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation rules for inputs
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'age'  => 'required|is_natural_no_zero',
        'place' => 'required|min_length[2]|max_length[100]'
    ];

    // Error messages for validation rules
    protected $validationMessages = [
        'name' => [
            'required' => 'Name is required',
            'min_length' => 'Name must be at least 3 characters long',
            'max_length' => 'Name cannot exceed 100 characters'
        ],
        'age' => [
            'required' => 'Age is required',
            'is_natural_no_zero' => 'Age must be a valid number greater than 0'
        ],
        'place' => [
            'required' => 'Place is required',
            'min_length' => 'Place must be at least 2 characters long',
            'max_length' => 'Place cannot exceed 100 characters'
        ]
    ];

    // Skip validation if you don't want to validate the data
    protected $skipValidation = true;
}
