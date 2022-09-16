<?php

namespace src;

class Task12
{
    private int $a;
    private int $b;
    private ?int $result;
    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->result = null;
    }

    public function setA(int $a): void
    {
        $this->a = $a;
    }

    public function setB(int $b): void
    {
        $this->b = $b;
    }

    public function getA(): int
    {
        return $this->a;
    }

    public function getB(): int
    {
        return $this->b;
    }


    public function add(): self
    {
        $this->result = $this->a + $this->b;

        return $this;
    }
    public function multiply(): self
    {
        $this->result = $this->a * $this->b;

        return $this;
    }
    public function divide(): self
    {
        if ($this->b === 0) {
            throw new \InvalidArgumentException('B contains 0. Divide by zero');
        }
        $this->result = $this->a / $this->b;

        return $this;
    }
    public function subtract(): self
    {
        $this->result = $this->a - $this->b;

        return $this;
    }
    public function addBy(int $number): self
    {
        if ($this->result === null) {
            throw new \InvalidArgumentException('First call function without by');
        }
        $this->result += $number;

        return $this;
    }
    public function divideBy(int $number): self
    {
        if ($this->result === null) {
            throw new \InvalidArgumentException('First call function without by');
        }
        if ($number === 0) {
            throw new \InvalidArgumentException('Divide by zero');
        }
        $this->result /= $number;

        return $this;
    }
    public function multiplyBy(int $number): self
    {
        if ($this->result === null) {
            throw new \InvalidArgumentException('First call function without by');
        }
        $this->result *= $number;

        return $this;
    }
    public function subtractBy(int $number): self
    {
        if ($this->result === null) {
            throw new \InvalidArgumentException('First call function without by');
        }
        $this->result -= $number;

        return $this;
    }

    public function __ToString(): string
    {
        return $this->result;
    }
}
