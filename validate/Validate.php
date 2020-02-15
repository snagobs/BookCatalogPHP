<?php

abstract class Validate
{
    public function validateName($var)
    {
        if (!empty($value = (htmlspecialchars(strip_tags(trim($var)))))) {
            return $value;
        } else {
            echo "Please fill out requered field name!<br>";
            echo "<a href=# onclick='history.back()'>Return to field</a>";
            exit();

        }
    }

    public function validatePrice($var)
    {
        $int = abs($var);
        if ($int) {
            return $int;
        } else {
            echo "Enter a valid price!";
        };

    }

    public function validateEmail($var)
    {
        $email = htmlspecialchars(strip_tags(trim($var)));
        if (preg_match("|^[-0-9a-z_]+@[-0-9a-z^\.]+\.[a-z]{2,6}$|i", $email)) {
            return $email;
        } else {
            echo "Please fill out requered field email!<br>";
            echo "<a href=# onclick='history.back()'>Return to field email</a>";
            exit();
        }
    }

    public function validateTitle($var)
    {
        if (!empty($value = htmlspecialchars(strip_tags(trim($var))))) {
            return $value;
        } else {
            echo "Please fill out requered field title!<br>";
            echo "<a href=# onclick='history.back()'>Return to field title</a>";
            exit();

        }

    }

    public function validateDescription($var)
    {
        if (!empty($value = htmlspecialchars(strip_tags(trim($var))))) {
            return $value;
        } else {
            echo "Please fill out requered field description!<br>";
            echo "<a href=# onclick='history.back()'>Return to field description</a>";
            exit();

        }

    }


}
