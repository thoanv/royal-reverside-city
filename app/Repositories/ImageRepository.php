<?php
namespace App\Repositories;

use App\Repositories\Support\AbstractRepository;
use App\Models\Image;

class ImageRepository extends AbstractRepository
{
    public function model(){
        return Image::class;
    }
    public function getImageByRoomId($room_id)
    {
        return $this->model->where('room_id', $room_id)->orderBy('id', 'DESC')->get();
    }
    public function getImagePageByJournalId($journal_id)
    {
        return $this->model->where('journal_id', $journal_id)->orderBy('page', 'ASC')->get();
    }
}
