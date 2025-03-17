<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefTactic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefTactic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefTactic query()
 * @mixin \Eloquent
 */
class TabRefTactic extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefTactics';
    protected $fillable = [
        'dwTacticsID', 'dwObjID', 'btAIQoS', 'nMaxStamina', 'btMaxStaminaVariance', 'nSightRange', 'btAggressType', 'AggressData', 'btChangeTarget', 'btHelpRequestTo', 'btHelpResponseTo', 'btBattleStyle', 'BattleStyleData', 'btDiversionBasis', 'DiversionBasisData1', 'DiversionBasisData2', 'DiversionBasisData3', 'DiversionBasisData4', 'DiversionBasisData5', 'DiversionBasisData6', 'DiversionBasisData7', 'DiversionBasisData8', 'btDiversionKeepBasis', 'DiversionKeepBasisData1', 'DiversionKeepBasisData2', 'DiversionKeepBasisData3', 'DiversionKeepBasisData4', 'DiversionKeepBasisData5', 'DiversionKeepBasisData6', 'DiversionKeepBasisData7', 'DiversionKeepBasisData8', 'btKeepDistance', 'KeepDistanceData', 'btTraceType', 'btTraceBoundary', 'TraceData', 'btHomingType', 'HomingData', 'btAggressTypeOnHoming', 'btFleeType', 'dwChampionTacticsID', 'AdditionOptionFlag', 'szDescString128'
    ];

    protected $casts = [
        'dwTacticsID' => 'integer',
        'dwObjID' => 'integer',
        'btAIQoS' => 'integer',
        'nMaxStamina' => 'integer',
        'btMaxStaminaVariance' => 'integer',
        'nSightRange' => 'integer',
        'btAggressType' => 'integer',
        'AggressData' => 'integer',
        'btChangeTarget' => 'integer',
        'btHelpRequestTo' => 'integer',
        'btHelpResponseTo' => 'integer',
        'btBattleStyle' => 'integer',
        'BattleStyleData' => 'integer',
        'btDiversionBasis' => 'integer',
        'DiversionBasisData1' => 'integer',
        'DiversionBasisData2' => 'integer',
        'DiversionBasisData3' => 'integer',
        'DiversionBasisData4' => 'integer',
        'DiversionBasisData5' => 'integer',
        'DiversionBasisData6' => 'integer',
        'DiversionBasisData7' => 'integer',
        'DiversionBasisData8' => 'integer',
        'btDiversionKeepBasis' => 'integer',
        'DiversionKeepBasisData1' => 'integer',
        'DiversionKeepBasisData2' => 'integer',
        'DiversionKeepBasisData3' => 'integer',
        'DiversionKeepBasisData4' => 'integer',
        'DiversionKeepBasisData5' => 'integer',
        'DiversionKeepBasisData6' => 'integer',
        'DiversionKeepBasisData7' => 'integer',
        'DiversionKeepBasisData8' => 'integer',
        'btKeepDistance' => 'integer',
        'KeepDistanceData' => 'integer',
        'btTraceType' => 'integer',
        'btTraceBoundary' => 'integer',
        'TraceData' => 'integer',
        'btHomingType' => 'integer',
        'HomingData' => 'integer',
        'btAggressTypeOnHoming' => 'integer',
        'btFleeType' => 'integer',
        'dwChampionTacticsID' => 'integer',
        'AdditionOptionFlag' => 'integer',
    ];
    protected $connection = 'proxy';
}
