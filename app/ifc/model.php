<?php


class Model {

    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $structure = array('select', 'from', 'where', 'group', 'order', 'limit');

    /**
     * @var bool
     */
    private $keepquery = false;

    /**
     * @var array
     */
    private $select = array();

    /**
     * @var array
     */
    private $from = array();

    /**
     * @var array
     */
    private $where = array();

    /**
     * @var array
     */
    private $group = array();

    /**
     * @var array
     */
    private $order = array();

    /**
     * @var array
     */
    private $limit = array();

    /**
     * @var array
     */
    private $insertset = array();

    /**
     * @var array
     */
    private $inserttable = array();

    /**
     * @var array
     */
    private $insertspecials = array();

    /**
     * @var array
     */
    private $updateset = array();

    /**
     * @var string
     */
    private $updatetable = '';

    /**
     * @var array
     */
    private $updatewhere = array();

    /**
     * @var array
     */
    private $updatespecials = array();

    /**
     * @var array
     */
    private $deletefrom = array();

    /**
     * @var array
     */
    private $deletewhere = array();

    /**
     * @var string
     */
    private $connection;

    /**
     * @var Db
     */
    private $cn;

    /**
     * @var
     */
    private  $result;

    /**
     * @var bool
     */
    private $union = false;

    /**
     * @var array
     */
    public $dataset = array();


    public function __construct($connection = 'connection1') {
        $this->connection = $connection;
        //$this->cn = new Db();
    }

    /**
     * @param $id
     */
    protected function setId($id) {
        $this->id = $id;
    }

    /**
     * @param $keep
     */
    protected function keepQuery($keep) {
        $this->keepquery = $keep;
    }

    /**
     * Deve ser informado um array com
     * a estrutura completa da select
     *
     * ex: array(
     *  'select' => array('field'),
     *  'from' => array('tabela')
     * );
     * @param $query
     */
    protected function setQuery($query) {
        $this->query = $query;
    }

    /**
     * Executa a query e guarda o
     * resultado na propriedade dataset
     */
    protected function runQuery() {
        $this->dataset = $this->cn->Exec($this->GetQuery(), $this->connection);
        $this->clearSelect();
    }

    /**
     *
     */
    protected function runDelete() {
        $this->result = $this->cn->Exec($this->getDeleteQuery(), $this->connection);
    }

    protected function runInsert($safe = true) {
        $this->result = $this->cn->Exec($this->GetInsert($safe), $this->connection);
    }

    protected function runUpdate($safe = true) {
        $this->result = $this->cn->Exec($this->getUpdateQuery($safe), $this->connection, true);
    }

    protected function addField($field) {
        $this->select[] = $field;
    }

    protected function addFrom($from) {
        $this->from[] = $from;
    }

    protected function addWhere($where, $operator = 'AND') {
        $this->where[] = (count($this->where) > 0 ? $operator : '') . ' ' . $where;
    }

    protected function addGroup($group) {
        $this->group[] = $group;
    }

    protected function addOrder($order) {
        $this->order[] = $order;
    }

    protected function addLimit($limit) {
        $this->limit[] = $limit;
    }

    protected function setDeleteFrom($from) {
        $this->deletefrom = $from;
    }

    protected function addDeleteWhere($where, $operator = 'AND') {
        $this->deletewhere[] = $operator . ' ' . $where;
    }

    protected function unite($query) {
        $this->union = ' UNION ' . $query->getQuery();
    }

    protected function getQuery() {

        $query = 'SELECT ' . implode(',',  $this->select)
            . ' FROM ' . implode(' ', $this->from)
            . ' WHERE (1) ' . (count($this->where) > 0 ? ' AND ' . implode(' ', $this->where) : '')
            . (count($this->group) > 0 ? ' GROUP BY ' . implode(',', $this->group) : '')
            . (count($this->order) > 0 ? ' ORDER BY ' . implode(',', $this->order) : '')
            . (count($this->limit) > 0 ? ' LIMIT ' . implode(',', $this->limit) : '');

        if ($this->union) {
            $query .= $this->union;
        }

        if ($this->keepquery && isset($this->id) && $this->id != '') {
            $this->saveQuery($this->id);
        }

        return $query;

    }

    protected function getDeleteQuery($safe = true) {
        if ($safe && count($this->deletewhere) < 1) return '';
        $query = 'DELETE FROM ' . $this->deletefrom .
            ' WHERE (1) ' . implode(' ', $this->deletewhere);

        return $query;
    }

    private function saveQuery($id) {
        $query = array();
        foreach ($this->structure as $clause) {
            $query[$clause] = $this->$clause;
        }

        Html::WriteSession($id, $query);
    }

    protected function loadQuery() {
        if (isset($this->id) && $this->id != '') {
            $query = Html::ReadSession($this->id);
            foreach ($this->structure as $clause) {
                if (isset($query[$clause])) {
                    $this->$clause = $query[$clause];
                }
            }
        }
    }

    protected function addInsertSet($set) {
        if (is_array($set)) {
            foreach ($set as $field => $value) {
                $this->insertset[] = $field . '=' . utf8_encode($value);
            }
        } else {
            $this->insertset[] = $set;
        }
    }

    protected function setInsertTable($table) {
        $this->inserttable = $table;
    }

    protected function addInsertSpecials($special) {
        $this->insertspecials[] = $special;
    }

    protected function getInsert() {
        $query = 'INSERT INTO ' . $this->inserttable . ' SET ' . implode(',', $this->insertset);
        if (count($this->insertspecials) > 0) {
            $query .= ' ' . implode(' ', $this->insertspecials);
        }
        return $query;
    }

    protected function setUpdateTable($table) {
        $this->updatetable = $table;
    }

    protected function getUpdateQuery($safe = true) {
        if ($safe && count($this->updatewhere) == 0) return '';
        $query = 'UPDATE ' . $this->updatetable . ' SET ' . implode(',', $this->updateset);
        if (count($this->updatewhere) > 0) {
            $query .= ' WHERE (1) ' . (count($this->updatewhere) > 0 ? ' AND ' . implode(' ', $this->updatewhere) : '');
        }
        if (count($this->updatespecials) > 0) {
            $query .= ' ' . implode(' ', $this->updatespecials);
        }
        return $query;
    }

    protected function addUpdateWhere($where, $operator = 'AND') {
        $this->updatewhere[] = (count($this->updatewhere) > 0 ? $operator : '') . ' ' . $where;
    }

    protected function addUpdateSet($set) {
        if (is_array($set)) {
            foreach ($set as $field => $value) {
                $this->updateset[] = $field . '=' . utf8_encode($value);
            }
        } else {
            $this->updateset[] = $set;
        }
    }

    protected function isEmpty() {
        return count($this->dataset) == 0;
    }

    protected function clear() {
        $args = func_get_args();
        if (count($args) > 0) {
            foreach ($args as $clause) {
                if (property_exists($this, $clause)) {
                    $this->$clause = array();
                }
            }
        } else {
            foreach ($this->structure as $clause) {
                $this->$clause = array();
            }
        }
    }

    protected function clearSelect() {
        $this->select = array();
        $this->from = array();
        $this->where = array();
        $this->group = array();
        $this->order = array();
        $this->limit = array();
    }

    public function getRow($row) {
        if (isset($this->dataset[$row])) {
            return $this->dataset[$row];
        }
        return false;
    }

    public function getResult() {
        return $this->result;
    }


}

?>
