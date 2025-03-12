        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateRefSkillTable extends Migration
        {
            public function up(): void
            {
                Schema::create('_RefSkill', function (Blueprint $table) {
            $table->smallInteger('Service');
            $table->integer('ID');
            $table->integer('GroupID');
            $table->string('Basic_Code', 128);
            $table->string('Basic_Name', 128);
            $table->string('Basic_Group', 128);
            $table->integer('Basic_Original');
            $table->smallInteger('Basic_Level');
            $table->smallInteger('Basic_Activity');
            $table->integer('Basic_ChainCode');
            $table->integer('Basic_RecycleCost');
            $table->integer('Action_PreparingTime');
            $table->integer('Action_CastingTime');
            $table->integer('Action_ActionDuration');
            $table->integer('Action_ReuseDelay');
            $table->integer('Action_CoolTime');
            $table->integer('Action_FlyingSpeed');
            $table->smallInteger('Action_Interruptable');
            $table->integer('Action_Overlap');
            $table->smallInteger('Action_AutoAttackType');
            $table->smallInteger('Action_InTown');
            $table->smallInteger('Action_Range');
            $table->smallInteger('Target_Required');
            $table->smallInteger('TargetType_Animal');
            $table->smallInteger('TargetType_Land');
            $table->smallInteger('TargetType_Building');
            $table->smallInteger('TargetGroup_Self');
            $table->smallInteger('TargetGroup_Ally');
            $table->smallInteger('TargetGroup_Party');
            $table->smallInteger('TargetGroup_Enemy_M');
            $table->smallInteger('TargetGroup_Enemy_P');
            $table->smallInteger('TargetGroup_Neutral');
            $table->smallInteger('TargetGroup_DontCare');
            $table->smallInteger('TargetEtc_SelectDeadBody');
            $table->integer('ReqCommon_Mastery1');
            $table->integer('ReqCommon_Mastery2');
            $table->smallInteger('ReqCommon_MasteryLevel1');
            $table->smallInteger('ReqCommon_MasteryLevel2');
            $table->smallInteger('ReqCommon_Str');
            $table->smallInteger('ReqCommon_Int');
            $table->integer('ReqLearn_Skill1');
            $table->integer('ReqLearn_Skill2');
            $table->integer('ReqLearn_Skill3');
            $table->smallInteger('ReqLearn_SkillLevel1');
            $table->smallInteger('ReqLearn_SkillLevel2');
            $table->smallInteger('ReqLearn_SkillLevel3');
            $table->integer('ReqLearn_SP');
            $table->smallInteger('ReqLearn_Race');
            $table->smallInteger('Req_Restriction1');
            $table->smallInteger('Req_Restriction2');
            $table->smallInteger('ReqCast_Weapon1');
            $table->smallInteger('ReqCast_Weapon2');
            $table->smallInteger('Consume_HP');
            $table->smallInteger('Consume_MP');
            $table->smallInteger('Consume_HPRatio');
            $table->smallInteger('Consume_MPRatio');
            $table->smallInteger('Consume_WHAN');
            $table->smallInteger('UI_SkillTab');
            $table->smallInteger('UI_SkillPage');
            $table->smallInteger('UI_SkillColumn');
            $table->smallInteger('UI_SkillRow');
            $table->string('UI_IconFile', 128);
            $table->string('UI_SkillName', 128);
            $table->string('UI_SkillToolTip', 128);
            $table->string('UI_SkillToolTip_Desc', 128);
            $table->string('UI_SkillStudy_Desc', 128);
            $table->smallInteger('AI_AttackChance');
            $table->smallInteger('AI_SkillType');
            $table->integer('Param1');
            $table->integer('Param2');
            $table->integer('Param3');
            $table->integer('Param4');
            $table->integer('Param5');
            $table->integer('Param6');
            $table->integer('Param7');
            $table->integer('Param8');
            $table->integer('Param9');
            $table->integer('Param10');
            $table->integer('Param11');
            $table->integer('Param12');
            $table->integer('Param13');
            $table->integer('Param14');
            $table->integer('Param15');
            $table->integer('Param16');
            $table->integer('Param17');
            $table->integer('Param18');
            $table->integer('Param19');
            $table->integer('Param20');
            $table->integer('Param21');
            $table->integer('Param22');
            $table->integer('Param23');
            $table->integer('Param24');
            $table->integer('Param25');
            $table->integer('Param26')->nullable();
            $table->integer('Param27')->nullable();
            $table->integer('Param28')->nullable();
            $table->integer('Param29')->nullable();
            $table->integer('Param30')->nullable();
            $table->integer('Param31')->nullable();
            $table->integer('Param32')->nullable();
            $table->integer('Param33')->nullable();
            $table->integer('Param34')->nullable();
            $table->integer('Param35')->nullable();
            $table->integer('Param36')->nullable();
            $table->integer('Param37')->nullable();
            $table->integer('Param38')->nullable();
            $table->integer('Param39')->nullable();
            $table->integer('Param40')->nullable();
            $table->integer('Param41')->nullable();
            $table->integer('Param42')->nullable();
            $table->integer('Param43')->nullable();
            $table->integer('Param44')->nullable();
            $table->integer('Param45')->nullable();
            $table->integer('Param46')->nullable();
            $table->integer('Param47')->nullable();
            $table->integer('Param48')->nullable();
            $table->integer('Param49')->nullable();
            $table->integer('Param50')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('_RefSkill');
            }
        }