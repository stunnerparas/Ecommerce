<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Component;
use App\Models\ComponentType;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function detailColor()
    {
        $color = Component::where('id', 1)->first();
        $categories = '';
        if ($color) {
            $categories = ComponentType::where('component_id', $color->id)->get();
        }
        return view('frontend.detail.color', compact('color', 'categories'));
    }

    public function detailKnit()
    {
        $knit = Component::where('id', 3)->first();
        $categories = '';
        if ($knit) {
            $categories = ComponentType::where('component_id', $knit->id)->get();
        }
        return view('frontend.detail.knit', compact('knit', 'categories'));
    }

    public function detailYarn()
    {
        $yarn = Component::where('id', 2)->first();
        $categories = '';
        if ($yarn) {
            $categories = ComponentType::where('component_id', $yarn->id)->get();
        }
        return view('frontend.detail.yarn', compact('yarn', 'categories'));
    }

    public function yarnCategories(ComponentType $componenttype)
    {
        return view('frontend.detail.yarn-type', compact('componenttype'));
    }
}
