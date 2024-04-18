<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('permissions')->delete();

        $permissions = [
         
            ['name'=>'home','group'=>'الصفحة الرييسية','title'=>'الصغحة الرئيسية'],

            ['name' => 'course-types-view', 'group' => 'أنواع الدورات', 'title' => 'عرض أنواع الدورات'],
            ['name' => 'course-types-create', 'group' => 'أنواع الدورات', 'title' => 'إضافة أنواع الدورات'],
            ['name' => 'course-types-edit', 'group' => 'أنواع الدورات', 'title' => 'تعديل أنواع الدورات'],
            ['name' => 'course-types-delete', 'group' => 'أنواع الدورات', 'title' => 'حذف أنواع الدورات'],


            ['name' => 'courses-view', 'group' => 'الدورات', 'title' => 'عرض الدورات'],
            ['name' => 'courses-create', 'group' => 'الدورات', 'title' => 'إضافة الدورات'],
            ['name' => 'courses-edit', 'group' => 'الدورات', 'title' => 'تعديل الدورات'],
            ['name' => 'courses-delete', 'group' => 'الدورات', 'title' => 'حذف الدورات'],

            ['name' => 'countries-view', 'group' => 'الدول', 'title' => 'عرض الدول'],
            ['name' => 'countries-create', 'group' => 'الدول', 'title' => 'إضافة وحدات'],
            ['name' => 'countries-edit', 'group' => 'الدول', 'title' => 'تعديل الدول'],
            ['name' => 'countries-delete', 'group' => 'الدول', 'title' => 'حذف الدول'],
            //*** Academic Modules ***//

            ['name' => 'tracks-view', 'group' => 'المسارات', 'title' => 'عرض المسارات'],
            ['name' => 'tracks-create', 'group' => 'المسارات', 'title' => 'إضافة المسارات'],
            ['name' => 'tracks-edit', 'group' => 'المسارات', 'title' => 'تعديل المسارات'],
            ['name' => 'tracks-delete', 'group' => 'المسارات', 'title' => 'حذف المسارات'],

            ['name' => 'payment-types-view', 'group' => 'أنواع الدفع', 'title' => 'عرض أنواع الدفع'],
            ['name' => 'payment-types-create', 'group' => 'أنواع الدفع', 'title' => 'إضافة أنواع الدفع'],
            ['name' => 'payment-types-edit', 'group' => 'أنواع الدفع', 'title' => 'تعديل أنواع الدفع'],
            ['name' => 'payment-types-delete', 'group' => 'أنواع الدفع', 'title' => 'حذف أنواع الدفع'],

            ['name' => 'users-view', 'group' => 'المستخدمين', 'title' => 'عرض المستخدمين'],
            ['name' => 'users-create', 'group' => 'المستخدمين', 'title' => 'إضافة المستخدمين'],
            ['name' => 'users-edit', 'group' => 'المستخدمين', 'title' => 'تعديل المستخدمين'],
            ['name' => 'users-delete', 'group' => 'المستخدمين', 'title' => 'حذف المستخدمين'],

            // ['name' => 'roles-view', 'group' => 'المناصب', 'title' => 'عرض المناصب'],
            // ['name' => 'roles-create', 'group' => 'المناصب', 'title' => 'إضافة المناصب'],
            // ['name' => 'roles-edit', 'group' => 'المناصب', 'title' => 'تعديل المناصب'],
            // ['name' => 'roles-delete', 'group' => 'المناصب', 'title' => 'حذف المناصب'],

        ];

        DB::table('permissions')->insert($permissions);
    }
}
