<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Foydalanuvchilar ro'yxatini ko'rsatish
    public function index()
    {
        $users = User::whereDoesntHave('roles', function ($query) {
            $query->where('name', 'admin'); // Adminlarni ro'yxatda ko'rsatmaslik
        })->get();
        $recipes = Recipe::where('is_public', true)->get();

        return view('admin', compact('users','recipes'));
    }

    // Foydalanuvchini o'chirish
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users')->with('success', 'Foydalanuvchi muvaffaqiyatli o\'chirildi.');
    }
    public function rrdestroy($id)
    {
        $recipe = Recipe::findOrFail($id); // Retseptni id orqali topish
        $recipe->delete(); // Retseptni o'chirish
        return redirect()->route('admin.users')->with('success', 'Foydalanuvchi muvaffaqiyatli o\'chirildi.');
    }
}
