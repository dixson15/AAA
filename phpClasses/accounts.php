<?php
/**
 * Created by PhpStorm.
 * User: PYXIS
 * Date: 3/12/18
 * Time: 12:34 AM
 */

class accounts
{
    private $accountName;
    private $accountBalance;
    private $accountNormalSide;
    private $accountCategory;

    const DEBIT = 'Right';
    const CREDIT = 'Left';

    const CATEGORY1 = 'Asset';
    const CATEGORY2 = 'Liability';
    const CATEGORY3 = 'Equity';
    const CATEGORY4 = 'Expense';
    const CATEGORY5 = 'Revenue';

    public function setAccountName($accountName) {
        if(!is_string($accountName))
            throw new Exception('$accountName must be a string!');

        else
            $this -> $accountName = $accountName;
    }

    public function getAccountName() {
        return $this -> $accountName;
    }

    public function setAccountBalance($accountBalance) {
        if($accountBalance < 0)
            throw new Exception("$accountBalance cannot be less than zero");
        else
            $this -> $accountBalance = $accountBalance;
    }

    public function getAccountBalance() {
        return $this -> $accountBalance;
    }

    public function setAccountCategory($accountCategory) {
        if(!is_string($accountCategory))
            throw new Exception('$accountCategory must be a string!');

        else
            $this -> $accountCategory = $accountCategory;
    }
    public function getAccountCategory() {
        return $this -> $accountCategory;
    }
    public function setAccountNormalSide() {
        if(!is_string($this -> $accountNormalSide))
            throw new Exception('$normalSide must be a string!');

        else {
            if (getAccountCategory() == CATEGORY1) {
                $accountNormalSide = DEBIT;
                $this -> $accountNormalSide = $accountNormalSide;
            }
            else if (getAccountCategory() == CATEGORY2) {
                $this -> $accountNormalSide = CREDIT;
            }
            else if (getAccountCategory() == CATEGORY3) {
                $this -> $accountNormalSide = CREDIT;
            }
            else if (getAccountCategory() == CATEGORY4) {
                $this -> $accountNormalSide = DEBIT;
            }
            else if (getAccountCategory() == CATEGORY5) {
                $this -> $accountNormalSide = CREDIT;
            }
            else{
                throw new Exception("Error has occured!");
            }
        }
    }

    public function getAccountNormalSide() {
        return $this -> $accountNormalSide;
    }

    public function setAccountSubCategory($accountSubCategory) {
        if(!is_string($accountSubCategory))
            throw new Exception('$accountSubCategory must be a string!');

        else
            $this -> $accountSubCategory = $accountSubCategory;
    }

    public function getAccountSubCategory() {
        return $this -> $accountSubCategory;
    }
}