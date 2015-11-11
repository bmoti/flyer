<?php
namespace App\Http\Controllers\Traits;
use Illuminate\Http\Request;
use App\Flyer;
trait AuthorizesUsers {
	protected function userCreatedFlyer(Request $request) {
        return Flyer::where([
            'zip' => $request->zip,
            'street' => $request->street,
            'user_id' => $this->user->id
        ])->exists();
    }
    public function unauthorized(Request $request)
    {
        if ($request->ajax()) {
            return response(['message' => 'no way'], 403);
        }
        flash('no way');
        redirect('/');
    }
}