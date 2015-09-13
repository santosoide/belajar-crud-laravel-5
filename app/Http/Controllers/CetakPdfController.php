<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

/**
 * Class CetakPdfController
 *
 * @package App\Http\Controllers
 */
class CetakPdfController extends Controller
{

    public function index()
    {
        $pdf = new PdfClass();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 14);

        //Table with 20 rows and 4 columns
        $pdf->SetWidths([30, 50, 30, 40]);
        srand(microtime() * 1000000);
        for ($i = 0; $i < 20; $i ++)

            $pdf->Row([$this->GenerateSentence(), $this->GenerateSentence(), $this->GenerateSentence(), $this->GenerateSentence()]);

        // tempat file disimpan
        $pathToFile = storage_path('document/pdf/') . 'test-cetak.pdf';

        // generate file pdf dan simpan di local path
        $pdf->Output($pathToFile, 'F');

        // menampilkan pdf secara inline
//        $pdf->Output($pathToFile, 'I');

        $email = 'edicyber@gmail.com';

        // kirim email dengan file
        Mail::send('emails.attach', ['email' => $email], function ($message) use ($email, $pathToFile) {
            $message->from('edicyber@gmail.com', 'Edi Santoso');
            $message->to($email);
            $message->subject('Kirim email dengan attachment file');
            $message->attach($pathToFile, ['as' => 'Test send email with file attachment', 'mime' => 'application/pdf']);
        });
    }

    /**
     * @return string
     */
    function GenerateWord()
    {
        //Get a random word
        $nb = rand(3, 10);
        $w = '';
        for ($i = 1; $i <= $nb; $i ++)
            $w .= chr(rand(ord('a'), ord('z')));

        return $w;
    }

    /**
     * @return string
     */
    function GenerateSentence()
    {
        //Get a random sentence
        $nb = rand(1, 10);
        $s = '';
        for ($i = 1; $i <= $nb; $i ++)
            $s .= $this->GenerateWord() . ' ';

        return substr($s, 0, - 1);
    }

}