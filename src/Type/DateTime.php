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

namespace KampfCaspar\SPL\Type;

/** extended \DateTime
 *
 * @author Hans-Peter Oeri <hp@oeri.ch>
 * @version 0.1
 */
class DateTime extends \DateTime implements \JsonSerializable {

	public function jsonSerialize() {
		return $this->format( self::W3C );
	}

}
