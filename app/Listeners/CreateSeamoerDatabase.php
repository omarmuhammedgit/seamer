<?php

namespace App\Listeners;

use App\Events\CreateSeamoer;
use DirectoryIterator;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class CreateSeamoerDatabase
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(CreateSeamoer $event)
    {
        $allseamoer=$event->allseamoer;
        $db="tenancy_seamoer_{$allseamoer->id}";
        $allseamoer->database_name=$db;
        $allseamoer->save();
        DB::statement("CREATE DATABASE {$db}");
        // dd($db);
        Config::set('database.connections.tenant.database',$db);
        $dir=new DirectoryIterator(\database_path('migrations/tenants'));
        foreach($dir as $file){
            if($file->isFile()){
        Artisan::call('migrate',[
            '--path'=>'database/migrations/tenants/'.$file->getFilename(),
            '--database'=>'tenant',
            '--force'=>true
        ]);
    }
    }
    }
}
