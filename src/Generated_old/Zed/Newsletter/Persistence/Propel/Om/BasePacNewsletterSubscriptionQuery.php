<?php


/**
 * Base class that represents a query for the 'pac_newsletter_subscription' table.
 *
 *
 *
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByIdNewsletterSubscription($order = Criteria::ASC) Order by the id_newsletter_subscription column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByConfirmationKey($order = Criteria::ASC) Order by the confirmation_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByUnsubscriptionKey($order = Criteria::ASC) Order by the unsubscription_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderBySubscribedAt($order = Criteria::ASC) Order by the subscribed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByConfirmedAt($order = Criteria::ASC) Order by the confirmed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery orderByUnsubscribedAt($order = Criteria::ASC) Order by the unsubscribed_at column
 *
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByIdNewsletterSubscription() Group by the id_newsletter_subscription column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByEmail() Group by the email column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByStatus() Group by the status column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByConfirmationKey() Group by the confirmation_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByUnsubscriptionKey() Group by the unsubscription_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupBySubscribedAt() Group by the subscribed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByConfirmedAt() Group by the confirmed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery groupByUnsubscribedAt() Group by the unsubscribed_at column
 *
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription matching the query
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription matching the query, or a new ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByEmail(string $email) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the email column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByStatus(int $status) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the status column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByConfirmationKey(string $confirmation_key) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the confirmation_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByUnsubscriptionKey(string $unsubscription_key) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the unsubscription_key column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneBySubscribedAt(string $subscribed_at) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the subscribed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByConfirmedAt(string $confirmed_at) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the confirmed_at column
 * @method ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription findOneByUnsubscribedAt(string $unsubscribed_at) Return the first ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription filtered by the unsubscribed_at column
 *
 * @method array findByIdNewsletterSubscription(int $id_newsletter_subscription) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the id_newsletter_subscription column
 * @method array findByEmail(string $email) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the email column
 * @method array findByStatus(int $status) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the status column
 * @method array findByConfirmationKey(string $confirmation_key) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the confirmation_key column
 * @method array findByUnsubscriptionKey(string $unsubscription_key) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the unsubscription_key column
 * @method array findBySubscribedAt(string $subscribed_at) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the subscribed_at column
 * @method array findByConfirmedAt(string $confirmed_at) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the confirmed_at column
 * @method array findByUnsubscribedAt(string $unsubscribed_at) Return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription objects filtered by the unsubscribed_at column
 *
 * @package    propel.generator.vendor/spryker/zed-package/src/ProjectA/Zed/Newsletter/Persistence/Propel.om
 */
abstract class Generated_Zed_Newsletter_Persistence_Propel_Om_BasePacNewsletterSubscriptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Newsletter_Persistence_Propel_Om_BasePacNewsletterSubscriptionQuery object.
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
            $modelName = call_user_func(['Generated_Zed_Propel_EntityLoader', 'loadPacNewsletterSubscription']);
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery(null, null, $modelAlias);

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
     * @return   ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription|ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdNewsletterSubscription($key, $con = null)
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
     * @return                 ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_newsletter_subscription`, `email`, `status`, `confirmation_key`, `unsubscription_key`, `subscribed_at`, `confirmed_at`, `unsubscribed_at` FROM `pac_newsletter_subscription` WHERE `id_newsletter_subscription` = :p0';
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
            $obj = new ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription();
            $obj->hydrate($row);
            ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription|ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription[]|mixed the list of results, formatted by the current formatter
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
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_newsletter_subscription column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNewsletterSubscription(1234); // WHERE id_newsletter_subscription = 1234
     * $query->filterByIdNewsletterSubscription(array(12, 34)); // WHERE id_newsletter_subscription IN (12, 34)
     * $query->filterByIdNewsletterSubscription(array('min' => 12)); // WHERE id_newsletter_subscription >= 12
     * $query->filterByIdNewsletterSubscription(array('max' => 12)); // WHERE id_newsletter_subscription <= 12
     * </code>
     *
     * @param     mixed $idNewsletterSubscription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByIdNewsletterSubscription($idNewsletterSubscription = null, $comparison = null)
    {
        if (is_array($idNewsletterSubscription)) {
            $useMinMax = false;
            if (isset($idNewsletterSubscription['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $idNewsletterSubscription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNewsletterSubscription['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $idNewsletterSubscription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $idNewsletterSubscription, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * @param     mixed $status The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     * @throws PropelException - if the value is not accepted by the enum.
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_scalar($status)) {
            $status = ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::getSqlValueForEnum(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::STATUS, $status);
        } elseif (is_array($status)) {
            $convertedValues = array();
            foreach ($status as $value) {
                $convertedValues[] = ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::getSqlValueForEnum(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::STATUS, $value);
            }
            $status = $convertedValues;
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the confirmation_key column
     *
     * Example usage:
     * <code>
     * $query->filterByConfirmationKey('fooValue');   // WHERE confirmation_key = 'fooValue'
     * $query->filterByConfirmationKey('%fooValue%'); // WHERE confirmation_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $confirmationKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByConfirmationKey($confirmationKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($confirmationKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $confirmationKey)) {
                $confirmationKey = str_replace('*', '%', $confirmationKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::CONFIRMATION_KEY, $confirmationKey, $comparison);
    }

    /**
     * Filter the query on the unsubscription_key column
     *
     * Example usage:
     * <code>
     * $query->filterByUnsubscriptionKey('fooValue');   // WHERE unsubscription_key = 'fooValue'
     * $query->filterByUnsubscriptionKey('%fooValue%'); // WHERE unsubscription_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unsubscriptionKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByUnsubscriptionKey($unsubscriptionKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unsubscriptionKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unsubscriptionKey)) {
                $unsubscriptionKey = str_replace('*', '%', $unsubscriptionKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::UNSUBSCRIPTION_KEY, $unsubscriptionKey, $comparison);
    }

    /**
     * Filter the query on the subscribed_at column
     *
     * Example usage:
     * <code>
     * $query->filterBySubscribedAt('2011-03-14'); // WHERE subscribed_at = '2011-03-14'
     * $query->filterBySubscribedAt('now'); // WHERE subscribed_at = '2011-03-14'
     * $query->filterBySubscribedAt(array('max' => 'yesterday')); // WHERE subscribed_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $subscribedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterBySubscribedAt($subscribedAt = null, $comparison = null)
    {
        if (is_array($subscribedAt)) {
            $useMinMax = false;
            if (isset($subscribedAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::SUBSCRIBED_AT, $subscribedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subscribedAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::SUBSCRIBED_AT, $subscribedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::SUBSCRIBED_AT, $subscribedAt, $comparison);
    }

    /**
     * Filter the query on the confirmed_at column
     *
     * Example usage:
     * <code>
     * $query->filterByConfirmedAt('2011-03-14'); // WHERE confirmed_at = '2011-03-14'
     * $query->filterByConfirmedAt('now'); // WHERE confirmed_at = '2011-03-14'
     * $query->filterByConfirmedAt(array('max' => 'yesterday')); // WHERE confirmed_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $confirmedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByConfirmedAt($confirmedAt = null, $comparison = null)
    {
        if (is_array($confirmedAt)) {
            $useMinMax = false;
            if (isset($confirmedAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::CONFIRMED_AT, $confirmedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($confirmedAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::CONFIRMED_AT, $confirmedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::CONFIRMED_AT, $confirmedAt, $comparison);
    }

    /**
     * Filter the query on the unsubscribed_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUnsubscribedAt('2011-03-14'); // WHERE unsubscribed_at = '2011-03-14'
     * $query->filterByUnsubscribedAt('now'); // WHERE unsubscribed_at = '2011-03-14'
     * $query->filterByUnsubscribedAt(array('max' => 'yesterday')); // WHERE unsubscribed_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $unsubscribedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function filterByUnsubscribedAt($unsubscribedAt = null, $comparison = null)
    {
        if (is_array($unsubscribedAt)) {
            $useMinMax = false;
            if (isset($unsubscribedAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::UNSUBSCRIBED_AT, $unsubscribedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unsubscribedAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::UNSUBSCRIBED_AT, $unsubscribedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::UNSUBSCRIBED_AT, $unsubscribedAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscription $pacNewsletterSubscription Object to remove from the list of results
     *
     * @return ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionQuery The current query, for fluid interface
     */
    public function prune($pacNewsletterSubscription = null)
    {
        if ($pacNewsletterSubscription) {
            $this->addUsingAlias(ProjectA_Zed_Newsletter_Persistence_Propel_PacNewsletterSubscriptionPeer::ID_NEWSLETTER_SUBSCRIPTION, $pacNewsletterSubscription->getIdNewsletterSubscription(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
