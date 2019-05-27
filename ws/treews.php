<?php

 class project {
	public $desc = "";
	public $activities;
 }

 class activity {
	public $desc = "";
	public $id = 0;
	public $tasks;
 }

 class task {
  public $desc = "";
  public $fi = "";
  public $ff = "";
 }

$i = 0;
$max_i=rand ( 1 , 9 );
while($i<$max_i)
{
	$activities[$i] = new activity;
	$activities[$i]->desc = 'Activity 0'.$i;
	$activities[$i]->id = 'A'.$i;
	
	$j = 0;
	$max_j=rand ( 1 , 9 );
	while($j<$max_j)
	{
		$tasks[$j] = new task;
		$tasks[$j]->desc = 'Task number 0'.$j;
		$tasks[$j]->fi = '0'.rand ( 1 , 9 ).'.0'.rand ( 1 , 2 ).'.2019';;
		$tasks[$j]->ff = ''.rand ( 12 , 25 ).'.0'.rand ( 3 , 4 ).'.2019';;
		
		$j++;
	}
	
	$activities[$i]->tasks = $tasks;

	$i++;
}

$myProject = new project;
$myProject->desc = 'Project @mdelgadop';
$myProject->activities = $activities;

echo json_encode($myProject);
