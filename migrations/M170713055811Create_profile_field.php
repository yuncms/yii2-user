<?php

namespace yuncms\user\migrations;

use yii\db\Migration;

class M170713055811Create_profile_field extends Migration
{
    public function safeUp()
    {
        $this->addColumn('{{%user_profile}}', 'birthday', $this->string(15)->comment('生日'));
        $this->addColumn('{{%user_profile}}', 'current', $this->smallInteger(1)->comment('当前状态'));
        $this->addColumn('{{%user_profile}}', 'qq', $this->string(11)->comment('QQ'));
        $this->addColumn('{{%user_profile}}', 'weibo', $this->string(11)->comment('weibo'));
        $this->addColumn('{{%user_profile}}', 'wechat', $this->string(11)->comment('wechat'));
        $this->addColumn('{{%user_profile}}', 'facebook', $this->string(11)->comment('facebook'));
        $this->addColumn('{{%user_profile}}', 'twitter', $this->string(11)->comment('twitter'));
    }

    public function safeDown()
    {
        $this->dropColumn('{{%user_profile}}', 'birthday');
        $this->dropColumn('{{%user_profile}}', 'qq');
        $this->dropColumn('{{%user_profile}}', 'weibo');
        $this->dropColumn('{{%user_profile}}', 'wechat');
        $this->dropColumn('{{%user_profile}}', 'facebook');
        $this->dropColumn('{{%user_profile}}', 'twitter');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "M170713055811Create_profile_field cannot be reverted.\n";

        return false;
    }
    */
}
