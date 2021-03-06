<?php
/**
 * MediaWiki2DokuWiki importer.
 * Copyright (C) 2016 Andrei Nicholson
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   MediaWiki2DokuWiki
 * @author    Andrei Nicholson
 * @copyright Copyright (C) 2016 Andrei Nicholson
 * @link      https://github.com/tetsuo13/MediaWiki-to-DokuWiki-Importer
 */

class MediaWiki2DokuWiki_MediaWiki_SyntaxConverter_ListTest extends MediaWiki2DokuWiki_MediaWiki_TestCase
{
    public function testUnorderedList()
    {
        $expected = '  * This is a list
  * The second item
    * You may have different levels
  * Another item';

        $actual = '* This is a list
* The second item
** You may have different levels
* Another item';

        $this->assertEquals($expected, $this->convert($actual));
    }

    public function testOrderedList()
    {
        $expected = "  - The same list but ordered
  - Another item
    - Just use indention for deeper levels
  - That's it";

        $actual = "# The same list but ordered
# Another item
## Just use indention for deeper levels
# That's it";

        $this->assertEquals($expected, $this->convert($actual));
    }
}

