<?php


/**
 * Base class that represents a query for the 'crontab' table.
 *
 * 
 *
 * @method     iceModelCrontabQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     iceModelCrontabQuery orderByContext($order = Criteria::ASC) Order by the context column
 * @method     iceModelCrontabQuery orderByMinute($order = Criteria::ASC) Order by the minute column
 * @method     iceModelCrontabQuery orderByHour($order = Criteria::ASC) Order by the hour column
 * @method     iceModelCrontabQuery orderByMonth($order = Criteria::ASC) Order by the month column
 * @method     iceModelCrontabQuery orderByDayOfWeek($order = Criteria::ASC) Order by the day_of_week column
 * @method     iceModelCrontabQuery orderByDayOfMonth($order = Criteria::ASC) Order by the day_of_month column
 * @method     iceModelCrontabQuery orderByFunctionName($order = Criteria::ASC) Order by the function_name column
 * @method     iceModelCrontabQuery orderByParameters($order = Criteria::ASC) Order by the parameters column
 * @method     iceModelCrontabQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     iceModelCrontabQuery orderByPriority($order = Criteria::ASC) Order by the priority column
 * @method     iceModelCrontabQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     iceModelCrontabQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method     iceModelCrontabQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     iceModelCrontabQuery groupById() Group by the id column
 * @method     iceModelCrontabQuery groupByContext() Group by the context column
 * @method     iceModelCrontabQuery groupByMinute() Group by the minute column
 * @method     iceModelCrontabQuery groupByHour() Group by the hour column
 * @method     iceModelCrontabQuery groupByMonth() Group by the month column
 * @method     iceModelCrontabQuery groupByDayOfWeek() Group by the day_of_week column
 * @method     iceModelCrontabQuery groupByDayOfMonth() Group by the day_of_month column
 * @method     iceModelCrontabQuery groupByFunctionName() Group by the function_name column
 * @method     iceModelCrontabQuery groupByParameters() Group by the parameters column
 * @method     iceModelCrontabQuery groupByDescription() Group by the description column
 * @method     iceModelCrontabQuery groupByPriority() Group by the priority column
 * @method     iceModelCrontabQuery groupByIsActive() Group by the is_active column
 * @method     iceModelCrontabQuery groupByUpdatedAt() Group by the updated_at column
 * @method     iceModelCrontabQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     iceModelCrontabQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     iceModelCrontabQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     iceModelCrontabQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     iceModelCrontab findOne(PropelPDO $con = null) Return the first iceModelCrontab matching the query
 * @method     iceModelCrontab findOneOrCreate(PropelPDO $con = null) Return the first iceModelCrontab matching the query, or a new iceModelCrontab object populated from the query conditions when no match is found
 *
 * @method     iceModelCrontab findOneById(int $id) Return the first iceModelCrontab filtered by the id column
 * @method     iceModelCrontab findOneByContext(string $context) Return the first iceModelCrontab filtered by the context column
 * @method     iceModelCrontab findOneByMinute(string $minute) Return the first iceModelCrontab filtered by the minute column
 * @method     iceModelCrontab findOneByHour(string $hour) Return the first iceModelCrontab filtered by the hour column
 * @method     iceModelCrontab findOneByMonth(string $month) Return the first iceModelCrontab filtered by the month column
 * @method     iceModelCrontab findOneByDayOfWeek(string $day_of_week) Return the first iceModelCrontab filtered by the day_of_week column
 * @method     iceModelCrontab findOneByDayOfMonth(string $day_of_month) Return the first iceModelCrontab filtered by the day_of_month column
 * @method     iceModelCrontab findOneByFunctionName(string $function_name) Return the first iceModelCrontab filtered by the function_name column
 * @method     iceModelCrontab findOneByParameters(string $parameters) Return the first iceModelCrontab filtered by the parameters column
 * @method     iceModelCrontab findOneByDescription(string $description) Return the first iceModelCrontab filtered by the description column
 * @method     iceModelCrontab findOneByPriority(int $priority) Return the first iceModelCrontab filtered by the priority column
 * @method     iceModelCrontab findOneByIsActive(boolean $is_active) Return the first iceModelCrontab filtered by the is_active column
 * @method     iceModelCrontab findOneByUpdatedAt(string $updated_at) Return the first iceModelCrontab filtered by the updated_at column
 * @method     iceModelCrontab findOneByCreatedAt(string $created_at) Return the first iceModelCrontab filtered by the created_at column
 *
 * @method     array findById(int $id) Return iceModelCrontab objects filtered by the id column
 * @method     array findByContext(string $context) Return iceModelCrontab objects filtered by the context column
 * @method     array findByMinute(string $minute) Return iceModelCrontab objects filtered by the minute column
 * @method     array findByHour(string $hour) Return iceModelCrontab objects filtered by the hour column
 * @method     array findByMonth(string $month) Return iceModelCrontab objects filtered by the month column
 * @method     array findByDayOfWeek(string $day_of_week) Return iceModelCrontab objects filtered by the day_of_week column
 * @method     array findByDayOfMonth(string $day_of_month) Return iceModelCrontab objects filtered by the day_of_month column
 * @method     array findByFunctionName(string $function_name) Return iceModelCrontab objects filtered by the function_name column
 * @method     array findByParameters(string $parameters) Return iceModelCrontab objects filtered by the parameters column
 * @method     array findByDescription(string $description) Return iceModelCrontab objects filtered by the description column
 * @method     array findByPriority(int $priority) Return iceModelCrontab objects filtered by the priority column
 * @method     array findByIsActive(boolean $is_active) Return iceModelCrontab objects filtered by the is_active column
 * @method     array findByUpdatedAt(string $updated_at) Return iceModelCrontab objects filtered by the updated_at column
 * @method     array findByCreatedAt(string $created_at) Return iceModelCrontab objects filtered by the created_at column
 *
 * @package    propel.generator.plugins.iceCrontabPlugin.lib.model.om
 */
abstract class BaseiceModelCrontabQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseiceModelCrontabQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'icepique', $modelName = 'iceModelCrontab', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new iceModelCrontabQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    iceModelCrontabQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof iceModelCrontabQuery) {
            return $criteria;
        }
        $query = new iceModelCrontabQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    iceModelCrontab|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = iceModelCrontabPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(iceModelCrontabPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(iceModelCrontabPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(iceModelCrontabPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the context column
     *
     * Example usage:
     * <code>
     * $query->filterByContext('fooValue');   // WHERE context = 'fooValue'
     * $query->filterByContext('%fooValue%'); // WHERE context LIKE '%fooValue%'
     * </code>
     *
     * @param     string $context The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByContext($context = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($context)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $context)) {
                $context = str_replace('*', '%', $context);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::CONTEXT, $context, $comparison);
    }

    /**
     * Filter the query on the minute column
     *
     * Example usage:
     * <code>
     * $query->filterByMinute('fooValue');   // WHERE minute = 'fooValue'
     * $query->filterByMinute('%fooValue%'); // WHERE minute LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minute The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByMinute($minute = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minute)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $minute)) {
                $minute = str_replace('*', '%', $minute);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::MINUTE, $minute, $comparison);
    }

    /**
     * Filter the query on the hour column
     *
     * Example usage:
     * <code>
     * $query->filterByHour('fooValue');   // WHERE hour = 'fooValue'
     * $query->filterByHour('%fooValue%'); // WHERE hour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByHour($hour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hour)) {
                $hour = str_replace('*', '%', $hour);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::HOUR, $hour, $comparison);
    }

    /**
     * Filter the query on the month column
     *
     * Example usage:
     * <code>
     * $query->filterByMonth('fooValue');   // WHERE month = 'fooValue'
     * $query->filterByMonth('%fooValue%'); // WHERE month LIKE '%fooValue%'
     * </code>
     *
     * @param     string $month The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByMonth($month = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($month)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $month)) {
                $month = str_replace('*', '%', $month);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::MONTH, $month, $comparison);
    }

    /**
     * Filter the query on the day_of_week column
     *
     * Example usage:
     * <code>
     * $query->filterByDayOfWeek('fooValue');   // WHERE day_of_week = 'fooValue'
     * $query->filterByDayOfWeek('%fooValue%'); // WHERE day_of_week LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dayOfWeek The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByDayOfWeek($dayOfWeek = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dayOfWeek)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dayOfWeek)) {
                $dayOfWeek = str_replace('*', '%', $dayOfWeek);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::DAY_OF_WEEK, $dayOfWeek, $comparison);
    }

    /**
     * Filter the query on the day_of_month column
     *
     * Example usage:
     * <code>
     * $query->filterByDayOfMonth('fooValue');   // WHERE day_of_month = 'fooValue'
     * $query->filterByDayOfMonth('%fooValue%'); // WHERE day_of_month LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dayOfMonth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByDayOfMonth($dayOfMonth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dayOfMonth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dayOfMonth)) {
                $dayOfMonth = str_replace('*', '%', $dayOfMonth);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::DAY_OF_MONTH, $dayOfMonth, $comparison);
    }

    /**
     * Filter the query on the function_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFunctionName('fooValue');   // WHERE function_name = 'fooValue'
     * $query->filterByFunctionName('%fooValue%'); // WHERE function_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $functionName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByFunctionName($functionName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($functionName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $functionName)) {
                $functionName = str_replace('*', '%', $functionName);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::FUNCTION_NAME, $functionName, $comparison);
    }

    /**
     * Filter the query on the parameters column
     *
     * Example usage:
     * <code>
     * $query->filterByParameters('fooValue');   // WHERE parameters = 'fooValue'
     * $query->filterByParameters('%fooValue%'); // WHERE parameters LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parameters The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByParameters($parameters = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parameters)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parameters)) {
                $parameters = str_replace('*', '%', $parameters);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::PARAMETERS, $parameters, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the priority column
     *
     * Example usage:
     * <code>
     * $query->filterByPriority(1234); // WHERE priority = 1234
     * $query->filterByPriority(array(12, 34)); // WHERE priority IN (12, 34)
     * $query->filterByPriority(array('min' => 12)); // WHERE priority > 12
     * </code>
     *
     * @param     mixed $priority The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByPriority($priority = null, $comparison = null)
    {
        if (is_array($priority)) {
            $useMinMax = false;
            if (isset($priority['min'])) {
                $this->addUsingAlias(iceModelCrontabPeer::PRIORITY, $priority['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priority['max'])) {
                $this->addUsingAlias(iceModelCrontabPeer::PRIORITY, $priority['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::PRIORITY, $priority, $comparison);
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
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByIsActive($isActive = null, $comparison = null)
    {
        if (is_string($isActive)) {
            $is_active = in_array(strtolower($isActive), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }
        return $this->addUsingAlias(iceModelCrontabPeer::IS_ACTIVE, $isActive, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
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
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(iceModelCrontabPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(iceModelCrontabPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
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
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(iceModelCrontabPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(iceModelCrontabPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(iceModelCrontabPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     iceModelCrontab $iceModelCrontab Object to remove from the list of results
     *
     * @return    iceModelCrontabQuery The current query, for fluid interface
     */
    public function prune($iceModelCrontab = null)
    {
        if ($iceModelCrontab) {
            $this->addUsingAlias(iceModelCrontabPeer::ID, $iceModelCrontab->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}