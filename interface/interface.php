<?php
/**
 *
 */
interface TableInterface {
    public function save(array $data);
}
interface LogInterface {
    public function log($message);
}

class Table implements TableInterface, LogInterface{
      public function save(array $data){
        return 'First Interface';
      }
      public function log($message){
        return $message;
      }
}

echo (new Table())->save([]);
echo (new Table())->log('it is awesome');
