<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderBy('order')->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'position_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = 'partners/' . Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
            $validated['image'] = 'storage/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['created_by'] = auth()->id();
        $validated['updated_by'] = auth()->id();

        Partner::create($validated);

        return redirect()->route('admin-partners-index')
            ->with('success', __('partners.creation_success'));
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, Partner $partner)
    {
        $validated = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'position_en' => 'nullable|string|max:255',
            'position_ar' => 'nullable|string|max:255',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'is_active' => 'boolean',
            'order' => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة
            if ($partner->image) {
                $oldPath = str_replace('storage/', 'public/', $partner->image);
                Storage::delete($oldPath);
            }

            // رفع الصورة الجديدة
            $image = $request->file('image');
            $filename = 'partners/' . Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $filename);
            $validated['image'] = 'storage/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');
        $validated['updated_by'] = auth()->id();

        $partner->update($validated);

        return redirect()
            ->back()
            ->with('success', __('partners.update_success'));
    }

    public function destroy(Partner $partner)
    {
        try {
            if ($partner->image) {
                Storage::delete(str_replace('storage/', 'public/', $partner->image));
            }

            $partner->delete();

            return redirect()->route('admin-partners-index')
                ->with('success', __('partners.delete_success'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', __('partners.delete_failed'));
        }
    }
}
