<?php



/**
 * This class defines the structure of the 'pac_acl_role' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Acl/Persistence/Propel.map
 */
class Generated_Zed_Acl_Persistence_Propel_Map_PacAclRoleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'src/Generated/Zed/Acl/Persistence/Propel.Map.PacAclRoleTableMap';

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
        $this->setName('pac_acl_role');
        $this->setPhpName('PacAclRole');

        $method = 'loadPacAclRole';
        $className = call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
        $this->setClassname($className);

        $this->setPackage('vendor/spryker/zed-package/src/ProjectA/Zed/Acl/Persistence/Propel.map');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_acl_role', 'IdAclRole', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('is_deletable', 'IsDeletable', 'BOOLEAN', true, 1, true);
        $this->addColumn('is_admin', 'IsAdmin', 'BOOLEAN', true, 1, false);
        $this->addColumn('is_deleted', 'IsDeleted', 'BOOLEAN', true, 1, false);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
        $this->addValidator('name', 'unique', 'propel.validator.UniqueValidator', '', 'This role already exists!');
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclUser', 'ProjectA_Zed_Acl_Persistence_Propel_PacAclUser', RelationMap::ONE_TO_MANY, array('id_acl_role' => 'fk_acl_role', ), null, null, 'AclUsers');
        $this->addRelation('AclGroupPrivilege', 'ProjectA_Zed_Acl_Persistence_Propel_PacAclGroupPrivilege', RelationMap::ONE_TO_MANY, array('id_acl_role' => 'fk_acl_role', ), null, null, 'AclGroupPrivileges');
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

} // Generated_Zed_Acl_Persistence_Propel_Map_PacAclRoleTableMap
