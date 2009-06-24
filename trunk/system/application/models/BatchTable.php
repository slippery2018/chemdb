<?php

class BatchTable extends Doctrine_Table
{
	/**
	 *
	 * @return Doctrine_Collection
	 */
	public function findOpenBatches()
	{
		return Doctrine_Query::create()
			->from('Batch b')
			->select('b.id, b.owner, b.description, b.start_date')
			->where('completed = ?', 'n')
			->orderBy('b.start_date desc')
			->execute();
	}

	/**
	 *
	 * @return Doctrine_Collection
	 */
	public function findAllBatches()
	{
		return Doctrine_Query::create()
			->from('Batch b')
			->select('b.id, b.owner, b.description, b.start_date')
			->orderBy('b.start_date desc')
			->execute();
	}

	/**
	 *
	 * @param int $batch_id
	 * @return Doctrine_Collection
	 */
	public function findNumSamples($batch_id)
	{
		return Doctrine_Query::create()
			->select('COUNT(a.id)')
			->from('Analysis a')
			->where('a.batch_id = ?', $batch_id)
			->execute();
	}

	/**
	 *
	 * @param int $carrier_id
	 * @param date $start_date
	 * @return Doctrine_Collection
	 */
	public function findPrevBeCarrierWt($batch_id, $carrier_id)
	{
		return $this->createQuery('b')
			->select('b.wt_be_carrier_final, b.start_date')
			->where('b.be_carrier_id = ?', $carrier_id)
            ->addWhere('b.id != ?', $batch_id)
			->orderBy('b.start_date desc')
			->limit(1)
			->fetchOne();
	}

	/**
	 *
	 * @param int $carrier_id
	 * @param date $start_date
	 * @return Doctrine_Collection
	 */
	public function findPrevAlCarrierWt($batch_id, $carrier_id)
	{
		return $this->createQuery('b')
			->select('b.wt_al_carrier_final, b.start_date')
			->where('b.al_carrier_id = ?', $carrier_id)
            ->addWhere('b.id != ?', $batch_id)
			->orderBy('b.start_date desc')
			->limit(1)
			->fetchOne();
	}
}