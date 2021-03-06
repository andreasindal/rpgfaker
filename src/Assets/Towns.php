<?php
/**
 * RPGFaker
 * 
 * @author      Andreas Indal <andreas@rocketship.se>
 * @copyright   2015 Andreas Indal
 * @link        https://github.com/andreasindal/rpgfaker
 * @license     https://github.com/andreasindal/rpgfaker/blob/master/LICENSE
 * @version     1.1.0
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace RPGFaker\Assets;

/**
 * Class contains assets that are used in
 * town names generated by RPGFaker.
 * 
 * @author  Andreas Indal <andreas@rocketship.se>
 * @since   1.1.0
 */
 class Towns
 {
    const SINGLE_PREFIXES = [
        'river', 'hogger', 'batter', 'dagger', 'shadow', 'grey', 'west',
        'east', 'north', 'south', 'barring', 'wester', 'easter', 'brooker',
        'barker', 'becken', 'birch', 'bourne',
    ];

    const SINGLE_SUFFICES = [
        'ton', 'run', 'hall', 'dale', 'ridge', 'holt', 'stone', 'keep',
        'wick', 'fall', 'hedge', 'port', 'wood'
    ];

    const DOUBLE_PREFIXES = [
        'death’s', 'lion’s', 'devil’s', 'maiden’s', 'jarren’s', 'maekor’s',
        'vardon’s', 'septon’s', 'dragon’s', 'giant’s', 'king’s', 'baron’s',
        'squire’s', 
    ];

    const DOUBLE_SUFFICES = [
        'end', 'hollow', 'hold', 'vale', 'peak', 'gulch', 'post', 'outpost',
        'anvil', 'fall', 'point', 'haven',
    ];
 }