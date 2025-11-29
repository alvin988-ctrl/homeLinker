<?php 

namespace  App\Http\Controllers\NavigationBar;
    use App\Models\User;

trait navigation {
    public function guestNav($name) {
        $user = User::findOrFail($name);
        return view('components.navbar', compact('user'));
    }

    public function mainNav($name) {
        $user = User::findOrFail($name);
        return view('components.indexnav', compact('user'));
    }
}