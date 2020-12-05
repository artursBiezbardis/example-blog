<?php

namespace App\Listeners;

use App\Events\ArticleWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CounterListener implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(ArticleWasCreated  $event): void
    {
        $x = 0;

        while ($x < 10)
        {
            sleep(1);
            $x++;
        }
    }
}
