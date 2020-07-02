<?php

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Extension\TableOfContents;

use League\CommonMark\Block\Element\Document;
use League\CommonMark\Block\Element\Heading;
<<<<<<< HEAD
<<<<<<< HEAD
use League\CommonMark\Block\Element\ListBlock;
use League\CommonMark\Block\Element\ListData;
use League\CommonMark\Block\Element\ListItem;
use League\CommonMark\Block\Element\Paragraph;
use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Exception\InvalidOptionException;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalink;
use League\CommonMark\Extension\TableOfContents\Normalizer\AsIsNormalizerStrategy;
use League\CommonMark\Extension\TableOfContents\Normalizer\FlatNormalizerStrategy;
use League\CommonMark\Extension\TableOfContents\Normalizer\NormalizerStrategyInterface;
use League\CommonMark\Extension\TableOfContents\Normalizer\RelativeNormalizerStrategy;
use League\CommonMark\Inline\Element\Link;
=======
=======
>>>>>>> eventsResources
use League\CommonMark\Event\DocumentParsedEvent;
use League\CommonMark\Exception\InvalidOptionException;
use League\CommonMark\Extension\HeadingPermalink\HeadingPermalink;
use League\CommonMark\Extension\TableOfContents\Node\TableOfContents;
use League\CommonMark\Extension\TableOfContents\Node\TableOfContentsPlaceholder;
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
use League\CommonMark\Util\ConfigurationAwareInterface;
use League\CommonMark\Util\ConfigurationInterface;

final class TableOfContentsBuilder implements ConfigurationAwareInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    public const STYLE_BULLET = ListBlock::TYPE_BULLET;
    public const STYLE_ORDERED = ListBlock::TYPE_ORDERED;

    public const NORMALIZE_DISABLED = 'as-is';
    public const NORMALIZE_RELATIVE = 'relative';
    public const NORMALIZE_FLAT = 'flat';

    public const POSITION_TOP = 'top';
    public const POSITION_BEFORE_HEADINGS = 'before-headings';
=======
=======
>>>>>>> eventsResources
    /**
     * @deprecated Use TableOfContentsGenerator::STYLE_BULLET instead
     */
    public const STYLE_BULLET = TableOfContentsGenerator::STYLE_BULLET;

    /**
     * @deprecated Use TableOfContentsGenerator::STYLE_ORDERED instead
     */
    public const STYLE_ORDERED = TableOfContentsGenerator::STYLE_ORDERED;

    /**
     * @deprecated Use TableOfContentsGenerator::NORMALIZE_DISABLED instead
     */
    public const NORMALIZE_DISABLED = TableOfContentsGenerator::NORMALIZE_DISABLED;

    /**
     * @deprecated Use TableOfContentsGenerator::NORMALIZE_RELATIVE instead
     */
    public const NORMALIZE_RELATIVE = TableOfContentsGenerator::NORMALIZE_RELATIVE;

    /**
     * @deprecated Use TableOfContentsGenerator::NORMALIZE_FLAT instead
     */
    public const NORMALIZE_FLAT = TableOfContentsGenerator::NORMALIZE_FLAT;

    public const POSITION_TOP = 'top';
    public const POSITION_BEFORE_HEADINGS = 'before-headings';
    public const POSITION_PLACEHOLDER = 'placeholder';
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources

    /** @var ConfigurationInterface */
    private $config;

    public function onDocumentParsed(DocumentParsedEvent $event): void
    {
        $document = $event->getDocument();
<<<<<<< HEAD
<<<<<<< HEAD
        $toc = $this->createToc();

        $normalizer = $this->getNormalizer($toc);
        [$min, $max] = $this->getMinAndMaxHeadingLevels();

        $firstHeading = null;

        foreach ($this->getHeadingLinks($document) as $headingLink) {
            $heading = $headingLink->parent();
            // Make sure this is actually tied to a heading
            if (!$heading instanceof Heading) {
                continue;
            }

            // Skip any headings outside the configured min/max levels
            if ($heading->getLevel() < $min || $heading->getLevel() > $max) {
                continue;
            }

            // Keep track of the first heading we see - we might need this later
            $firstHeading = $firstHeading ?? $heading;

            // Create the new link
            $link = new Link('#' . $headingLink->getSlug(), $heading->getStringContent());
            $paragraph = new Paragraph();
            $paragraph->appendChild($link);

            $listItem = new ListItem($toc->getListData());
            $listItem->appendChild($paragraph);

            // Add it to the correct place
            $normalizer->addItem($heading->getLevel(), $listItem);
        }

        // Don't add the TOC if no headings were present
        if (!$toc->hasChildren() || $firstHeading === null) {
            return;
=======
=======
>>>>>>> eventsResources

        $generator = new TableOfContentsGenerator(
            $this->config->get('table_of_contents/style', TableOfContentsGenerator::STYLE_BULLET),
            $this->config->get('table_of_contents/normalize', TableOfContentsGenerator::NORMALIZE_RELATIVE),
            (int) $this->config->get('table_of_contents/min_heading_level', 1),
            (int) $this->config->get('table_of_contents/max_heading_level', 6)
        );

        $toc = $generator->generate($document);
        if ($toc === null) {
            // No linkable headers exist, so no TOC could be generated
            return;
        }

        // Add custom CSS class(es), if defined
        $class = $this->config->get('table_of_contents/html_class', 'table-of-contents');
        if (!empty($class)) {
            $toc->data['attributes']['class'] = $class;
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
        }

        // Add the TOC to the Document
        $position = $this->config->get('table_of_contents/position', self::POSITION_TOP);
        if ($position === self::POSITION_TOP) {
            $document->prependChild($toc);
        } elseif ($position === self::POSITION_BEFORE_HEADINGS) {
<<<<<<< HEAD
<<<<<<< HEAD
            $firstHeading->insertBefore($toc);
=======
            $this->insertBeforeFirstLinkedHeading($document, $toc);
        } elseif ($position === self::POSITION_PLACEHOLDER) {
            $this->replacePlaceholders($document, $toc);
>>>>>>> eventsResources
=======
            $this->insertBeforeFirstLinkedHeading($document, $toc);
        } elseif ($position === self::POSITION_PLACEHOLDER) {
            $this->replacePlaceholders($document, $toc);
>>>>>>> eventsResources
        } else {
            throw new InvalidOptionException(\sprintf('Invalid config option "%s" for "table_of_contents/position"', $position));
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function createToc(): TableOfContents
    {
        $listData = new ListData();

        $style = $this->config->get('table_of_contents/style', self::STYLE_BULLET);
        if ($style === self::STYLE_BULLET) {
            $listData->type = ListBlock::TYPE_BULLET;
        } elseif ($style === self::STYLE_ORDERED) {
            $listData->type = ListBlock::TYPE_ORDERED;
        } else {
            throw new InvalidOptionException(\sprintf('Invalid config option "%s" for "table_of_contents/style"', $style));
        }

        $toc = new TableOfContents($listData);

        $class = $this->config->get('table_of_contents/html_class', 'table-of-contents');
        if (!empty($class)) {
            $toc->data['attributes']['class'] = $class;
        }

        return $toc;
    }

    /**
     * @return array<int>
     */
    private function getMinAndMaxHeadingLevels(): array
    {
        return [
            (int) $this->config->get('table_of_contents/min_heading_level', 1),
            (int) $this->config->get('table_of_contents/max_heading_level', 6),
        ];
    }

    /**
     * @param Document $document
     *
     * @return iterable<HeadingPermalink>
     */
    private function getHeadingLinks(Document $document)
    {
        $walker = $document->walker();
        while ($event = $walker->next()) {
            if ($event->isEntering() && ($node = $event->getNode()) instanceof HeadingPermalink) {
                yield $node;
            }
        }
    }

    private function getNormalizer(TableOfContents $toc): NormalizerStrategyInterface
    {
        $strategy = $this->config->get('table_of_contents/normalize', self::NORMALIZE_RELATIVE);
        if ($strategy === self::NORMALIZE_DISABLED) {
            return new AsIsNormalizerStrategy($toc);
        } elseif ($strategy === self::NORMALIZE_RELATIVE) {
            return new RelativeNormalizerStrategy($toc);
        } elseif ($strategy === self::NORMALIZE_FLAT) {
            return new FlatNormalizerStrategy($toc);
        }

        throw new InvalidOptionException(\sprintf('Invalid config option "%s" for "table_of_contents/normalize"', $strategy));
=======
=======
>>>>>>> eventsResources
    private function insertBeforeFirstLinkedHeading(Document $document, TableOfContents $toc): void
    {
        $walker = $document->walker();
        while ($event = $walker->next()) {
            if ($event->isEntering() && ($node = $event->getNode()) instanceof HeadingPermalink && ($parent = $node->parent()) instanceof Heading) {
                $parent->insertBefore($toc);

                return;
            }
        }
    }

    private function replacePlaceholders(Document $document, TableOfContents $toc): void
    {
        $walker = $document->walker();
        while ($event = $walker->next()) {
            // Add the block once we find a placeholder (and we're about to leave it)
            if (!$event->getNode() instanceof TableOfContentsPlaceholder) {
                continue;
            }

            if ($event->isEntering()) {
                continue;
            }

            $event->getNode()->replaceWith(clone $toc);
        }
<<<<<<< HEAD
>>>>>>> eventsResources
=======
>>>>>>> eventsResources
    }

    public function setConfiguration(ConfigurationInterface $config)
    {
        $this->config = $config;
    }
}
