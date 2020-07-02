<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * Original code based on the CommonMark JS reference parser (https://bitly.com/commonmark-js)
 *  - (c) John MacFarlane
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Reference;

<<<<<<< HEAD
=======
use League\CommonMark\Normalizer\TextNormalizer;

>>>>>>> eventsResources
final class Reference implements ReferenceInterface
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $destination;

    /**
     * @var string
     */
    protected $title;

<<<<<<< HEAD
    /**
     * @var array<int, array<int, string>>
     *
     * Source: https://github.com/symfony/polyfill-mbstring/blob/master/Mbstring.php
     */
    private static $caseFold = [
        ['µ', 'ſ', "\xCD\x85", 'ς', "\xCF\x90", "\xCF\x91", "\xCF\x95", "\xCF\x96", "\xCF\xB0", "\xCF\xB1", "\xCF\xB5", "\xE1\xBA\x9B", "\xE1\xBE\xBE", "\xC3\x9F", "\xE1\xBA\x9E"],
        ['μ', 's', 'ι',        'σ', 'β',        'θ',        'φ',        'π',        'κ',        'ρ',        'ε',        "\xE1\xB9\xA1", 'ι',            'ss',       'ss'],
    ];

    public function __construct(string $label, string $destination, string $title)
    {
        $this->label = self::normalizeReference($label);
=======
    public function __construct(string $label, string $destination, string $title)
    {
        $this->label = $label;
>>>>>>> eventsResources
        $this->destination = $destination;
        $this->title = $title;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Normalize reference label
     *
     * This enables case-insensitive label matching
     *
     * @param string $string
     *
     * @return string
<<<<<<< HEAD
     */
    public static function normalizeReference(string $string): string
    {
        // Collapse internal whitespace to single space and remove
        // leading/trailing whitespace
        $string = \preg_replace('/\s+/', ' ', \trim($string));

        if (!\defined('MB_CASE_FOLD')) {
            // We're not on a version of PHP (7.3+) which has this feature
            $string = \str_replace(self::$caseFold[0], self::$caseFold[1], $string);

            return \mb_strtoupper($string, 'UTF-8');
        }

        return \mb_convert_case($string, \MB_CASE_FOLD, 'UTF-8');
=======
     *
     * @deprecated Use TextNormalizer::normalize() instead
     */
    public static function normalizeReference(string $string): string
    {
        @trigger_error(sprintf('%s::normlizeReference() is deprecated; use %s::normalize() instead', self::class, TextNormalizer::class), E_USER_DEPRECATED);

        return (new TextNormalizer())->normalize($string);
>>>>>>> eventsResources
    }
}
