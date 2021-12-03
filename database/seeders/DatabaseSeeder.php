<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Category as ModelsCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $admin = Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'pelanggan'
        ]);
        Role::create([
            'name' => 'kasir'
        ]);
        $dashboardblog = Permission::create([
            'name' => 'dashboard-blog'
        ]);
        $dashboardmenu = Permission::create([
            'name' => 'dashboard-menu'
        ]);
        $dashboardrole = Permission::create([
            'name' => 'dashboard-role'
        ]);
        $dashboarduser = Permission::create([
            'name' => 'dashboard-user'
        ]);
        $addrole = Permission::create([
            'name' => 'add-role'
        ]);
        $editrole = Permission::create([
            'name' => 'edit-role'
        ]);
        $deleterole = Permission::create([
            'name' => 'delete-role'
        ]);
        $addpermission = Permission::create([
            'name' => 'add-permission'
        ]);
        $editpermission = Permission::create([
            'name' => 'edit-permission'
        ]);
        $deletepermission = Permission::create([
            'name' => 'delete-permission'
        ]);
        $edituser = Permission::create([
            'name' => 'edit-user'
        ]);
        $giveroleuser = Permission::create([
            'name' => 'giverole-user'
        ]);
        $givepermissionuser = Permission::create([
            'name' => 'givepermission-user'
        ]);
        $blokuser = Permission::create([
            'name' => 'blok-user'
        ]);
        $deleteuser = Permission::create([
            'name' => 'delete-user'
        ]);
        $unpublishblog = Permission::create([
            'name' => 'unpublish-blog'
        ]);
        $publishblog = Permission::create([
            'name' => 'publish-blog'
        ]);
        $editblog = Permission::create([
            'name' => 'edit-blog'
        ]);
        $deleteblog = Permission::create([
            'name' => 'delete-blog'
        ]);
        $deletecategory = Permission::create([
            'name' => 'delete-category'
        ]);
        $addblog = Permission::create([
            'name' => 'add-blog'
        ]);
        $admin->givePermissionTo(['add-role', 'edit-role', 'delete-role', 'add-permission', 'edit-permission', 'delete-permission']);
        $user = User::create([
            'name' => 'lintang lazuardi',
            'email' => 'lazuardilintang@apps.ipb.ac.id',
            'address' => 'wwates',
            'password' => bcrypt('linlaz11')
        ]);
        $user->assignRole('admin');
    }
}
