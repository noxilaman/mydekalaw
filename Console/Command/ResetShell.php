<?php
class ResetShell extends AppShell{
	public $uses = array('User');
	
	public function main(){
		$results = $this->User->find('all');
		foreach($results as $result){
			$result['User']['password'] = 'Password@1234';
			debug($result);
			$this->User->save($result);
		}
	}
}
?>
