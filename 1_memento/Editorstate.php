<?php


class EditorState
{
    public function __construct(
        private string $content
    ){}

    public final function getContent()
    {
        return $this->content;
    }

}