<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $worker = [
          'name' => 'Ivan',
          'surname' => 'Ivanov',
          'email' => 'ivan@mail.ru',
          'age' => 20,
          'description' => 'Some description',
          'is_married' => false
        ]

      Worker::create($worker);
    }
}
