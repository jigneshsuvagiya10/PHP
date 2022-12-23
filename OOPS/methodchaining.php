<?php 

class c{

    public $sql;

    public function select($col)
    {
        $this->sql= " SELECT $col ";
        return $this;
    }
    
    public function from($table)
    {
        $this->sql.= " FROM $table ";
        return $this;
    }
    
    public function where($whr)
    {
        $this->sql.= " WHERE $whr ";
        return $this;
    }
}

$obj = new c;

echo $obj-> select('*')->from('user')->where("userid='1'")->sql;

?>

<p>In method chaining method ar call in one line.<p>
<p>all method chain are pass/call/return in one variable at end of line.<p>
<p>that variable are declar in public in class.<p>
<p>every function or method assign or init value in that variable using this keyword.<p>
<p>every method return this keyword as that return query store varible<p>
<p>we want to add one method after another for that we add . befor assign value of query(.="value")<p>
<p>.= add in that function which append after one method. <p>
    