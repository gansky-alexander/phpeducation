<?php

class IfStatement
{
    public function incorrect()
    {
        if ($transfer->getIdProductAbstract()) {
            $priceTransfer->setFkProductAbstract($transfer->getIdProductAbstract());
        } else {
            $priceTransfer->setFkProduct($transfer->getIdProduct());
            return $this->setProduct(
                $transfer,
                $priceTransfer
            );
        }
    }

    protected function setProduct($transfer, $priceTransfer)
    {
        if ($transfer->getIdProduct()) {
            return $priceTransfer->setFkProduct($transfer->getIdProduct());
        }

        return $priceTransfer->setFkProductAbstract($transfer->getIdProductAbstract());
    }

    public function correct()
    {
        if ($transfer->getIdProduct()) {
            $priceTransfer->setFkProduct($transfer->getIdProduct());
            return $priceTransfer;
        }

        $priceTransfer->setFkProductAbstract($transfer->getIdProductAbstract());

        return $priceTransfer;
    }
}

