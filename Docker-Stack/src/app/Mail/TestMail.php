<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public function __construct()
    {
        //
    }
    public function build()
    {
        return $this
            ->subject('Test Email Subject') // หัวข้ออีเมล
            ->view('email.test');          // ไฟล์ view สำหรับเนื้อหาอีเมล
    }
}