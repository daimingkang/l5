<?php

namespace App\Events;


 use Illuminate\Queue\SerializesModels;

 class PodcastWasPurchased extends Event
{

    use SerializesModels;
     public $podcast;
    //
    public function __construct()
    {
    }
 }
