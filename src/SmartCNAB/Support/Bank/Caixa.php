<?php

namespace SmartCNAB\Support\Bank;

/**
 * Bank Caixa support class.
 */
class Caixa
{
    /**
     * Channels codes.
     *
     * @var array
     */
    protected static $channels = [
        '002' => 'Unidade lotérica',
        '003' => 'Agências CAIXA',
        '004' => 'Compensação eletrônica',
        '006' => 'Internet banking',
        '007' => 'Correspondente CAIXAaqui',
        '008' => 'Em cartório',
        '009' => 'Comandada banco',
        '010' => 'Comandada cliente via arquivo',
        '011' => 'Comandada cliente on-line',
    ];

    /**
     * Especies codes.
     *
     * @var array
     */
    protected static $especies = [
        '01' => 'Duplicata mercantil',
        '02' => 'Nota promissória',
        '03' => 'Duplicata de prestação de serviços',
        '05' => 'Nota de seguro',
        '06' => 'Letra de câmbio',
        '09' => 'Outros',
    ];

    /**
     * Billing instruction.
     *
     * @var array
     */
    protected static $instructions = [
        '01' => 'Protestar - Dias corridos',
        '02' => 'Devolver - Não protestar',
    ];

    /**
     * Returning rejection codes.
     *
     * @var array
     */
    protected static $rejectionCodes = [
        '01' => 'Movimento sem beneficiário correspondente',
        '02' => 'Movimento sem título correspondente',
        '08' => 'Movimento para título já com movimentação no dia',
        '09' => 'Nosso número não pertence ao beneficiário',
        '10' => 'Inclusão de título já existente na base',
        '12' => 'Movimento duplicado',
        '13' => 'Entrada inválida para cobrança caucionada',
        '20' => 'CEP do pagador não encontrado',
        '21' => 'Agência cobradora não encontrada',
        '22' => 'Agência beneficiário não encontrada',
        '45' => 'Data de vencimento com prazo superior ao limite',
        '49' => 'Movimento inválido para título baixado/liquidado',
        '50' => 'Movimento inválido para título enviado a cartório',
        '54' => 'Faixa de CEP da agência cobradora não abrange CEP do pagador',
        '55' => 'Título já com opção de devolução',
        '56' => 'Processo de protesto em andamento',
        '57' => 'Título já com opção de protesto',
        '58' => 'Processo de devolução em andamento',
        '59' => 'Novo prazo p/ protesto/devolução inválido',
        '76' => 'Alteração do prazo de protesto inválida',
        '77' => 'Alteração do prazo de devolução inválida',
        '81' => 'CEP do pagador inválido',
        '82' => 'CNPJ/CPF do pagador inválido (dígito)',
        '83' => 'Número do documento (seu número) inválido',
        '84' => 'Protesto inválido para título sem número do documento (seu número)',
    ];

    /**
     * Remittance occurrences codes.
     *
     * @var array
     */
    protected static $remittanceOccurrences = [
        '01' => 'Entrada de Título',
        '02' => 'Pedido de baixa',
        '03' => 'Concessão de abatimento',
        '04' => 'Cancelamento de abatimento',
        '05' => 'Alteração do vencimento',
        '06' => 'Alteração do uso da empresa',
        '07' => 'Alteração do prazo de protesto',
        '08' => 'Alteração do prazo de devolução',
        '09' => 'Alteração de outros dados',
        '10' => 'Alteração de dados com emissão de bloqueto',
        '11' => 'Alteração da opção de protesto para devolução',
        '12' => 'Alteração da opção de devolução para protesto',
        '31' => 'Alteração de outros dados',
    ];

    /**
     * Return occurrences codes.
     *
     * @var array
     */
    protected static $returnOccurrences = [
        '01' => 'Entrada confirmada',
        '02' => 'Baixa manual confirmada',
        '03' => 'Abatimento concedido',
        '04' => 'Abatimento cancelado',
        '05' => 'Vencimento alterado',
        '06' => 'Uso da empresa alterado',
        '07' => 'Prazo de protesto alterado',
        '08' => 'Prazo de devolução alterado',
        '09' => 'Alteração confirmada',
        '10' => 'Alteração com reemissão de bloqueto confirmada',
        '11' => 'Alteração da opção de protesto para devolução confirmada',
        '12' => 'Alteração da opção de devolução para protesto confirmada',
        '20' => 'Em ser',
        '21' => 'Liquidação',
        '22' => 'Liquidação em cartório',
        '23' => 'Baixa por devolução',
        '25' => 'Baixa por protesto',
        '26' => 'Título enviado para cartório',
        '27' => 'Sustação de protesto',
        '28' => 'Estorno de protesto',
        '29' => 'Estorno de sustação de protesto',
        '30' => 'Alteração de título',
        '31' => 'Tarifa sobre título vencido',
        '32' => 'Outras tarifas de alteração',
        '33' => 'Estorno de baixa/liquidação',
        '34' => 'Tarifas diversas',
        '99' => 'Rejeição do título',
    ];

    /**
     * Return the payment channels.
     *
     * @return array
     */
    public function channels()
    {
        return static::$channels;
    }

    /**
     * Return the default state of itau infos.
     *
     * @return array
     */
    public function defaults()
    {
        return [
            'especie' => '01',
            'instruction1' => '02',
            'instruction2' => '00',
        ];
    }

    /**
     * Return all available especies.
     *
     * @return array
     */
    public function especies()
    {
        return static::$especies;
    }

    /**
     * Return all available instructions.
     *
     * @return array
     */
    public function instructions()
    {
        return static::$instructions;
    }

    /**
     * Return all rejection codes.
     *
     * @return array
     */
    public function rejectionCodes()
    {
        return static::$rejectionCodes;
    }

    /**
     * Return all occurrences available for remittances.
     *
     * @return array
     */
    public function remittanceOccurrences()
    {
        return static::$remittanceOccurrences;
    }

    /**
     * Return all occurrences available for returning.
     *
     * @return array
     */
    public function returnOccurrences()
    {
        return static::$returnOccurrences;
    }
}
