<?php

namespace App\Http\Controllers;

use App\Models\Product; // Use the relevant model
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // The search method for handling the Ajax search
    public function search(Request $request)
    {
        // Retrieve the search query
        $query = $request->input('query');

        // Search in the 'title' and 'description' fields of the Product model
        $results = Product::where('title', 'like', "%{$query}%")
                          ->orWhere('description', 'like', "%{$query}%")
                          ->get();

        // Prepare the output to return as HTML for the dropdown
        $output = '';
        if ($results->isNotEmpty()) {
            foreach ($results as $result) {
                $output .= "<div class='search-item'>{$result->title} - {$result->description}</div>";
            }
        } else {
            $output .= '<div>No results found</div>';
        }

        // Return the HTML formatted results
        return response($output); // Use response() instead of response()->html()
    }
}
