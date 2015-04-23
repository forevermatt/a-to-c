<?php

class m150423_202103_create_examples_table extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->createTable(
            '{{example}}',
            array(
                'id' => 'pk',
                'question_id' => 'integer not null',
                'markdown_content' => 'varchar(2000) not null',
                'correct_option' => "enum('a','b') not null",
            ),
            'DEFAULT CHARSET=utf8'
        );
        $this->addForeignKey(
            'fk_example_question_id',
            '{{example}}',
            'question_id',
            '{{question}}',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
	}

	public function safeDown()
	{
        $this->dropForeignKey(
            'fk_example_question_id',
            '{{example}}'
        );
        $this->dropTable('{{example}}');
	}
}
