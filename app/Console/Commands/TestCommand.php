<?php

namespace App\Console\Commands;

use App\Jobs\SendEmailJob;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\WebSite;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send E-mail about News to subscribers from web site';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $posts = Post::where('status', 0)->get();
        foreach ($posts as $post) {
            $subscribers = Subscriber::where('web_site_id', $post->web_site_id)->get();
            $webSite = WebSite::where('id', $post->web_site_id)->first();
            foreach ($subscribers as $subscriber) {
                $mailData = [
                    'email' => $subscriber->email,
                    'webSite' => $webSite->site_name,
                    'postTitle' => $post->title
                ];
            sendEmailJob::dispatch($mailData);
            }
        $post->update(['status' => 1]);
        $post->save();
        };
    }
}
