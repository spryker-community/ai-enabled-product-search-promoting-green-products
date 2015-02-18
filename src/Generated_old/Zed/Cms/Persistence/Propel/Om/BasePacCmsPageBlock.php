<?php


/**
 * Base class that represents a row from the 'pac_cms_page_block' table.
 *
 *
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Cms/Persistence/Propel.om
 */
abstract class Generated_Zed_Cms_Persistence_Propel_Om_BasePacCmsPageBlock extends ProjectA_Zed_Library_Propel_BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_cms_page_block field.
     * @var        int
     */
    protected $id_cms_page_block;

    /**
     * The value for the fk_cms_page field.
     * @var        int
     */
    protected $fk_cms_page;

    /**
     * The value for the fk_cms_block field.
     * @var        int
     */
    protected $fk_cms_block;

    /**
     * The value for the fk_cms_template_partial field.
     * @var        int
     */
    protected $fk_cms_template_partial;

    /**
     * The value for the is_deleted field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $is_deleted;

    /**
     * @var        PacCmsPage
     */
    protected $aPacCmsPage;

    /**
     * @var        PacCmsBlock
     */
    protected $aPacCmsBlock;

    /**
     * @var        PacCmsTemplatePartial
     */
    protected $aPacCmsTemplatePartial;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_deleted = false;
    }

    /**
     * Initializes internal state of Generated_Zed_Cms_Persistence_Propel_Om_BasePacCmsPageBlock object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_cms_page_block] column value.
     *
     * @return int
     */
    public function getIdCmsPageBlock()
    {

        return $this->id_cms_page_block;
    }

    /**
     * Get the [fk_cms_page] column value.
     *
     * @return int
     */
    public function getFkCmsPage()
    {

        return $this->fk_cms_page;
    }

    /**
     * Get the [fk_cms_block] column value.
     *
     * @return int
     */
    public function getFkCmsBlock()
    {

        return $this->fk_cms_block;
    }

    /**
     * Get the [fk_cms_template_partial] column value.
     *
     * @return int
     */
    public function getFkCmsTemplatePartial()
    {

        return $this->fk_cms_template_partial;
    }

    /**
     * Get the [is_deleted] column value.
     *
     * @return boolean
     */
    public function getIsDeleted()
    {

        return $this->is_deleted;
    }

    /**
     * Set the value of [id_cms_page_block] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     */
    public function setIdCmsPageBlock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_cms_page_block !== $v) {
            $this->id_cms_page_block = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK;
        }


        return $this;
    } // setIdCmsPageBlock()

    /**
     * Set the value of [fk_cms_page] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     */
    public function setFkCmsPage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_cms_page !== $v) {
            $this->fk_cms_page = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_PAGE;
        }

        if ($this->aPacCmsPage !== null && $this->aPacCmsPage->getIdCmsPage() !== $v) {
            $this->aPacCmsPage = null;
        }


        return $this;
    } // setFkCmsPage()

    /**
     * Set the value of [fk_cms_block] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     */
    public function setFkCmsBlock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_cms_block !== $v) {
            $this->fk_cms_block = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_BLOCK;
        }

        if ($this->aPacCmsBlock !== null && $this->aPacCmsBlock->getIdCmsBlock() !== $v) {
            $this->aPacCmsBlock = null;
        }


        return $this;
    } // setFkCmsBlock()

    /**
     * Set the value of [fk_cms_template_partial] column.
     *
     * @param  int $v new value
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     */
    public function setFkCmsTemplatePartial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_cms_template_partial !== $v) {
            $this->fk_cms_template_partial = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_TEMPLATE_PARTIAL;
        }

        if ($this->aPacCmsTemplatePartial !== null && $this->aPacCmsTemplatePartial->getIdCmsTemplatePartial() !== $v) {
            $this->aPacCmsTemplatePartial = null;
        }


        return $this;
    } // setFkCmsTemplatePartial()

    /**
     * Sets the value of the [is_deleted] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     */
    public function setIsDeleted($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->is_deleted !== $v) {
            $this->is_deleted = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::IS_DELETED;
        }


        return $this;
    } // setIsDeleted()

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
            if ($this->is_deleted !== false) {
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

            $this->id_cms_page_block = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_cms_page = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_cms_block = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->fk_cms_template_partial = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->is_deleted = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock object", $e);
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

        if ($this->aPacCmsPage !== null && $this->fk_cms_page !== $this->aPacCmsPage->getIdCmsPage()) {
            $this->aPacCmsPage = null;
        }
        if ($this->aPacCmsBlock !== null && $this->fk_cms_block !== $this->aPacCmsBlock->getIdCmsBlock()) {
            $this->aPacCmsBlock = null;
        }
        if ($this->aPacCmsTemplatePartial !== null && $this->fk_cms_template_partial !== $this->aPacCmsTemplatePartial->getIdCmsTemplatePartial()) {
            $this->aPacCmsTemplatePartial = null;
        }
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
            $con = Propel::getConnection(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aPacCmsPage = null;
            $this->aPacCmsBlock = null;
            $this->aPacCmsTemplatePartial = null;
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
            $con = Propel::getConnection(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockQuery::create()
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
            $con = Propel::getConnection(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
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

                ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aPacCmsPage !== null) {
                if ($this->aPacCmsPage->isModified() || $this->aPacCmsPage->isNew()) {
                    $affectedRows += $this->aPacCmsPage->save($con);
                }
                $this->setPacCmsPage($this->aPacCmsPage);
            }

            if ($this->aPacCmsBlock !== null) {
                if ($this->aPacCmsBlock->isModified() || $this->aPacCmsBlock->isNew()) {
                    $affectedRows += $this->aPacCmsBlock->save($con);
                }
                $this->setPacCmsBlock($this->aPacCmsBlock);
            }

            if ($this->aPacCmsTemplatePartial !== null) {
                if ($this->aPacCmsTemplatePartial->isModified() || $this->aPacCmsTemplatePartial->isNew()) {
                    $affectedRows += $this->aPacCmsTemplatePartial->save($con);
                }
                $this->setPacCmsTemplatePartial($this->aPacCmsTemplatePartial);
            }

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

        $this->modifiedColumns[] = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK;
        if (null !== $this->id_cms_page_block) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK)) {
            $modifiedColumns[':p' . $index++]  = '`id_cms_page_block`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_PAGE)) {
            $modifiedColumns[':p' . $index++]  = '`fk_cms_page`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_BLOCK)) {
            $modifiedColumns[':p' . $index++]  = '`fk_cms_block`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_TEMPLATE_PARTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`fk_cms_template_partial`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::IS_DELETED)) {
            $modifiedColumns[':p' . $index++]  = '`is_deleted`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_cms_page_block` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_cms_page_block`':
                        $stmt->bindValue($identifier, $this->id_cms_page_block, PDO::PARAM_INT);
                        break;
                    case '`fk_cms_page`':
                        $stmt->bindValue($identifier, $this->fk_cms_page, PDO::PARAM_INT);
                        break;
                    case '`fk_cms_block`':
                        $stmt->bindValue($identifier, $this->fk_cms_block, PDO::PARAM_INT);
                        break;
                    case '`fk_cms_template_partial`':
                        $stmt->bindValue($identifier, $this->fk_cms_template_partial, PDO::PARAM_INT);
                        break;
                    case '`is_deleted`':
                        $stmt->bindValue($identifier, (int) $this->is_deleted, PDO::PARAM_INT);
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
        $this->setIdCmsPageBlock($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aPacCmsPage !== null) {
                if (!$this->aPacCmsPage->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPacCmsPage->getValidationFailures());
                }
            }

            if ($this->aPacCmsBlock !== null) {
                if (!$this->aPacCmsBlock->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPacCmsBlock->getValidationFailures());
                }
            }

            if ($this->aPacCmsTemplatePartial !== null) {
                if (!$this->aPacCmsTemplatePartial->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPacCmsTemplatePartial->getValidationFailures());
                }
            }


            if (($retval = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdCmsPageBlock();
                break;
            case 1:
                return $this->getFkCmsPage();
                break;
            case 2:
                return $this->getFkCmsBlock();
                break;
            case 3:
                return $this->getFkCmsTemplatePartial();
                break;
            case 4:
                return $this->getIsDeleted();
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
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCmsPageBlock(),
            $keys[1] => $this->getFkCmsPage(),
            $keys[2] => $this->getFkCmsBlock(),
            $keys[3] => $this->getFkCmsTemplatePartial(),
            $keys[4] => $this->getIsDeleted(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aPacCmsPage) {
                $result['PacCmsPage'] = $this->aPacCmsPage->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPacCmsBlock) {
                $result['PacCmsBlock'] = $this->aPacCmsBlock->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPacCmsTemplatePartial) {
                $result['PacCmsTemplatePartial'] = $this->aPacCmsTemplatePartial->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdCmsPageBlock($value);
                break;
            case 1:
                $this->setFkCmsPage($value);
                break;
            case 2:
                $this->setFkCmsBlock($value);
                break;
            case 3:
                $this->setFkCmsTemplatePartial($value);
                break;
            case 4:
                $this->setIsDeleted($value);
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
        $keys = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdCmsPageBlock($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkCmsPage($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkCmsBlock($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setFkCmsTemplatePartial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIsDeleted($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK)) $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK, $this->id_cms_page_block);
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_PAGE)) $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_PAGE, $this->fk_cms_page);
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_BLOCK)) $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_BLOCK, $this->fk_cms_block);
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_TEMPLATE_PARTIAL)) $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::FK_CMS_TEMPLATE_PARTIAL, $this->fk_cms_template_partial);
        if ($this->isColumnModified(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::IS_DELETED)) $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::IS_DELETED, $this->is_deleted);

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
        $criteria = new Criteria(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::ID_CMS_PAGE_BLOCK, $this->id_cms_page_block);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCmsPageBlock();
    }

    /**
     * Generic method to set the primary key (id_cms_page_block column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCmsPageBlock($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdCmsPageBlock();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkCmsPage($this->getFkCmsPage());
        $copyObj->setFkCmsBlock($this->getFkCmsBlock());
        $copyObj->setFkCmsTemplatePartial($this->getFkCmsTemplatePartial());
        $copyObj->setIsDeleted($this->getIsDeleted());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCmsPageBlock(NULL); // this is a auto-increment column, so set to default value
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
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock Clone of current object.
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
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage object.
     *
     * @param                  ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage $v
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPacCmsPage(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage $v = null)
    {
        if ($v === null) {
            $this->setFkCmsPage(NULL);
        } else {
            $this->setFkCmsPage($v->getIdCmsPage());
        }

        $this->aPacCmsPage = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage object, it will not be re-added.
        if ($v !== null) {
            $v->addPacCmsPageBlock($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage The associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsPage object.
     * @throws PropelException
     */
    public function getPacCmsPage(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPacCmsPage === null && ($this->fk_cms_page !== null) && $doQuery) {
            $this->aPacCmsPage = ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageQuery::create()->findPk($this->fk_cms_page, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPacCmsPage->addPacCmsPageBlocks($this);
             */
        }

        return $this->aPacCmsPage;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock object.
     *
     * @param                  ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock $v
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPacCmsBlock(ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock $v = null)
    {
        if ($v === null) {
            $this->setFkCmsBlock(NULL);
        } else {
            $this->setFkCmsBlock($v->getIdCmsBlock());
        }

        $this->aPacCmsBlock = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock object, it will not be re-added.
        if ($v !== null) {
            $v->addPacCmsPageBlockBlock($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock The associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlock object.
     * @throws PropelException
     */
    public function getPacCmsBlock(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPacCmsBlock === null && ($this->fk_cms_block !== null) && $doQuery) {
            $this->aPacCmsBlock = ProjectA_Zed_Cms_Persistence_Propel_PacCmsBlockQuery::create()->findPk($this->fk_cms_block, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPacCmsBlock->addPacCmsPageBlockBlocks($this);
             */
        }

        return $this->aPacCmsBlock;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial object.
     *
     * @param                  ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial $v
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlock The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPacCmsTemplatePartial(ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial $v = null)
    {
        if ($v === null) {
            $this->setFkCmsTemplatePartial(NULL);
        } else {
            $this->setFkCmsTemplatePartial($v->getIdCmsTemplatePartial());
        }

        $this->aPacCmsTemplatePartial = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial object, it will not be re-added.
        if ($v !== null) {
            $v->addPacCmsPageBlock($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial The associated ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartial object.
     * @throws PropelException
     */
    public function getPacCmsTemplatePartial(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPacCmsTemplatePartial === null && ($this->fk_cms_template_partial !== null) && $doQuery) {
            $this->aPacCmsTemplatePartial = ProjectA_Zed_Cms_Persistence_Propel_PacCmsTemplatePartialQuery::create()->findPk($this->fk_cms_template_partial, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPacCmsTemplatePartial->addPacCmsPageBlocks($this);
             */
        }

        return $this->aPacCmsTemplatePartial;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_cms_page_block = null;
        $this->fk_cms_page = null;
        $this->fk_cms_block = null;
        $this->fk_cms_template_partial = null;
        $this->is_deleted = null;
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
            if ($this->aPacCmsPage instanceof Persistent) {
              $this->aPacCmsPage->clearAllReferences($deep);
            }
            if ($this->aPacCmsBlock instanceof Persistent) {
              $this->aPacCmsBlock->clearAllReferences($deep);
            }
            if ($this->aPacCmsTemplatePartial instanceof Persistent) {
              $this->aPacCmsTemplatePartial->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aPacCmsPage = null;
        $this->aPacCmsBlock = null;
        $this->aPacCmsTemplatePartial = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Cms_Persistence_Propel_PacCmsPageBlockPeer::DEFAULT_STRING_FORMAT);
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

}
