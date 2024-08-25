<?php

namespace App\Jobs;

use App\Mail\ContactEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $name;
    protected $subjectData;
    protected $email;
    protected $message;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subjectData = null, $message = null)
    {
        $this->name = $name;
        $this->subjectData = $subjectData;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $url = URL("/");
        $parse_url = parse_url($url);
        $domain = $parse_url["host"] ?? "";
        $subject = "You got message from $domain!";

        $emailAdmin = new ContactEmail($subject, $this->name, $this->email, $this->subjectData, $this->message);
        Mail::to(config("mail.admin"))->send($emailAdmin);
    }
}
