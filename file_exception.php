<?php

class FileOpenException extends Exception
{
    public function __toString(): string // Add return type declaration
    {
        return "FileOpenException {$this->getCode()}: {$this->getMessage()}<br />" .
               "in {$this->getFile()} on line {$this->getLine()}<br />";
    }
}

class FileWriteException extends Exception
{
    public function __toString(): string // Add return type declaration
    {
        return "FileWriteException {$this->getCode()}: {$this->getMessage()}<br />" .
               "in {$this->getFile()} on line {$this->getLine()}<br />";
    }
}

class FileLockException extends Exception
{
    public function __toString(): string // Add return type declaration
    {
        return "FileLockException {$this->getCode()}: {$this->getMessage()}<br />" .
               "in {$this->getFile()} on line {$this->getLine()}<br />";
    }
}
?>
