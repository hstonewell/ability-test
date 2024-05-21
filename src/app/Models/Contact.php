<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'category_id',
        'detail'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if (!empty($category_id)) {
            return $query->where('category_id', $category_id);
        }
        return $query;
    }

    public function scopeGenderSearch($query, $gender)
    {
        if (!empty($gender)) {
            return $query->where('gender', $gender);
        }
        return $query;
    }

    public function scopeByDate($query, $date)
    {
        if (!empty($date)) {
            return $query->whereDate('created_at', $date);
        }
        return $query;
    }

    public function scopeKeywordSearch($query, $keyword)
    {
        if (!empty($keyword)) {
            return $query->where(function ($q) use ($keyword) {
                $q->where('first_name', 'like', '%' . $keyword . '%')
                    ->orWhere('last_name', 'like', '%' . $keyword . '%')
                    ->orWhere('email', 'like', '%' . $keyword . '%');
            });
        }
        return $query;
    }
}
