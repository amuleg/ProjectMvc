<?php

abstract class GeneralClass {
    private int $value1 = 10;
    private int $value2 = 20;

    public function getValue1() : int 
    {
        return $this->value1;
    }

    public function setValue1(int $value) : void
    {
        $this->value1 = $value;
    }

    public function getValue2() : int 
    {
        return $this->value2;
    }

    public function setValue2(int $value) : void
    {
        $this->value2 = $value;
    }

    abstract public function squad(int $value) : int;
}

class Child1 extends GeneralClass {
    private int $value3 = 30;

    public function getValue3() : int
    {
        return $this->value3;
    }

    public function setValue3(int $value) : void
    {
        $this->value3 = $value;
    }

    public function squad(int $value) : int
    {
        return pow($this->getValue1(), $value);
    }

    public function sumThisAndFirst() : int
    {
        return $this->getValue1() + $this->value3;
    }
}

class Child2 extends GeneralClass {
    private int $value4 = 40;

    public function getValue4() : int
    {
        return $this->value4;
    }

    public function setValue4(int $value) : void
    {
        $this->value4 = $value;
    }

    public function squad(int $value) : int
    {
        return pow($this->getValue1(), $value);
    }

    public function diffThisAndFirst() : int
    {
        return $this->value4 - $this->getValue1();
    }
}

final class Child3 extends GeneralClass {
    private int $value5 = 50;

    public function getValue5() : int
    {
        return $this->value5;
    }

    public function setValue5(int $value) : void
    {
        $this->value5 = $value;
    }

    public function squad(int $value) : int
    {
        return pow($this->getValue1(), $value);
    }

    public function multiThisAndFirst() : int
    {
        return $this->value5 * $this->getValue1();
    }
}

class GrandChild1 extends Child1 {
    private int $value6 = 60;

    public function getValue6() : int
    {
        return $this->value6;
    }

    public function setValue6(int $value) : void
    {
        $this->value6 = $value;
    }

    public function multiChildAndThis() : int
    {
        return $this->getValue3() * $this->value6;
    }

    public function sumGeneralAndThis() : int
    {
        return $this->getValue1() + $this->value6;
    }
}

class Grandchild2 extends Child1 {
    private int $value7 = 70;

    public function getValue7() : int
    {
        return $this->value7;
    }

    public function setValue7(int $value) : void
    {
        $this->value7 = $value;
    }

    public function diffChildAndThis() : int
    {
        return $this->getValue3() - $this->value7;
    }

    public function sumGeneralAndThis() : int
    {
        return $this->getValue1() + $this->value7;
    }
}

class Grandchild3 extends Child2 {
    private int $value8 = 80;

    public function getValue8() : int
    {
        return $this->value8;
    }

    public function setValue8(int $value) : void
    {
        $this->value8 = $value;
    }

    public function sumChildAndThis() : int
    {
        return $this->getValue4() + $this->value8;
    }

    public function multiGeneralAndThis() : int
    {
        return $this->getValue2() * $this->value8;
    }
}

class Grandchild4 extends Child2 {
    private int $value9 = 90;

    public function getValue9() : int
    {
        return $this->value9;
    }

    public function setValue9(int $value) : void
    {
        $this->value9 = $value;
    }

    public function subChildAndThis() : int
    {
        return $this->getValue4() - $this->value9;
    }

}