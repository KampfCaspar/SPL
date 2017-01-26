<?php
/**
 * This file is part of KampfCaspar_SPL.
 *
 * KampfCaspar_SPL is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * KampfCaspar_SPL is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along
 * with KampfCaspar_SPL. If not, see <http://www.gnu.org/licenses/>.
 */

namespace KampfCaspar\SPL\Iterator;
use Iterator;

/**
 * AppendIterator that is in itself Countable
 *
 * @package KampfCaspar\SPL\Iterator
 */
class CountableAppendIterator extends \AppendIterator implements \Countable {

	/** @var  int */
	protected $_count = 0;

	/** @inheritdoc */
	public function append( Iterator $iterator ) {
		if ( $iterator instanceof \Countable ) {
			parent::append( $iterator );
			$this->_count += count($iterator);
		}
		else {
			throw new \InvalidArgumentException( __CLASS__ . ' expects a Countable Iterator' );
		}
	}

	/** @inheritdoc */
	public function count() {
		return $this->_count;
	}

}
