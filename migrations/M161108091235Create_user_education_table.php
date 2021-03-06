<?php

namespace yuncms\user\migrations;

use yii\db\Migration;

class M161108091235Create_user_education_table extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        /**
         * 教育经历表
         */
        $this->createTable('{{%user_education}}', [
            'id' => $this->primaryKey(11)->unsigned()->comment('ID'),
            'user_id' => $this->integer()->unsigned()->comment('User ID'),
            'school' => $this->string()->notNull()->comment('School'),
            'department' => $this->string()->notNull()->comment('Department'),
            'degree' => $this->string()->notNull()->comment('Degree'),
            'date' => $this->string(6)->notNull()->comment('Date'),
            'created_at' => $this->integer()->unsigned()->notNull()->comment('Created At'),
            'updated_at' => $this->integer()->unsigned()->notNull()->comment('Updated At'),
        ], $tableOptions);
        $this->addForeignKey('{{%user_education_history_ibfk_1}}', '{{%user_education}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'RESTRICT');
    }

    public function safeDown()
    {
        $this->dropTable('{{%user_education}}');
    }
}
