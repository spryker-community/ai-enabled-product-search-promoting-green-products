<?php


/**
 * Base class that represents a query for the 'pac_salesrule_codepool' table.
 *
 *
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByIdSalesruleCodepool($order = Criteria::ASC) Order by the id_salesrule_codepool column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByPrefix($order = Criteria::ASC) Order by the prefix column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByIsReusable($order = Criteria::ASC) Order by the is_reusable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByIsOncePerCustomer($order = Criteria::ASC) Order by the is_once_per_customer column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByIsRefundable($order = Criteria::ASC) Order by the is_refundable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByIdSalesruleCodepool() Group by the id_salesrule_codepool column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByName() Group by the name column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByPrefix() Group by the prefix column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByIsReusable() Group by the is_reusable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByIsOncePerCustomer() Group by the is_once_per_customer column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByIsRefundable() Group by the is_refundable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByIsActive() Group by the is_active column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByCreatedAt() Group by the created_at column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery leftJoinSalesruleCode($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesruleCode relation
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery rightJoinSalesruleCode($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesruleCode relation
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery innerJoinSalesruleCode($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesruleCode relation
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool matching the query
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool matching the query, or a new ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByName(string $name) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the name column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByPrefix(string $prefix) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the prefix column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByIsReusable(boolean $is_reusable) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the is_reusable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByIsOncePerCustomer(boolean $is_once_per_customer) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the is_once_per_customer column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByIsRefundable(boolean $is_refundable) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the is_refundable column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByIsActive(boolean $is_active) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the is_active column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByCreatedAt(string $created_at) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the created_at column
 * @method ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool findOneByUpdatedAt(string $updated_at) Return the first ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool filtered by the updated_at column
 *
 * @method array findByIdSalesruleCodepool(int $id_salesrule_codepool) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the id_salesrule_codepool column
 * @method array findByName(string $name) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the name column
 * @method array findByPrefix(string $prefix) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the prefix column
 * @method array findByIsReusable(boolean $is_reusable) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the is_reusable column
 * @method array findByIsOncePerCustomer(boolean $is_once_per_customer) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the is_once_per_customer column
 * @method array findByIsRefundable(boolean $is_refundable) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the is_refundable column
 * @method array findByIsActive(boolean $is_active) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the is_active column
 * @method array findByCreatedAt(string $created_at) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool objects filtered by the updated_at column
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Salesrule/Persistence/Propel.om
 */
abstract class Generated_Zed_Salesrule_Persistence_Propel_Om_BasePacSalesruleCodepoolQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Salesrule_Persistence_Propel_Om_BasePacSalesruleCodepoolQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'zed';
        }
        if (null === $modelName) {
            $modelName = call_user_func(['Generated_Zed_Propel_EntityLoader', 'loadPacSalesruleCodepool']);
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool|ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSalesruleCodepool($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_salesrule_codepool`, `name`, `prefix`, `is_reusable`, `is_once_per_customer`, `is_refundable`, `is_active`, `created_at`, `updated_at` FROM `pac_salesrule_codepool` WHERE `id_salesrule_codepool` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool();
            $obj->hydrate($row);
            ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool|ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_salesrule_codepool column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesruleCodepool(1234); // WHERE id_salesrule_codepool = 1234
     * $query->filterByIdSalesruleCodepool(array(12, 34)); // WHERE id_salesrule_codepool IN (12, 34)
     * $query->filterByIdSalesruleCodepool(array('min' => 12)); // WHERE id_salesrule_codepool >= 12
     * $query->filterByIdSalesruleCodepool(array('max' => 12)); // WHERE id_salesrule_codepool <= 12
     * </code>
     *
     * @param     mixed $idSalesruleCodepool The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByIdSalesruleCodepool($idSalesruleCodepool = null, $comparison = null)
    {
        if (is_array($idSalesruleCodepool)) {
            $useMinMax = false;
            if (isset($idSalesruleCodepool['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $idSalesruleCodepool['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesruleCodepool['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $idSalesruleCodepool['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $idSalesruleCodepool, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the prefix column
     *
     * Example usage:
     * <code>
     * $query->filterByPrefix('fooValue');   // WHERE prefix = 'fooValue'
     * $query->filterByPrefix('%fooValue%'); // WHERE prefix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prefix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByPrefix($prefix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prefix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prefix)) {
                $prefix = str_replace('*', '%', $prefix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::PREFIX, $prefix, $comparison);
    }

    /**
     * Filter the query on the is_reusable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsReusable(true); // WHERE is_reusable = true
     * $query->filterByIsReusable('yes'); // WHERE is_reusable = true
     * </code>
     *
     * @param     boolean|string $isReusable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByIsReusable($isReusable = null, $comparison = null)
    {
        if (is_string($isReusable)) {
            $isReusable = in_array(strtolower($isReusable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::IS_REUSABLE, $isReusable, $comparison);
    }

    /**
     * Filter the query on the is_once_per_customer column
     *
     * Example usage:
     * <code>
     * $query->filterByIsOncePerCustomer(true); // WHERE is_once_per_customer = true
     * $query->filterByIsOncePerCustomer('yes'); // WHERE is_once_per_customer = true
     * </code>
     *
     * @param     boolean|string $isOncePerCustomer The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByIsOncePerCustomer($isOncePerCustomer = null, $comparison = null)
    {
        if (is_string($isOncePerCustomer)) {
            $isOncePerCustomer = in_array(strtolower($isOncePerCustomer), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::IS_ONCE_PER_CUSTOMER, $isOncePerCustomer, $comparison);
    }

    /**
     * Filter the query on the is_refundable column
     *
     * Example usage:
     * <code>
     * $query->filterByIsRefundable(true); // WHERE is_refundable = true
     * $query->filterByIsRefundable('yes'); // WHERE is_refundable = true
     * </code>
     *
     * @param     boolean|string $isRefundable The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByIsRefundable($isRefundable = null, $comparison = null)
    {
        if (is_string($isRefundable)) {
            $isRefundable = in_array(strtolower($isRefundable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::IS_REFUNDABLE, $isRefundable, $comparison);
    }

    /**
     * Filter the query on the is_active column
     *
     * Example usage:
     * <code>
     * $query->filterByIsActive(true); // WHERE is_active = true
     * $query->filterByIsActive('yes'); // WHERE is_active = true
     * </code>
     *
     * @param     boolean|string $isActive The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_string($isActive)) {
            $isActive = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCode object
     *
     * @param   ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCode|PropelObjectCollection $pacSalesruleCode  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesruleCode($pacSalesruleCode, $comparison = null)
    {
        if ($pacSalesruleCode instanceof ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCode) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $pacSalesruleCode->getFkSalesruleCodepool(), $comparison);
        } elseif ($pacSalesruleCode instanceof PropelObjectCollection) {
            return $this
                ->useSalesruleCodeQuery()
                ->filterByPrimaryKeys($pacSalesruleCode->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesruleCode() only accepts arguments of type ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCode or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesruleCode relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function joinSalesruleCode($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesruleCode');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesruleCode');
        }

        return $this;
    }

    /**
     * Use the SalesruleCode relation PacSalesruleCode object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodeQuery A secondary query class using the current class as primary query
     */
    public function useSalesruleCodeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesruleCode($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesruleCode', 'ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepool $pacSalesruleCodepool Object to remove from the list of results
     *
     * @return ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function prune($pacSalesruleCodepool = null)
    {
        if ($pacSalesruleCodepool) {
            $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::ID_SALESRULE_CODEPOOL, $pacSalesruleCodepool->getIdSalesruleCodepool(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(ProjectA_Zed_Salesrule_Persistence_Propel_PacSalesruleCodepoolPeer::CREATED_AT);
    }
}
