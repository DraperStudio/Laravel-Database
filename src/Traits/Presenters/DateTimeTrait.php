<?php

namespace DraperStudio\Database\Traits\Presenters;

use Carbon\Carbon;

trait DateTimeTrait
{
    public function createdAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->created_at) : $this->created_at->format($format);
    }

    public function updatedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->updated_at) : $this->updated_at->format($format);
    }

    public function deletedAt($timeAgo = false, $format = 'l jS \\of F Y')
    {
        return $timeAgo ? $this->getTimeAgo($this->deleted_at) : $this->deleted_at->format($format);
    }

    public function getTimeAgo($dateTime)
    {
        return Carbon::createFromTimeStamp(strtotime($dateTime))->diffForHumans();
    }
}
