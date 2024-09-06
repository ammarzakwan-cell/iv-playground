class RedBall {
    
  public function getLocation(): ?string
  {
    $box = ['A', 'B', 'C'];
    for ($i = 0; $i <= 2; $i++) {
        $count = 0;
        if($box[$i] == 'A'){
            $count++;
        }
        if($box[$i] != 'B'){
            $count++;
        }
        if($box[$i] != 'A'){
            $count++;
        }
        // check if 1 statement correct, return the box
        if($count == 1){
            return $box[$i];
            // break;
        }
    }
    return null;
  }
}

$b = new RedBall();
var_dump('The red ball is inside box ' . $b->getLocation() ?? '');
