<?php
use Illuminate\Database\Capsule\Manager as DB;

function allUsers() {
	$query = DB::table('users')->get();
}