<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     use HasFactory;
    public function ScopeSelectedbyId($query, $id)
    {
        # code...
        return $query->where('id', $id);
    }
    public function ScopeSelectedbyJurusan($query, $jurusan)
    {
        # code...
        return $query->where('jurusan', $jurusan);
    }
}
