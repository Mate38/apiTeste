<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Limpar cache ao mecher nas configurações do e-mail
 * php artisan config:cache
 */

class DadosManifestacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nr = $this->inputs['nrmanifestacao'];

        return $this->view('mails.dados')
            ->subject("[Ouvidoria Videira] Confirmação de Recebimento de Manifestação: $nr")
            ->with([
                'nrmanifestacao' => $this->inputs['nrmanifestacao'],
                'dssenha' => $this->inputs['dssenha']
            ]);
    }
}
