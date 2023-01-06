<?php
namespace App\Repositories;

use App\Models\General;
use App\Repositories\Support\AbstractRepository;
use Illuminate\Support\Facades\Auth;

class GeneralRepository extends AbstractRepository
{
    public function model(){
        return General::class;
    }
}
