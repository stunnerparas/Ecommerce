<?php

use App\Models\Attribute;
use App\Models\Category;

function getChildCategories($parent_id)
{
    return Category::where('parent_id', $parent_id)->get();
}

function getAttributeValues($attribute_id)
{
    return Attribute::where('show', 'Yes')->where('parent_id', $attribute_id)->get();
}
