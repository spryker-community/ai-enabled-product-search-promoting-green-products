<?php



/**
 * This class defines the structure of the 'pac_cart_item' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Cart/Persistence/Propel.map
 */
class Generated_Zed_Cart_Persistence_Propel_Map_PacCartItemTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src/Generated/Zed/Cart/Persistence/Propel.Map.PacCartItemTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('pac_cart_item');
        $this->setPhpName('PacCartItem');

        $method = 'loadPacCartItem';
        $className = call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
        $this->setClassname($className);

        $this->setPackage('vendor/spryker/zed-package/src/ProjectA/Zed/Cart/Persistence/Propel.map');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_cart_item', 'IdCartItem', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_cart', 'FkCart', 'INTEGER', 'pac_cart', 'id_cart', true, null, null);
        $this->addColumn('unique_identifier', 'UniqueIdentifier', 'VARCHAR', true, 255, null);
        $this->addColumn('sku', 'Sku', 'VARCHAR', true, 255, null);
        $this->addColumn('quantity', 'Quantity', 'INTEGER', false, null, 0);
        $this->addColumn('is_deleted', 'IsDeleted', 'BOOLEAN', false, 1, false);
        $this->addColumn('delete_cause', 'DeleteCause', 'TINYINT', false, null, 0);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cart', 'ProjectA_Zed_Cart_Persistence_Propel_PacCart', RelationMap::MANY_TO_ONE, array('fk_cart' => 'id_cart', ), null, null);
        $this->addRelation('Option', 'ProjectA_Zed_Cart_Persistence_Propel_PacCartItemOption', RelationMap::ONE_TO_MANY, array('id_cart_item' => 'fk_cart_item', ), 'CASCADE', null, 'Options');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
  'disable_updated_at' => 'false',
),
            'lumberjack' =>  array (
),
            'changepaldefaults' =>  array (
),
        );
    } // getBehaviors()

} // Generated_Zed_Cart_Persistence_Propel_Map_PacCartItemTableMap
