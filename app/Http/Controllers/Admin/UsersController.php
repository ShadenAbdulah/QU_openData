<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::simplePaginate(5)
        ]);
    }

    public function update(User $user)
    {
        if ($user->admin) {
            $user->update(['admin' => 0]);
        } else
            $user->update(['admin' => 1]);

        return redirect()->back()
            ->with('successes', 'تم تحديث المستخدم بنجاح ✔️');
    }

    public function destroy(User $user)
    {
//        $user->createdDataset()->de
//        $user->updatedDataset()->havingNull('updated_by');
        $user->delete();
        return redirect()->back()
            ->with('successes', 'حُذف المستخدم بنجاح ✔️');
    }
}
