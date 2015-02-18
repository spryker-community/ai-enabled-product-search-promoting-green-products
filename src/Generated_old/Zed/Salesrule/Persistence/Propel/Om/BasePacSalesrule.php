<?php


/**
 * Base class that represents a row from the 'pac_salesrule' table.
 *
 *
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Salesrule/Persistence/Propel.om
 */
abstract class Generated_Zed_Salesrule_Persistence_Propel_Om_BasePacSalesrule extends ProjectA_Zed_Library_Propel_BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_salesrule field.
     * @var        int
     */
    protected $id_salesrule;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the display_name field.
     * @var        string
     */
    protected $display_name;

    /**
     * The value for the scope field.
     * @var        int
     */
    protected $scope;

    /**
     * The value for the action field.
     * @var        string
     */
    protected $action;

    /**
     * The value for the amount field.
     * @var        double
     */
    protected $amount;

    /**
     * The value for the is_active field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_active;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition[] Collection to store aggregation of ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition objects.
     */
    protected $collSalesruleConditions;
    protected $collSalesruleConditionsPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $salesruleConditionsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = false;
    }

    /**
     * Initializes internal state of Generated_Zed_Salesrule_Persistence_Propel_Om_BasePacSalesrule object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_salesrule] column value.
     *
     * @return int
     */
    public function getIdSalesrule()
    {

        return $this->id_salesrule;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [display_name] column value.
     *
     * @return string
     */
    public function getDisplayName()
    {

        return $this->display_name;
    }

    /**
     * Get the [scope] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getScope()
    {
        if (null === $this->scope) {
            return null;
        }
        $valueSet = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::getValueSet(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE);
        if (!isset($valueSet[$this->scope])) {
            throw new PropelException('Unknown stored enum key: ' . $this->scope);
        }

        return $valueSet[$this->scope];
    }

    /**
     * Get the [action] column value.
     *
     * @return string
     */
    public function getAction()
    {

        return $this->action;
    }

    /**
     * Get the [amount] column value.
     *
     * @return double
     */
    public function getAmount()
    {

        return $this->amount;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return boolean
     */
    public function getIsActive()
    {

        return $this->is_active;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id_salesrule] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setIdSalesrule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_salesrule !== $v) {
            $this->id_salesrule = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE;
        }


        return $this;
    } // setIdSalesrule()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [display_name] column.
     *
     * @param  string $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setDisplayName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->display_name !== $v) {
            $this->display_name = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DISPLAY_NAME;
        }


        return $this;
    } // setDisplayName()

    /**
     * Set the value of [scope] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setScope($v)
    {
        if ($v !== null) {
            $valueSet = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::getValueSet(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->scope !== $v) {
            $this->scope = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE;
        }


        return $this;
    } // setScope()

    /**
     * Set the value of [action] column.
     *
     * @param  string $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setAction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->action !== $v) {
            $this->action = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ACTION;
        }


        return $this;
    } // setAction()

    /**
     * Set the value of [amount] column.
     *
     * @param  double $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->amount !== $v) {
            $this->amount = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::AMOUNT;
        }


        return $this;
    } // setAmount()

    /**
     * Sets the value of the [is_active] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::IS_ACTIVE;
        }


        return $this;
    } // setIsActive()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->is_active !== false) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_salesrule = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->display_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->scope = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->action = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->amount = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
            $this->is_active = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->created_at = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->updated_at = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSalesruleConditions = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // lumberjack behavior

                if ($affectedRows > 0) {
                    $blacklistedEntities = array (
                );

                    if (!in_array(get_class($this), $blacklistedEntities)) {
                        $id = $this->getPrimaryKey();
                        $id = is_null($id) ? 0 : $id;

                        // Fix an issue when having multiple primary keys
                        if (is_array($id)) {
                            $id = implode(',', $id);
                        }

                        $lumberjack = \ProjectA\Shared\Lumberjack\Code\Lumberjack::getInstance();
                        $lumberjack->addField("entityData", $this->toArray());
                        $lumberjack->addField("entity", get_class($this));
                        $lumberjack->addField("entityId", $id);
                        $lumberjack->addField("affectedRows", $affectedRows);

                        $authIdentity = ProjectA\Zed\Auth\Business\Model\Auth::getInstance()->getIdentity();
                        if (isset($authIdentity) && $authIdentity instanceof \ProjectA_Zed_Acl_Persistence_Propel_PacAclUser) {
                            $lumberjack->addField("aclUserName", $authIdentity->getUsername());
                        }

                        $subType = $isInsert ? "insert" : "update";
                        $lumberjack->send(\ProjectA\Shared\Lumberjack\Code\Log\Types::SAVE, get_class($this) . " id:" . $id . " " . $subType, $subType);
                    }
                }

                ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->salesruleConditionsScheduledForDeletion !== null) {
                if (!$this->salesruleConditionsScheduledForDeletion->isEmpty()) {
                    ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleConditionQuery::create()
                        ->filterByPrimaryKeys($this->salesruleConditionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesruleConditionsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesruleConditions !== null) {
                foreach ($this->collSalesruleConditions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE;
        if (null !== $this->id_salesrule) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE)) {
            $modifiedColumns[':p' . $index++]  = '`id_salesrule`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DISPLAY_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`display_name`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE)) {
            $modifiedColumns[':p' . $index++]  = '`scope`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ACTION)) {
            $modifiedColumns[':p' . $index++]  = '`action`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = '`amount`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_salesrule` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_salesrule`':
                        $stmt->bindValue($identifier, $this->id_salesrule, PDO::PARAM_INT);
                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`display_name`':
                        $stmt->bindValue($identifier, $this->display_name, PDO::PARAM_STR);
                        break;
                    case '`scope`':
                        $stmt->bindValue($identifier, $this->scope, PDO::PARAM_INT);
                        break;
                    case '`action`':
                        $stmt->bindValue($identifier, $this->action, PDO::PARAM_STR);
                        break;
                    case '`amount`':
                        $stmt->bindValue($identifier, $this->amount, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, (int) $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdSalesrule($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSalesruleConditions !== null) {
                    foreach ($this->collSalesruleConditions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdSalesrule();
                break;
            case 1:
                return $this->getName();
                break;
            case 2:
                return $this->getDescription();
                break;
            case 3:
                return $this->getDisplayName();
                break;
            case 4:
                return $this->getScope();
                break;
            case 5:
                return $this->getAction();
                break;
            case 6:
                return $this->getAmount();
                break;
            case 7:
                return $this->getIsActive();
                break;
            case 8:
                return $this->getCreatedAt();
                break;
            case 9:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSalesrule(),
            $keys[1] => $this->getName(),
            $keys[2] => $this->getDescription(),
            $keys[3] => $this->getDisplayName(),
            $keys[4] => $this->getScope(),
            $keys[5] => $this->getAction(),
            $keys[6] => $this->getAmount(),
            $keys[7] => $this->getIsActive(),
            $keys[8] => $this->getCreatedAt(),
            $keys[9] => $this->getUpdatedAt(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSalesruleConditions) {
                $result['SalesruleConditions'] = $this->collSalesruleConditions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdSalesrule($value);
                break;
            case 1:
                $this->setName($value);
                break;
            case 2:
                $this->setDescription($value);
                break;
            case 3:
                $this->setDisplayName($value);
                break;
            case 4:
                $valueSet = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::getValueSet(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setScope($value);
                break;
            case 5:
                $this->setAction($value);
                break;
            case 6:
                $this->setAmount($value);
                break;
            case 7:
                $this->setIsActive($value);
                break;
            case 8:
                $this->setCreatedAt($value);
                break;
            case 9:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_FIELDNAME)
    {
        $keys = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSalesrule($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDisplayName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setScope($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAction($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAmount($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIsActive($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCreatedAt($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUpdatedAt($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE, $this->id_salesrule);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::NAME)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::NAME, $this->name);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DESCRIPTION)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DISPLAY_NAME)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DISPLAY_NAME, $this->display_name);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::SCOPE, $this->scope);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ACTION)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ACTION, $this->action);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::AMOUNT)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::AMOUNT, $this->amount);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::IS_ACTIVE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::IS_ACTIVE, $this->is_active);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::CREATED_AT)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::ID_SALESRULE, $this->id_salesrule);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSalesrule();
    }

    /**
     * Generic method to set the primary key (id_salesrule column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSalesrule($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdSalesrule();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setDisplayName($this->getDisplayName());
        $copyObj->setScope($this->getScope());
        $copyObj->setAction($this->getAction());
        $copyObj->setAmount($this->getAmount());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSalesruleConditions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesruleCondition($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSalesrule(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer();
        }

        return self::$peer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('SalesruleCondition' == $relationName) {
            $this->initSalesruleConditions();
        }
    }

    /**
     * Clears out the collSalesruleConditions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     * @see        addSalesruleConditions()
     */
    public function clearSalesruleConditions()
    {
        $this->collSalesruleConditions = null; // important to set this to null since that means it is uninitialized
        $this->collSalesruleConditionsPartial = null;

        return $this;
    }

    /**
     * reset is the collSalesruleConditions collection loaded partially
     *
     * @return void
     */
    public function resetPartialSalesruleConditions($v = true)
    {
        $this->collSalesruleConditionsPartial = $v;
    }

    /**
     * Initializes the collSalesruleConditions collection.
     *
     * By default this just sets the collSalesruleConditions collection to an empty array (like clearcollSalesruleConditions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesruleConditions($overrideExisting = true)
    {
        if (null !== $this->collSalesruleConditions && !$overrideExisting) {
            return;
        }
        $this->collSalesruleConditions = new PropelObjectCollection();
        $this->collSalesruleConditions->setModel('ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition');
    }

    /**
     * Gets an array of ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition[] List of ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition objects
     * @throws PropelException
     */
    public function getSalesruleConditions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSalesruleConditionsPartial && !$this->isNew();
        if (null === $this->collSalesruleConditions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesruleConditions) {
                // return empty collection
                $this->initSalesruleConditions();
            } else {
                $collSalesruleConditions = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleConditionQuery::create(null, $criteria)
                    ->filterBySalesrule($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSalesruleConditionsPartial && count($collSalesruleConditions)) {
                      $this->initSalesruleConditions(false);

                      foreach ($collSalesruleConditions as $obj) {
                        if (false == $this->collSalesruleConditions->contains($obj)) {
                          $this->collSalesruleConditions->append($obj);
                        }
                      }

                      $this->collSalesruleConditionsPartial = true;
                    }

                    $collSalesruleConditions->getInternalIterator()->rewind();

                    return $collSalesruleConditions;
                }

                if ($partial && $this->collSalesruleConditions) {
                    foreach ($this->collSalesruleConditions as $obj) {
                        if ($obj->isNew()) {
                            $collSalesruleConditions[] = $obj;
                        }
                    }
                }

                $this->collSalesruleConditions = $collSalesruleConditions;
                $this->collSalesruleConditionsPartial = false;
            }
        }

        return $this->collSalesruleConditions;
    }

    /**
     * Sets a collection of SalesruleCondition objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $salesruleConditions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function setSalesruleConditions(PropelCollection $salesruleConditions, PropelPDO $con = null)
    {
        $salesruleConditionsToDelete = $this->getSalesruleConditions(new Criteria(), $con)->diff($salesruleConditions);


        $this->salesruleConditionsScheduledForDeletion = $salesruleConditionsToDelete;

        foreach ($salesruleConditionsToDelete as $salesruleConditionRemoved) {
            $salesruleConditionRemoved->setSalesrule(null);
        }

        $this->collSalesruleConditions = null;
        foreach ($salesruleConditions as $salesruleCondition) {
            $this->addSalesruleCondition($salesruleCondition);
        }

        $this->collSalesruleConditions = $salesruleConditions;
        $this->collSalesruleConditionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition objects.
     * @throws PropelException
     */
    public function countSalesruleConditions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSalesruleConditionsPartial && !$this->isNew();
        if (null === $this->collSalesruleConditions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesruleConditions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesruleConditions());
            }
            $query = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleConditionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesrule($this)
                ->count($con);
        }

        return count($this->collSalesruleConditions);
    }

    /**
     * Method called to associate a ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition object to this object
     * through the ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition foreign key attribute.
     *
     * @param    ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition $l ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function addSalesruleCondition(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCondition $l)
    {
        if ($this->collSalesruleConditions === null) {
            $this->initSalesruleConditions();
            $this->collSalesruleConditionsPartial = true;
        }

        if (!in_array($l, $this->collSalesruleConditions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSalesruleCondition($l);

            if ($this->salesruleConditionsScheduledForDeletion and $this->salesruleConditionsScheduledForDeletion->contains($l)) {
                $this->salesruleConditionsScheduledForDeletion->remove($this->salesruleConditionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	SalesruleCondition $salesruleCondition The salesruleCondition object to add.
     */
    protected function doAddSalesruleCondition($salesruleCondition)
    {
        $this->collSalesruleConditions[]= $salesruleCondition;
        $salesruleCondition->setSalesrule($this);
    }

    /**
     * @param	SalesruleCondition $salesruleCondition The salesruleCondition object to remove.
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function removeSalesruleCondition($salesruleCondition)
    {
        if ($this->getSalesruleConditions()->contains($salesruleCondition)) {
            $this->collSalesruleConditions->remove($this->collSalesruleConditions->search($salesruleCondition));
            if (null === $this->salesruleConditionsScheduledForDeletion) {
                $this->salesruleConditionsScheduledForDeletion = clone $this->collSalesruleConditions;
                $this->salesruleConditionsScheduledForDeletion->clear();
            }
            $this->salesruleConditionsScheduledForDeletion[]= clone $salesruleCondition;
            $salesruleCondition->setSalesrule(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_salesrule = null;
        $this->name = null;
        $this->description = null;
        $this->display_name = null;
        $this->scope = null;
        $this->action = null;
        $this->amount = null;
        $this->is_active = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collSalesruleConditions) {
                foreach ($this->collSalesruleConditions as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSalesruleConditions instanceof PropelCollection) {
            $this->collSalesruleConditions->clearIterator();
        }
        $this->collSalesruleConditions = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrule The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesrulePeer::UPDATED_AT;

        return $this;
    }

}
