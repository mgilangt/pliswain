<?php

namespace App\Helpers;

class WhatsAppHelpers
{
    public static function convertHtml(string $html): string
    {
        // Bold
        $html = preg_replace('/<b>(.*?)<\/b>/i', '*$1*', $html);
        $html = preg_replace('/<strong>(.*?)<\/strong>/i', '*$1*', $html);

        // Italic
        $html = preg_replace('/<i>(.*?)<\/i>/i', '_$1_', $html);
        $html = preg_replace('/<em>(.*?)<\/em>/i', '_$1_', $html);

        // Strikethrough
        $html = preg_replace('/<s>(.*?)<\/s>/i', '~$1~', $html);
        $html = preg_replace('/<del>(.*?)<\/del>/i', '~$1~', $html);

        // Ordered list (OL)
        $html = preg_replace_callback('/<ol>(.*?)<\/ol>/is', function ($m) {
            $items = '';
            preg_match_all('/<li>(.*?)<\/li>/is', $m[1], $matches);
            foreach ($matches[1] as $i => $item) {
                $items .= ($i + 1) . '. ' . trim(strip_tags($item)) . "\n";
            }
            return trim($items);
        }, $html);

        // Unordered list (UL)
        $html = preg_replace_callback('/<ul>(.*?)<\/ul>/is', function ($m) {
            $items = '';
            preg_match_all('/<li>(.*?)<\/li>/is', $m[1], $matches);
            foreach ($matches[1] as $item) {
                $items .= '- ' . trim(strip_tags($item)) . "\n";
            }
            return trim($items);
        }, $html);

        // Line breaks
        $html = preg_replace('/<br\s*\/?>/i', "\n", $html);
        $html = preg_replace('/<\/p>/i', "\n", $html);
        $html = preg_replace('/<p>/i', '', $html);

        // Links
        $html = preg_replace_callback('/<a\s+href="(.*?)".*?>(.*?)<\/a>/i', function ($matches) {
            return $matches[2] . ' (' . $matches[1] . ')';
        }, $html);

        // Remove any other remaining tags
        $html = strip_tags($html);

        // Decode HTML entities
        $text = html_entity_decode($html);

        // Return trimmed text
        return trim($text);
    }
}
