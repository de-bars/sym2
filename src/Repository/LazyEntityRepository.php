<?php

namespace App\Repository;

class LazyEntityRepository extends \Doctrine\ORM\EntityRepository
{
	#>mine#
	protected $waitingUids = array();
	protected $queueUids = array();
	protected $famousUids = array();

	/**
	 * @param $uid
	 */
	public function setOne($uid) {
		$this->waitingUids[] = $uid;
		//$this->resetQueueUids($uids);
	}

	/**
	 * @param $uids
	 */
	public function setQueue($uids) {
		$this->resetQueueUids($uids);
	}

	/**
	 * @deprecated
	 * @see LazyEntityRepository::findBy
	 * @see запросы через QueryBuilder не позволят использовать комплексную ленивую загрузку
	 *
	 * Creates a new QueryBuilder instance that is prepopulated for this entity name.
	 *
	 * @param string $alias
	 * @param string $indexBy The index for the from.
	 *
	 * @return QueryBuilder
	 */
	public function createQueryBuilder($alias, $indexBy = null)
	{
		return parent::createQueryBuilder($alias, $indexBy);
	}

	/**
	 * @return array
	 */
	public function findAll() {
		$result = parent::findAll();
		$this->setUidsAsFamous($result);
		return $result;
	}

	/**
	 * @param array $criteria
	 * @param array|null $orderBy
	 * @param null $limit
	 * @param null $offset
	 * @return array
	 */
	public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null) {
		/*$empty = true;
		foreach($criteria as $key => $array) {
			if(!empty($array)) {
				$empty = false;
				break;
			}
		}
		if($empty) {
			return array();
		}*/
		$result = parent::findBy($criteria, $orderBy, $limit, $offset);
		$this->setUidsAsFamous($result);
		return $result;
	}

	/**
	 * @param array $criteria
	 * @param array|null $orderBy
	 * @return null|object
	 */
	public function findOneBy(array $criteria, array $orderBy = null) {
		$empty = true;
		foreach($criteria as $key => $array) {
			if(!empty($array)) {
				$empty = false;
				break;
			}
		}
		if($empty) {
			return array();
		}
		$result = parent::findOneBy($criteria, $orderBy);
		$this->setUidsAsFamous($result);
		return $result;
	}

	/**
	 * @param mixed $id
	 * @param null $lockMode
	 * @param null $lockVersion
	 * @return null|object
	 */
	public function find($id, $lockMode = null, $lockVersion = null) {
		if(empty($id)) {
			return null;
		}
		$this->resetQueueUids($id);
		if(!empty($this->queueUids)) {
			sort($this->queueUids);
			if(count($this->queueUids) > 1) {
				$this->findBy(array('id' => $this->queueUids));
			} elseif($this->queueUids[0] != $id) {
				parent::find($this->queueUids[0]);
			}
			$this->resetFamousUids($this->queueUids);
			$this->queueUids = array();
		}
		return parent::find($id, $lockMode, $lockVersion);
	}

	/**
	 * @param $result
	 */
	protected function setUidsAsFamous($result) {
		$uids = array();
		foreach($result as $i => $r) {
			$uids[$i] = $r->getId();
		}
		$this->queueUids = array_diff($this->queueUids, $uids);
		$this->resetFamousUids($uids);
	}

	/**
	 * @param array $add
	 */
	protected function resetQueueUids($add = array()) {
		if(!is_array($add)) { $add = array($add); }
		if(!empty($this->waitingUids)) {
			$add = array_merge($add, $this->waitingUids);
			$this->waitingUids = array();
		}
		//$log = array();
		$add = array_unique($add);
		//$log['add'] = $add;
		$add = array_diff($add, $this->queueUids, $this->famousUids);
		//$log['dif'] = $add;
		if(!empty($add)) {
			$this->queueUids = array_merge($this->queueUids, $add);
		}
		//$log['que'] = $this->queueUids;
		//dump($log);
	}

	/**
	 * @param array $add
	 */
	protected function resetFamousUids($add = array()) {
		if(!is_array($add)) { $add = array($add); }
		else { $add = array_unique($add); }
		$add = array_diff($add, $this->famousUids);
		if(!empty($add)) {
			$this->famousUids = array_merge($this->famousUids, $add);
		}
	}
}
