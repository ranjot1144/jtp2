<?php

namespace App\Helpers;

class Custom_helper
{
  public static function insertHTMLAtStringPosition($string, $search, $html, $position = 0) {
      // Check if the string contains the search term
      if (strpos($string, $search) !== false) {
        // Escape the search term for use in regular expressions
        $escapedSearch = preg_quote($search, '/');
        
        // Remove any existing HTML wrapping the search term (optional)
        $pattern = "/<[^>]+>{$escapedSearch}(<\/[^>]+>)?/i"; // Case-insensitive
        $string = preg_replace($pattern, $search, $string);
        
        // Get the position of the first occurrence (after removing HTML)
        $pos = strpos($string, $search);
        
        // Handle negative positions (count from the end)
        if ($position < 0) {
          $pos = strlen($string) + $position;
        }
        
        // Split the string into parts before and after the search term
        $before = substr($string, 0, $pos);
        $after = substr($string, $pos + strlen($search));
        
        // Combine the parts with the HTML wrapped around the search term
        return $before . $html . $after;
      } else {
        // Search term not found, return original string
        return $string;
      }
  }
}