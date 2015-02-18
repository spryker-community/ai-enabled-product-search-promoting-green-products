<?php


/**
 * Base static class for performing query and update operations on the 'pac_customer2_address' table.
 *
 *
 *
 * @package propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Customer2/Persistence/Propel.om
 */
abstract class Generated_Zed_Customer2_Persistence_Propel_Om_BasePacCustomer2AddressPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zed';

    /** the table name for this class */
    const TABLE_NAME = 'pac_customer2_address';

    /** we need this one for the EntityLoader */
    const OM_SHORT_CLASS = 'PacCustomer2Address';

    /** the related Propel class for this table */
    const OM_CLASS = 'ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Generated_Zed_Customer2_Persistence_Propel_Map_PacCustomer2AddressTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the id_customer_address field */
    const ID_CUSTOMER_ADDRESS = 'pac_customer2_address.id_customer_address';

    /** the column name for the fk_customer field */
    const FK_CUSTOMER = 'pac_customer2_address.fk_customer';

    /** the column name for the fk_misc_country field */
    const FK_MISC_COUNTRY = 'pac_customer2_address.fk_misc_country';

    /** the column name for the fk_misc_region field */
    const FK_MISC_REGION = 'pac_customer2_address.fk_misc_region';

    /** the column name for the salutation field */
    const SALUTATION = 'pac_customer2_address.salutation';

    /** the column name for the first_name field */
    const FIRST_NAME = 'pac_customer2_address.first_name';

    /** the column name for the middle_name field */
    const MIDDLE_NAME = 'pac_customer2_address.middle_name';

    /** the column name for the last_name field */
    const LAST_NAME = 'pac_customer2_address.last_name';

    /** the column name for the address1 field */
    const ADDRESS1 = 'pac_customer2_address.address1';

    /** the column name for the address2 field */
    const ADDRESS2 = 'pac_customer2_address.address2';

    /** the column name for the address3 field */
    const ADDRESS3 = 'pac_customer2_address.address3';

    /** the column name for the company field */
    const COMPANY = 'pac_customer2_address.company';

    /** the column name for the city field */
    const CITY = 'pac_customer2_address.city';

    /** the column name for the zip_code field */
    const ZIP_CODE = 'pac_customer2_address.zip_code';

    /** the column name for the po_box field */
    const PO_BOX = 'pac_customer2_address.po_box';

    /** the column name for the phone field */
    const PHONE = 'pac_customer2_address.phone';

    /** the column name for the cell_phone field */
    const CELL_PHONE = 'pac_customer2_address.cell_phone';

    /** the column name for the comment field */
    const COMMENT = 'pac_customer2_address.comment';

    /** the column name for the is_deleted field */
    const IS_DELETED = 'pac_customer2_address.is_deleted';

    /** the column name for the deleted_at field */
    const DELETED_AT = 'pac_customer2_address.deleted_at';

    /** the column name for the created_at field */
    const CREATED_AT = 'pac_customer2_address.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'pac_customer2_address.updated_at';

    /** The enumerated values for the salutation field */
    const SALUTATION_MR = 'Mr';
    const SALUTATION_MRS = 'Mrs';
    const SALUTATION_DR = 'Dr';
    const SALUTATION_ = '';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldNames[ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdCustomerAddress', 'FkCustomer', 'FkMiscCountry', 'FkMiscRegion', 'Salutation', 'FirstName', 'MiddleName', 'LastName', 'Address1', 'Address2', 'Address3', 'Company', 'City', 'ZipCode', 'PoBox', 'Phone', 'CellPhone', 'Comment', 'IsDeleted', 'DeletedAt', 'CreatedAt', 'UpdatedAt', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomerAddress', 'fkCustomer', 'fkMiscCountry', 'fkMiscRegion', 'salutation', 'firstName', 'middleName', 'lastName', 'address1', 'address2', 'address3', 'company', 'city', 'zipCode', 'poBox', 'phone', 'cellPhone', 'comment', 'isDeleted', 'deletedAt', 'createdAt', 'updatedAt', ),
        BasePeer::TYPE_COLNAME => array (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FIRST_NAME, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::MIDDLE_NAME, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::LAST_NAME, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS1, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS2, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS3, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMPANY, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CITY, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ZIP_CODE, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PO_BOX, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PHONE, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CELL_PHONE, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMMENT, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::IS_DELETED, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DELETED_AT, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CREATED_AT, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::UPDATED_AT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMER_ADDRESS', 'FK_CUSTOMER', 'FK_MISC_COUNTRY', 'FK_MISC_REGION', 'SALUTATION', 'FIRST_NAME', 'MIDDLE_NAME', 'LAST_NAME', 'ADDRESS1', 'ADDRESS2', 'ADDRESS3', 'COMPANY', 'CITY', 'ZIP_CODE', 'PO_BOX', 'PHONE', 'CELL_PHONE', 'COMMENT', 'IS_DELETED', 'DELETED_AT', 'CREATED_AT', 'UPDATED_AT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_customer_address', 'fk_customer', 'fk_misc_country', 'fk_misc_region', 'salutation', 'first_name', 'middle_name', 'last_name', 'address1', 'address2', 'address3', 'company', 'city', 'zip_code', 'po_box', 'phone', 'cell_phone', 'comment', 'is_deleted', 'deleted_at', 'created_at', 'updated_at', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdCustomerAddress' => 0, 'FkCustomer' => 1, 'FkMiscCountry' => 2, 'FkMiscRegion' => 3, 'Salutation' => 4, 'FirstName' => 5, 'MiddleName' => 6, 'LastName' => 7, 'Address1' => 8, 'Address2' => 9, 'Address3' => 10, 'Company' => 11, 'City' => 12, 'ZipCode' => 13, 'PoBox' => 14, 'Phone' => 15, 'CellPhone' => 16, 'Comment' => 17, 'IsDeleted' => 18, 'DeletedAt' => 19, 'CreatedAt' => 20, 'UpdatedAt' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idCustomerAddress' => 0, 'fkCustomer' => 1, 'fkMiscCountry' => 2, 'fkMiscRegion' => 3, 'salutation' => 4, 'firstName' => 5, 'middleName' => 6, 'lastName' => 7, 'address1' => 8, 'address2' => 9, 'address3' => 10, 'company' => 11, 'city' => 12, 'zipCode' => 13, 'poBox' => 14, 'phone' => 15, 'cellPhone' => 16, 'comment' => 17, 'isDeleted' => 18, 'deletedAt' => 19, 'createdAt' => 20, 'updatedAt' => 21, ),
        BasePeer::TYPE_COLNAME => array (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS => 0, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER => 1, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY => 2, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION => 3, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION => 4, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FIRST_NAME => 5, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::MIDDLE_NAME => 6, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::LAST_NAME => 7, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS1 => 8, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS2 => 9, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS3 => 10, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMPANY => 11, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CITY => 12, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ZIP_CODE => 13, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PO_BOX => 14, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PHONE => 15, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CELL_PHONE => 16, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMMENT => 17, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::IS_DELETED => 18, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DELETED_AT => 19, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CREATED_AT => 20, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::UPDATED_AT => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CUSTOMER_ADDRESS' => 0, 'FK_CUSTOMER' => 1, 'FK_MISC_COUNTRY' => 2, 'FK_MISC_REGION' => 3, 'SALUTATION' => 4, 'FIRST_NAME' => 5, 'MIDDLE_NAME' => 6, 'LAST_NAME' => 7, 'ADDRESS1' => 8, 'ADDRESS2' => 9, 'ADDRESS3' => 10, 'COMPANY' => 11, 'CITY' => 12, 'ZIP_CODE' => 13, 'PO_BOX' => 14, 'PHONE' => 15, 'CELL_PHONE' => 16, 'COMMENT' => 17, 'IS_DELETED' => 18, 'DELETED_AT' => 19, 'CREATED_AT' => 20, 'UPDATED_AT' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('id_customer_address' => 0, 'fk_customer' => 1, 'fk_misc_country' => 2, 'fk_misc_region' => 3, 'salutation' => 4, 'first_name' => 5, 'middle_name' => 6, 'last_name' => 7, 'address1' => 8, 'address2' => 9, 'address3' => 10, 'company' => 11, 'city' => 12, 'zip_code' => 13, 'po_box' => 14, 'phone' => 15, 'cell_phone' => 16, 'comment' => 17, 'is_deleted' => 18, 'deleted_at' => 19, 'created_at' => 20, 'updated_at' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION => array(
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION_MR,
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION_MRS,
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION_DR,
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION_,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getFieldNames($toType);
        $key = isset(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldKeys[$fromType][$name]) ? ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FIRST_NAME);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::MIDDLE_NAME);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::LAST_NAME);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS1);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS2);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ADDRESS3);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMPANY);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CITY);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ZIP_CODE);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PO_BOX);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::PHONE);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CELL_PHONE);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::COMMENT);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::IS_DELETED);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DELETED_AT);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::CREATED_AT);
            $criteria->addSelectColumn(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_customer_address');
            $criteria->addSelectColumn($alias . '.fk_customer');
            $criteria->addSelectColumn($alias . '.fk_misc_country');
            $criteria->addSelectColumn($alias . '.fk_misc_region');
            $criteria->addSelectColumn($alias . '.salutation');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.middle_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.address1');
            $criteria->addSelectColumn($alias . '.address2');
            $criteria->addSelectColumn($alias . '.address3');
            $criteria->addSelectColumn($alias . '.company');
            $criteria->addSelectColumn($alias . '.city');
            $criteria->addSelectColumn($alias . '.zip_code');
            $criteria->addSelectColumn($alias . '.po_box');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.cell_phone');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.is_deleted');
            $criteria->addSelectColumn($alias . '.deleted_at');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::populateObjects(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address $obj A ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdCustomerAddress();
            } // if key === null
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) {
                $key = (string) $value->getIdCustomerAddress();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances[$key])) {
                return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pac_customer2_address
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $className = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::OM_SHORT_CLASS;
            $method = 'load' . $className;
            $cls = call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Gets the SQL value for Salutation ENUM value
     *
     * @param  string $enumVal ENUM value to get SQL value for
     * @return int SQL value
     */
    public static function getSalutationSqlValue($enumVal)
    {
        return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getSqlValueForEnum(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::SALUTATION, $enumVal);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customer2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCustomer2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Country table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCountry(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Region table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRegion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with their ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2 objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomer2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to $obj2 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2)
                $obj2->addAddress2($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with their ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCountry(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to $obj2 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry)
                $obj2->addCustomerAddress2($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with their ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRegion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;
        ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to $obj2 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion)
                $obj2->addCustomerAddress2($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2 rows

            $key2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj2 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2)
                $obj2->addAddress2($obj1);
            } // if joined row not null

            // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry rows

            $key3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj3 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry)
                $obj3->addCustomerAddress2($obj1);
            } // if joined row not null

            // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion rows

            $key4 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj4 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion)
                $obj4->addCustomerAddress2($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Customer2 table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCustomer2(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Country table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCountry(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Region table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRegion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with all related objects except Customer2.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCustomer2(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry rows

                $key2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj2 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry)
                $obj2->addCustomerAddress2($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion rows

                $key3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj3 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion)
                $obj3->addCustomerAddress2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with all related objects except Country.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCountry(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_REGION, ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::ID_MISC_REGION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2 rows

                $key2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj2 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2)
                $obj2->addAddress2($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion rows

                $key3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj3 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscRegion)
                $obj3->addCustomerAddress2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects pre-filled with all related objects except Region.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRegion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        }

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addSelectColumns($criteria);
        $startcol2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::NUM_HYDRATE_COLUMNS;

        ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_CUSTOMER, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::ID_CUSTOMER, $join_behavior);

        $criteria->addJoin(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::FK_MISC_COUNTRY, ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::ID_MISC_COUNTRY, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2 rows

                $key2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Peer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj2 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2)
                $obj2->addAddress2($obj1);

            } // if joined row is not null

                // Add objects for joined ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry rows

                $key3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountryPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) to the collection in $obj3 (ProjectA_Zed_Misc_Persistence_Propel_PacMiscCountry)
                $obj3->addCustomerAddress2($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME)->getTable(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(Generated_Zed_Customer2_Persistence_Propel_Om_BasePacCustomer2AddressPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(Generated_Zed_Customer2_Persistence_Propel_Om_BasePacCustomer2AddressPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Generated_Zed_Customer2_Persistence_Propel_Map_PacCustomer2AddressTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        $className = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::OM_SHORT_CLASS;
        $method = 'load' . $className;
        return call_user_func(['Generated_Zed_Propel_EntityLoader', $method]);
    }

    /**
     * Performs an INSERT on the database, given a ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address or Criteria object.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object
        }

        if ($criteria->containsKey(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS) && $criteria->keyContainsValue(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address or Criteria object.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS);
            $value = $criteria->remove(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS);
            if ($value) {
                $selectCriteria->add(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);
            }

        } else { // $values is ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pac_customer2_address table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME, $con, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::clearInstancePool();
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address) { // it's a model object
            // invalidate the cache for this single object
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
            $criteria->add(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS, $pk);

        $v = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2Address[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::DATABASE_NAME);
            $criteria->add(ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::ID_CUSTOMER_ADDRESS, $pks, Criteria::IN);
            $objs = ProjectA_Zed_Customer2_Persistence_Propel_PacCustomer2AddressPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // Generated_Zed_Customer2_Persistence_Propel_Om_BasePacCustomer2AddressPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
Generated_Zed_Customer2_Persistence_Propel_Om_BasePacCustomer2AddressPeer::buildTableMap();

