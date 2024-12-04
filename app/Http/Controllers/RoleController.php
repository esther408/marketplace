<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function assignRoles()
    {
        // Create roles
        $farmerRole = Role::create(['name' => 'farmer']);
        $buyerRole = Role::create(['name' => 'buyer']);
        $expertRole = Role::create(['name' => 'expert']);

        // Find users by ID and assign roles
        $farmer = User::find(1);  // Find the user by ID
        $farmer->assignRole('farmer');

        $buyer = User::find(2);  // Find the buyer user
        $buyer->assignRole('buyer');

        $expert = User::find(3);  // Find the expert user
        $expert->assignRole('expert');

        return response()->json('Roles assigned successfully');
    }
}

