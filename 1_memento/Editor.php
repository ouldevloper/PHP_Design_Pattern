<?php

require_once './Editorstate.php';

class Editor
{
    private string $content;
    private EditorState $state;
    public final function getContent()
    {
        return $this->content;
    }

    public final function createState()
    {
        return new EditorState($this->content);
    }

    public final function restore(EditorState $state)
    {
        $this->content = $state->getContent();
    }

    public final function setContent(string $content)
    {
        $this->content = $content;
    }
}