<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manifestacao extends Model
{
    protected $table = 'tbmanifestacao';

    protected $primaryKey = 'idmanifestacao';

    const CREATED_AT = 'dtcadastro';
    const UPDATED_AT = 'dtultimaatualizacao';

    protected $fillable = [
        'dsbairro',
        'dscomplemento',
        'dslocalidade',
        'dssenha',
        'dstextomanifestacao',
        'eeemailusuario',
        'enendereco',
        'nmpessoa',
        'nrcelular',
        'nrcpfcnpj',
        'nrendereco',
        'nrmanifestacao',
        'nrpronac',
        'nrtelefone',
        'sisigilo',
        'stresposta',
        'ststatusmanifestacao',
        'ststatusocultacao',
        'tipopessoa',
        'tpmanifestante',
        'tpraca',
        'tpsexo',
        'idareaentrada',
        'idmeioentrada',
        'idmeioresposta',
        'idpais',
        'idprioridade',
        'idtipomanifestacao',   
    ];
}
