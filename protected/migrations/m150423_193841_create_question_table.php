<?php

class m150423_193841_create_question_table extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->createTable(
            '{{question}}',
            array(
                'id' => 'pk',
                'text' => 'varchar(500) not null',
                'option_a_label' => 'varchar(63) not null',
                'option_b_label' => 'varchar(63) not null',
            ),
            'DEFAULT CHARSET=utf8'
        );
	}

	public function safeDown()
	{
        $this->dropTable('{{question}}');
	}
}
