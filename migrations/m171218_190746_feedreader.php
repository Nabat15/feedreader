<?php

use yii\db\Migration;

/**
 * Class m171218_190746_feedreader
 */
class m171218_190746_feedreader extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sayfa}}', [
            'id' => $this->primaryKey(),
            'baslik' => $this->string(20)->notNull(),
			'url' => $this->string(150)->notNull()
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m171218_190746_feedreader cannot be reverted.\n";

		$this->dropTable('{{%sayfa}}');
		
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171218_190746_feedreader cannot be reverted.\n";

        return false;
    }
    */
}
