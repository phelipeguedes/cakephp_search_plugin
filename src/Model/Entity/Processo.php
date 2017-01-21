<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Processo Entity
 *
 * @property int $id_processo
 * @property string $nome_processo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Processo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_processo' => false
    ];
}
